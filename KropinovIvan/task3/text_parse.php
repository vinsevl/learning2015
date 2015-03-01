<pre>
<?php
	function lines($file) 
{ 
    // в начале ищем сам файл. Может быть, путь к нему был некорректно указан 
    if(!file_exists($file))exit("Файл не найден"); 
    // рассмотрим файл как массив
    $file_arr = file($file);
    // подсчитываем количество строк в массиве
	 $string_count =0;
	foreach ($file_arr as $value)
	{
		//ищем любые согласные символы в каждой строке
		$arrayOfMatch=preg_match_all("/([бвгджзйклмнпрстфхцчшщъьБВГДЖЗЙКЛМНПРСТФХЦЧШЩЪЬ])/", $value, $resArray);
		//если совпадений болше 20, то увеличиваем счетчик
		if ($arrayOfMatch>20)
			++$string_count;
		
		//$file_arr_lower[$i]=strtolower( $file_arr[$i] );
		//print_r($file_arr);
	}
	return($string_count);
    // вывод результата работы функции 
     
} 
$lines=lines("text.txt");
print_r($lines);


?>
</pre>

