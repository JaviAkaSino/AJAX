<?php
$capital = $_POST["capital"];
$interes = $_POST["interes"];
$plazo = $_POST["plazo"];

$cuota = $capital / (1 - pow((1 + $interes / 12), -$plazo)) / $interes;

echo "Su cuota mensual será de: " . $cuota . " euros";
