<!doctype html>

<?php
//include ('db.php'); //Create connection to databse.
session_Start();
?>

<html>

<head>
	<meta charset="utf-8">
	<title>BaseCamp</title>

	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
		integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">


	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="./InteractionAndBehaviour.js"></script>

	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css"
		integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Questrial&family=Raleway&display=swap" rel="stylesheet">

	<style>
		<?php include '../CSS/baseCamp.css';
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

<body>

	<!-- Introduction part of the main page. Contains background image -->
	<header>
		<?php include '../Components/Navbar.php'; ?>


		<div class="position-relative" id="headerSection">
			<img src="../Images/Skolverket.jpg" alt="...">
			<div class="w-75 d-flex flex-column flex-xxl-row justify-content-around align-items-center position-absolute top-50 start-50 translate-middle"
				id="headerText">
				<h1 class="p-2 p-md-5">BaseCamp</h1>

				<h2 class="w-25 d-none d-xxl-block">Study like you do in school with help of your own teachers</h2>
			</div>
	</header>


	<!-- <div style="background-color: #030D26; width:100%; height:25px;"></div> Doesnt have any purpouse but i keep just in case -->

	<!-- ------------------General information about BaseCamp-------------- -->
	<section class="mt-5 mb-5 aboutBaseCamp">
		<div class="row justify-content-around">
			<div class="col-sm-12 col-lg-5">
				<div class="mx-auto w-75">
					<img src="../Images/coding.jpg" class="img-fluid animated fadeInLeft img-thumbnail" alt="Image of Code">
				</div>
			</div>
			<div class="col-sm-12 col-lg-7 info">
				<div class="mx-auto w-75 ">
					<h2 class="text-center mt-5">What is BaseCamp</h2>
					<p class=" text-center mt-5 mb-5">Lorem ipsum dolor sit amet, consectetur adipiscing elit,
						sed do
						eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
						exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
						reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint
						occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
					</p>
				</div>	
			</div>
		</div>
	</section>


	<!-- -----------------Blue text that tells about what BaseCam is for from diferent perspektives----------------- -->
	<section class="WhatBaseCampFor mt-4">

		<div class="row">
			<div class="col-sm-12 col-md-6">
				<img src="" alt="">
				<h2 class="mr-auto text-center mt-3 w-75 m-auto">What does BaseCamp mean fot the students</h2>
				<p class="mr-auto text-center mt-3 w-75 m-auto">Lorem ipsum dolor sit amet, consectetur adipiscing elit,
					sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
					Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat.
					Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
					pariatur.
					Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id
					est laborum.</p>
			</div>

			<div class="vertical d-none d-md-block"></div>

			<div class="col-sm-12 col-md-6">
				<img src="" alt="">
				<h2 class="mr-auto text-center mt-3 w-75 m-auto">What does BaseCamp mean fot the teachers</h2>
				<p class="mr-auto text-center mt-3 w-75 m-auto">Lorem ipsum dolor sit amet, consectetur adipiscing elit,
					sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
					Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat.
					Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
					pariatur.
					Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id
					est laborum.</p>
			</div>
		</div>

	</section>

	<!-- --------------------------Even more information------------------------- -->

	<section class="mt-5 pb-5  aboutBaseCamp">
		<div class="row justify-content-around">

			<div class=" text-center pb-5 col-sm-12 col-lg-5 info">
				<h2 class=" mt-5">What is BaseCamp</h2>
				<p class="  mt-5 w-75 m-auto pb-5">Lorem ipsum dolor sit amet, consectetur adipiscing elit,
					sed do
					eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
					exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
					reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint
					occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
				<button type="button" class="btn btn-primary btn-lg">Learn more</button>

			</div>
		</div>
	</section>


	</div>

	</section>
	<?php include '../Components/Footer.php'; ?>

	<!--- Script Source Files -->
	<script src="js/jquery-3.3.1.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
		integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
		crossorigin="anonymous"></script>


	<!--- End of Script Source Files -->

</body>

</html>