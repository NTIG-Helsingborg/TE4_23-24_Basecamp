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
    //function to prevent user from changing his cookie
    function Cookiecontroll(){
        //user deletes cookie
        if(isset($_SESSION["await"]) && !isset($_COOKIE["await"])){
            setcookie("await", $_SESSION["await"], time() + 60*60*24);
        }
        //closes an revisits page
        if(!isset($_SESSION["await"]) && isset($_COOKIE["await"])){
            $_SESSION["await"] = $_COOKIE["await"];
        }
        //control if user has both cookie and session var
        if(!isset($_SESSION["await"]) && !isset($_COOKIE["await"])){
            return;
        }
        //Incase the user changes a cookie
        if($_SESSION["await"] != $_COOKIE["await"]){
            setcookie("await", $_SESSION["await"], time() + 60*60*24);
        }
    }

    if(isset($_POST["signIn"]) && $_SERVER["REQUEST_METHOD"] === "POST"){
        $email = $_POST["email"];
        $password = $_POST["password"];
        $hash = password_hash($password, PASSWORD_DEFAULT);
        $query = "SELECT id FROM users WHERE username = :username";
        $arg = new QueryArgsStruct(":username", $email, SQLITE3_TEXT);
        $res = $db->run_query($query, $arg);
        $result = $res->fetchArray(SQLITE3_ASSOC);

        if(!$result){
            //maybe change to a hash
            $identifier = bin2hex(random_bytes(20));
            setcookie("await", $identifier, time()+60*60*24*2);
            $_SESSION["await"] = $identifier;
            $query = "INSERT INTO users(id, username, password_hash, school, admin) VALUES(:id, :username, :password_hash, :school, :admin)";
            $argId = new QueryArgsStruct(":id", $identifier, SQLITE3_TEXT);
            $argUsername = new QueryArgsStruct(":username", $email, SQLITE3_TEXT);
            $argPassword = new QueryArgsStruct(":password_hash", $hash, SQLITE3_TEXT);
            $argSchool = new QueryArgsStruct(":school", "1", SQLITE3_TEXT);
            $argAdmin = new QueryArgsStruct(":admin", 0, SQLITE3_TEXT);
            $resCreate = $db->run_query($query, $argId, $argUsername, $argPassword, $argSchool, $argAdmin);
        }
    }
    Cookiecontroll();
  
 

?>

</body>

</html>