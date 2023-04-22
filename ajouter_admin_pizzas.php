<!DOCTYPE html>
<html>
<head>
</head>
<body background="drapeau-italie.gif" width="7000" height="7000">
<?php
$page_title="Nouvelle pizza";
//include("header.php");
if(!isset($_POST['nom'])|| !isset($_POST['prix'])) {
	include("formulaire_ajouter_admin_pizzas.php");
}else{
	$nom=$_POST['nom'];
	$prix=$_POST['prix'];

//Vérification
	if($nom==""|| !is_numeric($prix)|| !$prix>0){
		include("formulaire_ajouter_admin_pizzas.php");
	}else{
	//connexeion a la base
		require("db_config.php");
		 try{
	$db = new PDO("mysql:host=$host;dbname=$db;charset=utf8",$login,$mdp);
	$db ->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
	$SQL = "INSERT INTO recettes VALUES (DEFAULT,?,?)";
	$st = $db->prepare($SQL); 
	$res = $st-> execute(array($nom,$prix));
	if(!$res)
		echo"Erreur d'ajout";
		else echo "Ajout effectué: ";
		echo"<a href='liste_admin_pizzas.php'>Revenir</a>";		
		$db=null;
		} catch(PDOExecption $e){
			echo"ERREUR SQL:".$e->getMEssage();
		}
	}
}
//include("footer.php");
?>	