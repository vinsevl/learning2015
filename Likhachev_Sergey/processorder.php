<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<?php
// создание коротких имен переменных
  $tireqty=$_POST['tireqty'];
  $oilqty=$_POST['oilqty'];
  $sparkqty=$_POST['sparkqty'];
// Константы
  define('TIREPRICE', 100);
  define('OILPRICE', 10);
  define('SPARKPRICE', 4);
?>
<html>
<head>
  <title> Автозапчасти - Результат заказа </title>
</head>
<body>
<h1> Автозапчасти </h1>
<h2> Результат заказа </h2>
<?php
  $totalqty=0;
  $totalqty=$tireqty+$oilqty+$sparkqty ;
	if($totalqty==0) {
		echo '<p style="color:red">';
		echo 'Вы ничего не заказали на предыдущей странице'.'<br/>';
		echo '</p>';
		} else {
		echo '<p>Заказ обработан в ';
		echo date('H:i, jS F Y');
		echo '</p>';
		echo '<p>Заказано: </p>';
		if ($tireqty>0)
		echo $tireqty. ' покрышек<br />';
		if ($oilqty>0)
		echo $oilqty. ' бутылок масла<br />';
		if ($sparkqty>0)
		echo $sparkqty. ' свечей зажигания<br />';
		
		if ($tireqty<10) {
			$discount=0;
			} elseif (($tireqty>=10) && ($tireqty<=49)) {
			$discount=5;
			} elseif (($tireqty>=49) && ($tireqty<=99)) {
			$discount=10;
			} elseif ($tireqty>100) {
			$discount=15;
			}
		if ($oilqty<10) {
			$discount=0;
			} elseif (($oilqty>=10) && ($oilqty<=49)) {
			$discount=5;
			} elseif (($oilqty>=49) && ($oilqty<=99)) {
			$discount=10;
			} elseif ($oilqty>100) {
			$discount=15;
			}
		if ($sparkqty<10) {
			$discount=0;
			} elseif (($sparkqty>=10) && ($sparkqty<=49)) {
			$discount=5;
			} elseif (($sparkqty>=49) && ($sparkeqty<=99)) {
			$discount=10;
			} elseif ($sparkqty>100) {
			$discount=15;
			}
		$result_tireqty=$tireqty*TIREPRICE*(1-$discount/100);
		$result_oilqty=$oilqty*OILPRICE*(1-$discount/100);
		$result_sparkqty=$sparkqty*SPARKPRICE*(1-$discount/100);
		$result=$result_tireqty+$result_oilqty+$result_sparkqty;
		echo "На общую сумму ". number_format($result,2)."<br/>";
		echo "Заказано товаров: ".$totalqty. "<br/>";
		$totalmount=$tireqty*TIREPRICE+$oilqty*OILPRICE+$sparkqty*SPARKPRICE;
		echo "Итого: $".number_format($totalmount,2)."<br/>";
		$taxrate=0.12; // Местный налог с продажи составляет 12%
		$totalmount=$totalmount*(1+$taxrate);
		echo "Всего,включая налог с продажи: $".number_format($totalmount,2)."<br/>";
		}
  
  //Временные строчки 
  #echo 'isset($tireqty): '.isset($tireqty).'<br/>';
  #echo 'isset($nothere): '.isset($nothere).'<br/>';
  #echo 'empty($tireqty): '.empty($tireqty).'<br/>';
  #echo 'empty($nothere): '.empty($nothere).'<br/>';
?>
</body>
</html>
