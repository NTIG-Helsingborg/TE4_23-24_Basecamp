<!DOCTYPE html>
<?php
include('db.php'); //Create connection to databse.
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
?>
<html>

<body>
    <p>Du kommer bli omdirigerad inom kort.</p>
<?php 

/*

query example
$query = "INSERT INTO schools (id, name) VALUES (:id, :name)";
$args = new QueryArgsStruct(':id', 'school_id_value', SQLITE3_TEXT);
$args2 = new QueryArgsStruct(':name', 'school_name_value', SQLITE3_TEXT);
$db->run_query($query, $args, $args2);

 */
/*
    `id` TEXT PRIMARY KEY NOT NULL,
    `username` TEXT NOT NULL,
    `password_hash` TEXT NOT NULL,
    `school` TEXT NOT NULL REFERENCES `schools`(`id`),
    `admin` TINYINT NOT NULL
*/
    function Cookiecontroll(){
        if(isset($_SESSION["await"]) && !isset($_COOKIE["await"])){
            setcookie("await", $_SESSION["await"], time() + 60*60*24);
        }
        if(!isset($_SESSION["await"]) && isset($_COOKIE["await"])){
            $_SESSION["await"] = $_COOKIE["await"];
        }
        if(!isset($_SESSION["await"]) && !isset($_COOKIE["await"])){
            return;
        }
        if($_SESSION["await"] != $_COOKIE["await"]){
            $_SESSION["await"] = $_COOKIE["await"];
        }
    }

    if(isset($_POST["signIn"]) && $_SERVER["REQUEST_METHOD"] === "POST"){
        $email = $_POST["email"];
        $password = $_POST["password"];
        $query = "SELECT id FROM users WHERE username = :username";
        $arg = new QueryArgsStruct(":username", $email, SQLITE3_TEXT);
        $res = $db->run_query($query, $arg);
        $result = $res->fetchArray(SQLITE3_ASSOC);
        if(!$result){
            //maybe change to a hash
            $identifier = uniqid();
            setcookie("await", $identifier, time()+60*60*24*2);
            $_SESSION["await"] = $identifier;
        }
    }

    Cookiecontroll();
  
 

?>

</body>

</html>