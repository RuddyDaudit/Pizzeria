<!DOCTYPE html>
<html>
<head>
</head>
<body background="drapeau-italie.gif" width="7000" height="7000">
<?php

$page_title = "Supprimer Pizza";
//include("header.php");

if (!isset($_GET['rid'])) {
	echo"<p>ERREUR </p>\n";
}else if(!isset($_POST['supprimer']) && !isset($_POST['annuler']) ) {
	include ("formulaire_supprimer_admin.php");
}else if (isset($_POST['annuler'])) {
	echo"Operation annulee";
	} else {
		//supprimer
		require("db_config.php");
		
		try{
		$db = new PDO("mysql:host=$host;dbname=$db",$login,$mdp);
		$db ->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
		$SQL = "DELETE FROM recettes WHERE rid=?";
		$rid=$_GET['rid'];
		$st = $db->prepare($SQL);
		$st->execute([$rid]);
		
		if(!$st){
			echo "<p>Erreur de suppression<p>\n";
		}
		else echo"<p>La suppression a été éffectuée<p>";
		$db=null;
	}
		catch(PDOExecption $e){
			echo"Erreur SQL:".$e->getMessage();
	} 
}
	echo"<a href ='liste_admin_pizzas.php'>Revenir</a> à la page d'acceuil";
	//include("footer.php");