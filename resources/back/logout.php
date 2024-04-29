<?php
include('conexion.php');
session_start();
session_destroy();
$conexion->close();

header("Location: ../../index.php");
?>