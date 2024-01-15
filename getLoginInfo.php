<!DOCTYPE html>
<?php
    include('db.php'); //Create connection to databse.
    session_Start();

    if($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["Login"])){
        $username = $_POST["emailL"];
        $password = $_POST["passwordL"];
        //$statement = "SELECT username FROM use";
    }
?>
<html>

<body>
    <br />
    sdf
    

</body>

</html>