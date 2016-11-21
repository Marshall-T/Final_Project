<!DOCTYPE html>
  
<!--
  Marshall Taylor
  CIP 228
  Logon
-->

<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../images/a2j.gif">

    <title>Music Logon</title>

    <!-- Bootstrap core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="../css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../css/logon.css" rel="stylesheet">
    <link href="../css/music.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="../index.php">Music Store</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li><a href="../index.php">Home</a>
            <li class="active"><a href="index.php">Logon</a></li>
            <li><a href="../tables/tables.php">Music</a></li>
            <li><a href="#contact">Contact</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

    <div class="container">

      <div class="starter-template">
        
        <h1>Music Store</h1>
        <p class="lead">Your one stop shop for all your music needs.</p>

      </div>

    </div><!-- /.container -->

      <form class="form-signin">
        <h2 class="form-signin-heading">Music Store logon </h2>
        For testing email = jack@gmail.net<br>
        <label for="inputEmail" class="sr-only" >Email address</label>
        <input type="email" id="inputEmail" class="form-control" name="anEmail" placeholder="Email address" required autofocus>
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" id="inputPassword" class="form-control" name="aPass" placeholder="Password" required>
        For testing password = jill<br>

        <div class="checkbox">
          <label>
            <input type="checkbox" value="remember-me"> Remember me
          </label>
        </div>
        <!--  submit button  still needs to function / no actual submitt  -->
        <a href="../index.php"><button id="submit" class="btn btn-lg btn-primary btn-block" type="button">Sign in</button></a>
        <br>
        <!--  cancel button  -->
        <a href="../index.php"><button class="btn btn-lg btn-primary btn-block" type="button">Cancel</button></a>
      </form>

    </div> <!-- /container -->


    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script type="text/JavaScript" src="logon.js"></script>
    <br><br><br><br><br>  <!-- needs to be a css block size or margin -->
  </body>

  <footer class=foot>
    <p>Back ground image courtsey of: <a href=http://shushi168.com/music-pics.html> http://shushi168.com/music-pics.html</a></p>
    <p>Still a work in progress.  The file input is to be replace by sql input</p>      
  </footer>

</html>
