<!DOCTYPE html>
<?php
    include('db.php'); //Create connection to databse.
    if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }
    //INLOGGNING
    if($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["login"])){
        $mail = $_POST["emailL"];
        $password = $_POST["passwordL"];
        $passwordStatement = "SELECT password_hash FROM users WHERE id = :id";
        $adminCheck = $db->query("SELECT admin, id FROM users WHERE mail = 'Admin@Admin.Admin'");
        $adminCheckRes = $adminCheck->fetchArray(SQLITE3_ASSOC);


        $findIdStatement = "SELECT * FROM users WHERE mail = :mail";
        $argmail = new QueryArgsStruct(":mail", $mail, SQLITE3_TEXT);
        $resId = $db->run_query($findIdStatement, $argmail);
        $userId = $resId->fetchArray(SQLITE3_ASSOC);
        
        $passwordMatch;
        $hash;
        //Om hash hittas i databasen.
        if($userId !== false){
            $argId = new QueryArgsStruct(":id", $userId["id"], SQLITE3_TEXT);
            $resPassword = $db->run_query($passwordStatement, $argId);
            $hash = $resPassword->fetchArray(SQLITE3_ASSOC);
            $passwordMatch = password_verify($password, $hash["password_hash"]);
        }

        //OM hash matchar lösenord och användare hittas
        if($passwordMatch && $userId["id"] !== false){
            //OM user har samma admin status till admin
            if($userId["admin"] == $adminCheckRes["admin"] && $adminCheckRes["id"] == $userId["id"] ){
                $_SESSION["loginStatus"] = "Admin";
                $_SESSION["loginData"] = ["id" => $userId["id"], "mail" =>$userId["mail"]];
                header("Location: /AdminPage.php");
                exit();
            }
            else{
                $_SESSION["loginStatus"] = "Teacher";
                $_SESSION["loginData"] = ["id" =>$userId["id"], "mail" => $userId["mail"]];
                header("Refresh: 0");
            }
        }
    }
    if($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["loggaut"])){
        unset($_SESSION["loginStatus"]);
        header("Refresh: 0");
    }
?>
