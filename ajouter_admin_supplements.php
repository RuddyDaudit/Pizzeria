<?php
$page_title="Nouveau Supplement";
//include("header.php");
if(!isset($_POST['nom'])|| !isset($_POST['prix'])) {
	include("formulaire_ajouter_admin_supplements.php");
}else{
	$nom=$_POST['nom'];
	$prix=$_POST['prix'];

//Vérification
	if($nom==""|| !is_numeric($prix)|| !$prix>0){
		include("formulaire_ajouter_admin_supplements.php");
	}else{
	//connexeion a la base
		require("db_config.php");
		try{
	$db = new PDO("mysql:host=$host;dbname=$db;charset=utf8",$login,$mdp);
	$db ->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
	$SQL = "INSERT INTO supplements VALUES(DEFAULT,?,?)";
	$st = $db->prepare($SQL); 
	$res = $st-> execute(array($nom,$prix));
	if(!$res)
		echo"Erreur d'ajout";
		else echo "Ajout effectué";
		echo"<a href='liste_admin_supplements.php'>Revenir</a>";		
		$db=null;
		} catch(PDOExecption $e){
			echo"ERREUR SQL:".$e->getMEssage();
		}
	}
}
//include("footer.php");
?>	