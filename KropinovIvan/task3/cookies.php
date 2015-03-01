<?php
$arrayFirst = array();

for($i=0; $i<3; $i++){
	$arrayFirst[$i] = rand(0, 1000);
}

// записываем
function setArrayInCookie($nameCookies, $array){
    $value = serialize($array);
    setcookie($nameCookies, $value, time()+3600);
    return true;
}
// читаем
function getArrayInCookie($nameCookies){
    if(isset($_COOKIE[$nameCookies])){
        $result = unserialize($_COOKIE[$nameCookies]);
    }else{
        $result = false;
    }
    print_r ($result);
}

// отправка cookie
//setcookie("cookie[three]", "cookiethree");
//setcookie("cookie[two]", "cookietwo");
//setcookie("cookie[one]", "cookieone");

// после перезагрузки страницы, выведем cookie

setArrayInCookie("cooka[0]", $arrayFirst[0]);
setArrayInCookie("cooka[1]", $arrayFirst[1]);
setArrayInCookie("cooka[2]", $arrayFirst[2]);

// после перезагрузки страницы, выведем cookie
if (isset($_COOKIE['cooka'])) {
    foreach ($_COOKIE['cooka'] as $name => $value) {
        $name = htmlspecialchars($name);
        $value = htmlspecialchars($value);
        echo "$name : $value <br />\n";
    }
}


?>

