
<?php

// Установка значения переменных для доступа к базе данных.

$Host = "localhost";
$User = "root";
$Password = "";
$DBName = "employees";
$TableName = "employees";

//извлекаем входящие параметры(по GET-запросу) с помощью функции filter_input с соответствующей валидацией
$rowsAmount = filter_input(INPUT_GET, "rowsAmount", FILTER_VALIDATE_INT, 
array("options" => array(
						"default" => 30, 
						"min_range" => 30, 
						"max_range" => 100
						)));
$pageNumber= filter_input(INPUT_GET, "pageNumber", FILTER_VALIDATE_INT, 
array("options" => array(
						"default" => 0, 
						"min_range" => 0, 
						"max_range" => 10000
						)));
//начальная запись в выводе
$start = $rowsAmount*$pageNumber;

$Link = mysql_connect ($Host, $User, $Password)
	or die("Could not connect: " . mysql_error());

?>

<html>
<body>
	<form method="get" action="">
	<p>Amount of rendering rows:</p>
	<select name="rowsAmount" >
		<?php
		for ($i=30; $i<=100; $i += 1) { 
			if ($rowsAmount == $i) 	
				echo "<option selected='selected' value=\"$i\">$i</option>";
			else
				echo "<option value=\"$i\">$i</option>";
		}
		?>
	</select><br>
	<p>Page number:</p>
	<select name="pageNumber" >
		<?php		
		for ($i=0; $i<=300024/$rowsAmount; $i++) { 
		
			if ($pageNumber == $i) 				
				echo "<option selected='selected' value=\"$i\">$i</option>";
			else
				echo "<option value=\"$i\">$i</option>";
		}
		?>
	</select><br>	
	<input type="submit" value="submit"/>
	</form>
	
	<?php
$Query = "SELECT * from $TableName LIMIT $start,$rowsAmount";
$Result = mysql_db_query ($DBName, $Query, $Link);
// Создание таблицы.

print ("<TABLE BORDER=1 WIDTH=\"75%\" CELLSPACING=2 CELLPADDING=2 ALIGN=CENTER>\n");
print ("<TR ALIGN=CENTER VALIGN=TOP>\n") ;
print ("</TR>\n");

// Получение результатов из базы данных.
// изначально по дефолту выведены результаты первые 30 строк таблицы

while ($Row = mysql_fetch_array ($Result)) {
print ("<TR ALIGN=CENTER VALIGN=TOP>\n");
print ("<TD ALIGN=CENTER VALIGN=TOP>$Row[emp_no]</TD>\n");
print ("<TD ALIGN=CENTER VALIGN=TOP>$Row[birth_date]</TD>\n");
print ("<TD ALIGN=CENTER VALIGN=TOP>$Row[first_name]</TD>\n");
print ("<TD ALIGN=CENTER VALIGN=TOP>$Row[last_name]</TD>\n");
print ("<TD ALIGN=CENTER VALIGN=TOP>$Row[gender]</TD>\n");
print ("<TD ALIGN=CENTER VALIGN=TOP>$Row[hire_date]</TD>\n");
print ("</TR>\n");



}
mysql_close ($Link);
print ("</TABLE>\n");
?>

</BODY>
</HTML>