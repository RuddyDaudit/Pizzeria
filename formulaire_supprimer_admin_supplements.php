<!DOCTYPE html>
<html>
<head>
    <title>Connexion</title>
    <link href="style.css" rel="stylesheet" /> 
       
</head>
<p>Etes vous sur ?</p>
<form  action="supprimer_admin_supplements.php?sid=<?php echo $_GET['sid']?>" method="post">
<p>
<input type="submit" name="supprimer" value="supprimer">
<input type="submit" name="annuler" value="annuler">
</p>
</form>