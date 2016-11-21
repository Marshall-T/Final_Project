<!DOCTYPE html>

<!--
  Marshall Taylor
  CIP 228
  Final Project
-->

<html lang="en">
  <head>
    <meta charset="utf-8">
    <link rel="icon" href="images/a2j.gif">
    <title>Music Store</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/home.css" rel="stylesheet">

  </head>

  <body>

<? include "logon/logon-data.php"; ?>

    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.php">Music Store
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="index.php">Home</a></li>
            <li><a href="logon/index.php">Logon</a></li>
            <li><a href="tables/tables.php">Music</a></li>
            <li><a href="#contact">Contact</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

    <div class="container">

      <div class="home-title">
        <h1>Music Store</h1>
        <p class="lead">Your one stop shop for all your music needs.</p>
      </div>
    </div><!-- /.container -->
    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>  <!-- needs to be a css block size or margin -->

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>

  <footer class=foot>
    <p>Back ground image courtsey of: <a href=http://shushi168.com/music-pics.html> http://shushi168.com/music-pics.html</a></p>
    <p>Still a work in progress.  The file input is to be replace by sql input.</p>      
  </footer>

</html>
