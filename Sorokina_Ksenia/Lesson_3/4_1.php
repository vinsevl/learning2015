<pre>

<?php

$array_gen = array();
$array_3 = array();
$Summa = 0;

for($i=0; $i<100; $i+=1){
	$array_gen[] = rand(0, 1000);
	$Ost = $array_gen[$i]%3;
	if($Ost == 0){
		$Summa = $array_gen[$i]+$Summa;
	}

	   
}

echo "Массив из 100 элеметов:\n";
print_r($array_gen);
echo "\n";

echo "Сумма чисел:\n";
echo($Summa );
echo "\n";



?>

</pre>
