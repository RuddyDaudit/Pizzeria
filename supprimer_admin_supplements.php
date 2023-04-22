<!DOCTYPE html>
<html>
<head>
</head>
<body background="drapeau-italie.gif" width="7000" height="7000">
<?php

$page_title = "Supprimer Pizza";
//include("header.php");

if (!isset($_GET['sid'])) {
	echo"<p>ERREUR </p>\n";
}else if(!isset($_POST['supprimer']) && !isset($_POST['annuler']) ) {
	include ("formulaire_supprimer_admin.php");
}else if (isset($_POST['annuler'])) {
	echo"<p>Opération annulée\n<p>";
	} else {
		//supprimer
		require("db_config.php");
		try{
		$db = new PDO("mysql:host=$host;dbname=$db",$login,$mdp);
		$db ->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
		$SQL = "DELETE FROM supplements WHERE sid=?";
		$sid=$_GET['sid'];
		$st = $db->prepare($SQL);
		$st->execute([$sid]);
		
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
	echo"<a href ='liste_admin_supplements.php'>Revenir</a> à la page d'acceuil";
	//include("footer.php");