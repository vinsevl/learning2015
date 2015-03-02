<pre>
<?php

$f = file("text.txt");

$ch=count($f);
$result = 0;
for($i=0; $i<($ch); $i+=1){
if (substr_count($f[$i], " ")>4) {
	++$result;
	
}
}
echo "Количество строк, содержащих > 4 пробельных символов = ";
echo($result);
?>

</pre>
