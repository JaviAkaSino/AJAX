<?php
$capital = $_POST["capital"];
$interes = $_POST["interes"]/12;
$plazo = $_POST["plazo"];

$cuota = $capital / ((1 - pow((1 + $interes), -$plazo)) / $interes);

echo "Su cuota mensual será de: " . $cuota . " euros";
