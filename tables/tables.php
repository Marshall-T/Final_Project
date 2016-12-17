<!DOCTYPE html>

<!--
  Marshall Taylor
  CIP 228
  Music Tables
-->

<html lang="en">
  <head>
    <meta charset="utf-8">
    <link rel="icon" href="../images/a2j.gif">
    <title>Music List</title>

    <!-- Bootstrap core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this page -->
    <link href="../css/music.css" rel="stylesheet">

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
      <div class="home-title">
        <h1>Music Store</h1>
        <p class="lead">Your one stop shop for all your music needs.</p>
      </div>
    </div>
<!--      <div class="page-header"> -->
    <div class="container">
    <h3>Enter a search target</h3>
<?
    // display search input on the page - trying to pass target to js & vise vesa - unsuccessful
    echo '<br>';
    echo '<label for="search" class="sr-only" >Search</label>';
    echo '<input type="string" id="aSearch" class="form-control" name="target" placeholder="Artist name" autofocus>';
    echo '<br>';
    echo '  <button class="btn btn-lg btn-primary" id="search" type="button">Search</button>';
    echo '<br><br>';
    $target = '<br>';
    echo ' Search results for: ';
    echo ' <div id="target" class="search-header">';
    echo '  <h4><br></h4>';
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
//      still needs a trigger to execute the "search" / filter
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

/*                
                $host = "localhost";
                $database = "../MusicList.sql";
                $user = "mjtshopper@gmail.com";
                $pass = "chevyII327";
*/
                require_once ('../config.php');
/*                echo ' host = ' . DBHOST;
                echo ' user = ' . DBUSER;
                echo ' pass = ' . DBPASS;
                echo ' name = ' . DBNAME;
*/                echo '<br>';
//                echo getcwd () . DBNAME;
//                echo '<br> pass = ' . DBPASS;
//                echo '<br>';
                try {

//                  $connection = MySQLi_connect(DBHOST, DBUSER, DBPASS, DBNAME);

                    $connectStr = "mysqli:host=localhost;dbname=MusicList";
                    $pdo = new PDO($connectStr, DBUSER, DBPASS);
//                  $connection = MySQLi_connect(DBHOST, DBUSER, DBPASS, DBNAME);

                    $error = mysqli_connect_error();
                    if ($error != null) {
                      $output = "<p>Database connection Error</p>" . $error;
                      exit (output);
                    }
                  
//                  $sql = "select * from MusicList orderby title";
  //                $result = "mysqli_query($connection, $sql)";

                    MySQLi_close($connection);

                }
                catch (Exception $ex) {
                  echo $error . " < Errror > " . $ex;
                }
 ?>
            </tbody>
          </table>
        </div>
      </div>

    </div><!-- /.container -->
    <br><br>  <!-- needs to be a css block size or margin -->
    <script type="text/JavaScript" src="Music.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>

  <footer class=foot>
    <p>Back ground image courtsey of: <a href=http://shushi168.com/music-pics.html> http://shushi168.com/music-pics.html</a></p>
    <p>Still a work in progress.  The file input is to be replace by sql input.  The "search" is actually just a filter (currently disabled).</p>      
  </footer>

</html>
