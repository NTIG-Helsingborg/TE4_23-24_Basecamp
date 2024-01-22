<?php
  include "db.php";
  header("Content-Type: application/json");
  if($_SERVER["REQUEST_METHOD"] === "POST"){
      $postData = file_get_contents("php://input");       //Tar emot post datan som skickas i en assioativ array
      $jsonData = json_decode($postData, true);
      if(isset($jsonData["class"])){
        $statement = "DELETE FROM chapters WHERE id = :id";
        $argId = new QueryArgsStruct(":id", $jsonData["class"], SQLITE3_TEXT);
        $result = $db->run_query($statement, $argId);
        echo "hey";
      }
      if(isset($jsonData["chapterArr"])){
        $_SESSION["selectedChapter"] = ["id" => $jsonData["id"], "class" => $jsonData["class"], "data" => $jsonData["data"], "url" => $jsonData["url"], "name" => $jsonData["name"]];
        echo "<pre>";
        print_r($_SESSION["selectedChapter"]);
        echo "</pre>";
      }
  }
?>
