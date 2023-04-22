<!DOCTYPE html>
<html lang ="fr">
<head>
    <title>Carte</title>
    <meta charset="utf-8">
	
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>

	
<body>
<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span> 
      </button>
      <a class="navbar-brand" href="carte.php">Jenny&Marvin Pizza</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="login.php" class ="button">CONNECTION</a></li>
			<li><a href="adduser.php" class ="button">INSCRIPTION</a></li>
      </ul>
    </div>
  </div>
</nav>
<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img src="front.jpg" alt="Classic">
      <div class="carousel-caption">
        <h3>Classic.</h3>
        <p>Tout Les Chemins Mène A Rome.</p>
      </div> 
    </div>

    <div class="item">
      <img src="pizza-4-fromages.jpg" alt="4 Fromagi" width="6000" height="6000">
      <div class="carousel-caption">
        <h3>4 Fromagi</h3>
        <p>4 Saisons De Fromage.</p>
      </div> 
    </div>

    <div class="item">
      <img src="plat.jpg" alt="Supplements" width="6000" height="6000">
      <div class="carousel-caption">
        <h3>Supplements</h3>
        <p>Erichissez Votre Plat.</p>
      </div> 
    </div>
  </div>
  	
  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>


<style>
/* Add a dark background color to the footer */
footer {
    background-color: #2d2d30;
    color: #f5f5f5;
    padding: 32px;
}

footer a {
    color: #f5f5f5;
}

footer a:hover {
    color: #777;
    text-decoration: none;
}
</style>


<footer class="text-center">
  <a class="up-arrow" href="#myPage" data-toggle="tooltip" title="TO TOP">
    <span class="glyphicon glyphicon-chevron-up"></span>
  </a><br><br>
  <p>Ouverture du restaurant: Lundi au Samedi de 11h30 à 23h00.<a href="https://www.w3schools.com" data-toggle="tooltip" title="Visit w3schools"></a></p> 
</footer>
</body>

</html>

