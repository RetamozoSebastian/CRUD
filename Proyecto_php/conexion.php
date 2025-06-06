<?php

define('DB_SERVER','localhost');
define('DB_USERNAME','root');
define('DB_PASSWORD','');
define('DB_NAME','php_tp1');

$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

// CHEQUEAR LA CONECCION 

if ($link === false ){
    die("ERROR: problemas de conexion" . mysqli_connect_error() );
}else{
   // echo "Conexión Exitosa";
}

?>