<?php
  include "../db.php";
  header("Content-Type: application/json");
  /*
  för att få det första värdet efter vald rad, funkar inte här
  $query = "SELECT name FROM schools WHERE name > :name ORDER BY name ASC LIMIT 1";
  */
  if($_SERVER["REQUEST_METHOD"] === "POST"){
      $postData = file_get_contents("php://input");       //Tar emot post datan som skickas i en assioativ array
      $jsonData = json_decode($postData, true);           //json sträng till ett object
      if(isset($jsonData["class"])){                      //isset kollar ifall en variabel är satt
        $statement = "DELETE FROM chapters WHERE id = :id";
        $argId = new QueryArgsStruct(":id", $jsonData["class"], SQLITE3_TEXT);
        $result = $db->run_query($statement, $argId);
        echo "hey";
      }
      //Kollar om "chapterArr" skickades med i body från fetchen och sätter en session variabel med kolumner från vald klass som används för editchapter.php
      if(isset($jsonData["chapterArr"])){
        $_SESSION["selectedChapter"] = ["id" => $jsonData["id"], "class" => $jsonData["class"], "data" => $jsonData["data"], "url" => $jsonData["url"], "name" => $jsonData["name"]];
        echo "<pre>";       //för snygg ut utskrift av vad en array innehåller för värden
        print_r($_SESSION["selectedChapter"]);
        echo "</pre>";
      }
      //F
      if(isset($jsonData["classArgs"])){
        //$dataParsed = $jsonData["classArgs"];
        $_SESSION["selectedClass"] = ["id" => $jsonData["classArgs"]["id"], "name" => $jsonData["classArgs"]["name"]];
        echo "<pre>";
        print_r($jsonData["classArgs"]);
        echo "</pre>";
      }
  }
?>
