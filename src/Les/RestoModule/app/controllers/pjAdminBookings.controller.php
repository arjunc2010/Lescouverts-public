<?php
if (!defined("ROOT_PATH"))
{
	header("HTTP/1.1 403 Forbidden");
	exit;
}
require_once CONTROLLERS_PATH . 'pjAdmin.controller.php';
class pjAdminBookings extends pjAdmin
{
	function _getPaper($date)
	{
		pjObject::import('Model', array('pjBooking', 'pjBookingTable', 'pjTable'));
		$pjBookingModel = new pjBookingModel();
		$pjBookingTableModel = new pjBookingTableModel();
		$pjTableModel = new pjTableModel();

		$opts = array();
		$opts['t1.status'] = 'confirmed';
		$opts['DATE(t1.dt)'] = array(sprintf("'%s'", $date), '=', 'null');
		$arr = $pjBookingModel->getAll(array_merge($opts, array('col_name' => 't1.dt', 'direction' => 'asc')));
		$pjBookingTableModel->addJoin($pjBookingTableModel->joins, $pjTableModel->getTable(), 'TT', array('TT.id' => 't1.table_id'), array('TT.name'));
		foreach ($arr as $k => $booking)
		{
			$arr[$k]['table_arr'] = $pjBookingTableModel->getAll(array('t1.booking_id' => $booking['id']));
		}
		return $arr;
	}
	
	function _getSchedule($date, $wt_arr)
	{
		pjObject::import('Model', array('pjBooking', 'pjTable'));
		$pjBookingModel = new pjBookingModel();
		$pjTableModel = new pjTableModel();

		$opts = array();
		$arr = $pjTableModel->getAll(array_merge($opts, array('col_name' => 't1.name', 'direction' => 'asc')));
		foreach ($arr as $k => $table)
		{
			$arr[$k]['hour_arr'] = $pjBookingModel->getBookings($table['id'], $date, $wt_arr);
		}
		return $arr;
	}
	
	function delete()
	{
		if ($this->isLoged())
		{
			if ($this->isAdmin())
			{
				if ($this->isDemo())
				{
					$_GET['err'] = 'AA07';
					$this->index();
					return;
				}
				
				if ($this->isXHR())
				{
					$this->isAjax = true;
					$id = $_POST['id'];
				} else {
					$id = $_GET['id'];
				}
				
				pjObject::import('Model', 'pjBooking');
				$pjBookingModel = new pjBookingModel();
					
				$arr = $pjBookingModel->get($id);
				if (count($arr) == 0)
				{
					if ($this->isXHR())
					{
						$_GET['err'] = 'AB08';
						$this->index();
						return;
					} else {
						pjUtil::redirect($_SERVER['PHP_SELF'] . "?controller=pjAdminBookings&action=index&err=AB08");
					}
				}
				
				if ($pjBookingModel->delete($id))
				{
					pjObject::import('Model', 'pjBookingTable');
					$pjBookingTableModel = new pjBookingTableModel();
					$pjBookingTableModel->delete(array('booking_id' => $id));
					
					if ($this->isXHR())
					{
						$_GET['err'] = 'AB03';
						$this->index();
						return;
					} else {
						pjUtil::redirect($_SERVER['PHP_SELF'] . "?controller=pjAdminBookings&action=index&err=AB03");
					}
				} else {
					if ($this->isXHR())
					{
						$_GET['err'] = 'AB04';
						$this->index();
						return;
					} else {
						pjUtil::redirect($_SERVER['PHP_SELF'] . "?controller=pjAdminBookings&action=index&err=AB04");
					}
				}
			} else {
				$this->tpl['status'] = 2;
			}
		} else {
			$this->tpl['status'] = 1;
		}
	}
	
	function getAvailability()
	{
		$this->isAjax = true;
	
		if ($this->isXHR())
		{
			pjObject::import('Model', array('pjBooking', 'pjBookingTable', 'pjTable'));
			$pjBookingModel = new pjBookingModel();
			$pjBookingTableModel = new pjBookingTableModel();
			$pjTableModel = new pjTableModel();
	
			$date = pjUtil::formatDate($_GET['date'], $this->option_arr['date_format']);
			
			$this->tpl['table_arr'] = $pjTableModel->getAll(array('col_name' => 't1.name', 'direction' => 'asc'));
			$pjBookingTableModel->addJoin($pjBookingTableModel->joins, $pjBookingModel->getTable(), 'TB',
				array('TB.id' => 't1.booking_id', 'DATE(dt)' => sprintf("'%s'", $date), 'TB.status' => "'confirmed'"),
				array('TB.id.bid'), 'inner');
			$this->tpl['bt_arr'] = $pjBookingTableModel->getAllPair('id', 'table_id');
		}
	}
	
	function getPaper()
	{
		$this->isAjax = true;
	
		if ($this->isXHR())
		{
			$date = pjUtil::formatDate($_GET['date'], $this->option_arr['date_format']);
			$this->tpl['arr'] = $this->_getPaper($date);
		}
	}
	
	function getSchedule()
	{
		$this->isAjax = true;
	
		if ($this->isXHR())
		{
			$date = pjUtil::formatDate($_GET['date'], $this->option_arr['date_format']);
			$this->tpl['wt_arr'] = pjAppController::getWorkingTime($date);
			$this->tpl['arr'] = $this->_getSchedule($date, $this->tpl['wt_arr']);
		}
	}
	
	function getTables()
	{
		$this->isAjax = true;
	
		if ($this->isXHR())
		{
			pjObject::import('Model', array('pjTable', 'pjBooking', 'pjBookingTable'));
			$pjTableModel = new pjTableModel();
			$pjBookingModel = new pjBookingModel();
			$pjBookingTableModel = new pjBookingTableModel();
			
			$dt_from = sprintf("%s %s:%s:00", pjUtil::formatDate($_POST['date'], $this->option_arr['date_format']), $_POST['hour'], $_POST['minute']);
			$dt_to = sprintf("%s %s:%s:00", pjUtil::formatDate($_POST['date_to'], $this->option_arr['date_format']), $_POST['hour_to'], $_POST['minute_to']);
			
			$pjBookingTableModel->addJoin($pjBookingTableModel->joins, $pjBookingModel->getTable(), 'TB', array(
				'TB.id' => 't1.booking_id',
				'TB.status' => "'confirmed' AND `dt` <= '$dt_to' AND `dt_to` >= '$dt_from'"
			), array('TB.id.bid'), 'inner');
			$bt_arr = $pjBookingTableModel->getAllPair('table_id', 'table_id');
			
			$opts = array();
			if (count($bt_arr) > 0)
			{
				$opts['t1.id'] = array(sprintf("('%s')", join("','", $bt_arr)), 'NOT IN', 'null');
			}
			$this->tpl['table_arr'] = $pjTableModel->getAll(array_merge($opts, array('col_name' => 't1.name', 'direction' => 'asc')));
		}
	}
	
	function index()
	{
		if ($this->isLoged())
		{
			if ($this->isAdmin())
			{
				pjObject::import('Model', array('pjBooking', 'pjTable'));
				$pjBookingModel = new pjBookingModel();
				$pjTableModel = new pjTableModel();
				
				$opts = array();
				if (isset($_GET['table_id']) && (int) $_GET['table_id'] > 0)
				{
					pjObject::import('Model', 'pjBookingTable');
					$pjBookingTableModel = new pjBookingTableModel();
					$opts['t1.id'] = array(sprintf("(SELECT `booking_id` FROM `%s` WHERE `table_id` = '%u')", $pjBookingTableModel->getTable(), $_GET['table_id']), 'IN', 'null');
				}
				if (isset($_GET['c_name']) && !empty($_GET['c_name']))
				{
					$q = pjObject::escapeString($_GET['c_name']);
					$opts['t1.c_name'] = array("'%$q%'", 'LIKE', 'null');
				}
				if (isset($_GET['c_email']) && !empty($_GET['c_email']))
				{
					$q = pjObject::escapeString($_GET['c_email']);
					$opts['t1.c_email'] = array("'%$q%'", 'LIKE', 'null');
				}
				if (isset($_GET['c_phone']) && !empty($_GET['c_phone']))
				{
					$q = pjObject::escapeString($_GET['c_phone']);
					$opts['t1.c_phone'] = array("'%$q%'", 'LIKE', 'null');
				}
				if (isset($_GET['date_from']) && !empty($_GET['date_from']) && isset($_GET['date_to']) && !empty($_GET['date_to']))
				{
					$df = pjUtil::formatDate($_GET['date_from'], $this->option_arr['date_format']);
					$dt = pjUtil::formatDate($_GET['date_to'], $this->option_arr['date_format']);
					$opts['(DATE(t1.dt)'] = array("'$df' AND '$dt')", 'BETWEEN', 'null');
				} else {
					if (isset($_GET['date_from']) && !empty($_GET['date_from']))
					{
						$df = pjUtil::formatDate($_GET['date_from'], $this->option_arr['date_format']);
						$opts['DATE(t1.dt)'] = array("'$df'", '>=', 'null');
					} elseif (isset($_GET['date_to']) && !empty($_GET['date_to'])) {
						$dt = pjUtil::formatDate($_GET['date_to'], $this->option_arr['date_format']);
						$opts['DATE(t1.dt)'] = array("'$dt'", '<=', 'null');
					}
				}
				if (isset($_GET['status']) && !empty($_GET['status']))
				{
					$opts['t1.status'] = $_GET['status'];
				}
				if (isset($_GET['date']) && !empty($_GET['date']))
				{
					$date = pjUtil::formatDate($_GET['date'], $this->option_arr['date_format']);
					$opts['DATE(t1.dt)']= array(sprintf("'%s'", $date), '=', 'null');
				}
				
				$page = isset($_GET['page']) && (int) $_GET['page'] > 0 ? intval($_GET['page']) : 1;
				$count = $pjBookingModel->getCount($opts);
				$row_count = 20;
				$pages = ceil($count / $row_count);
				$offset = ((int) $page - 1) * $row_count;

				$this->tpl['arr'] = $pjBookingModel->getAll(array_merge($opts, compact('offset', 'row_count'), array('col_name' => 't1.created', 'direction' => 'desc')));
				$this->tpl['paginator'] = compact('pages');
				
				$this->tpl['table_arr'] = $pjTableModel->getAll(array('col_name' => 't1.name', 'direction' => 'asc'));
				
				$this->js[] = array('file' => 'jquery.ui.button.min.js', 'path' => LIBS_PATH . 'jquery/ui/js/');
				$this->js[] = array('file' => 'jquery.ui.position.min.js', 'path' => LIBS_PATH . 'jquery/ui/js/');
				$this->js[] = array('file' => 'jquery.ui.dialog.min.js', 'path' => LIBS_PATH . 'jquery/ui/js/');
				
				$this->css[] = array('file' => 'jquery.ui.button.css', 'path' => LIBS_PATH . 'jquery/ui/css/smoothness/');
				$this->css[] = array('file' => 'jquery.ui.dialog.css', 'path' => LIBS_PATH . 'jquery/ui/css/smoothness/');
				
				$this->js[] = array('file' => 'jquery.ui.datepicker.min.js', 'path' => LIBS_PATH . 'jquery/ui/js/');
				$this->css[] = array('file' => 'jquery.ui.datepicker.css', 'path' => LIBS_PATH . 'jquery/ui/css/smoothness/');
				
				$this->js[] = array('file' => 'jquery.validate.min.js', 'path' => LIBS_PATH . 'jquery/plugins/validate/js/');
				$this->js[] = array('file' => 'jquery.metadata.js', 'path' => LIBS_PATH . 'jquery/plugins/metadata/');
				$this->js[] = array('file' => 'pjAdminBookings.js', 'path' => JS_PATH);
			} else {
				$this->tpl['status'] = 2;
			}
		} else {
			$this->tpl['status'] = 1;
		}
	}
	
	function paper()
	{
		if ($this->isLoged())
		{
			if ($this->isAdmin())
			{
				$date = date("Y-m-d");
				$this->tpl['arr'] = $this->_getPaper($date);
				
				$this->js[] = array('file' => 'jquery.ui.datepicker.min.js', 'path' => LIBS_PATH . 'jquery/ui/js/');
				$this->css[] = array('file' => 'jquery.ui.datepicker.css', 'path' => LIBS_PATH . 'jquery/ui/css/smoothness/');
				$this->js[] = array('file' => 'pjAdminBookings.js', 'path' => JS_PATH);
			} else {
				$this->tpl['status'] = 2;
			}
		} else {
			$this->tpl['status'] = 1;
		}
	}
	
	function printer()
	{
		if ($this->isLoged())
		{
			if ($this->isAdmin())
			{
				$this->layout = 'print';
				
				pjObject::import('Model', array('pjBooking', 'pjCountry', 'pjTable'));
				$pjBookingModel = new pjBookingModel();
				$pjCountryModel = new pjCountryModel();
				$pjTableModel = new pjTableModel();
				
				//$pjBookingModel->addJoin($pjBookingModel->joins, $pjSpaceModel->getTable(), 'TS', array('TS.id' => 't1.space_id'), array('TS.name.space_name'));
				$pjBookingModel->addJoin($pjBookingModel->joins, $pjCountryModel->getTable(), 'TC', array('TC.id' => 't1.c_country'), array('TC.country_title'));
				$arr = $pjBookingModel->get($_GET['id']);
				if (count($arr) === 0)
				{
					pjUtil::redirect($_SERVER['PHP_SELF'] . "?controller=pjAdminBookings&action=index&err=AB08");
				}
				$this->tpl['arr'] = $arr;
				
				pjObject::import('Model', array('pjBookingTable', 'pjTable'));
				$pjBookingTableModel = new pjBookingTableModel();
				$pjTableModel = new pjTableModel();
				
				$this->tpl['table_arr'] = $pjTableModel->getAll(array('col_name' => 't1.name', 'direction' => 'asc'));
				$this->tpl['bt_arr'] = $pjBookingTableModel->getAllPair('table_id', 'id', array('t1.booking_id' => $arr['id']));
			} else {
				$this->tpl['status'] = 2;
			}
		} else {
			$this->tpl['status'] = 1;
		}
	}
	
	function printPaper()
	{
		if ($this->isLoged())
		{
			if ($this->isAdmin())
			{
				$this->layout = 'print';
				
				$date = pjUtil::formatDate($_GET['date'], $this->option_arr['date_format']);
				$this->tpl['arr'] = $this->_getPaper($date);
			} else {
				$this->tpl['status'] = 2;
			}
		} else {
			$this->tpl['status'] = 1;
		}
	}
	
	function reminder()
	{
		if ($this->isLoged())
		{
			if ($this->isAdmin())
			{
				if (isset($_POST['reminder']))
				{
					pjObject::import('Component', 'pjEmail');
					$pjEmail = new pjEmail();
					if ($pjEmail->send($_POST['to'], $_POST['subject'], $_POST['message'], $this->option_arr['email_address']))
					{
						$err = 'AB09';
					} else {
						$err = 'AB10';
					}
					pjUtil::redirect($_SERVER['PHP_SELF'] . "?controller=pjAdminBookings&action=index&err=$err");
				} else {
					pjObject::import('Model', array('pjBooking'));
					$pjBookingModel = new pjBookingModel();
					
					$arr = $pjBookingModel->get($_GET['id']);
					if (count($arr) === 0)
					{
						pjUtil::redirect($_SERVER['PHP_SELF'] . "?controller=pjAdminBookings&action=index&err=AB08");
					}
					
					pjObject::import('Model', array('pjBookingTable', 'pjTable'));
					$pjBookingTableModel = new pjBookingTableModel();
					$pjTableModel = new pjTableModel();
					
					$pjBookingTableModel->addJoin($pjBookingTableModel->joins, $pjTableModel->getTable(), 'TE', array('TE.id' => 't1.table_id'), array('TE.name'));
					$arr['table_arr'] = $pjBookingTableModel->getAll(array('t1.booking_id' => $arr['id']));
					$arr['data'] = pjAppController::getData($this->option_arr, $arr, $this->salt);
					$this->tpl['arr'] = $arr;
					
					$this->js[] = array('file' => 'jquery.validate.min.js', 'path' => LIBS_PATH . 'jquery/plugins/validate/js/');
					$this->js[] = array('file' => 'pjAdminBookings.js', 'path' => JS_PATH);
				}
			} else {
				$this->tpl['status'] = 2;
			}
		} else {
			$this->tpl['status'] = 1;
		}
	}
	
	function schedule()
	{
		if ($this->isLoged())
		{
			if ($this->isAdmin())
			{
				$date = date("Y-m-d");
				$this->tpl['wt_arr'] = pjAppController::getWorkingTime($date);
				$this->tpl['arr'] = $this->_getSchedule($date, $this->tpl['wt_arr']);
				
				$this->js[] = array('file' => 'jquery.ui.datepicker.min.js', 'path' => LIBS_PATH . 'jquery/ui/js/');
				$this->css[] = array('file' => 'jquery.ui.datepicker.css', 'path' => LIBS_PATH . 'jquery/ui/css/smoothness/');
				$this->js[] = array('file' => 'pjAdminBookings.js', 'path' => JS_PATH);
			} else {
				$this->tpl['status'] = 2;
			}
		} else {
			$this->tpl['status'] = 1;
		}
	}
	
	function update()
	{
		if ($this->isLoged())
		{
			if ($this->isAdmin())
			{
				pjObject::import('Model', array('pjBooking', 'pjBookingTable', 'pjTable'));
				$pjBookingModel = new pjBookingModel();
				$pjBookingTableModel = new pjBookingTableModel();
				$pjTableModel = new pjTableModel();
				
				if (isset($_POST['booking_update']))
				{
					if ($this->isDemo())
					{
						pjUtil::redirect($_SERVER['PHP_SELF'] . "?controller=pjAdminBookings&action=index&err=AA07");
					}
					$data = array();
					$data['dt'] = pjUtil::formatDate($_POST['date'], $this->option_arr['date_format']) . " " . $_POST['hour'] . ":" . $_POST['minute'] . ":00";
					$data['dt_to'] = pjUtil::formatDate($_POST['date_to'], $this->option_arr['date_format']) . " " . $_POST['hour_to'] . ":" . $_POST['minute_to'] . ":00";
					//$data['dt_to'] = date("Y-m-d H:i:s", strtotime($data['dt']) + $this->option_arr['booking_length'] * 60);
					if (isset($_POST['payment_method']) && $_POST['payment_method'] == 'creditcard')
					{
						$data['cc_exp'] = $_POST['cc_exp_year'] . '-' . $_POST['cc_exp_month'];
					}
					
					$stop = false;
					if (!$stop)
					{
						$pjBookingModel->update(array_merge($_POST, $data));
						
						$pjBookingTableModel->delete(array('booking_id' => $_POST['id']));
						if (isset($_POST['table_id']) && count($_POST['table_id']) > 0)
						{
							$data = array();
							$data['booking_id'] = $_POST['id'];
							foreach ($_POST['table_id'] as $value)
							{
								list($table_id,) = explode("|", $value);
								$data['table_id'] = $table_id;
								$pjBookingTableModel->save($data);
							}
						}
						$err = 'AB05';
					}
					
					pjUtil::redirect($_SERVER['PHP_SELF'] . "?controller=pjAdminBookings&action=index&tab=1&err=$err");
				} else {
					$arr = $pjBookingModel->get($_GET['id']);
					if (count($arr) === 0)
					{
						pjUtil::redirect($_SERVER['PHP_SELF'] . "?controller=pjAdminBookings&action=index&err=AB08");
					}
					$this->tpl['arr'] = $arr;
					
					pjObject::import('Model', 'pjCountry');
					$pjCountryModel = new pjCountryModel();
					$this->tpl['country_arr'] = $pjCountryModel->getAll(array('col_name' => 't1.country_title', 'direction' => 'asc'));
					
					$pjBookingTableModel->addJoin($pjBookingTableModel->joins, $pjBookingModel->getTable(), 'TB', array(
						'TB.id' => 't1.booking_id',
						'TB.status' => "'confirmed' AND `dt` < '".$arr['dt_to']."' AND `dt_to` > '".$arr['dt']."'"
					), array('TB.id.bid'), 'inner');
					$bt_arr = $pjBookingTableModel->getAllPair('table_id', 'table_id', array('t1.booking_id' => array($arr['id'], '!=', 'int')));
					$opts = array();
					if (count($bt_arr) > 0)
					{
						$opts['t1.id'] = array(sprintf("('%s')", join("','", $bt_arr)), 'NOT IN', 'null');
					}
					$opts = array();
					if (count($bt_arr) > 0)
					{
						$opts['t1.id'] = array(sprintf("('%s')", join("','", $bt_arr)), 'NOT IN', 'null');
					}
					$this->tpl['table_arr'] = $pjTableModel->getAll(array_merge($opts, array('col_name' => 't1.name', 'direction' => 'asc')));
					
					$pjBookingTableModel->joins = array();
					$this->tpl['bt_arr'] = $pjBookingTableModel->getAllPair('id', 'table_id', array('t1.booking_id' => $arr['id']));
										
					$this->js[] = array('file' => 'jquery.ui.position.min.js', 'path' => LIBS_PATH . 'jquery/ui/js/');
					$this->js[] = array('file' => 'jquery.ui.dialog.min.js', 'path' => LIBS_PATH . 'jquery/ui/js/');
					$this->css[] = array('file' => 'jquery.ui.dialog.css', 'path' => LIBS_PATH . 'jquery/ui/css/smoothness/');
				
					$this->js[] = array('file' => 'jquery.ui.datepicker.min.js', 'path' => LIBS_PATH . 'jquery/ui/js/');
					$this->css[] = array('file' => 'jquery.ui.datepicker.css', 'path' => LIBS_PATH . 'jquery/ui/css/smoothness/');
					
					$this->js[] = array('file' => 'jquery.ui.button.min.js', 'path' => LIBS_PATH . 'jquery/ui/js/');
					$this->css[] = array('file' => 'jquery.ui.button.css', 'path' => LIBS_PATH . 'jquery/ui/css/smoothness/');
					
					$this->js[] = array('file' => 'jquery.validate.min.js', 'path' => LIBS_PATH . 'jquery/plugins/validate/js/');
					$this->js[] = array('file' => 'pjAdminBookings.js', 'path' => JS_PATH);
				}
			} else {
				$this->tpl['status'] = 2;
			}
		} else {
			$this->tpl['status'] = 1;
		}
	}
}
?>