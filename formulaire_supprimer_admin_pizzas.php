<!DOCTYPE html>
<html>
<head>
    <title>Formulaire A_Pizza</title>
    <link href="style.css" rel="stylesheet" /> 
       
</head>
<p>Etes vous sur ?</p>
<form  action="supprimer_admin_pizzas.php?rid=<?php echo $_GET['rid']?>" method="post">
<p>
<input type="submit" name="supprimer" value="supprimer">
<input type="submit" name="annuler" value="annuler">
</p>
</form>