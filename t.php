<!DOCTYPE html>
<html>
<head>
     <title>Home</title>
    <meta charset="utf-8">
	
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
       
</head>

    
<body>

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
      <img src="front.jpg" alt="New York">
      <div class="carousel-caption">
        <h3>Pizza</h3>
        <p>La Saveur D'Une Vraie Pizza Italienne.</p>
      </div> 
    </div>

    <div class="item">
      <img src="plat.jpg" width="7000" alt="Chicago">
      <div class="carousel-caption">

        <h3>Supplements</h3>
        <p>Améliorer Votre Pizza.</p>
      </div> 
    </div>

    <div class="item">
      <img src="homer.jpg" width="7000" alt="Hhm Pizza!!">
      <div class="carousel-caption">
        <h3>Commandes</h3>
        <p>Il Est Temps De Passer A Table.</p>
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
    padding: 150px;
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
  <p>Ouverture du restaurant: Lundi au Samedi de 11h30 à 23h00. <a href="https://www.w3schools.com" data-toggle="tooltip" title="Visit w3schools"></a></p> 
</footer>