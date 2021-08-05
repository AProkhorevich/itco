<?php
$connection = mysqli_connect('127.0.0.1', 'root','','users');
	if ($connection == false){
		echo "Connection Error";
		exit();
	}
session_start();
?>