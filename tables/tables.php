<!DOCTYPE html>

<!--
  Marshall Taylor
  CIP 228
  Music Tables
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
            <li><a href="../index.php">Home</a></li>
            <li><a href="../logon/index.php">Logon</a></li>
            <li class="active"><a href="tables.php">Music</a></li>
            <li><a href="#contact">Contact</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

<?
      $count = 0;
      $title = "";
      $artist = "";
      $price = "";

  function TableRows( $count, $title, $artist, $price )
  {
    echo '<tr>';
    echo '  <td>' . $count . '</td>';
    echo '  <td>' . $title . '</td>';
    echo '  <td>' . $artist . '</td>';
    echo '  <td>' . $price . '</td>';
    echo ' </tr>';
  }
?>

    <div class="container">
      <div class="starter-template">
        <h1>Music Store</h1>
        <p class="lead">Your one stop shop for all your music needs.</p>
      </div>
    </div>
<!--      <div class="page-header"> -->
    <div class="container">
<?
    echo '<br>';
    echo '<label for="search" class="sr-only" >Search</label>';
    echo '<input type="string" id="aSearch" class="form-control" name="target" placeholder="Artist name" autofocus>';
    echo '<br>';
    echo '  <button class="btn btn-lg btn-primary" id="search" type="button">Search</button>';
    echo '<br><br>';
    $target = '<br>';
    echo ' Search results for: ';
    echo ' <div id="target" class="search-header">';
    echo '  <h3><br></h3>';
    echo ' </div>';
?>
      <div class="row">
        <div class="col-md-6">
          <table class="table table-bordered">
            <thead>
              <tr>
                <th>#</th>
                <th>Title</th>
                <th>Artist</th>
                <th>Price</th>
              </tr>
            </thead>
            <tbody>
              <tr>
<?
//      still needs a trigger to execute the search
              $count = 0;
              $f = fopen("music-data.txt", r);  // change to sql input
                while ($title = fgets($f)) {
                  $count++;
                  $artist = fgets($f);
                  $price = fgets($f);
                  if ($artist >= $target){
                    TableRows ($count, $title, $artist, $price);
                  }
                }
?>
            </tbody>
          </table>
        </div>
      </div>

    </div><!-- /.container -->
  <br><br>  <!-- needs to be a css block size or margin -->
  <script type="text/JavaScript" src="Music.js"></script>
  </body>

  <footer class=foot>
    <p>Back ground image courtsey of: <a href=http://shushi168.com/music-pics.html> http://shushi168.com/music-pics.html</a></p>
    <p>Still a work in progress.  The file input is to be replace by sql input.  The "search" is actually just a filter.</p>      
  </footer>
</html>