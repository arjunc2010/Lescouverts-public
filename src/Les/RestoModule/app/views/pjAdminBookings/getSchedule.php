<?php
$date = isset($_GET['date']) ? $_GET['date'] : date($tpl['option_arr']['date_format']);
if ($tpl['wt_arr'] === false)
{
	pjUtil::printNotice(sprintf($RB_LANG['errors']['AB12'], $date));
} else {
	# Fix for 24h support
	$offset = $tpl['wt_arr']['end_hour'] <= $tpl['wt_arr']['start_hour'] ? 24 : 0;
					
	$numOfHours = abs($tpl['wt_arr']['start_hour'] - $tpl['wt_arr']['end_hour'] - $offset);
	if (count($tpl['arr']) > 0)
	{
		?>
		<div class="cal-container">
			<div class="cal-calendars">
				<div class="cal-title" style="height: 64px"></div>
				<?php
				foreach ($tpl['arr'] as $k => $table)
				{
					?><div class="cal-title"><a href="<?php echo $_SERVER['PHP_SELF']; ?>?controller=pjAdminTables&amp;action=update&amp;id=<?php echo $table['id']; ?>"><?php echo stripslashes($table['name']); ?></a></div><?php
				}
				?>
			</div>
			<div class="cal-dates">
				<div class="cal-scroll">
				<?php
				foreach ($tpl['arr'] as $k => $table)
				{
					if ($k == 0)
					{
						?>
						<div class="cal-head">
							<div class="cal-head-row">
								<span style="width: <?php echo 44 * $numOfHours - 3; ?>px"><?php echo $date; ?></span>
							</div>
							<div class="cal-head-row">
							<?php
							for ($i = $tpl['wt_arr']['start_hour']; $i < $tpl['wt_arr']['end_hour']; $i++)
							{
								?><span><?php echo $i; ?></span><?php
							}
							?>
							</div>
						</div>
						<?php
						
					}
					?>
					<div class="cal-program">
					<?php
					for ($i = $tpl['wt_arr']['start_hour']; $i < $tpl['wt_arr']['end_hour'] + $offset; $i++)
					{
		    	    	$class = pjUtil::getClass($table['hour_arr'], $i);
		    	    	$label = $i < 24 ? $i : $i - $offset; //24h
		    	    	if (isset($table['hour_arr'][$i]) && count($table['hour_arr'][$i]) > 0)
		    	    	{
							?><a href="<?php echo $_SERVER['PHP_SELF']; ?>?controller=pjAdminBookings&amp;action=update&amp;id=<?php echo $table['hour_arr'][$i]['id']; ?>" class="<?php echo $class; ?>"><?php echo $label; ?></a><?php
		    	    	} else {
		    	    		?><span><?php echo $label; ?></span><?php
		    	    	}
					}
					?>
					</div>
					<?php
				}
				?>
				</div>
			</div>
		</div>
		<?php
	} else {
		pjUtil::printNotice($RB_LANG['table_empty']);
	}
}
?>