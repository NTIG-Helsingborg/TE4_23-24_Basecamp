<?php
    include "db.php";
    if($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["submit"])){
        $idUser = $db->query("SELECT id FROM users WHERE username ='Admin'");
        $class = $db->query("SELECT id FROM classes WHERE username ='Admin'");


        $statement = "INSERT INTO chapters(id, owner, class, data, url, name) VALUES(:id, :owner, :class, :data, :url, :name)";
        $arg = new QueryArgsStruct(":id", bin2hex(random_bytes(20)), SQLITE3_TEXT);        //OM DET HADE VARIT int SQLITE3_INTEGER
        $arg = new QueryArgsStruct(":", bin2hex(random_bytes(20)), SQLITE3_TEXT);
        $arg = new QueryArgsStruct(":id", bin2hex(random_bytes(20)), SQLITE3_TEXT);
        $arg = new QueryArgsStruct(":id", bin2hex(random_bytes(20)), SQLITE3_TEXT);
        $arg = new QueryArgsStruct(":id", bin2hex(random_bytes(20)), SQLITE3_TEXT);
        $res = $db->run_query($statement, $arg);
        
    }
?>