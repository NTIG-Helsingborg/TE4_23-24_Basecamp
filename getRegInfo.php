<!DOCTYPE html>
<?php
include('db.php'); //Create connection to databse.
session_Start();
?>
<html>

<body>
    <p>Du kommer bli omdirigerad inom kort.</p>
<?php 


$asdf = new QueryArgsStruct(":name", "david", SQLITE3_TEXT);

$db->run_query("SELECT * FROM `users` WHERE name=:name", $asdf);

?>

</body>

</html>