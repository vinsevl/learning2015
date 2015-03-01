<pre>

<?php

$newArray = array();
for($i=0; $i<30; $i++){
	$newArray[] = rand(0, 1000);
	
}

$chunkedArray = array_chunk($newArray, 10);

$chuckedArrayFirst = $chunkedArray[0];
$chuckedArraySecond = $chunkedArray[1];
$chuckedArrayThird = $chunkedArray[2];

echo "Исходные разбитые массивы:\n";
echo "Первый:\n";
print_r($chuckedArrayFirst);
echo "Второй:\n";
print_r($chuckedArraySecond);
echo "Третий:\n";
print_r($chuckedArrayThird);

/*foreach ($chukedArrayFirst as &$value) {
    $value = $value + 2;
}
unset($value); // разорвать ссылку на последний элемент
*/


for($i = 0, $cnt = count($chuckedArrayFirst); $i < $cnt; $i++){ 
    $chuckedArrayFirst[$i]=$chuckedArrayFirst[$i]+2; 
} 
for($i = 0, $cnt = count($chuckedArraySecond); $i < $cnt; $i++){ 
    $chuckedArraySecond[$i]=$chuckedArraySecond[$i]-2; 
} 
for($i = 0, $cnt = count($chuckedArrayThird); $i < $cnt; $i++){ 
    $chuckedArrayThird[$i]=$chuckedArrayThird[$i]*2; 
} 

echo "Измененные массивы:\n";
echo "Первый:\n";
print_r($chuckedArrayFirst);
print_r($chuckedArraySecond);
print_r($chuckedArrayThird);

for($i = 0, $cnt = count($chuckedArrayFirst); $i < $cnt; $i++){
	
	$res=max($chuckedArrayFirst[$i], $chuckedArraySecond[$i], $chuckedArrayThird[$i]);
	$res=print_r($res);
	if ($i<$cnt-1)
		echo ", ";
	else 
		echo ".";
}

?>

</pre>