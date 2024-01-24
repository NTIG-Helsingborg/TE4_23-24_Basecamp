<!-- This is the admin page. Josef will be the only one with the access to this page and when a user sign ups on the platform, Josef can choose whether to accept the newly signed up user as a teacher or not
If the user becomes a teacher they can then add courses and chapters inside of those courses-->

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


<body>

    <!-- This is used to have 2 buttons, first is to showcase all of the signed up users and the second is to showcase all of the accepted users-->
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
    <!-- This container is used to showcase all of the users that have signed up and are awaiting for Josef to Accept/Remove as a teacher-->
    <div class="container" id="box-container">
        <!-- Första gruppen med boxar -->
        <div class="row box-group" id="group1">
            <?php
            //Call the function to get all users from the database
            $usersResult = $db->get_users();
            // Loop through all users
            while ($user = $usersResult->fetchArray(SQLITE3_ASSOC)) {
                // Now $user is an associative array representing a single user
                echo '
                    <div class="col-12 my-2 ansökningbox flex-column flex-md-row">
                        <div class = "info">
                            <h2>' . htmlspecialchars($user['username']) . '</h2>
                            <a href = "mailto:"' . htmlspecialchars($user['username']) . '>' . htmlspecialchars($user['username']) . '</a>
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
    <!-- This container is used to showcase all of active schools on the platform-->
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
    <!-- Input used to add a new school to the platform-->

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
</body>

</html>