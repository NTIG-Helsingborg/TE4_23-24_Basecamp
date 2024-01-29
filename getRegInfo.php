<!DOCTYPE html>
<?php
include('db.php'); //Create connection to databse.
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
//Destroys the $_COOKIE["await"] lock, unfortunatly this lock can be broken
if(isset($_COOKIE["await"])){
    $statement = "SELECT admin FROM users WHERE id = :id";
    $argCookieId = new QueryArgsStruct(":id", $_COOKIE["await"], SQLITE3_TEXT);
    $resA = $db->run_query($statement, $argCookieId);
    $resAdmin = $resA->fetchArray(SQLITE3_ASSOC);
    if(isset($resAdmin)){
        if($resAdmin["admin"] == 1){
            unset($_SESSION["await"]);
            setcookie("await", "", time() - 1000000000);
            $_SESSION["onPage"] = false;
            unset($_COOKIE["await"]);
        }
    }    
}



?>

<html>

<body>
   
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
    `mail` TEXT NOT NULL,
    `password_hash` TEXT NOT NULL,
    `school` TEXT NOT NULL REFERENCES `schools`(`id`),
    `admin` TINYINT NOT NULL
*/
    //function to prevent user from changing his cookie, however both session variables and cookies can be removed at the same time :/
    function Cookiecontroll(){
        //user deletes cookie
        if(isset($_SESSION["await"]) && !isset($_COOKIE["await"])){
            setcookie("await", $_SESSION["await"], time() + 60*60*24);
            header("Refresh:1");
        }
        //closes an revisits page
        if(!isset($_SESSION["await"]) && isset($_COOKIE["await"]) && $_SESSION["onPage"]){
            $_SESSION["await"] = $_COOKIE["await"];
        }
        //Incase the user changes a cookie, we want to check if the variables are set before comparison
        if(isset($_SESSION["await"]) && isset($_COOKIE["await"]) && !$_SESSION["onPage"]){
            if($_SESSION["await"] != $_COOKIE["await"]){
                setcookie("await", $_SESSION["await"], time() + 60*60*24, "/");
            }
        }
        //incase a user tries to set his own await cookie without having
        if(!isset($_SESSION["await"]) && isset($_COOKIE["await"]) && !$_SESSION["onPage"]){
            setcookie("await", $_SESSION["await"], time() -100000000000, "/");
        }
    }

    //CHECK FOR SIGN IN FORM SUBMISSION
    if(isset($_POST["signIn"]) && $_SERVER["REQUEST_METHOD"] === "POST"){
        $email = $_POST["email"];
        $password = $_POST["password"];
        $name = $_POST["name"];
        $school = $_POST["school"];

        $statementSchool = "SELECT id FROM schools WHERE name = :name";
        $argSchool =  new QueryArgsStruct(":name", $school, SQLITE3_TEXT);
        $resSchoolId = $db->run_query($statementSchool, $argSchool);
        $schoolId = $resSchoolId->fetchArray(SQLITE3_ASSOC);

        $hash = password_hash($password, PASSWORD_DEFAULT);
        $query = "SELECT id FROM users WHERE mail = :mail";
        $arg = new QueryArgsStruct(":mail", $email, SQLITE3_TEXT);
        $res = $db->run_query($query, $arg);
        $result = $res->fetchArray(SQLITE3_ASSOC);
        if(!$result){
            //maybe change to a hash
            $identifier = bin2hex(random_bytes(20));
            setcookie("await", $identifier, time()+60*60*24*2);
            $_SESSION["await"] = $identifier;
            $query = "INSERT INTO users(id, mail, name, password_hash, school, admin) VALUES(:id, :mail, :name, :password_hash, :school, :admin)";
            $argId = new QueryArgsStruct(":id", $identifier, SQLITE3_TEXT);
            $argmail = new QueryArgsStruct(":mail", $email, SQLITE3_TEXT);
            $argName = new QueryArgsStruct(":name", $name, SQLITE3_TEXT);
            $argPassword = new QueryArgsStruct(":password_hash", $hash, SQLITE3_TEXT);
            $argSchool = new QueryArgsStruct(":school", $schoolId["id"], SQLITE3_TEXT);
            $argAdmin = new QueryArgsStruct(":admin", 0, SQLITE3_TEXT);
            $resCreate = $db->run_query($query, $argId, $argmail, $argName, $argPassword, $argSchool, $argAdmin);
        }
    }
    Cookiecontroll();
  
 

?>

</body>

</html>