<?php

//phpinfo();
$conexion=new PDO("sqlsrv:server=DESKTOP-4F23SAH;database=BibliotecaSayner");

$consulta=$conexion->prepare("SELECT * FROM Clientes");
$consulta->execute(); 
$datos = $consulta->fetchALL(PDO::FETCH_ASSOC);
var_dump($datos);