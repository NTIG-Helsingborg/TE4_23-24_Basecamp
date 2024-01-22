<?php
    include "videotest.php"
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>YouTube Video Upload</title>
</head>
<body>
    <form action="videotest.php" method="post">
        <label for="title">Name:</label> <br> 
        <input type="text" id="title" name="name" required><br>

        <label for="description">Data:</label> <br>
        <textarea id="description" name="data" rows="4" required></textarea><br>

        <label for="url">YouTube URL:</label> <br> 
        <input type="text" id="url" name="url" ><br> <br> 

        <input type="submit" name = "submit" value="Submit">
    </form>
</body>
</html>
