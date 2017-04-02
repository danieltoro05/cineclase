<?php
	ini_set('display_errors', 'on');
	session_start();
	include_once("../models/class.cargo.php");
	$obj = new cargo();
	if (isset($_POST['id_cargo']) && isset($_POST['nombre_cargo'])&& isset($_POST['descripcion_cargo'])){
		$obj->id_cargo=$_POST['id_cargo'];
		$obj->nombre_cargo=$_POST['nombre_cargo'];
		$obj->descripcion_cargo=$_POST['descripcion_cargo'];
		echo $obj->insert();
	}
	else{
		echo "-1";
	}
?>
