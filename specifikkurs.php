<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<title>Kurser</title>
	<link rel="stylesheet" href="./kurser.css">
    <link rel="stylesheet" href="./specifikkurs.css">
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

<body>
	<header>
		<?php include 'Components/Navbar.php'; ?>
	</header>
    <div id="sidebar" class="sideBar">
        <h1>Related <button data-bs-toggle="collapse" data-bs-target="#demo" class="showlinks" aria-expanded="false">&#11167;</button></h1> 
        <div id="demo" class="collapse" aria-labelledby="demo">
            <ul>
                <li><a href="#">Länk 1</a></li>
                <li><a href="#">Länk 1</a></li>
                <li><a href="#">Länk 1</a></li>
                <li><a href="#">Länk 1</a></li>
                <li><a href="#">Länk 1</a></li>
            </ul>
        </div>
        <h1>Andra skolor <button data-bs-toggle="collapse" data-bs-target="#demo1" class="showlinks" aria-expanded="false">&#11167;</button></h1> 
        <div id="demo1" class="collapse" aria-labelledby="demo1">
            <ul>
                <li><a href="#">Länk 1</a></li>
                <li><a href="#">Länk 1</a></li>
                <li><a href="#">Länk 1</a></li>
                <li><a href="#">Länk 1</a></li>
                <li><a href="#">Länk 1</a></li>
            </ul>
        </div>
    </div>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
		integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
		crossorigin="anonymous"></script>
        <!--ändra ikon för sidebarknapparna när man klickar på dom:-->
        <script>
        $(document).ready(function(){
            $('.collapse').on('shown.bs.collapse', function(){
                $(this).prev().find('.showlinks').html('&#11165;');
            }).on('hidden.bs.collapse', function(){
                $(this).prev().find('.showlinks').html('&#11167;');
            });
        });
    </script>
</body>

</html>