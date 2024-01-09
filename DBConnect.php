<?php
    // DB properties.
     define("db_HOST", "mysql334.loopia.se");
     define("db_USER", "admin2@t301006");
     define("db_PASS", "Wassim_?321");
     define("db_NAME", "te4ntihbg_se");

    // Create connection.
    $conn = new mysqli(db_HOST, db_USER, db_PASS, db_NAME);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }else{
        echo("passed");
    }
?>