<?php
    include "db.php";
    header("Content-Type: application/json");
    if($_SERVER["REQUEST_METHOD"] === "POST"){
        $postData = file_get_contents("php://input");       //Tar emot post datan som skickas i en assioativ array
        $jsonData = json_decode($postData, true);
        $m = 0;
        $resultClasses = $db->query("SELECT * FROM classes");
        $_SESSION["classDispla"] = array();        
        while($res2 = $resultClasses->fetchArray(SQLITE3_ASSOC)){
            $_SESSION["classDispla"][$m]["id"] = $res2["id"];
            $_SESSION["classDispla"][$m]["owner"] = $res2["owner"];
            $_SESSION["classDispla"][$m]["name"] = $res2["name"];
            $_SESSION["classDispla"][$m]["data"] = $res2["data"];
            $_SESSION["classDispla"][$m]["school"] = $res2["school"];
            $m++;
        }
        $resultDef = $db->query("SELECT id FROM schools WHERE name = 'NTI-Helsingborg'");
        $def = $resultDef->fetchArray(SQLITE3_ASSOC);
        $_SESSION["SchoolDefault"] = $def["id"];
        echo "hey there";
    }
?>