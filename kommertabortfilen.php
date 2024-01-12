<!DOCTYPE html>
<html lang="sv">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="./testboxes.css">
  <title>Test Kurser</title>
</head>
<body>

  <div class="container">
    <div class="row">
      <!-- Box 1-6 visible from the beginning -->
      <div class="col-md-4">
        <div class="box">
          <div class="p-3">
            <h4>Rubrik 1</h4>
            <p>Beskrivning av kursen 1.</p>
          </div>
        </div>
      </div>

      <!-- Repeat the above structure for boxes 2-6 -->
      <div class="col-md-4">
        <div class="box">
          <div class="p-3">
            <h4>Rubrik 2</h4>
            <p>Beskrivning av kursen 2.</p>
          </div>
        </div>
      </div>

      <div class="col-md-4">
        <div class="box">
          <div class="p-3">
            <h4>Rubrik 3</h4>
            <p>Beskrivning av kursen 3.</p>
          </div>
        </div>
      </div>

      <div class="col-md-4">
        <div class="box">
          <div class="p-3">
            <h4>Rubrik 4</h4>
            <p>Beskrivning av kursen 4.</p>
          </div>
        </div>
      </div>

      <div class="col-md-4">
        <div class="box">
          <div class="p-3">
            <h4>Rubrik 5</h4>
            <p>Beskrivning av kursen 5.</p>
          </div>
        </div>
      </div>

      <div class="col-md-4">
        <div class="box">
          <div class="p-3">
            <h4>Rubrik 6</h4>
            <p>Beskrivning av kursen 6.</p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="container">
    <div class="row">
      <!-- Box 7-15 initially hidden -->
      <div class="col-md-4 extra-box hidden">
        <div class="box">
          <div class="p-3">
            <h4>Rubrik 7</h4>
            <p>Beskrivning av kursen 7.</p>
          </div>
        </div>
      </div>

      <!-- Repeat the above structure for boxes 8-15 -->
      <div class="col-md-4 extra-box hidden">
        <div class="box">
          <div class="p-3">
            <h4>Rubrik 8</h4>
            <p>Beskrivning av kursen 8.</p>
          </div>
        </div>
      </div>

      <div class="col-md-4 extra-box hidden">
        <div class="box">
          <div class="p-3">
            <h4>Rubrik 9</h4>
            <p>Beskrivning av kursen 9.</p>
          </div>
        </div>
      </div>

      <div class="col-md-4 extra-box hidden">
        <div class="box">
          <div class="p-3">
            <h4>Rubrik 10</h4>
            <p>Beskrivning av kursen 10.</p>
          </div>
        </div>
      </div>

      <div class="col-md-4 extra-box hidden">
        <div class="box">
          <div class="p-3">
            <h4>Rubrik 11</h4>
            <p>Beskrivning av kursen 11.</p>
          </div>
        </div>
      </div>

      <div class="col-md-4 extra-box hidden">
        <div class="box">
          <div class="p-3">
            <h4>Rubrik 12</h4>
            <p>Beskrivning av kursen 12.</p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

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
