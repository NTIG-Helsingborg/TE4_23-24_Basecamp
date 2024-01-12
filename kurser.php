<!DOCTYPE html>
<html lang="sv">

<head>
  <meta charset="utf-8">
  <title>Kurser</title>
  <link rel="stylesheet" href="./kurser.css">
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
	<header>
	<?php include 'Components/Navbar.php'; ?>
	</header>
<body> 
 

  <!-- 12 Content boxes -->

  <div class="container">
  <!-- Första raden med boxar -->
  <div class="row">
    <!-- Box 1 -->
    <div class="col-lg-4 col-md-6 col-sm-6">
      <div class="box">
        <div class="p-3">
          <h4>Rubrik 1</h4>
          <p>Beskrivning av kursen 1.</p>
        </div>
      </div>
    </div>
    <!-- Box 2 -->
    <div class="col-lg-4 col-md-6 col-sm-6">
      <div class="box">
        <div class="p-3">
          <h4>Rubrik 2</h4>
          <p>Beskrivning av kursen 2.</p>
        </div>
      </div>
    </div>
    <!-- Box 3 -->
    <div class="col-lg-4 col-md-6 col-sm-6">
      <div class="box">
        <div class="p-3">
          <h4>Rubrik 3</h4>
          <p>Beskrivning av kursen 3.</p>
        </div>
      </div>
    </div>
  </div>
  <!-- Andra raden med boxar -->
  <div class="row">
    <!-- Box 4 -->
    <div class="col-lg-4 col-md-6 col-sm-6">
      <div class="box">
        <div class="p-3">
          <h4>Rubrik 4</h4>
          <p>Beskrivning av kursen 4.</p>
        </div>
      </div>
    </div>
    <!-- Box 5 -->
    <div class="col-lg-4 col-md-6 col-sm-6">
      <div class="box">
        <div class="p-3">
          <h4>Rubrik 5</h4>
          <p>Beskrivning av kursen 5.</p>
        </div>
      </div>
    </div>
    <!-- Box 6 -->
    <div class="col-lg-4 col-md-6 col-sm-6">
      <div class="box">
        <div class="p-3">
          <h4>Rubrik 6</h4>
          <p>Beskrivning av kursen 6.</p>
        </div>
      </div>
    </div>
  </div>
</div>


  <!-- Extra boxar som visas när användaren scrollar ner -->
  <div class="container">
<div class="row">
  <!-- Box 7 -->
  <div class="col-lg-4 col-md-6 col-sm-6">
    <div class="box">
      <div class="p-3">
        <h4>Rubrik 7</h4>
        <p>Beskrivning av kursen 7.</p>
      </div>
    </div>
  </div>
  <!-- Box 8 -->
  <div class="col-lg-4 col-md-6 col-sm-6">
    <div class="box">
      <div class="p-3">
        <h4>Rubrik 8</h4>
        <p>Beskrivning av kursen 8.</p>
      </div>
    </div>
  </div>
  <!-- Box 9 -->
  <div class="col-lg-4 col-md-6 col-sm-6">
    <div class="box">
      <div class="p-3">
        <h4>Rubrik 9</h4>
        <p>Beskrivning av kursen 9.</p>
      </div>
    </div>
  </div>
</div>
<div class="row">
  <!-- Box 10 -->
  <div class="col-lg-4 col-md-6 col-sm-6">
    <div class="box">
      <div class="p-3">
        <h4>Rubrik 10</h4>
        <p>Beskrivning av kursen 10.</p>
      </div>
    </div>
  </div>
  <!-- Box 11 -->
  <div class="col-lg-4 col-md-6 col-sm-6">
    <div class="box">
      <div class="p-3">
        <h4>Rubrik 11</h4>
        <p>Beskrivning av kursen 11.</p>
      </div>
    </div>
  </div>
  <!-- Box 12 -->
  <div class="col-lg-4 col-md-6 col-sm-6">
    <div class="box">
      <div class="p-3">
        <h4>Rubrik 12</h4>
        <p>Beskrivning av kursen 12.</p>
      </div>
    </div>
  </div>
</div>


    </div>
  </div>

  <script src="js/jquery-3.3.1.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
		integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
		crossorigin="anonymous"></script>

  <script>
    // Dölj extra boxar vid sidans lastning
    var extraBoxes = document.querySelectorAll('.extra-box');
    extraBoxes.forEach(function (box) {
      box.classList.add('hidden');
    });

    // Visa extra boxar när användaren scrollar ner
    window.addEventListener('scroll', function () {
      extraBoxes.forEach(function (box, index) {
        if (box.getBoundingClientRect().top < window.innerHeight - 50 && !box.classList.contains('visible')) {
          box.classList.remove('hidden');
          box.classList.add('visible');

          // Only reveal the next set of 3 boxes
          var nextSetIndex = index + 3;
          if (nextSetIndex < extraBoxes.length) {
            extraBoxes[nextSetIndex].classList.remove('hidden');
            extraBoxes[nextSetIndex].classList.add('visible');
          }
        }
      });
    });
  </script>

</body>

</html>
