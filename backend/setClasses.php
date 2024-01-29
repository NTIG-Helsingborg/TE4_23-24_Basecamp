<?php
require_once("../db.php");
while ($res2 = $resultClasses3->fetchArray(SQLITE3_ASSOC)) {
    $_SESSION["classDispla"][$m]["id"] = $res2["id"];
    $_SESSION["classDispla"][$m]["owner"] = $res2["owner"];
    $_SESSION["classDispla"][$m]["name"] = $res2["name"];
    $_SESSION["classDispla"][$m]["data"] = $res2["data"];
    $_SESSION["classDispla"][$m]["school"] = $res2["school"];
    $m++;
}
