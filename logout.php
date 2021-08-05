<?php
	include('connectdb.php');
	unset($_SESSION['user_logged']);
	header('Location: /index.php');
	die();
?>