<?php
require_once("../db.php");
if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["submit"])) {
    // Assuming you have a form with fields like title, description, and url
    $title = $_POST["name"];
    $description = $_POST["data"];
    $url = $_POST["url"];

    // Retrieve values from the classes table
    print_r($_SESSION["selectedClass"]);
    // Prepare and execute the statement
    $stmt = $db->prepare("INSERT INTO chapters(id, owner, class, data, url, name) VALUES(:id, :owner, :class, :data, :url, :name)");

    // Assuming you generate a unique ID for the chapter, replace this with your logic
    $chapterId = bin2hex(random_bytes(20));
    // Bind parameters
    $stmt->bindParam(':id', $chapterId, SQLITE3_TEXT);
    $stmt->bindParam(':owner', $_SESSION["loginData"]["id"], SQLITE3_TEXT);
    $stmt->bindParam(':class', $_SESSION["selectedClass"]["id"], SQLITE3_TEXT);
    $stmt->bindParam(':data', $description, SQLITE3_TEXT);
    $stmt->bindParam(':url', $url, SQLITE3_TEXT);
    $stmt->bindParam(':name', $title, SQLITE3_TEXT);

    // Execute the statement
    $res = $stmt->execute();
    // Optionally, you can check if the execution was successful
    if ($res) {
        echo "Chapter added successfully!";
    } else {
        echo "Error adding chapter.";
    }
}
