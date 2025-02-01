<?php

  include('includes/headers.inc.php');

?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/style.css">
<link rel="stylesheet" type="text/css" href="css/funkyradio.css">
<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script async type="text/javascript" src="js/script.js"></script>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="Cache-control" content="public">
<link rel="icon" href="/favicon.png" type="image/png" />
<link rel="shortcut icon" href="/favicon.ico" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<meta property="og:type" content="website" />
<meta property="og:image" content="" />


  <title></title>
</head>
<body>
  <div id="outer">
  <div id="wrapper">
    <div class="logo">
      <a href="/"><img id="logoimg" src="img/logov2t.png" width="300" /></a>
      <div id="top_button">
        <a onclick="toggleDiv();" href="#" id="top_buttona"> Skjul innstillinger</a> <span id="icon" class="glyphicon glyphicon-chevron-right"></span>
      </div>
    </div>
    <form id="jokesform" method="get">
      <div class="col-md-4">
        <div class="funkyradio">
          <h3 style="text-align:center">Grovhet</h3>
          <div class="funkyradio-default">
              <input type="radio" name="grovhet" id="radio1" value="0" />
              <label for="radio1">Tilfeldig</label>
          </div>
          <div class="funkyradio-default">
              <input type="radio" name="grovhet" id="radio2" value="1" checked />
              <label for="radio2">Mild</label>
          </div>
          <div class="funkyradio-default">
              <input type="radio" name="grovhet" id="radio3" value="2" />
              <label for="radio3">Medium</label>
          </div>
          <div class="funkyradio-default">
              <input type="radio" name="grovhet" id="radio4" value="3" />
              <label for="radio4">Grov</label>
          </div>
        </div>
      </div>

      <div class="col-md-4">
        <div class="funkyradio">
          <h3 style="text-align:center">Type</h3>
          <div class="funkyradio-default">
              <input type="radio" name="type" id="radio5" value="0" checked />
              <label for="radio5">Tilfeldig</label>
          </div>
          <div class="funkyradio-default">
              <input type="radio" name="type" id="radio7" value="2" />
              <label for="radio7">Blondine</label>
          </div>
          <div class="funkyradio-default">
              <input type="radio" name="type" id="radio6" value="4" />
              <label for="radio6">Svensker</label>
          </div>

          <div class="funkyradio-default">
              <input type="radio" name="type" id="radio8" value="6" />
              <label for="radio8">Andre</label>
          </div>
        </div>
      </div>

      <div class="col-md-4">
        <div class="funkyradio">
          <h3 style="text-align:center">Lengde</h3>
          <div class="funkyradio-default">
              <input type="radio" name="lengde" id="radio9" value="0" checked />
              <label for="radio9">Tilfeldig</label>
          </div>
          <div class="funkyradio-default">
              <input type="radio" name="lengde" id="radio10" value="1" />
              <label for="radio10">One-liner</label>
          </div>
          <div class="funkyradio-default">
              <input type="radio" name="lengde" id="radio11" value="2" />
              <label for="radio11">Medium</label>
          </div>
          <div class="funkyradio-default">
              <input type="radio" name="lengde" id="radio12" value="3" />
              <label for="radio12">Lang</label>
          </div>
        </div>
      </div>

      <input id="excep" type="text" name="except" value="0" style="display:none">

      <div id="submitdiv">
        <input id="submitbutton" class="btn" type="submit" value="Finn vits">
      </div>
    </form>

    <a id="resultdiv">
        <span id="result">Her kan du enkelt finne vitser etter dine egne kriterier. <br />Bare velg filter over og sett i gang med lesingen!</span>
    </a>

  </div>
</div>
<div id="bottom"Havpet &copy; <?php echo date('Y'); ?></div>


</body>
</html>
