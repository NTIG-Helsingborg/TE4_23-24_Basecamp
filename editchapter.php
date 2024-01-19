<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<title>Kurser</title>
	<link rel="stylesheet" href="./kurser.css">
    <link rel="stylesheet" href="./specifikkurs.css">
    <link rel="stylesheet" href="./CSS/navbarbackground.css">
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
		<?php include 'baseCamp.css';
		$_SESSION["account_CREATION"] = "";
		?>
	</style>
</head>

<body>
	<header>
		<?php include 'Components/Navbar.php'; ?>
	</header>

    <div class="title" >
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#editTitleModal">
        Redigera titel
    </button>
        <div id="testEditTitle">
            Hej
        </div>
    </div>
        
    <div id="sidebar" class="sideBar">
        <h1>Related <button data-bs-toggle="collapse" data-bs-target="#demo" class="showlinks" aria-expanded="false"><i class="fa fa-chevron-down"></i></button></h1> 
        <div id="demo" class="collapse" aria-labelledby="demo">
            <ul>
                <li><a href="#">Länk 1</a></li>
                <li><a href="#">Länk 1</a></li>
                <li><a href="#">Länk 1</a></li>
                <li><a href="#">Länk 1</a></li>
                <li><a href="#">Länk 1</a></li>
            </ul>
        </div>
        <h1>Skolor <button data-bs-toggle="collapse" data-bs-target="#demo1" class="showlinks" aria-expanded="false"><i class="fa fa-chevron-down"></i></button></h1> 
        <div id="demo1" class="collapse" aria-labelledby="demo1">
            <ul>
                <li><a href="#">Länk 1</a></li>
                <li><a href="#">Länk 1</a></li>
                <li><a href="#">Länk 1</a></li>
                <li><a href="#">Länk 1</a></li>
                <li><a href="#">Länk 1</a></li>
                <li><a href="#">Länk 1</a></li>
                <li><a href="#">Länk 1</a></li>
                <li><a href="#">Länk 1</a></li>
                <li><a href="#">Länk 1</a></li>
                <li><a href="#">Länk 1</a></li>
                <li><a href="#">Länk 1</a></li>
                <li><a href="#">Länk 1</a></li>
                <li><a href="#">Länk 1</a></li>
                <li><a href="#">Länk 1</a></li>
                <li><a href="#">Länk 1</a></li>
                <li><a href="#">Länk 1</a></li>
                <li><a href="#">Länk 1</a></li>
                <li><a href="#">Länk 1</a></li>
                <li><a href="#">Länk 1</a></li>
                <li><a href="#">Länk 1</a></li>
                <li><a href="#">Länk 1</a></li>
                <li><a href="#">Länk 1</a></li>
                <li><a href="#">Länk 1</a></li>
                <li><a href="#">Länk 1</a></li>
                <li><a href="#">Länk 1</a></li>
                <li><a href="#">Länk 1</a></li>
                <li><a href="#">Länk 1</a></li>
                <li><a href="#">Länk 1</a></li>
                <li><a href="#">Länk 1</a></li>
                <li><a href="#">Länk 1</a></li>
                <li><a href="#">Länk 1</a></li>
                <li><a href="#">Länk 1</a></li>
                <li><a href="#">Länk 2</a></li>
            </ul>
        </div>
    </div>
    <button onClick="ShowSideBar()" class="showsideBtn" id="showsidebtnID"><i class="fa fa-chevron-right"></i></button>
    <div class="content">
    <div class="contentTop">
        <div class="contentLeft">
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#editVideoModal">
            Redigera video
        </button>
        <div id="testEditVideo">
        <iframe class="contentVideo" src="https://www.youtube.com/embed/LurwQGUorM4?si=H51qBgXCri6J_IAh">
            Your browser does not support the video tag.
        </iframe>
        </div>
        </div>
        <div class="contentRight">
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#editShortTextModal">
            Redigera text
        </button>
        <div id="testEditShortText">
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus et ante non metus vehicula pulvinar in sit amet ipsumLorem ipsum dolor sit amet</p>
        </div>
        </div>
    </div>
    <div class="contentBottom">
        <h1 id="testEditTitle1">Lorem Ipsum</h1>
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#editTextModal">
            Redigera text
        </button>
        <div id="testEditText">
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed in augue vestibulum, maximus nisl vel, porta ex. Ut dapibus nisi est, eu semper nisl venenatis eget. Duis consectetur lorem pretium gravida lobortis. Vestibulum non egestas nulla. Phasellus iaculis elementum porttitor. Fusce maximus, erat quis finibus aliquet, nisi dolor dictum lacus, sit amet molestie est diam eget risus. Pellentesque blandit, massa a bibendum blandit, metus arcu scelerisque purus, ac fringilla felis dui in nulla. Praesent ullamcorper ante orci, sed volutpat quam tristique ac. Etiam ultrices eu nunc non malesuada. Suspendisse pellentesque molestie justo a porta. Suspendisse potenti. Suspendisse non urna id tellus gravida ultrices. Phasellus in consequat eros.</p>
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
    <div class="modal fade" id="editShortTextModal" tabindex="-1" aria-labelledby="editShortTextModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-shorttext" id="editShortTextModalLabel">Redigera kort text</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <label for="newShortText">Ny kort text:</label>
                    <textarea type="text" id="newShortText" class="form-control" placeholder="Skriv en kort beskrivning"></textarea>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Stäng</button>
                    <button type="button" class="btn btn-primary" onclick="editShortText()">Spara ändringar</button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="editTextModal" tabindex="-1" aria-labelledby="editTextModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-text" id="editTextModalLabel">Redigera text</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <label for="newText">Ny text:</label>
                    <textarea type="text" id="newText" class="form-control" placeholder="Skriv en beskrivning"></textarea>
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
        $(document).ready(function(){
            $('.collapse').on('shown.bs.collapse', function(){
                $(this).prev().find('.showlinks').html('<i class="fa fa-chevron-up"></i>');
            }).on('hidden.bs.collapse', function(){
                $(this).prev().find('.showlinks').html('<i class="fa fa-chevron-down"></i>');
            });
        });
        </script>
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
        <script>
            function ShowSideBar(){
                document.getElementById("sidebar").classList.toggle("showsidebar");
                document.getElementById("showsidebtnID").classList.toggle("showsideBtnToggle");
            }
        </script>
        <script>
            function editTitle() {
                var newTitle = document.getElementById("newTitle").value;
                document.getElementById("testEditTitle").innerHTML = newTitle;
                document.getElementById("testEditTitle1").innerHTML = newTitle;
                $('#editTitleModal').modal('hide'); // Dölj modalen efter ändringar
            }
        </script>
        <script>
            function editVideo() {
                var newVideo = document.getElementById("newVideo").value;
                document.getElementById("testEditVideo").innerHTML ='<iframe class="contentVideo" src="' + newVideo + '">Your browser does not support the video tag.</iframe>';
                $('#editVideoModal').modal('hide'); // Dölj modalen efter ändringar
            }
        </script>
        <script>
            function editShortText() {
                var newShortText = document.getElementById("newShortText").value;
                document.getElementById("testEditShortText").innerHTML = '<p>' + newShortText + '</p>';
                $('#editShortTextModal').modal('hide'); // Dölj modalen efter ändringar
            }
        </script>
        <script>
            function editText() {
                var newText = document.getElementById("newText").value;
                document.getElementById("testEditText").innerHTML = '<p>' + newText + '</p>';
                $('#editTextModal').modal('hide'); // Dölj modalen efter ändringar
            }
        </script>
</body>

</html>