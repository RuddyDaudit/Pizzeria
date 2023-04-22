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

    
<body background="drapeau-italie.gif">

<?php

require("auth/EtreAuthentifie.php");

$title = 'Accueil';
include("header.php");

?>

<a href="<?= $pathFor['logout'] ?>" title="Logout">Logout </a>
<?php

echo "Hello " . $idm->getIdentity().". Your uid is: ". $idm->getUid() .". Your role is: ".$idm->getRole();

//echo "Escaped values: ".$e_($ci->idm->getIdentity());

if($idm->getRole() == "admin"){
		echo" ";	
		echo"<a href='liste_admin_pizzas.php'>Pizza</a>";
		echo" ";
		echo"<a href='liste_admin_supplements.php'>Supplements</a>";
		echo" ";
		echo"<a href='commande.php'>Commande</br></a>";	
}else{
		echo" ";
		echo"<a href='liste_acheteurs_pizzas.php'>Pizza</a>";
		echo" ";
		echo"<a href='liste_acheteurs_supplements.php'>Supplements</a>";
		echo" ";
		echo"<a href='order1.php'>Commandes</a>";
		echo" ";
		echo"<a href='commandes_acheteur.php'>Liste des commandes</a>";
}
include("t.php");