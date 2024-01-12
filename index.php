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

	<script>
		$(document).ready(function () {
			$(window).scroll(function () {
				if ($(this).scrollTop() > 50) {
					$('#myNavbar').removeClass('navbarBG').addClass('navbarBGscroll');
				} else {
					$('#myNavbar').removeClass('navbarBGscroll').addClass('navbarBG');
				}
			});
		});
	</script>

</head>

<body id="indexBackground">
	<header>
		<?php include 'Components/Navbar.php'; ?>


		<div class="position-relative" id="headerSection">
			<img src="Images/Skolverket.jpg" alt="...">
			<div style="height:200px;"
				class="d-flex flex-column flex-xxl-row justify-content-between align-items-center position-absolute top-50 start-50 translate-middle"
				id="headerText">
				<h2 class="p-2 p-md-5">BaseCamp</h2>

				<h3 class="w-50 w-xxl-100">Study like you do in school with help of your own teachers</h3>
			</div>


	</header>
	<div style="background-color: #030D26; width:100%; height:25px;"></div>

	<!-- ROW 1 GEMENSKAP -->
	<section id="aboutBaseCamp" class="mt-5">
		<div class="row justify-content-around" id="">
			<div class="col-lg-4">
				<img src="Images/coding.jpg" class="img-thumbnail" alt="Code" width="500px"
					class="img-fluid animated fadeInLeft">
			</div>
			<div class="col-lg-5" id="info">
				<h2 class="text-center mt-3">What is BaseCamp</h2>
				<p class="mr-auto text-center mt-3 w-75 m-auto">Lorem ipsum dolor sit amet, consectetur adipiscing elit,
					sed do
					eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
					exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
					reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint
					occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
			</div>
		</div>
	</section>
	<!-- ROW 2 KURSER -->
	<!--<section class="mt-5">
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

		ROW 3 SKOLVERKET 
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
		</section>-->

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