<!-- NAVBAR -->
<nav class="navbar navbar-expand-md fixed-top navbarBG" id="myNavbar">
    <a class="navbar-brand" href="index.php">
        <img src="Images/Base_Camp_3.0.png" alt="Logo" style="width: 90px;">
        BaseCamp
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar"
        aria-controls="collapsibleNavbar" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <!--<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
        <span class="navbar-toggler-icon"></span>
    </button>-->
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
        <ul class="navbar-nav navbarmiddle">
            <!-- Navbar Dropdown -->

            <div class="dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" id="navbardrop"
                    aria-expanded="false">
                    Kurser
                </a>

                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">Programmering 1</a></li>
                    <li><a class="dropdown-item" href="#">Programmering 2</a></li>

                    <li><a class="dropdown-item" href="#">Webbutveckling 1</a></li>
                    <li><a class="dropdown-item" href="#">Webbutveckling 2</a></li>

                    <li><a class="dropdown-item" href="#">Webbserver utveckling 1</a></li>
                    <li><a class="dropdown-item" href="#">Programmering 1</a></li>
                </ul>
            </div>

            <a class="nav-link" href="Login.php"><span class="fas fa-sign-in-alt"></span> Login</a>

            <!-- NAVBAR SIGN UP and LOG IN -->
            <!--<?php
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
            ?>-->
        </ul>
        <ul class="navbar-nav ms-auto navbarright">
            <a class="nav-link signUp" href="SignIn.php"><span class="fas fa-user"></span> Sign Up</a>
        </ul>
    </div>
</nav>