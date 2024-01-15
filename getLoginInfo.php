<!DOCTYPE html>
<?php
    include('db.php'); //Create connection to databse.
    if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }

    if($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["login"])){
        $username = $_POST["emailL"];
        $password = $_POST["passwordL"];
        $findIdStatement = "SELECT id FROM users WHERE username = :username";
        $passwordStatement = "SELECT password_hash FROM users WHERE id = :id";
        $adminCheck = $db->query("SELECT id FROM users WHERE username = 'Admin'");
        $adminCheckRes = $adminCheck->fetchArray(SQLITE3_ASSOC);

        $argUsername = new QueryArgsStruct(":username", $username, SQLITE3_TEXT);
        $resId = $db->run_query($findIdStatement, $argUsername);
        $userId = $resId->fetchArray(SQLITE3_ASSOC);
        
        $passwordMatch;
        $hash;
        if($userId !== false){
            $argId = new QueryArgsStruct(":id", $userId["id"], SQLITE3_TEXT);
            $resPassword = $db->run_query($passwordStatement, $argId);
            $hash = $resPassword->fetchArray(SQLITE3_ASSOC);
        }
     
        $passwordMatch = password_verify($password, $hash["password_hash"]);
        var_dump($passwordMatch);
        if($passwordMatch && $userId["id"] !== false){
            if($userId["id"] == $adminCheckRes["id"]){
                $_SESSION["loginStatus"] = "Admin";
            }
            else{
                $_SESSION["loginStatus"] = "Teacher";
            }
        }


    }
?>
