<!DOCTYPE html>
<html>
<head>
    <title>Formulaire A_Pizza</title>
    <link href="style.css" rel="stylesheet" /> 
       
</head>
<body>
<div class ="ajouter">Ajouter un Supplement: </div>
<form action = "ajouter_admin_supplements.php" method ="post">
	<table class="center">	
<tr><td>Nom</td><td><input type ="text" name="nom" /></td></tr>
<tr><td>Prix</td><td><input type ="number" step="0.01" name="prix" /></td></tr>
	</table>
<input type="submit" value="Envoyer" onclick="ajouter_admin_supplements.php">
</form>