<?php
function validar ($user, $clave){

//$user = $_POST["user"];
//$clave = $_POST["clave"];
if ($user == "admin" && $clave == "1234")
    echo "USUARIO VÁLIDO";
else
    echo "USUARIO NO VÁLIDO";


}
