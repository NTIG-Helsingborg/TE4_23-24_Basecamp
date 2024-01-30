<!--Sida för att redigera kapitlen, redirectas till denna sidan när man skapat ett kapitel och ska då lägga till innehållet på kapitlet-->
<?php
    include "../backend/db.php";
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Kurser</title>
    <link rel="stylesheet" href="../CSS/kurser.css">
    <link rel="stylesheet" href="../CSS/specifikkurs.css">
    <link rel="stylesheet" href="../CSS/navbarbackground.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="./InteractionAndBehaviour.js"></script>

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css"
        integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <style>
        <?php include '../CSS/baseCamp.css';
        $_SESSION["account_CREATION"] = "";
        ?>
    </style>
</head>

<body>
    <!--Importera komponenten navbar-->
    <header>
        <?php include '../Components/Navbar.php'; ?>
    </header>

    <!--Titel-->
    <div class="title">
        <!--Knapp för att redigera titel, pekar mot en modal längre ner i koden
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#editTitleModal">
            Redigera titel
        </button>
    
        -->
        <?php
            if(isset($_SESSION["loginStatus"])){
                echo '
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#editTitleModal">
                    Redigera titel
                </button>
                ';

            } 
        ?>
        <!--Titeln som redigeras, även en annan titel redigeras längre ner-->
        <div id="testEditTitle">
            <?php
                if(isset($_SESSION["selectedChapter"]) && isset($_SESSION["selectedChapter"]["name"])) {
                    echo $_SESSION["selectedChapter"]["name"];
                }
            else {
                echo "Logga in för att nå denna sida";
            }
            ?>
        </div>
    </div>
    <!--Kod för sidebar-->
    <div id="sidebar" class="sideBar">
        <!--Related: Tänkt för olika kapitel inom kursen-->
        <h1>Related <button data-bs-toggle="collapse" data-bs-target="#demo" class="showlinks" aria-expanded="false"><i
                    class="fa fa-chevron-down"></i></button></h1>
        <div id="demo" class="collapse" aria-labelledby="demo">
            <ul>
                <li><a href="#">Länk 1</a></li>
                <li><a href="#">Länk 1</a></li>
                <li><a href="#">Länk 1</a></li>
                <li><a href="#">Länk 1</a></li>
                <li><a href="#">Länk 1</a></li>
            </ul>
        </div>
        <!--Skolor: Tänkt för olika skolor med samma kurs/kapitel-->
        <h1>Skolor <button data-bs-toggle="collapse" data-bs-target="#demo1" class="showlinks" aria-expanded="false"><i
                    class="fa fa-chevron-down"></i></button></h1>
        <div id="demo1" class="collapse" aria-labelledby="demo1">
            <!--
                <li><a href="#">Länk 1</a></li>
            -->
            <ul> 
            <?php
                // Display schools from session data
                foreach ($_SESSION["schoolDisplay"] as $key => $value) {
                    echo '
                    <li><a href="#" id="' . $value["name"] . '" onclick="schoolChooseFetch(this.id)">' . $value["name"] . '</a></li>
                    ';
                }
            ?>
            </ul>
        </div>
    </div>
    <!--Knapp för att visa sidebar när sidan är i mobilläge-->
    <button onClick="ShowSideBar()" class="showsideBtn" id="showsidebtnID"><i class="fa fa-chevron-right"></i></button>
    <div class="content">
        <div class="contentTop">
            <div class="contentLeft">
                <!--Knapp för att ändra video. pekar på modal längre ner i koden
                tidigare: 

                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#editVideoModal">
                    Redigera video
                </button>
                -->
                <?php
                if(isset($_SESSION["loginStatus"])){
                    echo '
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#editVideoModal">
                        Redigera video
                    </button>
                    ';
                }
                ?>
                
                <!--Div box med videon som redigeras
                tidigare:

                    <div id="testEditVideo">
                        <iframe class="contentVideo" src="https://www.youtube.com/embed/LurwQGUorM4?si=H51qBgXCri6J_IAh">
                            Your browser does not support the video tag.
                        </iframe>
                    </div>
                -->
                <?php
                if(isset($_SESSION["selectedChapter"]) && isset($_SESSION["selectedChapter"]["url"])) {
                    if($_SESSION["selectedChapter"]["url"] !== ""){
                        echo'
                        <div id="testEditVideo">
                            <iframe class="contentVideo" src='.$_SESSION["selectedChapter"]["url"].'>
                                Your browser does not support the video tag.
                            </iframe>
                        </div>
                        ';
                    }
                }
                ?>
                
            </div>
            <div class="contentRight">
                <!--Knapp för att redigera den korta beskrivningen till videon, pekar till modal längre ner i koden-->
                <!-- 
                    tidigare kod:
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                    data-bs-target="#editShortTextModal">
                    Redigera text
                    </button>
                    <div id="testEditShortText">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus et ante non metus vehicula
                            pulvinar in sit amet ipsumLorem ipsum dolor sit amet</p>
                    </div>
                -->
                
            </div>
        </div>
        <div class="contentBottom">
            <?php
            if (isset($_SESSION["selectedChapter"]) && isset($_SESSION["selectedChapter"]["name"])) {
                echo '<h1 id="testEditTitle1">' . $_SESSION["selectedChapter"]["name"] . '</h1>';
            }
            ?>
            <!--Knapp för att redigera den långa beskrivningen av videon/ämnet/kapitlet, pekar på modal längre ner på sidan
                
            tidigare:
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#editTextModal">
                Redigera text
            </button>
            -->
            <?php
                if(isset($_SESSION["loginStatus"])){
                    echo '
                    
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#editTextModal">
                        Redigera text
                    </button>
            ';

                }
            ?>
            
            <div id="testEditText">
                <!--Texten som redigeras-->
                <?php
                if(isset($_SESSION["selectedChapter"]) && isset($_SESSION["selectedChapter"]["data"])) {
                    echo '<p>'.$_SESSION["selectedChapter"]["data"].'</p>';
                }
                ?>
                
            </div>
        </div>
    </div>


    <!--Alla modals för edit av chaptern-->
    <!-- Modal för att redigera titel -->
    <div class="modal fade" id="editTitleModal" tabindex="-1" aria-labelledby="editTitleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editTitleModalLabel">Redigera titel</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <label for="newTitle">Ny titel:</label>
                    <input type="text" id="newTitle" class="form-control" placeholder="Skriv in ny titel">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Stäng</button>
                    <button type="button" class="btn btn-primary" onclick="editTitle()">Spara ändringar</button>
                </div>
            </div>
        </div>
    </div>
    <!--Modal för att redigera videon-->
    <div class="modal fade" id="editVideoModal" tabindex="-1" aria-labelledby="editVideoModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-video" id="editVideoModalLabel">Redigera video</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <label for="newVideo">Ny video:</label>
                    <input type="text" id="newVideo" class="form-control" placeholder="Skriv in länk till ny video">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Stäng</button>
                    <button type="button" class="btn btn-primary" onclick="editVideo()">Spara ändringar</button>
                </div>
            </div>
        </div>
    </div>
    <!--Modal för att redigera den korta texten till videon-->
    <!--
        tidigare kod:

        <div class="modal fade" id="editShortTextModal" tabindex="-1" aria-labelledby="editShortTextModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-shorttext" id="editShortTextModalLabel">Redigera kort text</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <label for="newShortText">Ny kort text:</label>
                    <textarea type="text" id="newShortText" class="form-control"
                        placeholder="Skriv en kort beskrivning"></textarea>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Stäng</button>
                    <button type="button" class="btn btn-primary" onclick="editShortText()">Spara ändringar</button>
                </div>
            </div>
        </div>
    </div>
    -->

    <!--Modal för att redigera den långa texten/beskrivningen-->
    <div class="modal fade" id="editTextModal" tabindex="-1" aria-labelledby="editTextModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-text" id="editTextModalLabel">Redigera text</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <label for="newText">Ny text:</label>
                    <textarea type="text" id="newText" class="form-control"
                        placeholder="Skriv en beskrivning"></textarea>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Stäng</button>
                    <button type="button" class="btn btn-primary" onclick="editText()">Spara ändringar</button>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
    <!--ändra ikon för sidebarknapparna när man klickar på dom:-->
    <script>
        $(document).ready(function () {
            $('.collapse').on('shown.bs.collapse', function () {
                $(this).prev().find('.showlinks').html('<i class="fa fa-chevron-up"></i>');
            }).on('hidden.bs.collapse', function () {
                $(this).prev().find('.showlinks').html('<i class="fa fa-chevron-down"></i>');
            });
        });
    </script>
    <!-- används ej, var innan för att göra sidebaren responsiv när man skrollade. behövs ej mer
    <script>
        $(document).ready(function () {
            $(window).scroll(function () {
                if ($(this).scrollTop() > 1) {
                    $('#sidebar, #showsidebtnID').addClass('sidebarScroll');
                } else {
                    $('#sidebar, #showsidebtnID').removeClass('sidebarScroll');
                }
            });
        });
    </script>
    -->
    <!--Script för att sidebarknappen ska funka-->
    <script>
        function ShowSideBar() {
            document.getElementById("sidebar").classList.toggle("showsidebar");
            document.getElementById("showsidebtnID").classList.toggle("showsideBtnToggle");
        }
    </script>
    <!--Script för att redigera titel
         function editTitle() {
            var newTitle = document.getElementById("newTitle").value;
            document.getElementById("testEditTitle").innerHTML = newTitle;
            document.getElementById("testEditTitle1").innerHTML = newTitle;
            $('#editTitleModal').modal('hide'); // Dölj modalen efter ändringar
        }
    -->
    <script>
        function editTitle() {
            var newTitle = document.getElementById("newTitle").value;
            $('#editTitleModal').modal('hide'); // Dölj modalen efter ändringar
        }
    </script>
    <!--Script för att redigera videon-->
    <script>
        function editVideo() {
            var newVideo = document.getElementById("newVideo").value;
            document.getElementById("testEditVideo").innerHTML = '<iframe class="contentVideo" src="' + newVideo + '">Your browser does not support the video tag.</iframe>';
            $('#editVideoModal').modal('hide'); // Dölj modalen efter ändringar
        }
    </script>
    <!--Script för att redigera den korta beskrivningen-->
    <script>
        function editShortText() {
            var newShortText = document.getElementById("newShortText").value;
            document.getElementById("testEditShortText").textContent = newShortText;
            $('#editShortTextModal').modal('hide'); // Dölj modalen efter ändringar
        }
    </script>
    <!--Script för att redigera den långa beskriningen-->
    <script>
        function editText() {
            var newText = document.getElementById("newText").value;
            document.getElementById("testEditText").textContent = newText;
            $('#editTextModal').modal('hide'); // Dölj modalen efter ändringar
        }
    </script>
    <script>
        function schoolChooseFetch(id) {
            // Fetch and send data to "kurserFunctions.php" for further processing
            fetch("kurserFunctions.php", {
            method: "POST",
            headers: {
                "Content-Type": "application/json"
            },
            body: JSON.stringify({
                school: id,
            })
            })
            .then(response => response.text())
            .then(data => {
            location.reload();
            })
        }
  </script>
</body>

</html>