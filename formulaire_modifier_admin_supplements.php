<!DOCTYPE html>
<html>
<head>
    <title>Connexion</title>
    <link href="style.css" rel="stylesheet" /> 
       
</head>
<div class="titre">MODIFIER SUPP </div> 

<form action = "modifier_admin_supplements.php?sid=<?php echo $_GET["sid"]?>" method ="post">
	
	Nom:
	
	<input type="text" name="Nom"/>

	Prix:
	
	<input type="number" step="0.01" name="Prix"/>

	<input type="submit" value="Envoyer"/>
</form>

