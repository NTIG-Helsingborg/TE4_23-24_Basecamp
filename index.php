<!doctype html>

<?php
//include ('db.php'); //Create connection to databse.
session_Start();
?>

<html>

<head>
	<meta charset="utf-8">
	<title>Index</title>

	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
		integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">


	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
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

<body id="indexBackground">
	<header>
		<?php include 'Components/Navbar.php'; ?>


		<!-- AUTOMATIC VIDEO BACKGROUND -->
		<!--<div class="video-background">
			<div class="video-wrap">
				<div id="video">
					<video id="bgvid" autoplay loop muted playsinline>
						<source src="Videos/stars.mp4" type="video/mp4">
					</video>
				</div>
			</div>
		</div>-->
		<div class="position-relative">
			<img src="Images/Skolverket.jpg" class="w-100 h-50" alt="...">
			<div style="height:125px;"
				class="d-flex justify-content-between align-items-center position-absolute top-50 start-50 translate-middle">
				<div class="bg-primary w-50 h-100 rounded-2 d-flex justify-content-center align-items-center">
					<h1>BaseCamp</h1>
				</div>
				<h3 class="w-25">Study like you do in school with help of your own teachers</h3>
			</div>

		</div>


		<!-- TEXT INFRONT OF VIDEO BACKGROUND -->
		<!--<div class="caption text-center video-text">
			<h1>BaseCamp</h1>
			<h3>Lorem ipsum dolor sit amet, consectetur adipiscing elit
				eiusmod tempor incididunt ut labore et dolore magna aliqua. Duis aute irure dolor in reprehenderit in
				voluptate
			</h3>
		</div>-->

	</header>

	<div class="container mt-5">
		<!-- ROW 1 GEMENSKAP -->
		<section>
			<div class="row" id="">
				<div class="col-sm-6">
					<img src="Images/coding.jpg" class="img-thumbnail" alt="Code" width="200px"
						class="img-fluid animated fadeInLeft">
				</div>
				<div class="col-sm-6">
					<h4 class="text-center">Gemenskap</h4>
					<hr class="bg-light mx-auto" style="width: 100px; height: 2px">
					<p class="mr-auto">Lorem ipsum eiusmod tempor incididunt ut labore et dolore magna aliqua. Duis aute
						irure dolor in reprehenderit in voluptate orem ipsum eiusmod tempor incididunt ut labore et
						dolore magna aliqua</p>
				</div>
			</div>
		</section>
		<!-- ROW 2 KURSER -->
		<section class="mt-5">
			<div class="row" id="">
				<div class="col-sm-6 order-2 order-sm-1">
					<h4 class="text-center">Kurser</h4>
					<hr class="bg-light mx-auto" style="width: 100px; height: 2px">
					<p class="mr-auto">Lorem ipsum eiusmod tempor incididunt ut labore et dolore magna aliqua. Duis aute
						irure dolor in reprehenderit in voluptate orem ipsum eiusmod tempor incididunt ut labore et
						dolore magna aliqua</p>
				</div>
				<div class="col-sm-6 order-1 order-sm-2 text-right">
					<img src="Images/coding.jpg" class="img-thumbnail" alt="Code" width="200px">
				</div>
			</div>
		</section>

		<!-- ROW 3 SKOLVERKET -->
		<section class="mt-5">
			<div class="row" id="">
				<div class="col-sm-6">
					<img src="Images/coding.jpg" class="img-thumbnail" alt="Code" width="200px">
				</div>
				<div class="col-sm-6">
					<h4 class="text-center">Skolverket</h4>
					<hr class="bg-light mx-auto" style="width: 100px; height: 2px">
					<p class="mr-auto">Lorem ipsum eiusmod tempor incididunt ut labore et dolore magna aliqua. Duis aute
						irure dolor in reprehenderit in voluptate orem ipsum eiusmod tempor incididunt ut labore et
						dolore magna aliqua</p>
				</div>
			</div>
		</section>
	</div>

	<div class="col-sm-12" style="height:75px;"></div> <!-- this makes space (better than br) -->

	<section class="secbackground">
		<div class="col-sm-12" style="height:75px;"></div> <!-- this makes space (better than br) -->
		<div class="row">
			<div class="col-sm-12">
				<h4 class="text-center">Populära Kurser</h4>
				<hr class="bg-light mx-auto" style="width: 100px; height: 2px">
			</div>
		</div>

		<div class="col-sm-12" style="height:50px;"></div> <!-- this makes space (better than br) -->

		<div class="row">
			<!-- RECOMMENDED COURSE 1 -->

			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-4">
				<div class="card mx-auto text-center">
					<img class="card-img-top" src="Images/coding.jpg" alt="Card image" style="width:100%">
					<div class="card-body">
						<h4 class="card-title">Programmering 1</h4>
						<p class="card-text">Programmering 1 is blah blah llorem lipsum whatever whateverwhatever</p>
						<a href="#" class="btn btn-primary">Visit the course</a>
					</div>
				</div>
			</div>
			<!-- RECOMMENDED COURSE 2 -->
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-4">
				<div class="card mx-auto text-center">
					<img class="card-img-top" src="Images/coding.jpg" alt="Card image" style="width:100%">
					<div class="card-body">
						<h4 class="card-title">Webbutveckling 1</h4>
						<p class="card-text">Webbutveckling 1 is blah blah lorem lipsum whatever whateverwhatever</p>
						<a href="#" class="btn btn-primary">Visit the course</a>
					</div>
				</div>
			</div>
			<!-- RECOMMENDED COURSE 3 -->
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-4">
				<div class="card mx-auto text-center">
					<img class="card-img-top" src="Images/coding.jpg" alt="Card image" style="width:100%">
					<div class="card-body">
						<h4 class="card-title">Webbutveckling 2</h4>
						<p class="card-text">Webbutveckling 2 is blah blah lorem lipsum whatever whateverwhatever</p>
						<a href="#" class="btn btn-primary">Visit the course</a>
					</div>
				</div>
			</div>
		</div>

		<div class="col-sm-12 space" style="height:100px;"></div> <!-- this makes space (better than br) -->
	</section>
	<?php include 'Components/Footer.php'; ?>

	<!--- Script Source Files -->
	<script src="js/jquery-3.3.1.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
		integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
		crossorigin="anonymous"></script>

	<!--- End of Script Source Files -->

</body>

</html>