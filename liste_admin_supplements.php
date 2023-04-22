
<!DOCTYPE html>
<html>
<head>
</head>
<body background="drapeau-italie.gif" width="7000" height="7000">
<?php
include("boos2.php");
require("db_config.php");

try {
$db = new PDO("mysql:host=$host;dbname=$db",$login,$mdp);

$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$SQL = "SELECT * FROM supplements";

$st = $db->prepare($SQL);
$res = $st -> execute();
//$row = $st -> fetch();
	if($st->rowCount()==0){
		echo"<p>La liste est vide";
	}
	else{
		?> <table class= "table table-striped">
		<thead>
		<th>Sid</th>
		<th>Name</th>
		<th>Price</th>
		<th>Modifier</th>
		<th>Supprimer</th>
		</thead>
<?php		
foreach ($st as $row){
?>	
<tr>
	<td><?php echo htmlspecialchars ($row['sid'])?></td>
	<td><?php echo htmlspecialchars($row['nom'])?></td>
	<td><?php echo htmlspecialchars($row['prix'])?></td>
	
	<td><a href='formulaire_modifier_admin_supplements.php?sid=<?php echo $row['sid']?>'>Modifier</a></td>
	<td><a href='formulaire_supprimer_admin_supplements.php?sid=<?php echo $row['sid']?>'>Supprimer</a></td>
</tr>

<?php
	}

echo"</table>\n";
echo "<p><a href='formulaire_ajouter_admin_supplements.php'>Ajouter</a>";
echo "<p><a href='logout.php'>Logout</a>";
echo "<p><a href='home.php'>Retour</a>";
	}
}
catch(PDOException $e){

echo("Erreur de connexion" .$e->getMessage());
}

?>

</body>
</html>