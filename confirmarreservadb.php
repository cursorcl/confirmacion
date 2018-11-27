<?php

// Obtiene horarios de los doctores que son de una especialidad específica  en una sede en partícular
include_once(dirname(__FILE__) . '/global.php');

$token = "";
if (isset($_GET["token"])) {
    $token = utf8_encode($_GET["token"]);
}

$sql = "UPDATE  asomel_data.reserva set estado = ". ESTADO_HORA_CONFIRMADA ." where token='$token'";
$conexion = mysqli_connect(DB_HOST, DB_USER, DB_PWD, DB_NAME);
mysqli_set_charset($conexion, "utf8"); //formato de datos utf8
if (!$result = mysqli_query($conexion, $sql)){
    die();
}
mysqli_close($conexion);

$sql = "select p.personalNombre, r.fecha, r.horaInicio, s.sedeNombre from personal p, reserva r, sedes s where p.personalId = r.personalId and s.sedeId = r.sedeId and token='$token'";
$rawdata = array(); //creamos un array
$i = 0;
$conexion = mysqli_connect(DB_HOST, DB_USER, DB_PWD, DB_NAME);
mysqli_set_charset($conexion, "utf8"); //formato de datos utf8
if (!$result = mysqli_query($conexion, $sql)){
    die();
}
while ($row = mysqli_fetch_array($result)) {
    $rawdata[$i] = $row;    
    $i++;
}
mysqli_close($conexion);
echo json_encode($rawdata);



