<?php session_start();

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
<body>
<!-- En-tête commune -->
<header class="container-fluid">          
        <!--Navbar-->
  <nav class="navbar navbar-expand-lg navbar-dark">
      <a class="navbar-brand" href="index.php"><i class="fas fa-video fa-3x"></i>&nbsp;3W Cine - Boutique de films en HD</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">  
      <ul class="navbar-nav mr-auto"> 
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
              <a class="nav-link" href="afficher_panier/cart.php"><i class="fas fa-shopping-cart"></i>&nbsp;&nbsp;Panier</a>
          </li>
          <li>
              <a class="nav-link" href="controller/logout.php" id="logout"><i class="fas fa-sign-out-alt"></i>&nbsp;&nbsp;Déconnexion </a>
          </li>                                       
          <?php endif; ?>            
      </ul>
    </div>
  </nav>
<!--/.Navbar-->
</header>

<!-- Affichage du template lié à la vue -->
<main>        
    <div class="container">     
        </div>
                     
        <div>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2633.5104792429142!2d1.8529849514264758!3d48.695723179170166!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e4277af2099eed%3A0xd0baa765a98e80b9!2s39%20Rue%20de%20Paris%2C%2078610%20Le%20Perray-en-Yvelines!5e0!3m2!1sfr!2sfr!4v1580251827392!5m2!1sfr!2sfr" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>    
    
    </div> 
    <h5 class="contact"><i class="fas fa-map-marked-alt"></i>&nbsp;&nbsp;Adresse: rue de Paris, 78610 Le Perray en Yvelines.</h5> 
    <h5 class="contact"><i class="fas fa-phone"></i>&nbsp;&nbsp;Téléphone: 06 42 12 33 94.</h5> 
    <h5 class="contact"><i class="fas fa-envelope"></i>&nbsp;&nbsp;Email: bruno-soares@legtux.org.</h5> 
</main>
<footer>
    <div></div>
    <small>3W Cine - Boutique de films en HD &copy; - <?php echo date('Y');?></small> 
    <p><small>Réalisé avec &nbsp; <i class="fas fa-heart"></i> &nbsp; par Bruno Soares</small></p>    
</footer>
<!-- Code principal JavaScript de l'application -->
<script src="js/main.js"></script>
</body>
</html>   
