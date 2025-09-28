<?php
$jsonfish = '{"Lele":50, "Nila":74, "Mujaer":80, "Cupang":61, "Megalondon":10, "Hiu":20, "Patin":40}';

$arr=json_decode($jsonfish, true);

//mengakses nilai array 
echo $arr["Lele"];
echo $arr["Nila"];
echo $arr["Mujaer"];
echo $arr["Cupang"];
echo $arr["Megalondon"];
echo $arr["Hiu"];
echo $arr["Patin"];


?>