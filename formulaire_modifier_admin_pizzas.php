<!DOCTYPE html>
<html>
<head>
    <title>Connexion</title>
    <link href="style.css" rel="stylesheet" /> 
       
</head>
<body>
<div class="titre">MODIFIER </div> 

<form action = "modifier_admin_pizzas.php?rid=<?php echo $_GET['rid']?>" method ="post">
	
	Nom:
	
	<input type="text" name="Nom">

	Prix:
	
	<input type="number" step="0.01" name="Prix">

	<input type="submit" value="Envoyer" >
</form>

