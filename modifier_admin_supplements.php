
<?php

$page_title="Modifier un supplement";

if (!isset($_GET['sid'])) {
	echo "<p>Erreur<p>\n";
}
	else {

		try {

		$sid = $_GET['sid'];
		$nom=$_POST['Nom'];
		$prix=$_POST['Prix'];
		require("db_config.php");
		$db = new PDO("mysql:host=$host;dbname=$db",$login,$mdp);
		$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

 			//vérification existence id
		$SQL = "SELECT * FROM supplements WHERE sid=?";
		$st = $db ->prepare($SQL);
		$st->execute(array($sid));
		if($st ->rowCount()==0){
		echo"<p>Erreur dans l'sid</p>\n";
		}else if(!isset($_POST['Nom']))
			{
		include("formulaire_modifier_admin_supplements.php");
			}else
				{
		
 				// affichage du formulaire et modification
				$SQL = "UPDATE supplements SET nom =?,prix=? WHERE sid=?";
				$st = $db->prepare($SQL);
				$res = $st->execute(array($nom,$prix,$sid));
			
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
<a href="liste_admin_supplements.php" class="btn btn-info" role="button">Retour</a>
</body>
</html>