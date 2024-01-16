<?php
header("Content-Type: application/json");
include "db.php";


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    //Tar emot post datan som skickas i en assioativ array
    $postData = file_get_contents("php://input");
    //Gör om det till ett json object
    $jsonData = json_decode($postData, true);
    // Check if the checkbox is checked
    // För värdet för isChecked som skickades med i bodyn för fetchen
    $isChecked = isset($jsonData["isChecked"]) && $jsonData["isChecked"];
    // Prepare the response data as an associative array
    $response = [
        "isChecked" => $isChecked,   
    ];
    //använd också en session variabel som kontrollerar så att det är en admin
    //som gör requesten
    if(isset($isChecked)){
        $statement = "SELECT id FROM users WHERE username = :username";
        $argUsername = new QueryArgsStruct(":username", $jsonData["username"], SQLITE3_TEXT);
        $res = $db->run_query($statement, $argUsername);
        $resId = $res->fetchArray(SQLITE3_ASSOC);

        $statement = "UPDATE users SET admin = :admin WHERE id = :id";
        $argAdmin = new QueryArgsStruct(":admin", $isChecked ? 1 : 0 , SQLITE3_INTEGER);
        $argId = new QueryArgsStruct(":id", $resId["id"], SQLITE3_TEXT);
        $res = $db->run_query($statement, $argAdmin, $argId);
    }
    // Convert the associative array to JSON and echo it,
    // Vilket skickar tillbaka responsen till client sidan
    echo json_encode($response);

}
?>