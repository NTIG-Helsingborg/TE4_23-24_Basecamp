<?php
    include("db.php");
    if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }
    $res = $db->query("SELECT * FROM users WHERE username != 'Admin'");
    $_SESSION["Userlist"] = array();
    $i = 0;
    //$res->fetchArray(SQLITE3_ASSOC) srkiver nästa row från statement och repeterar false om inga fler arrays finns
    //kod som loopar genom varje rad executad query
    while($row = $res->fetchArray(SQLITE3_ASSOC)){
        $_SESSION["Userlist"][$i]["id"] = $row["id"];
        $_SESSION["Userlist"][$i]["username"] = $row["username"];
        $_SESSION["Userlist"][$i]["password"] = $row["password_hash"];
        $_SESSION["Userlist"][$i]["school"] = $row["school"];
        $_SESSION["Userlist"][$i]["admin"] = $row["admin"];
        $i++;
    }
    //nicely formatted array
    echo '<pre>'; 
    print_r($_SESSION["Userlist"]); 
    echo '</pre>';
?>
<html>
<script>
    function postStatus(id){
        var isChecked = document.getElementById(id).checked;
        //console.log(isChecked);
        fetch("AdminFunctions.php", {
            method: "POST",
            headers: {
                "Content-Type": "application/json"
            },
            body: JSON.stringify({
                isChecked: isChecked,
                username: "hey@gmail.com"
            })
        })
        .then(response => response.text())
        .then(data => {
            console.log(data);
        })
    }
        </script>
    <body>
            <ul> 
                <li>
                    <input type = "checkbox" id = "hey@gmail.com" onclick = "postStatus(this.id)"></input>
                </li>
            </ul>
            <div id ="result"></div>
            <?php
                foreach($_SESSION["Userlist"] as $key => $value){
                    echo '
                    <li>
                        <input type = "checkbox" id = ' . $key . ' onclick = "postStatus(this.id)"></input>
                    </li>
                    ';
                }
            ?>
    </body> 
</html>