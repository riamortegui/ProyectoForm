<?php

$servername= "DESKTOP-RKLGHCC\SQLEXPRESS";
$conexion=array("Database"=>"Pais",
                 "UID"=>"sa",
                 "PWD"=>"1234",
                 "CharacterSet"=>"UTF-8");
                           
$conex=sqlsrv_connect($servername,$conexion);

$nombre=$_POST["nombre"];
$pais=$_POST["pais"];
$celular=$_POST["celular"];
$email=$_POST["email"];


$query= "INSERT INTO contacto (nombre,pais,celular,email) VALUES ('$nombre','$pais','$celular','$email')";
$resultado=sqlsrv_prepare($conex,$query);

if (sqlsrv_execute($resultado)) {
    echo "Datos insertados correctamente";
}else {
    echo "error al insertar los datos";
}


?>


