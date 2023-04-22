<!DOCTYPE html>
<html>
<head>
</head>
<body background="drapeau-italie.gif" width="7000" height="7000">
<?php

$page_title="Modifier une pizza";

if (!isset($_GET["rid"])) {
	echo "<p>Erreur<p>\n";
}
	else {

		try {

		$rid = $_GET["rid"];
		$nom=$_POST["Nom"];
		$prix=$_POST["Prix"];
		require("db_config.php");
		$db = new PDO("mysql:host=$host;dbname=$db",$login,$mdp);
		$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

 			//vérification existence id
		$SQL = "SELECT * FROM recettes WHERE rid=?";
		$st = $db ->prepare($SQL);
		$st->execute(array($rid));
		if($st ->rowCount()==0){
		echo"<p>Erreur dans l'rid</p>\n";
		}else if(!isset($_POST['Nom']))
			{
		include("formulaire.php");
			}else
				{
		
 				// affichage du formulaire et modification
				$SQL = "UPDATE recettes SET nom =?,prix=? WHERE rid=?";
				$st = $db->prepare($SQL);
				$res = $st->execute(array($nom,$prix,$rid));
			
					if(!$res){
							echo"<p>erreur de modification</p>";
							}
					else{
						echo"<p>modification effectuée</p>";
						}
					}
	
}catch (PDOException $e){

	echo "Erreur SQL: ".$e->getMessage();
	}
}

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<a href="liste_admin_pizzas.php" class="btn btn-info" role="button">Retour</a>
</body>
</html>