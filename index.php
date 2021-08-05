<?php
	include('connectdb.php');
?>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width">
	<title>
		test title
	</title>
	<link rel="stylesheet" href="newstyle.css">
</head>
<body>
	<header class="site-header">
		<div class="container">
			<div class="logo">
				<img class ="svg-background" src="images/logo1.svg">
			</div>
			<?php 
				if (isset($_SESSION['user_logged'])) : ?>
					<div class="welcome-message">
						<p class="welcome">Hi, <?php echo $_SESSION['user_logged']['email'];?>!<br> You are now logged in</p>
						<a class="logout" href="/logout.php" style="text-decoration: none; color: white;">Log out</a>
					</div>
				<?php else : ?>
					<nav class="registration">
						<a href="/sign-in.php">sign in</a>
						<a href="/sign-up.php">sing up</a>
					</nav>
				<?php endif;?>
			<nav class="nav-block">

				<a class = "navigation-link" id="home-button" href="index.php"> HOME </a>
				<a class = "navigation-link" id="about-button" href="#"> ABOUT </a>

				<a class = "navigation-link" id="service-button" href="#"> SERVICE </a>
				<a class = "navigation-link" id="contact-button" href="#"> CONTACT </a>

				<a href="#" id="menu" class="icon">&#9776;</a>
			</nav>
        	<h1>I am Open Sans 120px</h1>  	
		</div>	
	</header>	
	<div class="site-body">
		<h2>I am open sans extra bold 48px</h2>		
		<h3>Please follow all directions, make fonts the same size, respect margins and spacing.

	
</h3>
	<div class="pictures">
		<img src="images/city.jpg" class="photo" id="photo1">
		<img src="images/girl.jpg" class="photo" id="photo2">
		<img src="images/street.jpg" class="photo" id="photo3">

	</div>
	</div>
</body>		
