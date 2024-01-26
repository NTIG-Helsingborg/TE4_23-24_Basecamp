<?php
include "videotest.php"
    ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>YouTube Video Upload</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <!-- jQuery and Popper.js -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css"
        integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Custom CSS files -->
    <link rel="stylesheet" href="baseCamp.css">
    <link rel="stylesheet" href="CSS/specifikkurs.css">
    <link rel="stylesheet" href="CSS/formtest.css">
    <link rel="stylesheet" href="./CSS/navbarbackground.css">
</head>

<body>
    <!-- Header Section -->
    <header>
        <?php include 'Components/Navbar.php'; ?>
    </header>

    <div class="formDiv">
        <form action="" method="post">
            <label for="title">Title:</label> 
            <input type="text" id="title" name="name" required>

            <label for="description">Content:</label> 
            <textarea id="description" name="data" rows="4" required></textarea>

            <label for="url">YouTube URL:</label> 
            <input type="text" id="url" name="url"> 

            <input type="submit" name="submit" value="Submit" class="submit">
        </form>
    </div>
</body>

</html>