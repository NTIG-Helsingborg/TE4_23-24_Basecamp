<!-- NAVBAR -->
<nav class="navbar navbar-expand-md fixed-top navbarBG" id="myNavbar">
    <a class="navbar-brand nav-link" href="index.php">
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


            
            <!-- <div class="dropdown">
                <a class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown" data-bs-hover="dropdown" id="navbardrop"
                    aria-expanded="false">
                    Kurser
                </a>
                <ul class="dropdown-menu dropCourses">
                    <li>
                        <div class="dropdown1 dropend">
                        <a href="#">Digital Marketing ▾</a>
                            <ul>
                                <li><a href="#">SEO</a></li>
                                <li><a href="#">Social Media</a></li>
                            </ul>
                        </div>
                    </li>
                    <li><a class="dropdown-item" href="#">Skola 2</a></li>

                    <li><a class="dropdown-item" href="#">Skola 3</a></li>
                    <li><a class="dropdown-item" href="#">Skola 4</a></li>

                    <li><a class="dropdown-item" href="#">Skola 5</a></li>
                    <li><a class="dropdown-item" href="#">Skola 6</a></li>
                </ul>
            </div> -->

            <nav class="menu ">
            <ul>
             
                <li>
                    <a href="#">Skolor▾</a>
                    <ul>
                    <li><a href="#">Skola 1 ▾</a>
                            <ul>
                                <li><a href="#">Hej</a></li>
                                <li><a href="#">På dig</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Skola 2 ▾</a>
                            <ul>
                                <li><a href="#">Hej</a></li>
                                <li><a href="#">På dig</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Skola 3 ▾</a>
                            <ul>
                                <li><a href="#">Hej</a></li>
                                <li><a href="#">På dig</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
               
            </ul>
        </nav>

            <a class="nav-link" href="Login.php"><span class="fas fa-sign-in-alt"></span> Login</a>

            <!-- AVBAR SIGN UP and LOG IN -->
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
        <ul class="navbar-nav ms-auto navbarright">
            <a class="nav-link signUp" href="SignIn.php"><span class="fas fa-user"></span> Sign Up</a>
        </ul>
    </div>
</nav>