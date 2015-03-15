

<!-- блок отображения сообщений-->
	
<?php
	include ("dbconnect.php");
	
	$c=0;
	$r=mysql_query ("SELECT * FROM gb ORDER BY dt DESC"); // выбор всех записей из БД, отсортированных так, что самая последняя отправленная запись будет всегда первой.
	while ($row=mysql_fetch_array($r))  // для каждой записи организуем вывод.
	{
		if ($c%2)
			$col="bgcolor='#f9f9f9'";	// цвет для четных записей
		else
			$col="bgcolor='#f0f0f0'";	// цвет для нечетных записей
			
			?>
			<table border="0" cellspacing="3" cellpadding="0" width="90%" <? echo $col; ?> style="margin: 10px 0px;">
			<tr>
				<td width="150" style="color: #999999;">Username: </td>
				<td><?php echo $row['username']; ?></td>
			</tr>
			<tr>
				<td width="150" style="color: #999999;">Date of the publishment: </td>
				<td><?php echo $row['dt']; ?></td>
			</tr>	
			<tr>
				<td colspan="2" style="color: #999999;">Message: </td>
			</tr>		
			<tr>
				<td colspan="2">
					<?php echo $row['msg']; ?>
					<br>
				</td>
			</tr>
			
			</table>
			<?php
		$c++;
	}
	
	if ($c==0) // если ни одной записи не встретилось
		echo "Guest book is empty!<br>";
	

?>