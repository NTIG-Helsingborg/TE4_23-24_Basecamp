<!DOCTYPE html>
<?php
include('db.php'); //Create connection to databse.
session_Start();
?>
<html>

<body>
    <p>Du kommer bli omdirigerad inom kort.</p>
<?php 





/*
    `id` TEXT PRIMARY KEY NOT NULL,
    `username` TEXT NOT NULL,
    `password_hash` TEXT NOT NULL,
    `school` TEXT NOT NULL REFERENCES `schools`(`id`),
    `admin` TINYINT NOT NULL
*/

//skapar QueryArgsStruct object och skickar vidare dem till run_query 
$query = "INSERT INTO schools (id, name) VALUES (:id, :name)";
$args = new QueryArgsStruct(':id', 'school_id_value', SQLITE3_TEXT);
$args2 = new QueryArgsStruct(':name', 'school_name_value', SQLITE3_TEXT);

$db->run_query($query, $args, $args2);

//$db->run_query("SELECT * FROM `users` WHERE name=:name", $asdf);

?>

</body>

</html>