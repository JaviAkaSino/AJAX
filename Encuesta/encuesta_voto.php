<?php

$fichero = "resultados.txt";
$contenido = file($fichero);

$array = explode("||", $contenido[0]);

$real = $array[0];
$barcelona = $array[1];
$atletico = $array[2];
$sevilla = $array[3];

$voto = $_GET["voto"];

if ($voto == 0)
    $real++;

if ($voto == 1)
    $barcelona++;

if ($voto == 2)
    $atletico++;

if ($voto == 3)
    $sevilla++;

$insertvoto = $real. "||".$barcelona."||".$atletico."||".$sevilla;

$fp = fopen($fichero, "w");
fputs($fp, $insertvoto);
fclose($fp);

$denominador = (int)$real + (int)$barcelona + (int)$atletico + (int)$sevilla;

$tantoReal = $real / $denominador;
$tantoBarcelona = $barcelona / $denominador;
$tantoAtletico = $atletico / $denominador;
$tantoSevilla = $sevilla / $denominador;
