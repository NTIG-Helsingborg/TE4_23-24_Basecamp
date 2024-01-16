<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<title>Kurser</title>
	<link rel="stylesheet" href="./kurser.css">
    <link rel="stylesheet" href="./specifikkurs.css">
    <link rel="stylesheet" href="./CSS/navbarbackground.css">
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
        <div class="title">Hej</div>
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
        <h1>Skolor <button data-bs-toggle="collapse" data-bs-target="#demo1" class="showlinks" aria-expanded="false">&#11167;</button></h1> 
        <div id="demo1" class="collapse" aria-labelledby="demo1">
            <ul>
                <li><a href="#">Länk 1</a></li>
                <li><a href="#">Länk 1</a></li>
                <li><a href="#">Länk 1</a></li>
                <li><a href="#">Länk 1</a></li>
                <li><a href="#">Länk 1</a></li>
                <li><a href="#">Länk 1</a></li>
                <li><a href="#">Länk 1</a></li>
                <li><a href="#">Länk 1</a></li>
                <li><a href="#">Länk 1</a></li>
                <li><a href="#">Länk 1</a></li>
                <li><a href="#">Länk 1</a></li>
                <li><a href="#">Länk 1</a></li>
                <li><a href="#">Länk 1</a></li>
                <li><a href="#">Länk 1</a></li>
                <li><a href="#">Länk 1</a></li>
                <li><a href="#">Länk 1</a></li>
                <li><a href="#">Länk 1</a></li>
                <li><a href="#">Länk 1</a></li>
                <li><a href="#">Länk 1</a></li>
                <li><a href="#">Länk 1</a></li>
                <li><a href="#">Länk 1</a></li>
                <li><a href="#">Länk 1</a></li>
                <li><a href="#">Länk 1</a></li>
                <li><a href="#">Länk 1</a></li>
                <li><a href="#">Länk 1</a></li>
                <li><a href="#">Länk 1</a></li>
                <li><a href="#">Länk 1</a></li>
                <li><a href="#">Länk 1</a></li>
                <li><a href="#">Länk 1</a></li>
                <li><a href="#">Länk 1</a></li>
                <li><a href="#">Länk 1</a></li>
                <li><a href="#">Länk 1</a></li>
                <li><a href="#">Länk 2</a></li>
            </ul>
        </div>
    </div>
    <button onClick="ShowSideBar()" class="showsideBtn" id="showsidebtnID">></button>
    <div class="content">
    <div class="contentTop">
        <div class="contentLeft">
        <iframe class="contentVideo" src="https://www.youtube.com/embed/LurwQGUorM4?si=H51qBgXCri6J_IAh">
            Your browser does not support the video tag.
        </iframe>
        </div>
        <div class="contentRight">
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus et ante non metus vehicula pulvinar in sit amet ipsumLorem ipsum dolor sit amet</p>
        </div>
    </div>
    <div class="contentBottom">
        <h1>Lorem Ipsum</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed in augue vestibulum, maximus nisl vel, porta ex. Ut dapibus nisi est, eu semper nisl venenatis eget. Duis consectetur lorem pretium gravida lobortis. Vestibulum non egestas nulla. Phasellus iaculis elementum porttitor. Fusce maximus, erat quis finibus aliquet, nisi dolor dictum lacus, sit amet molestie est diam eget risus. Pellentesque blandit, massa a bibendum blandit, metus arcu scelerisque purus, ac fringilla felis dui in nulla. Praesent ullamcorper ante orci, sed volutpat quam tristique ac. Etiam ultrices eu nunc non malesuada. Suspendisse pellentesque molestie justo a porta. Suspendisse potenti. Suspendisse non urna id tellus gravida ultrices. Phasellus in consequat eros.</p>
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
        <script>
            $(document).ready(function () {
                $(window).scroll(function () {
                    if ($(this).scrollTop() > 1) {
                        $('#sidebar').addClass('sidebarScroll');
                    } else {
                        $('#sidebar').removeClass('sidebarScroll');
                    }
                });
            });
        </script>
        <script>
            function ShowSideBar(){
                document.getElementById("sidebar").classList.toggle("showsidebar");
                document.getElementById("showsidebtnID").classList.toggle("showsideBtnToggle");
            }
        </script>
</body>

</html>