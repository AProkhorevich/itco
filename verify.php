<?php
	include('connectdb.php');
	if ($_GET['key']){
		$key=$_GET['key'];
		if (mysqli_query($connection, "UPDATE user_information SET verified = '1' WHERE verifying_key = '$key'")){

			header('Location: /sign-in.php?confirmed=true');
			die();
		}
	}
?>