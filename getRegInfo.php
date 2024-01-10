<!DOCTYPE html>
<?php
include('db.php'); //Create connection to databse.
session_Start();
?>
<html>

<body>
    <p>Du kommer bli omdirigerad inom kort.</p>

    <?php


    /* Instantly encryptes the user inputed password */
    $cryptedPass = password_hash($_POST['password'], PASSWORD_DEFAULT); // Is this sql injectable? //REAL ESCAPE might crash this.
    
    /* WiP*/
    $user_PRIVELAGE = 0; // this is a bit worrying. might be "hackable".
    
    /*  "prepare" the code so it does not run UNTIL we have sanitized it    */
    $sql = $conn->prepare("INSERT INTO UsersLogin (Email,Password, Privileges) 
                                VALUES(?,?,?)");

    $input_EMAIL = strtolower($_POST["email"]);
    $sql->bind_param("ssi", $input_EMAIL, $cryptedPass, $user_PRIVELAGE);


    try {
        if ($sql->execute()) {
            $sql->execute();

            /* Alert message script if account IS created*/
            $_SESSION["account_CREATION"] = '<script>alert("Kontot är skapat!")</script>';
            echo ("checkpoint3");

            $conn->close();
            header('Location: SignIn.php');
        } elseif (!$sql->execute()) {
            /*  If there is a duplicate */
            throw new Exception("Denna mailen används redan!");
        }
    } catch (Exception $e) {
        $_SESSION["account_CREATION"] = $e->getMessage();
        echo ("checkpoint3");
        $conn->close();
        header('Location: SignIn.php');
    }

    ?>

</body>

</html>