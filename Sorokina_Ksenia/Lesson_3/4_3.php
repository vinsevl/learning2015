<pre>
<?php
$date = "2015-03-29";
$d1 = strtotime($date); // переводит из строки в дату
$date2 = date("Y-m-d", $d1); // переводит в новый формат


echo "Дата входящая\n";
echo($date2);
echo "\n";
$enddate = strtotime("+3 day", strtotime(preg_replace('~^(\d+)\.(\d+)\.(\d+)$~', '$3-$2-$1', $date2 ))); 
$date3 = date("Y-m-d", $enddate ); 
echo "Дата увеличенная на 3 дня\n";
echo ($date3) ;
?>

</pre>
