<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Guessing Game</title>
  <link rel="icon" type="image/x-icon" href="favicon.ico"/>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/scrolling-nav.css" rel="stylesheet">

</head>

<body id="page-top">

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
    <div class="container">
      <a class="navbar-brand js-scroll-trigger" href="#page-top">Guessing Name</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    </div>
  </nav>

  <header class="bg-primary text-white">
    <div class="container text-center">
      <h1>Welcome to my guessing game</h1>
      <p class="lead">Please enjoy the game and good luck!</p>
    </div>
  </header>

  <section id="about">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 mx-auto">
         <h2>Game</h2>
          <p class="lead"></p>
           <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $randNum = rand(1, 10);
            if ($randNum == $_POST["num"]) {
            echo "<h1><strong>Awesome you got it</strong></h1>";
            }
            else {
             echo "<p><strong><h1>Wrong</h1></strong> I was thinking of $randNum. Come on! you can do it, try again.</p>";
             }        
           }
            ?>
        </div>
      </div>
    </div>
      <form method="post" action="index.php">
    <p>I'm thinking of a number between 1 and 10.</p>
    <p>can you guess it? <input type="number" name="num" min="1" max="10" autofocus></p>
      <input type="submit" value="Guess">
  </form>
  </section>
 
  <!-- Footer -->
  <footer class="py-5 bg-dark">
    <div class="container">
      <p class="m-0 text-center text-white">Copyright &copy;Steven Fernandez 2020 - Theme by <a href="https://startbootstrap.com/templates/scrolling-nav/" target="_blank">  Start Bootstrap</a> Favicon icon by <a href="https://www.freefavicon.com/freefavicons/objects/iconinfo/gamepad-152-212830.html" target="_blank"> Freefavicon </a></p>
    </div>
    <!-- /.container -->
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Plugin JavaScript -->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom JavaScript for this theme -->
  <script src="js/scrolling-nav.js"></script>

</body>

</html>
