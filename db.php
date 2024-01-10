<?php
    if(!class_exists("SQLite3"))
        exit("This PHP environment does not have SQLite3 support builtn in.");
    // DB properties.
    // define("db_HOST", "localhost");
    // define("db_USER", "admin2@t301006");
    // define("db_PASS", "Wassim_?321");
    // define("db_NAME", "te4ntihbg_se");


     class DBClass extends SQLite3
     {
        function __construct()
        {
            unlink("database.db");
            $this->open("database.db");

            $this->exec("
                CREATE TABLE IF NOT EXISTS `users` (
                    `id` TEXT PRIMARY KEY NOT NULL,
                    `username` TEXT NOT NULL,
                    `password_hash` TEXT NOT NULL,
                    `school` TEXT,
                    `admin` TINYINT NOT NULL
                )
            ");

            $this->exec("
                CREATE TABLE IF NOT EXISTS `classes` (
                    `id` TEXT PRIMARY KEY NOT NULL,
                    `owner` TEXT NOT NULL,
                    `class_data` TEXT,
                    `school` TEXT NOT NULL,
                    FOREIGN KEY(`owner`) REFERENCES `users`(`id`)
                )
            ");
        }

        function run_query(string $query)
        {
            $stmt = $this->prepare($query);
            $stmt->bindValue();
        }
     }

     $db = new DBClass();
     if (!$db)
     {
        echo $db->lastErrorMsg();
     }
     else
     {
        echo "Opened database.db successfully!";
     }
?>