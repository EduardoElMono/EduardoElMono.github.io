<?php 
	$servername="DESKTOP-4F23SAH";
	$conexion=array("Database"=>"Anini2",
					"CharacterSet"=>"UTF-8"
	);
	$con=sqlsrv_connect($servername, $conexion);
	if($con){
		echo"conexion exitosa";
	}else{
		echo"Fallo en la conexion";
	}
 ?>