<?php

	$data = $_POST;
	if (isset($data['submit'])){

		$e_mail = trim($data['email']);
		$password = $data['password'];
		include('connectdb.php');

		$user_data = mysqli_query($connection, "SELECT * FROM user_information where email = '$e_mail'");
		$user_data = mysqli_fetch_assoc($user_data);
		if (empty($user_data)){
			echo '<div style="color: red;">Пользователь с такой почтой не найден!</div><hr>';
			echo '<a style="color: white; font-size: bold;"href="/sign-up.php">Зарегестрируйтесь!</a>';
		}
		else{
			if (password_verify($password, $user_data['password'])){
				$_SESSION['user_logged'] = $user_data;
				header("Location: /index.php");
				die();
			}
			else{
				echo '<div style="color: red;">Пароль неверный!</div><hr>';
			}
		}

	}
	
?>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width">
	<title>
		Sign in
	</title>
	<link rel="stylesheet" href="sign-in.css">
</head>
<body>
	<p style="background: green; color: white;">
	<?php if ($_GET['confirmed']) {
		echo 'Your account has been confirmed!';
	}   ?>
	</p>
	<div class="login">
		<div class="login-triangle"></div>
		<h2 class="login-header">Sign in</h2>
		<form class="login-container" method="POST">
			<p><input type="email" placeholder="Email" 
				name="email" required></p>
			<p><input type="password" placeholder="Password" name="password" required></p>
			<p><input type="submit" name="submit" value="sign in"></p>
		</form>
	</div>

</body>