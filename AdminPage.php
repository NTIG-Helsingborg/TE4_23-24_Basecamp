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
?>
<html>

<head>
    <link rel="stylesheet" href="CSS/AdminPage.css">
</head>



<!-- ---------------------html------------------------- -->

<body>
    <div class="container" id="box-container">
        <!-- Första gruppen med boxar -->
        <div class="row box-group" id="group1">
            <?php
            $usersResult = $db->get_users();

            while ($user = $usersResult->fetchArray(SQLITE3_ASSOC)) {
                // Now $user is an associative array representing a single user
                echo '
                    <div class="col-12 my-2 ansökningbox flex-column flex-md-row">
                    <div class = "info">
                        <h2>' . htmlspecialchars($user['username']) . '</h2>
                        <a href = "mailto:"' . htmlspecialchars($user['email']) . '>' . htmlspecialchars($user['email']) . '</a>
                    </div>
                    <div class = "action">
                        <button class = "btn btn-primary">Acceptera</button>
                        <button class = "btn btn-danger">Neka</button>
                    
                    </div>
                        
                    </div>';
            }
            ?>

        </div>
    </div>


    <div class="wraper">
        <div class="row">
            <div class="col">

                <button> Alla ansökningar </button>

                <button> Accepterade </button>
                <div class="count-window">
                    <?php
                    $count = count($_SESSION["Userlist"]);
                    echo $count;
                    ?>
                </div>

            </div>


            <div class="col">

                <h2>Admin</h2>
                <img src="" alt="">

            </div>

        </div>
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

            <body>
                <?php
                echo "<pre>";
                print_r($_SESSION["loginData"]);
                echo "</pre>"
                    ?>
                <div style="margin:30px;">
                    <table class="users">
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
                            <th style="background-color: red; cursor: pointer;" onclick="deleteFetch()">
                                Delete unchecked
                            </th>

                        </tr>
                        <?php
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
                <div style="width: 300px; margin-left: auto; margin-right: auto;">
                    <input type="text" id="newSchool"></input>
                    <button type="button" onclick="addSchool()">Lägg tillskola</button>
                    <div>
            </body>

</html>