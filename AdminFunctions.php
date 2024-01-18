<?php
header("Content-Type: application/json");
include "db.php";



/*
    
    $postData = file_get_contents("php://input");      får datan i body skickad från en request
    $jsonData = json_decode($postData, true);          Gör om sträng till ett json object
    echo json_encode($response);                       eftersom header är satt till json blir det som echoas respons, json_encode($var) ger en sträng som kan decodas på frontend


*/


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $postData = file_get_contents("php://input");       //Tar emot post datan som skickas i en assioativ array
    //print_r($postData);
    $jsonData = json_decode($postData, true);
    $isChecked = isset($jsonData["isChecked"]) && $jsonData["isChecked"];
    // Prepare the response data as an associative array
    $response = [
        "isChecked" => $isChecked,   
    ];
    //använd också en session variabel som kontrollerar så att det är en admin som gör requesten
    if(isset($isChecked) && ! isset($jsonData["deleteVar"])){
        $statement = "SELECT id FROM users WHERE username = :username";
        $argUsername = new QueryArgsStruct(":username", $jsonData["username"], SQLITE3_TEXT);
        $res = $db->run_query($statement, $argUsername);
        $resId = $res->fetchArray(SQLITE3_ASSOC);

        $statement = "UPDATE users SET admin = :admin WHERE id = :id";
        $argAdmin = new QueryArgsStruct(":admin", $isChecked ? 1 : 0 , SQLITE3_INTEGER);
        $argId = new QueryArgsStruct(":id", $resId["id"], SQLITE3_TEXT);
        $res = $db->run_query($statement, $argAdmin, $argId);
    }

    if(isset($jsonData["deleteVar"])){
        $statementDeleteUsers = "DELETE FROM users WHERE id = :id";
        $statementDeleteClasses = "DELETE FROM classes WHERE owner = :owner";
        $statementGetIdFromClass = "SELECT id FROM classes WHERE owner = :owner";
        $statementGetIdFromClass = "SELECT id FROM classes WHERE owner = :owner";

        foreach($_SESSION["Userlist"] as $key => $value){
            if($value["admin"] == 0){
                
            }
        }
    }
    // Convert the associative array to JSON and echo it,
    // Vilket skickar tillbaka responsen till client sidan
    echo json_encode($response);
}
?>