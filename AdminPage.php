<?php
include("backend/db.php");
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
$statementSchoolFromId = "SELECT name as school FROM schools WHERE id = :id";
$res = $db->query("SELECT * FROM users WHERE username != 'Admin'");
$_SESSION["Userlist"] = array();
$i = 0;
//$res->fetchArray(SQLITE3_ASSOC) srkiver nästa row från statement och repeterar false om inga fler arrays finns
//kod som loopar genom varje rad executad query
while ($row = $res->fetchArray(SQLITE3_ASSOC)) {
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
$row = $db->get_users()->fetchArray();
echo json_encode($row);
?>
<html>

<head>
    <meta charset="utf-8">
    <title>Admin page</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css"
        integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="CSS/AdminPage.css">
</head>



<!-- ---------------------html------------------------- -->

<body>
    <?php
    echo "<pre>";
    //print_r($_SESSION["loginData"]);
    echo "</pre>";

    //echo $db->get_users();
    ?>
    <div class="container" id="box-container">
        <!-- Första gruppen med boxar -->
        <div class="row box-group" id="group1">
            <!--Alla ansökningsboxar-->
            <div class="col-12 ansökningbox">
                <h2>Magnus Andersson</h2>
            </div>
        </div>
    </div>



    <button> Alla ansökningar </button>
    <button> Accepterade </button>

    <hr>

    <div class="count-window">
        <?php
        $count = count($_SESSION["Userlist"]);
        echo $count;
        ?>
    </div>



    <div>
        <table class="users">
            <tr>
                <th>
                    Skolor
                </th>
            <tr>
                <?php
                foreach ($_SESSION["schoolDisplay"] as $key => $value) {
                    echo '
                        <tr>
                            <td>' . $value["name"] . '</td>
                        </tr>
                        ';
                }
                ?>
        </table>
    </div>
    <div>
        <input type="text" id="newSchool"></input>
        <button type="button" onclick="addSchool()">Lägg tillskola</button>
        <div>


            <script>
                function postStatus(id) {
                    var isCheckedId = document.getElementById(id);
                    fetch("backend/AdminFunctions.php", {
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

                function deleteFetch() {
                    var deleteVar = "Delete";
                    fetch("backend/AdminFunctions.php", {
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
                function addSchool() {
                    var addschool = "addschool";
                    var school = document.getElementById("newSchool").value;
                    fetch("backend/AdminFunctions.php", {
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
                        .then(() => {
                            location.reload();
                        });

                }
            </script>

            <script src="https://code.jquery.com/jquery-3.7.1.min.js"
                integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
                integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
                crossorigin="anonymous"></script>

</body>

</html>

<?php
/*
foreach ($_SESSION["Userlist"] as $key => $value) {
    $checkVar = $value["admin"] ? "checked" : "";
    echo '
            <tr>
                <td><input type = "checkbox" id = ' . $value["username"] . ' onclick = "postStatus(this.id)" ' . $checkVar . '></td>
                <td>' . $value["username"] . '</td>
                <td>' . $value["name"] . '</td>
                <td>' . $value["school"] . '</td>
                <td></td>
            </tr>
            ';
}*/
/*
        <tr>
            <td style = "text-align:center"><input type = "checkbox"></td>
            <td>hey@gmail.com</td>
        </tr>
*/
?>