<!DOCTYPE html>
<?php
    include('db.php'); //Create connection to databse.
    session_Start();

    if($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["Login"])){
        $username = $_POST["emailL"];
        $password = $_POST["passwordL"];
        $statement = "SELECT id FROM users WHERE username = :username";
        $passwordStatement = "SELECT password_hash FROM users WHERE id = :id";
        $adminCheck = $db->exec("SELECT id FROM users WHERE username = 'Admin'");
    }
?>
<html>

<body>
    <br />
    sdf
    

</body>

</html>