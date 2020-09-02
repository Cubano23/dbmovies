<?php session_start();
ini_set('display_errors', 'on');
require("model/user_count.class.php");
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" http-equiv="encoding">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>3W Cine</title>
    <link rel="stylesheet" href="css/normalize-3.0.3.min.css">
    <link rel="stylesheet" href="css/font-awesome-4.3.0.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
    <!-- Feuilles de styles de l'application -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">

     <!--RESPONSIVE-->
     <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Oleo+Script+Swash+Caps|Karla">

    <!-- Librairie jQuery -->
    <script src="libs/jQuery_v3.4.1.js"></script>

    <!-- JavaScript de l'application -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="js/main.js"></script>
    <script src="js/services/getData.js"></script>
</head>
<!-- En-tête commune -->
<header class="container-fluid">          
  <!--Navbar-->
  <nav class="navbar navbar-expand-lg navbar-dark">
      <a class="navbar-brand" href="index.php"><i class="fas fa-video fa-3x"></i>&nbsp;3W Cine<p>Boutique de films en HD</p></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse"  id="navbarNav" >  
      <ul class="nav navbar-nav mr-auto "> 
      <?php if(isset($_SESSION) && count($_SESSION) > 0): ?>       
        <li class="nav-item">
              <a class="nav-link" href="galerie/films.php"><i class="fas fa-film"></i>&nbsp;&nbsp;Films</a>
          </li>
          <li class="nav-item">
              <a class="nav-link" href="afficher_video/play.php"><i class="fas fa-play"></i>&nbsp;&nbsp;Mes filmes</a>
          </li>
          <li class="nav-item">
          <a class="nav-link" href="acount.php"><i class="fas fa-user-circle"></i>&nbsp;&nbsp;Mon compte</a>
          </li>
          <li class="nav-item">
              <a class="nav-link" href="about.php"><i class="fas fa-info-circle"></i>&nbsp;&nbsp;&Agrave; propos</a>
          </li>
          <li class="nav-item">
              <a class="nav-link" href="contact.php"><i class="fas fa-envelope"></i>&nbsp;&nbsp;Contact</a>
          </li>
          <li class="nav-item">
              <a class="nav-link" href="afficher_panier/cart.php"><i class="fas fa-shopping-cart"></i>&nbsp;&nbsp;Panier</a>
          </li>
          <li class="nav-item">
              <a class="nav-link" href="controller/Logout.php" id="logout"><i class="fas fa-sign-out-alt"></i>&nbsp;&nbsp;Déconnexion </a>
          </li>                          
          <?php endif; ?> 
          <?php if(count($_SESSION) < 1): ?>                 
          <li class="nav-item">
              <a class="nav-link" href="connexion/login.php"><i class="fas fa-power-off fa-3x"></i>&nbsp;&nbsp;Se connecter</a>
          </li> 
          <?php endif; ?>            
      </ul>
    
    </div>
  </nav>
<!--/.Navbar-->
</header>
<body>

<!-- Affichage du template lié à la vue -->
<main> 
<?php if(isset($_SESSION) && count($_SESSION) > 0): ?>
<h2><i class="fas fa-user-circle fa-3x"></i>&nbsp;&nbsp;Bonjour</h2>
<h2><?php echo  $_SESSION["first_name"]. " ".$_SESSION["last_name"] ?></h2>
<?php endif; ?> 
<div class="container-fluid">
  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img id="pic-carousel" class="d-block w-100" src="images/pic1.jpeg" alt="First slide">
      </div>
      <div class="carousel-item">
        <img id="pic-carousel" class="d-block w-100" src="images/pic2.jpg" alt="Second slide">
      </div>
      <div class="carousel-item">
        <img id="pic-carousel" class="d-block w-100" src="images/pic3.jpg" alt="Third slide">
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>

</main>

<footer>
    <div></div>
    <small>3W Cine - Boutique de films en HD &copy; - <?php echo date('Y');?></small> 
    <p><small>Réalisé avec &nbsp; <i class="fas fa-heart"></i> &nbsp; par Bruno Soares</small></p>  
    <?php 
    if(count($_SESSION) > 0)
    {
      $user = new UserCountModel(); 
      $users = $user->getUserCount();
      echo "<span>Total d'utilisateurs: " .$users. "</span>" ;
    }     
    ?>
   
</footer>

<!-- Code principal JavaScript de l'application -->
<script src="js/main.js"></script>

</body>
</html>