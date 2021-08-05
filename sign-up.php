<?php
	$data = $_POST;

	if (isset($data['submit'])){
			include('connectdb.php');
			$e_mail = trim($data['email']);
			$password = password_hash($data['password'], PASSWORD_DEFAULT);
			$hash = md5($e_mail.time());

			$already_exist = mysqli_query($connection, "SELECT email FROM user_information WHERE email = '$e_mail'");
			
			$exist_email = mysqli_fetch_assoc($already_exist);
			if (empty($exist_email)){
				$sql = mysqli_query($connection, "INSERT INTO user_information (email, password, verifying_key) VALUES ('$e_mail','$password', '$hash')");
				mail($e_mail, Verification, "http://itco.ru/verify.php?key=$hash");
				
				header("Location: /handle.php");
				die();
				if ($sql){
					die();
				}
			}
	}
?>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width">
	<title>
		sign up
	</title>
	<link rel="stylesheet" href="sign-up.css">
</head>
<body>

	<div class="login">
		<div class="login-triangle"></div>
		<h2 class="login-header">sign up</h2>
		<form class="login-container" method="POST">
			<p><input type="email" placeholder="Email" name="email" required></p>
			<p><input type="password" placeholder="Password" id="password" name="password" required></p>
			<p><input type="password" placeholder="Confirm Password" id="confirm_password" required>
			<p><input type="submit" value="sign up" name="submit"></p>
		</form>
	</div>

</body>

<script type="text/javascript">
var password = document.getElementById("password"),
	confirm_password = document.getElementById("confirm_password");

function validatePassword(){
  if(password.value != confirm_password.value) {
    confirm_password.setCustomValidity("Passwords Don't Match");
  } else {
    confirm_password.setCustomValidity('');
  }
}

password.onchange = validatePassword;
confirm_password.onkeyup = validatePassword;
</script>