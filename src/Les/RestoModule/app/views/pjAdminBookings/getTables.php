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