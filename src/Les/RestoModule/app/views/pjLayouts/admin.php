<!doctype html>
<?php error_reporting(E_ALL ^ E_STRICT); ?>

<html>
	<head>
		<title>lescouverts reservation</title>
		<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
		<?php
		foreach ($controller->css as $css)
		{
			echo '<link type="text/css" rel="stylesheet" href="'.(isset($css['remote']) && $css['remote'] ? NULL : INSTALL_URL).$css['path'].htmlspecialchars($css['file']).'" />';
		}
		foreach ($controller->js as $js)
		{
			echo '<script type="text/javascript" src="'.(isset($js['remote']) && $js['remote'] ? NULL : INSTALL_URL).$js['path'].htmlspecialchars($js['file']).'"></script>';
		}
		?>
	</head>
	<body>
		<div id="container">
    		<div id="header">
		    		<div id="lescouverts-img-container">
						<a href="#" id="img-lescouverts"><img src="<?php echo INSTALL_URL . IMG_PATH; ?>logo_lescouverts.png" alt="Restaurant Booking Script" /></a>
					</div>
			</div>
			
			<div id="middle">
				<div id="leftmenu">
					<?php
					if (is_file(INSTALL_PATH."one-admin.php")) {
						$OneAdmin["pos"] = 'left';
						include(INSTALL_PATH."one-admin.php");
					}
					?>
					<div class="leftmenu-top"></div>
					<div class="leftmenu-middle">
						<ul class="menu">
							<?php /*<li><a class="<?php echo $_GET['controller'] == 'pjAdmin' && $_GET['action'] == 'dashboard' ? 'menu-focus' : NULL; ?>" href="<?php echo $_SERVER['PHP_SELF']; ?>?controller=pjAdmin&amp;action=dashboard"><span class="menu-home">&nbsp;</span><?php echo $RB_LANG['menu_home']; ?></a></li>*/?>
							<li><a class="<?php echo $_GET['controller'] == 'pjAdminBookings' ? 'menu-focus' : NULL; ?>" href="<?php echo $_SERVER['PHP_SELF']; ?>?controller=pjAdminBookings&amp;action=schedule"><span class="menu-bookings">&nbsp;</span><?php echo $RB_LANG['menu_bookings']; ?></a></li>
							<li><a class="<?php echo $_GET['controller'] == 'pjAdminReports' ? 'menu-focus' : NULL; ?>" href="<?php echo $_SERVER['PHP_SELF']; ?>?controller=pjAdminReports"><span class="menu-reports">&nbsp;</span><?php echo $RB_LANG['menu_reports']; ?></a></li>
							<li><a class="<?php echo $_GET['controller'] == 'pjAdminVouchers' ? 'menu-focus' : NULL; ?>" href="<?php echo $_SERVER['PHP_SELF']; ?>?controller=pjAdminVouchers"><span class="menu-vouchers">&nbsp;</span><?php echo $RB_LANG['menu_vouchers']; ?></a></li>
							<li><a class="<?php echo $_GET['controller'] == 'pjAdminOptions' && $_GET['action'] == 'index' ? 'menu-focus' : NULL; ?>" href="<?php echo $_SERVER['PHP_SELF']; ?>?controller=pjAdminOptions"><span class="menu-options">&nbsp;</span><?php echo $RB_LANG['menu_options']; ?></a></li>
							<li><a class="<?php echo in_array($_GET['controller'], array('pjAdminTables', 'pjAdminTime', 'pjAdminMaps')) ? 'menu-focus' : NULL; ?>" href="<?php echo $_SERVER['PHP_SELF']; ?>?controller=pjAdminTime"><span class="menu-restaurant">&nbsp;</span><?php echo $RB_LANG['menu_restaurant']; ?></a></li>
							<li><a href="preview.php" target="_blank"><span class="menu-preview">&nbsp;</span><?php echo $RB_LANG['menu_preview']; ?></a></li>
							<li><a class="<?php echo $_GET['controller'] == 'pjAdminOptions' && $_GET['action'] == 'install' ? 'menu-focus' : NULL; ?>" href="<?php echo $_SERVER['PHP_SELF']; ?>?controller=pjAdminOptions&amp;action=install"><span class="menu-install">&nbsp;</span><?php echo $RB_LANG['menu_install']; ?></a></li>
							<li><a href="<?php echo $_SERVER['PHP_SELF']; ?>?controller=pjAdmin&amp;action=logout"><span class="menu-logout">&nbsp;</span><?php echo $RB_LANG['menu_logout']; ?></a></li>
						</ul>
					</div>
					<div class="leftmenu-bottom"></div>
				</div>
				<div id="right">
					<div class="content-top"></div>
					<div class="content-middle" id="content">
					<?php require $content_tpl; ?>
					</div>
					<div class="content-bottom"></div>
				</div> <!-- content -->
				<div class="clear_both"></div>
			</div> <!-- middle -->
		


		</div> <!-- container -->





		<div id="footer-wrap">

			 <div id="footer-container">
                <a href="">
                  <div class="footer-button"> <span class="footer-text" > Home      </span>     </div>
                </a>
                <div class="footer-button"> <span class="footer-text" > Terms of Service </span>      </div>
                <div class="footer-button"> <span class="footer-text" > Privacy Guideline </span>   </div>
                <div class="footer-button" style="border-right-style: none;"> <span class="footer-text" > contact us     </span>    </div>
            </div>

<!-- 			<div id="footer">
			   	<p><a href="http://www.phpjabbers.com/" target="_blank">PHP Scripts</a> Copyright &copy; <?php echo date("Y"); ?> <a href="http://www.stivasoft.com" target="_blank">StivaSoft Ltd</a></p>
	        </div> -->
        </div>
	
	<style type="text/css">

		#lescouverts-img-container{
		width: 141%;
		display: inline-block;
		border-bottom-style: groove;
		border-width: 2px;
		border-color: #D8D8D8;
		position: relative;
		right: 200px;
		text-align: center;
	}

			#img-lescouverts{
				width: 300px;
				height: 62px;
				position: relative;
				display: inline-block;
				position: relative;
				right: 60px;
			}

#footer-container{
	height:60px;
	background-color: rgb(90,105,222);
	width: 100%;
	float: left;
}

			.footer-button{
				float: left;
				text-align: center;
				height: 100%;
				border-right-style: ridge;
				border-right-color: white;
				border-right-width: 1px;
				width: 24.7%;
				cursor: pointer;
			}

							.footer-button:hover > .footer-text{
								color: #848484;
							}



					.footer-button span{
						color: white;
						font-size: 16px;
						font-family: "Palatino Linotype", "Book Antiqua", Palatino, serif;
						position: relative;
						top:25%;
					}
	</style>
 </body>
</html>