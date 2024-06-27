<?php
include('conexion.php');

$cedula = clear($_POST['cedula']);
$nombre = clear($_POST['nombre']);
$fn = clear($_POST['fn']);
$telefono = clear($_POST['telefono']);
$correo = clear($_POST['correo']);
$residencia = clear($_POST['residencia']);
$enfermedades = clear($_POST['enfermedades']);
$experiencia = clear($_POST['experiencia']);
$experiencia_offroad = clear($_POST['experiencia_offroad']);
$antecedentes = clear($_POST['antecedentes']);





$stmt = mysqli_prepare($conexion, "SELECT * FROM `miembros` WHERE cedula = ?");
$stmt->bind_param('s', $cedula);
$stmt->execute();
$result = $stmt->get_result();
if ($result->num_rows > 0) {
 
	echo 'sye';
	exit();
}
$stmt->close();


$stmt_o = $conexion->prepare("INSERT INTO miembros (cedula, nombre, fn, telefono, correo, recidencia, enfermedades, experiencia_manejando, experiencia_offroad, antecedentes) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
$stmt_o->bind_param("ssssssssss", $cedula, $nombre, $fn, $telefono, $correo, $residencia, $enfermedades, $experiencia, $experiencia_offroad, $antecedentes);
$stmt_o->execute();

if ($stmt_o) {
  $id_r = $conexion->insert_id;
}else {
  echo "error";
}
$stmt_o->close();


function cargarArchivo($archivo, $folder)    {
	global $id_r;
	$dir = opendir($folder); //Abrimos el directorio de destino
	//Como el elemento es un arreglos utilizamos foreach para extraer todos los valores
	foreach ($_FILES[$archivo]['tmp_name'] as $key => $tmp_name) {
	  //Validamos que el archivo exista
	  if ($_FILES[$archivo]["name"][$key]) {
		$source = $_FILES[$archivo]["tmp_name"][$key]; //Obtenemos un nombre temporal del archivo
		$target_path = $folder . '/' .$id_r. '.png'; //Indicamos la ruta de destino, así como el nombre del archivo
		move_uploaded_file($source, $target_path);  //	echo 'ok. ';
	  }
	}
	closedir($dir); //Cerramos el directorio de destino

  }

  cargarArchivo('foto_cedula', '../img/foto_cedula/');
  cargarArchivo('foto_carnet', '../img/foto_carnet/');

  echo "ok";