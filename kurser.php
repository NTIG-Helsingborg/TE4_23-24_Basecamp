<?php
// Include the "db.php" file for database connection
include "db.php";
?>

<!DOCTYPE html>
<html lang="sv">

<head>
  <meta charset="utf-8">
  <title>Kurser</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

  <!-- jQuery and Popper.js -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css"
    integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <!-- Custom CSS files -->
  <link rel="stylesheet" href="baseCamp.css">
  <link rel="stylesheet" href="CSS/specifikkurs.css">
  <link rel="stylesheet" href="CSS/kapitlar.css">
</head>

<body>
  <!-- Header Section -->
  <header>
    <?php include 'Components/Navbar.php'; ?>
  </header>

  <!-- Course Title Section -->
  <div class="course-title">
    <div class="container">
      <h1>Welcome to your courses</h1>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus et ante non metus vehicula pulvinar in sit
        amet ipsum</p>
    </div>
  </div>

  <!-- Sidebar Section -->
  <div id="sidebar" class="sideBar">
    <h1>Schools <button data-bs-toggle="collapse" data-bs-target="#demo1" class="showlinks" aria-expanded="false"><i
          class="fa fa-chevron-down"></i></button></h1>
    <div id="demo1" class="collapse" aria-labelledby="demo1">
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
  <button onClick="ShowSideBar()" class="showsideBtn" id="showsidebtnID"><i class="fa fa-chevron-right"></i></button>

  <!-- Content Boxes Section -->
  <div class="container" id="box-container">
    <!-- First group of boxes -->
    <div class="row box-group" id="group1">
      <!-- Displaying class information from session data -->
      <?php
      foreach ($_SESSION["classDisplay"] as $key => $value) {
        // Check if a specific school is chosen
        if (isset($_SESSION["ClassFromSchool"])) {
          if ($_SESSION["ClassFromSchool"] == $value["school"]){
            echo '
            <div class="col-lg-12 col-md-12 col-sm-6" onclick="openCourse(\'' . $value["id"] . '\', \'' . $value["name"] . '\');">
            <div class="boxCourse">';
            echo '<h4>' . $value["name"] .  '</h4>';
            echo '<p>' . $value["data"] . '</p>';
            echo '</div>
              </div>';
          }
        }
        // Check if no specific school is chosen and the class belongs to the default school
        if (!isset($_SESSION["ClassFromSchool"]) && $value["school"] == $_SESSION["SchoolDefault"]) {
          echo '
            <div class="col-lg-12 col-md-12 col-sm-6" onclick="openCourse(\'' . $value["id"] . '\', \'' . $value["name"] . '\');">
            <div class="boxCourse">';
          echo '<h4>' . $value["name"] .  '</h4>';
          echo '<p>' . $value["data"] . '</p>';
          echo '</div>
            </div>';
        }
      }
      ?>
    </div>
  </div>

  <!-- Add Course Button -->
  <?php
  // Check if user is logged in
  if (isset($_SESSION["loginStatus"])) {
    echo '
    <button class="circular-button" onclick="addCourse()"></button>
    ';
  }
  ?>

  <!-- External Script and Libraries -->
  <script src="https://code.jquery.com/jquery-3.7.1.min.js"
    integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
    crossorigin="anonymous"></script>

  <!-- Custom JavaScript -->
  <script>
    $(document).ready(function () {
      $('.collapse').on('shown.bs.collapse', function () {
        $(this).prev().find('.showlinks').html('<i class="fa fa-chevron-up"></i>');
      }).on('hidden.bs.collapse', function () {
        $(this).prev().find('.showlinks').html('<i class="fa fa-chevron-down"></i>');
      });
    });

    $(document).ready(function () {
      $(window).scroll(function () {
        if ($(this).scrollTop() > 1) {
          $('#sidebar, #showsidebtnID').addClass('sidebarScroll');
        } else {
          $('#sidebar, #showsidebtnID').removeClass('sidebarScroll');
        }
      });
    });

    function ShowSideBar() {
      document.getElementById("sidebar").classList.toggle("showsidebar");
      document.getElementById("showsidebtnID").classList.toggle("showsideBtnToggle");
    }

    function openCourse(id, name) {
      // Fetch and send data to "kurserFunctions.php" for further processing
      fetch("kurserFunctions.php", {
        method: "POST",
        headers: {
          "Content-Type": "application/json"
        },
        body: JSON.stringify({
          id: id,
          name: name,
        })
      })
      .then(response => response.text())
      .then(data => {
        window.location.href = 'Kapitlar.php';
      })
    }

    function addCourse() {
      // Prompt user for input and send data to "kurserFunctions.php" for further processing
      var rubrik = prompt("Add a title");
      var description = prompt("Add a brief description");
      fetch("kurserFunctions.php", {
        method: "POST",
        headers: {
          "Content-Type": "application/json"
        },
        body: JSON.stringify({
          rubrik: rubrik,
          description: description
        })
      })
      .then(response => response.text())
      .then(data => {
        location.reload();
      })
    }

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
