
<!DOCTYPE html>
<?php 
include ('db.php'); //Create connection to databse.
session_Start();
?>
<html>
  <body>
        <a href="index.php">homesdasdasd</a>
            <br />
<?php
    $sanitized_Input_EMAIL = filter_var(strtolower($_POST["email"]), FILTER_SANITIZE_EMAIL); // "strtolower($_POST["Email"])" for simplicity.
    //$sanitized_Input_PASSWORD = filter_var($_POST["password"], FILTER_SANITIZE_PASSWORDFILTER_SANITIZE_FULL_SPECIAL_CHARS); // THIS MIGHT BE COMPLETELY WRONG.


    /*Selects/verifies email and sanitizes.*/
    $input_EMAIL = "SELECT Email, Password, userID 
                    FROM UsersLogin 
                    WHERE Email=?";
    /* This prepares the code meaning it wont run until "...->execute();" has been run*/
    $verify_EMAIL = $conn->prepare($input_EMAIL);
    /* The "?" gets replaced with "$sanitized_Input_email" which has been sanitized and binded as a "s" (string)*/
    $verify_EMAIL->bind_param("s", $sanitized_Input_EMAIL);
    echo("checkpoint1");
    /* This script will only run IF the requested account does EXIST */
    try{
       if($verify_EMAIL->execute()){
            $verify_EMAIL->execute();
            $data = $verify_EMAIL->get_result();
            $user = $data->fetch_assoc();
                echo("checkpoint2");

            /* "!empty($user)" may not be needed. "password_verify(....)" is a php function that can verify user input with the encrypted user password*/
            if(!empty($user) && password_verify($_POST["password"], $user["Password"])){ //DONT have "password_verify($_POST["Password"]" in finished product, THIS IS FOR TESTING ONLY! MUST SANITIZE THE PASSWORD INPUT.
                /* This is displayed when you are logged in */
                $_SESSION["userID"] = $user["userID"];                                    
                $_SESSION["userNAME"] = $user["Email"]; //Change email to name when its fixed.

                $conn->close();
                header('Location: ./index.php');
            }
            else{
                /* Error means 1.User does not exist  OR 2. Password/Username/Email Is wrong*/
                throw new Exception("email or password is not valid.");
            }
       }
    }catch(Exception $e){
        /* Saves error message to "$_SESSION[...]" then echoes it to login.php*/
        $_SESSION["login_VALID"] = $e->getMessage();

        $conn->close();
        header('Location: ./Login.php');
    }
?>

  </body>
</html>