<?php
    include "db.php";
    header("Content-Type: application/json");
    if($_SERVER["REQUEST_METHOD"] === "POST"){
        $postData = file_get_contents("php://input");       //Tar emot post datan som skickas i en assioativ array
        $jsonData = json_decode($postData, true);
        if(isset($jsonData["rubrik"]) && isset($jsonData["description"])){
            $statement = "INSERT INTO classes(id, owner, name, data, school) VALUES(:id, :owner, :name, :data, :school)";
            $id = bin2hex(random_bytes(20));
            $resUid = $db->query("SELECT id, school FROM users WHERE username = 'Admin'");
            $uid = $resUid->fetchArray(SQLITE3_ASSOC);

            $argId = new QueryArgsStruct(":id", $id, SQLITE3_TEXT);
            $argOwner = new QueryArgsStruct(":owner", $uid["id"], SQLITE3_TEXT);
            $argName = new QueryArgsStruct(":name", $jsonData["rubrik"], SQLITE3_TEXT);
            $argData = new QueryArgsStruct(":data", $jsonData["description"], SQLITE3_TEXT);
            $argSchool = new QueryArgsStruct(":school", $uid["school"], SQLITE3_TEXT);

            $result = $db->run_query($statement, $argId, $argOwner, $argName, $argData, $argSchool);
            echo "hey hey";
        }
    }
?>