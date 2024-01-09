<!doctype html>

<?php 
    session_Start();
?>

<html>
    
    <head>

        <meta charset="utf-8">
        <title>Log in</title>

        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet">

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js"></script>

        <style>
         <?php include 'baseCamp.css'; 
         ?>
         
        </style>

    </head>

    <body id="logInSignInBackground">
    
        <div class="content">
        
  <a href="index.php">

            
                <button id="goBack">
                
                    < 
            
                </button>

            </a>

            <br><br><br><br><br><br>

            <center>
            
                <p id="text">Logga in</p>
        
            </center>

            <center>
            
                <form action="getLoginInfo.php" method="post">
                
                    <label for="email" id="labelForEmail">Email:</label>
                
                    <br>
                
                    <input type="text" id="email" name="email" pattern="[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-z]{2,}$" title="DU använder ogiltiga tecken, använd endast a-z,A-Z,0-9" required>

                
                    <br>

                    <?php
			            echo $_SESSION["login_VALID"] ?? "";
	                ?>
    
                    <label for="password" id="labelForPassword">Lösenord:</label>
            
                    <br>
    
                    <input type="password" id="password" name="password" title="Invalid">
   
                    <br><br><br>
                
                    <button id="submit" type="submit">
                    
                        Logga in
                
                    </button>
                
                    <br><br>
                
                    <a href="#" id="forgotPassword">
                    
                        Glömt lösenord
                
                    </a>
            
                </form>
        
            </center>
    
        </div>

    </body>

</html>