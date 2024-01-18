<!-- NAVBAR -->
<nav class="navbar navbar-expand-md fixed-top" id="myNavbar">
    <a class="navbar-brand nav-link" href="index.php">
        <img src="Images/Base_Camp_3.0.png" alt="Logo" style="width: 90px;">
        BaseCamp
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar" aria-controls="collapsibleNavbar" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="collapsibleNavbar">
        <ul class="navbar-nav navbarmiddle"> 
            <!-- Navbar Dropdown - Lärare -->
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" id="navbardrop" aria-expanded="false">
                    Lärare
                </a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="Login.php">Login</a></li>
                    <li><a class="dropdown-item" href="SignUp.php">Signup</a></li>
                </ul>
            </li>

            <!-- Navbar Dropdown - Kurser -->
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" id="navbardrop" aria-expanded="false">
                    Kurser
                </a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">Skola 1</a></li>
                    <li><a class="dropdown-item" href="#">Skola 2</a></li>
                    <li><a class="dropdown-item" href="#">Skola 3</a></li>
                    <li><a class="dropdown-item" href="#">Skola 4</a></li>
                    <li><a class="dropdown-item" href="#">Skola 5</a></li>
                    <li><a class="dropdown-item" href="#">Skola 6</a></li>
                </ul>
            </li>
        </ul>

        <!-- Your existing code... -->

        <ul class="navbar-nav ms-auto navbarright">
            <?php
            if (isset($_SESSION["userNAME"])) {
                echo '
                    <!-- Navbar Dropdown - User -->
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
            }
            ?>
        </ul>
    </div>
</nav>
