<?php
    include("db.php");
    if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }
    $statementSchoolFromId = "SELECT name as school FROM schools WHERE id = :id";
    $res = $db->query("SELECT * FROM users WHERE username != 'Admin'");
    $_SESSION["Userlist"] = array();
    $i = 0;
    //$res->fetchArray(SQLITE3_ASSOC) srkiver nästa row från statement och repeterar false om inga fler arrays finns
    //kod som loopar genom varje rad executad query
    while($row = $res->fetchArray(SQLITE3_ASSOC)){
        $resSchoolName = $db->run_query($statementSchoolFromId, new QueryArgsStruct(":id", $row["school"], SQLITE3_TEXT));
        $schoolName = $resSchoolName->fetchArray(SQLITE3_ASSOC);
        $_SESSION["Userlist"][$i]["id"] = $row["id"];
        $_SESSION["Userlist"][$i]["username"] = $row["username"];
        $_SESSION["Userlist"][$i]["name"] = $row["name"];
        $_SESSION["Userlist"][$i]["password"] = $row["password_hash"];
        $_SESSION["Userlist"][$i]["school"] = $schoolName["school"];
        $_SESSION["Userlist"][$i]["admin"] = $row["admin"];
        $i++;
    }

    //nicely formatted array
    /*
    echo '<pre>'; 
    print_r($_SESSION["Userlist"]); 
    echo '</pre>';
    */
?>
<html>
    <head>
    <link rel="stylesheet" href="CSS/AdminPage.css">
    </head>
    <script>
    function postStatus(id){
        var isCheckedId = document.getElementById(id);
        fetch("AdminFunctions.php", {
            method: "POST",
            headers: {
                "Content-Type": "application/json"
            },
            body: JSON.stringify({
                isChecked: isCheckedId.checked,
                username: id
            })
        })
        .then(response => response.text())
        .then(data => {
            console.log(data);
        })
    }

    function deleteFetch(){
        var deleteVar = "Delete";
        fetch("AdminFunctions.php", {
            method: "POST",
            headers: {
                "Content-Type": "application/json"
            },
            body: JSON.stringify({
                deleteVar: deleteVar,
            })
        })
        .then(response => response.text())
        .then(data => {
            console.log(data);
        })
    }
    function addSchool(){
        var addschool = "addschool";
        var school = document.getElementById("newSchool").value;
        fetch("AdminFunctions.php", {
            method: "POST",
            headers: {
                "Content-Type": "application/json"
            },
            body: JSON.stringify({
                addschool: "addschool",
                school: school
            })
        })
        .then(response => response.text())
        .then(() =>{
            location.reload();
        });
        
    }
    </script>
    <body>
        <?php
            echo "<pre>";
            print_r($_SESSION["loginData"]);
            echo "</pre>"
        ?>
        <div style = "margin:30px;">
            <table class = "users">
                <tr>
                    <th>
                        Adminstatus   
                    </th>
                    <th>
                        Username 
                    </th>
                    <th>
                        Namn
                    </th>
                    <th>
                        Skolor
                    </th>
                    <th style = "background-color: red; cursor: pointer;" onclick = "deleteFetch()">
                        Delete unchecked
                    </th>
                    
                </tr>
                <?php
                    foreach($_SESSION["Userlist"] as $key => $value){
                        $checkVar = $value["admin"] ? "checked" : "";
                        echo '
                        <tr>
                            <td><input type = "checkbox" id = '.$value["username"].' onclick = "postStatus(this.id)" '.$checkVar.'></td>
                            <td>'. $value["username"] . '</td>
                            <td>'. $value["name"] . '</td>
                            <td>'. $value["school"] . '</td>
                            <td></td>
                        </tr>
                        ';
                    }
                    /*
                            <tr>
                                <td style = "text-align:center"><input type = "checkbox"></td>
                                <td>hey@gmail.com</td>
                            </tr>
                    */
                ?>
            </table>
        </div>

        <div>
            <table class = "users">
                <tr>
                    <th>
                        Skolor
                    </th>
                <tr>
                  <?php
                    foreach($_SESSION["schoolDisplay"] as $key => $value){
                        echo '
                        <tr>
                            <td>'. $value["name"] . '</td>
                        </tr>
                        ';
                    }
                  ?>
            </table>
        </div>
        <div style = "width: 300px; margin-left: auto; margin-right: auto;">
            <input type ="text" id = "newSchool"></input>
            <button type = "button" onclick = "addSchool()">Lägg tillskola</button>
        <div>
    </body> 
</html>