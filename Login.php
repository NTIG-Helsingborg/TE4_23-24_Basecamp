<!doctype html>

<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
include("getLoginInfo.php");
?>

<html>

<head>

    <meta charset="utf-8">
    <title>Log in</title>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">


    <style>
        <?php
        include 'CSS/baseCamp.css';
        include 'CSS/LogSignIn.css';
        ?>
    </style>

</head>

<body id="logInSignInBackground">
    <div class="container position-relative " style="height:100vh;">
        <div class="position-absolute start-0 backButton">
            <a href="javascript:history.back()">
                <button id="goBack">
                    < </button>
            </a>
        </div>

        <div style="height:800px;"
            class="position-absolute top-50 start-50 translate-middle d-flex flex-column align-items-center ">
            <?php
                /*
                if(isset($_SESSION["loginStatus"])){
                    echo $_SESSION["loginStatus"];
                }
                */
            ?>
            
            <?php
                if(!isset($_SESSION["loginStatus"])){
                    echo '
                    <p id="text">Logga in</p>
                    <form action="" method="post" class="d-flex flex-column align-items-center">
    
                        <label for="emailL" id="labelForEmail">Email:</label>
    
                        <input type="text" id="email" name="emailL" pattern="[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-z]{2,}$"
                            title="DU använder ogiltiga tecken, använd endast a-z,A-Z,0-9" required class="mt-3">
    
                        <?php
                        
                    
                        //echo $_SESSION["login_VALID"];
                        ?>
    
                        <label for="password" id="labelForPassword">Lösenord:</label>
    
    
                        <input type="password" id="password" name="passwordL" title="Invalid" class="mt-3">
    
    
                        <button id="submit" type="submit" name ="login" class="mt-5">
    
                            Logga in
    
                        </button>
    
    
                        <a href="#" id="forgotPassword" class="my-5">
    
                            Glömt lösenord
    
                        </a>
    
                    </form>
                    ';
                }
                else{
                    echo ' 
                    <p id="text">Inloggad</p>
                    <form action="" method="post" class="d-flex flex-column align-items-center">
                    ';
                    echo '<div style = "color: #f0d397; margin: 20px; font-size: 20px;">'. $_SESSION["loginStatus"] . '</div>';
                    echo '
                    <button id="submit" type="submit" name ="loggaut" class="mt-5">
                    Logga ut
                    </button>
                    ';
                    echo "</form>";
                }
            ?>
        </div>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>

</body>

</html>