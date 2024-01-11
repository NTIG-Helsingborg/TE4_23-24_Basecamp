<?php
    if(!class_exists("SQLite3"))
        exit("This PHP environment does not have SQLite3 support builtn in.");
    // DB properties.
    // define("db_HOST", "localhost");
    // define("db_USER", "admin2@t301006");
    // define("db_PASS", "Wassim_?321");
    // define("db_NAME", "te4ntihbg_se");

    class QueryArgsStruct {
        public $name;
        public $value;
        public $type;
    }

     class DBClass extends SQLite3
     {
        function __construct()
        {
            unlink("database.db");
            $this->open("database.db");

            $this->exec("
                CREATE TABLE IF NOT EXISTS `schools` (
                    `id` TEXT PRIMARY KEY NOT NULL,
                    `name` TEXT NOT NULL
                )
            "); 

            $this->exec("
                CREATE TABLE IF NOT EXISTS `users` (
                    `id` TEXT PRIMARY KEY NOT NULL,
                    `username` TEXT NOT NULL,
                    `password_hash` TEXT NOT NULL,
                    `school` TEXT NOT NULL REFERENCES `schools`(`id`),
                    `admin` TINYINT NOT NULL
                )
            ");

            $this->exec("
                CREATE TABLE IF NOT EXISTS `classes` (
                    `id` TEXT PRIMARY KEY NOT NULL,
                    `owner` TEXT NOT NULL REFERENCES `users`(`id`),
                    `name` TEXT NOT NULL,
                    `data` TEXT,
                    `school` TEXT NOT NULL REFERENCES `schools`(`id`)
                )
            ");

            $this->exec("
                CREATE TABLE IF NOT EXISTS `chapters` (
                    `id` TEXT PRIMARY KEY NOT NULL,
                    `class` TEXT NOT NULL REFERENCES `classes`(`id`),
                    `data` TEXT,
                    `name` TEXT NOT NULL
                )
            ");
        }

        function run_query(string $query, QueryArgsStruct ...$args)
        {
            $stmt = $this->prepare($query);

            foreach($args as $arg)
            {
                $stmt->bindValue($arg->name, $arg->value, $arg->type);
            }
            $stmt->execute();
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