<?php
if (isset($tpl['status']))
{
	switch ($tpl['status'])
	{
		case 1:
			pjUtil::printNotice($RB_LANG['status'][1]);
			break;
		case 2:
			pjUtil::printNotice($RB_LANG['status'][2]);
			break;
	}
} else {
	include VIEWS_PATH . 'pjHelpers/time.widget.php';
	$week_start = isset($tpl['option_arr']['week_start']) && in_array((int) $tpl['option_arr']['week_start'], range(0,6)) ? (int) $tpl['option_arr']['week_start'] : 0;
	$jqDateFormat = pjUtil::jqDateFormat($tpl['option_arr']['date_format']);
	?>
	<style type="text/css">
	label.ui-state-active{
		background: green !important;
		color: #fff !important;
	}
	</style>
	<div class="ui-tabs ui-widget ui-widget-content ui-corner-all b10">
		<ul class="ui-tabs-nav ui-helper-reset ui-helper-clearfix ui-widget-header ui-corner-all">
			<li class="ui-state-default ui-corner-top ui-tabs-selected ui-state-active"><a href="<?php echo $_SERVER['PHP_SELF']; ?>?controller=pjAdminBookings&amp;action=update&amp;id=<?php echo $tpl['arr']['id']; ?>"><?php echo $RB_LANG['booking_update']; ?></a></li>
		</ul>
	</div>
	
	<form action="<?php echo $_SERVER['PHP_SELF']; ?>?controller=pjAdminBookings&amp;action=update&amp;id=<?php echo $tpl['arr']['id']; ?>" method="post" id="frmUpdateBooking" class="form">
		<input type="hidden" name="booking_update" value="1" />
		<input type="hidden" name="id" value="<?php echo $tpl['arr']['id']; ?>" />
		
		<fieldset class="fieldset white">
			<legend><?php echo $RB_LANG['booking_bookingz']; ?></legend>
			<p class="float_right">
				<label class="title">&nbsp;</label>
				<a href="<?php echo $_SERVER['PHP_SELF']; ?>?controller=pjAdminBookings&amp;action=printer&amp;id=<?php echo $tpl['arr']['id']; ?>" target="_blank"><?php echo $RB_LANG['booking_print']; ?></a> |
				<a href="<?php echo $_SERVER['PHP_SELF']; ?>?controller=pjAdminBookings&amp;action=reminder&amp;id=<?php echo $tpl['arr']['id']; ?>"><?php echo $RB_LANG['booking_remind']; ?></a>
			</p>
			
			<p><label class="title"><?php echo $RB_LANG['booking_dt']; ?></label>
				<?php
				list($date, $time) = explode(" ", $tpl['arr']['dt']);
				list($hour, $minute,) = explode(":", $time);
				?>
				<input type="text" name="date" id="date" class="text w80 required pointer datepick" value="<?php echo pjUtil::formatDate($date, 'Y-m-d', $tpl['option_arr']['date_format']); ?>" readonly="readonly" rel="<?php echo $week_start; ?>" rev="<?php echo $jqDateFormat; ?>" />
				<?php TimeWidget::hour($hour, 'hour', 'hour', 'select', array(), array('time_format' => $tpl['option_arr']['time_format'])); ?>
				<?php TimeWidget::minute($minute, 'minute', 'minute', 'select'); ?>
			</p>
			<p><label class="title"><?php echo $RB_LANG['booking_dt_to']; ?></label>
				<?php
				list($date_to, $time_to) = explode(" ", $tpl['arr']['dt_to']);
				list($hour_to, $minute_to,) = explode(":", $time_to);
				?>
				<input type="text" name="date_to" id="date_to" class="text w80 required pointer datepick" value="<?php echo pjUtil::formatDate($date_to, 'Y-m-d', $tpl['option_arr']['date_format']); ?>" readonly="readonly" rel="<?php echo $week_start; ?>" rev="<?php echo $jqDateFormat; ?>" />
				<?php TimeWidget::hour($hour_to, 'hour_to', 'hour_to', 'select', array(), array('time_format' => $tpl['option_arr']['time_format'])); ?>
				<?php TimeWidget::minute($minute_to, 'minute_to', 'minute_to', 'select'); ?>
			</p>
			<p><label class="title"><?php echo $RB_LANG['booking_uuid']; ?></label><input type="text" name="uuid" id="uuid" class="text w150 required" value="<?php echo (int) $tpl['arr']['uuid']; ?>" /></p>
			<div class="p">
				<label class="title"><?php echo $RB_LANG['booking_status']; ?></label>
				<div id="status">
				<?php
				foreach ($RB_LANG['booking_statuses'] as $k => $v)
				{
					?><input type="radio" id="status_<?php echo $k; ?>" name="status" value="<?php echo $k; ?>"<?php echo $tpl['arr']['status'] == $k ? ' checked="checked"' : NULL; ?> /><label for="status_<?php echo $k; ?>"><?php echo $v; ?></label><?php
				}
				?>
				</div>
			</div>
			<div class="p">
				<label class="title"><?php echo $RB_LANG['booking_is_paid']; ?></label>
				<div id="is_paid">
				<?php
				foreach ($RB_LANG['booking_is_paids'] as $k => $v)
				{
					?><input type="radio" id="is_paid_<?php echo $k; ?>" name="is_paid" value="<?php echo $k; ?>"<?php echo $tpl['arr']['is_paid'] == $k ? ' checked="checked"' : NULL; ?> /><label for="is_paid_<?php echo $k; ?>"><?php echo $v; ?></label><?php
				}
				?>
				</div>
			</div>
			<p><label class="title"><?php echo $RB_LANG['booking_payment_method']; ?></label>
				<select name="payment_method" id="payment_method" class="select w150">
					<option value=""><?php echo $RB_LANG['booking_choose']; ?></option>
				<?php
				foreach ($RB_LANG['_payments'] as $k => $v)
				{
					?><option value="<?php echo $k; ?>"<?php echo $tpl['arr']['payment_method'] == $k ? ' selected="selected"' : NULL; ?>><?php echo $v; ?></option><?php
				}
				?>
				</select>
			</p>
			<p class="boxCC" style="display: <?php echo $tpl['arr']['payment_method'] != 'creditcard' ? 'none' : 'block'; ?>"><label class="title"><?php echo $RB_LANG['front']['4_cc_type']; ?></label>
				<select name="cc_type" class="select w250">
					<option value="">---</option>
					<?php
					foreach ($RB_LANG['front']['4_cc_types'] as $k => $v)
					{
						if (isset($tpl['arr']['cc_type']) && $tpl['arr']['cc_type'] == $k)
						{
							?><option value="<?php echo $k; ?>" selected="selected"><?php echo $v; ?></option><?php
						} else {
							?><option value="<?php echo $k; ?>"><?php echo $v; ?></option><?php
						}
					}
					?>
				</select>
			</p>
			<p class="boxCC" style="display: <?php echo $tpl['arr']['payment_method'] != 'creditcard' ? 'none' : 'block'; ?>"><label class="title"><?php echo $RB_LANG['front']['4_cc_num']; ?></label><input type="text" name="cc_num" id="cc_num" value="<?php echo htmlspecialchars($tpl['arr']['cc_num']); ?>" class="text w250" /></p>
			<p class="boxCC" style="display: <?php echo $tpl['arr']['payment_method'] != 'creditcard' ? 'none' : 'block'; ?>"><label class="title"><?php echo $RB_LANG['front']['4_cc_exp']; ?></label>
				<select name="cc_exp_month" class="select">
					<option value="">---</option>
					<?php
					list($year, $month) = explode("-", $tpl['arr']['cc_exp']);
					foreach ($RB_LANG['months_full'] as $key => $val)
					{
						?><option value="<?php echo $key;?>"<?php echo (int) $month == $key ? ' selected="selected"' : NULL; ?>><?php echo $val;?></option><?php
					}
					?>
				</select>
				<select name="cc_exp_year" class="select">
					<option value="">---</option>
					<?php
					$y = (int) date('Y');
					for ($i = $y; $i <= $y + 10; $i++)
					{
						?><option value="<?php echo $i; ?>"<?php echo $year == $i ? ' selected="selected"' : NULL; ?>><?php echo $i; ?></option><?php
					}
					?>
				</select>
			</p>
			<p class="boxCC" style="display: <?php echo $tpl['arr']['payment_method'] != 'creditcard' ? 'none' : 'block'; ?>"><label class="title"><?php echo $RB_LANG['front']['4_cc_code']; ?></label><input type="text" name="cc_code" id="cc_code" value="<?php echo htmlspecialchars($tpl['arr']['cc_code']); ?>" class="text w100" /></p>
			<div class="p">
				<p class="float_left">
					<label class="title"><?php echo $RB_LANG['booking_total']; ?></label>
					<input type="text" name="total" id="total" value="<?php echo floatval($tpl['arr']['total']); ?>" class="text w60 number align_right" /> <span class="l5"><?php echo $tpl['option_arr']['currency']; ?></span>
				</p>
			</div>
			
	
			<p><label class="title"><?php echo $RB_LANG['booking_code']; ?></label><input type="text" name="code" id="code" class="text w150" value="<?php echo htmlspecialchars(stripslashes($tpl['arr']['code'])); ?>" /></p>
			<p><label class="title"><?php echo $RB_LANG['booking_people']; ?></label><input type="text" name="people" id="people" class="text w80 digits align_right" value="<?php echo (int) $tpl['arr']['people']; ?>" /></p>
			<div class="p">
				<label class="title"><?php echo $RB_LANG['booking_table']; ?></label>
				<table cellpadding="0" cellspacing="0" class="table" style="width: auto" id="tblBookingTables">
					<thead>
						<tr>
							<th class="sub"><?php echo $RB_LANG['booking_tbl_name']; ?></th>
							<th class="sub"><?php echo $RB_LANG['booking_tbl_min']; ?></th>
							<th class="sub"><?php echo $RB_LANG['booking_tbl_seats']; ?></th>
							<th class="sub">&nbsp;</th>
						</tr>
					</thead>
					<tbody>
					<?php
					if (count($tpl['bt_arr']) > 0)
					{
						foreach ($tpl['bt_arr'] as $table_id)
						{
							?>
							<tr>
								<td>
									<select name="table_id[]" class="select">
										<option value="">---</option>
										<?php
										foreach ($tpl['table_arr'] as $table)
										{
											?><option value="<?php echo $table['id']; ?>|<?php echo $table['minimum']; ?>|<?php echo $table['seats']; ?>"<?php echo $table_id == $table['id'] ? ' selected="selected"' : NULL; ?>><?php echo stripslashes($table['name']); ?></option><?php
										}
										?>
									</select>
								</td>
								<td>
								<?php
								foreach ($tpl['table_arr'] as $table)
								{
									if ($table_id == $table['id'])
									{
										echo (int) $table['minimum'];
										break;
									}
								}
								?>
								</td>
								<td>
								<?php
								foreach ($tpl['table_arr'] as $table)
								{
									if ($table_id == $table['id'])
									{
										echo (int) $table['seats'];
										break;
									}
								}
								?>
								</td>
								<td><a href="<?php echo $_SERVER['PHP_SELF']; ?>" class="btnRemoveTable"><img src="<?php echo INSTALL_URL . IMG_PATH; ?>icon-delete.png" alt="" /></a></td>
							</tr>
							<?php
						}
					} else {
						?>
						<tr>
							<td>
								<select name="table_id[]" class="select">
									<option value="">---</option>
									<?php
									foreach ($tpl['table_arr'] as $table)
									{
										?><option value="<?php echo $table['id']; ?>|<?php echo $table['minimum']; ?>|<?php echo $table['seats']; ?>"><?php echo stripslashes($table['name']); ?></option><?php
									}
									?>
								</select>
							</td>
							<td>-</td>
							<td>-</td>
							<td><a href="<?php echo $_SERVER['PHP_SELF']; ?>" class="btnRemoveTable"><img src="<?php echo INSTALL_URL . IMG_PATH; ?>icon-delete.png" alt="" /></a></td>
						</tr>
						<?php
					}
					?>
					</tbody>
				</table>
			</div>
			<p>
				<label class="title">&nbsp;</label>
				<a href="<?php echo $_SERVER['PHP_SELF']; ?>" class="btnAddTable"><img src="<?php echo INSTALL_URL . IMG_PATH; ?>icon-add-table.png" alt="" class="align_middle" /></a>
				<a href="<?php echo $_SERVER['PHP_SELF']; ?>" class="availability l5"><?php echo $RB_LANG['booking_view_availability']; ?></a>
			</p>
			<p>
				<label class="title">&nbsp;</label>
				<input type="submit" value="" class="button button_save" />
			</p>
		</fieldset>
		<fieldset class="fieldset white">
			<legend><?php echo $RB_LANG['booking_personal']; ?></legend>
			<p><label class="title"><?php echo $RB_LANG['booking_title']; ?></label>
				<select name="c_title" id="c_title" class="select w150<?php echo $tpl['option_arr']['bf_include_title'] == 3 ? ' required' : NULL; ?>">
					<option value=""><?php echo $RB_LANG['booking_choose']; ?></option>
				<?php
				foreach ($RB_LANG['_titles'] as $k => $v)
				{
					?><option value="<?php echo $k; ?>"<?php echo $tpl['arr']['c_title'] == $k ? ' selected="selected"' : NULL; ?>><?php echo $v; ?></option><?php
				}
				?>
				</select>
			</p>
			<p><label class="title"><?php echo $RB_LANG['booking_fname']; ?></label><input type="text" name="c_fname" id="c_fname" class="text w250<?php echo $tpl['option_arr']['bf_include_fname'] == 3 ? ' required' : NULL; ?>" value="<?php echo htmlspecialchars(stripslashes($tpl['arr']['c_fname'])); ?>" /></p>
			<p><label class="title"><?php echo $RB_LANG['booking_lname']; ?></label><input type="text" name="c_lname" id="c_lname" class="text w250<?php echo $tpl['option_arr']['bf_include_lname'] == 3 ? ' required' : NULL; ?>" value="<?php echo htmlspecialchars(stripslashes($tpl['arr']['c_lname'])); ?>" /></p>
			<p><label class="title"><?php echo $RB_LANG['booking_phone']; ?></label><input type="text" name="c_phone" id="c_phone" class="text w250<?php echo $tpl['option_arr']['bf_include_phone'] == 3 ? ' required' : NULL; ?>" value="<?php echo htmlspecialchars(stripslashes($tpl['arr']['c_phone'])); ?>" /></p>
			<p><label class="title"><?php echo $RB_LANG['booking_email']; ?></label><input type="text" name="c_email" id="c_email" class="text w250<?php echo $tpl['option_arr']['bf_include_email'] == 3 ? ' required' : NULL; ?>" value="<?php echo htmlspecialchars(stripslashes($tpl['arr']['c_email'])); ?>" /></p>
			<p><label class="title"><?php echo $RB_LANG['booking_notes']; ?></label><textarea name="c_notes" id="c_notes" class="textarea w500 h120<?php echo $tpl['option_arr']['bf_include_notes'] == 3 ? ' required' : NULL; ?>"><?php echo stripslashes($tpl['arr']['c_notes']); ?></textarea></p>
		
			<div style="display: <?php echo $tpl['arr']['status'] == 'enquiry' ? 'none': NULL; ?>">
				<p><label class="title"><?php echo $RB_LANG['booking_company']; ?></label><input type="text" name="c_company" id="c_company" class="text w250<?php echo $tpl['option_arr']['bf_include_company'] == 3 ? ' required' : NULL; ?>" value="<?php echo htmlspecialchars(stripslashes($tpl['arr']['c_company'])); ?>" /></p>
				<p><label class="title"><?php echo $RB_LANG['booking_address']; ?></label><input type="text" name="c_address" id="c_address" class="text w250<?php echo $tpl['option_arr']['bf_include_address'] == 3 ? ' required' : NULL; ?>" value="<?php echo htmlspecialchars(stripslashes($tpl['arr']['c_address'])); ?>" /></p>
				<p><label class="title"><?php echo $RB_LANG['booking_city']; ?></label><input type="text" name="c_city" id="c_city" class="text w250<?php echo $tpl['option_arr']['bf_include_city'] == 3 ? ' required' : NULL; ?>" value="<?php echo htmlspecialchars(stripslashes($tpl['arr']['c_city'])); ?>" /></p>
				<p><label class="title"><?php echo $RB_LANG['booking_state']; ?></label><input type="text" name="c_state" id="c_state" class="text w250<?php echo $tpl['option_arr']['bf_include_state'] == 3 ? ' required' : NULL; ?>" value="<?php echo htmlspecialchars(stripslashes($tpl['arr']['c_state'])); ?>" /></p>
				<p><label class="title"><?php echo $RB_LANG['booking_zip']; ?></label><input type="text" name="c_zip" id="c_zip" class="text w100<?php echo $tpl['option_arr']['bf_include_zip'] == 3 ? ' required' : NULL; ?>" value="<?php echo htmlspecialchars(stripslashes($tpl['arr']['c_zip'])); ?>" /></p>
				<p><label class="title"><?php echo $RB_LANG['booking_country']; ?></label>
					<select name="c_country" id="c_country" class="select w250<?php echo $tpl['option_arr']['bf_include_country'] == 3 ? ' required' : NULL; ?>">
						<option value=""><?php echo $RB_LANG['booking_choose']; ?></option>
					<?php
					foreach ($tpl['country_arr'] as $v)
					{
						?><option value="<?php echo $v['id']; ?>"<?php echo $tpl['arr']['c_country'] == $v['id'] ? ' selected="selected"' : NULL; ?>><?php echo stripslashes($v['country_title']); ?></option><?php
					}
					?>
					</select>
				</p>
			</div>
			<p>
				<label class="title">&nbsp;</label>
				<input type="submit" value="" class="button button_save" />
			</p>
		</fieldset>
		
	</form>
	
	<div style="display: none" title="<?php echo $RB_LANG['booking_availability']; ?>" id="dialogAvailability"></div>
	<?php
}
?>