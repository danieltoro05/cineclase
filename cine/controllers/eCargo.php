<?php
	ini_set('display_errors', 'on');
	session_start();
	include_once("../models/class.cargo.php");
	$obj = new cargo();
	if (isset($_POST['id_cargo'])){
		echo $obj->delete($_POST['id_cargo']);
	}
	else{
		echo "-2";
	}
?>
