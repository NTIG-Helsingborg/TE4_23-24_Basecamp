<!DOCTYPE html>
<html>
<head>
        <meta charset="utf-8">
        <title>Kurser</title>
        <link rel="stylesheet" href="./kurser.css">
        <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<link rel="stylesheet" href="bootstrap-4.1.3-dist/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	<script src="./InteractionAndBehaviour.js"></script>

	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css"
		integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<style>
		<?php include 'baseCamp.css';
		$_SESSION["account_CREATION"] = "";
		?>
	</style>
</head>
<body>
        <nav class="navbar navbar-expand-md navbarBG navbar-dark fixed-top">
		<a class="navbar-brand" href="#">
			<img src="Images/Base_Camp_3.0.png" alt="Logo" style="width: 90px;">
                        BaseCamp
		</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="collapsibleNavbar">
			<ul class="navbar-nav navbarmiddle">

				<!-- Navbar Dropdown -->
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
						Kurser
					</a>
					<div class="dropdown-menu">
						<ul>
							<li><a class="dropdown-item" href="#">Programmering 1</a></li>
							<li><a class="dropdown-item" href="#">Programmering 2</a></li>

							<li><a class="dropdown-item" href="#">Webbutveckling 1</a></li>
							<li><a class="dropdown-item" href="#">Webbutveckling 2</a></li>

							<li><a class="dropdown-item" href="#">Webbserver utveckling 1</a></li>
							<li><a class="dropdown-item" href="#">Programmering 1</a></li>

						</ul>
					</div>
				</li>

					<!-- NAVBAR SIGN UP and LOG IN -->
				<?php
				if (isset($_SESSION["userNAME"])) {
					echo '
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">',
						$_SESSION["userNAME"], '
					</a>
				
					<div class="dropdown-menu">
						<a class="dropdown-item" href="#">Profil</a>
						<a class="dropdown-item" href="#">Inställningar</a>
						<a class="dropdown-item" href="logout.php">Logga ut</a>
					</div>
			  	</li>
				';
				} else {
					include('signupAndLogin.php');
				}
				?>

			</ul>
		</div>
	</nav>
        
        
</body>
</html>
