<?php


function calculate_time_difference($dateFirst, $dateSecond) {
	//цикл для проверки даты на попадание в диапазон
	foreach(func_get_args() as $date)
	{
		//разбиваем на подстроки с разделителем "-"
		$dateComponents = explode("-",$date);
		if($dateComponents[0] > 2038 || $dateComponents[0] < 1901)
			echo "Date is out of control";
	}	
	//преобразуем каждую дату в секундное представление, 
	//считаем разницу, делим на кол-во секунд в 1 дне, округляем 
	$difference=abs((abs(strtotime($dateFirst)) - abs(strtotime($dateSecond)))/(60*60*24));
	return $difference;
}

$dateFirst="1991-04-18";
$dateSecond="2015-03-01";	
$result=calculate_time_difference($dateFirst,$dateSecond);
print_r($result);

?>

