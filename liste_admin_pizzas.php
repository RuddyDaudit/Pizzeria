<!DOCTYPE html>
<html>
<head>
</head>
<body background="drapeau-italie.gif" width="7000" height="7000">
<?php
include("boos.php");
require("db_config.php");

try {
$db = new PDO("mysql:host=$host;dbname=$db",$login,$mdp);

$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$SQL = "SELECT * FROM recettes";

$st = $db->prepare($SQL);
$res = $st -> execute();
//$row = $st -> fetch();
	if($st->rowCount()==0){
		echo"<p>La liste est vide";
	}
	else{
		?> <table class= "table table-striped">
		<thead>
		<th>Rid</th>
		<th>Name</th>
		<th>Price</th>
		<th>Modifier</th>
		<th>Supprimer</th>
		</thead>
		<?php		
foreach ($st as $row){
?>	
<tr>
	<td><?php echo htmlspecialchars ($row['rid'])?></td>
	<td><?php echo htmlspecialchars($row['nom'])?></td>
	<td><?php echo htmlspecialchars($row['prix'])?></td>
	
	<td><a href='formulaire_modifier_admin_pizzas.php?rid=<?php echo $row['rid']?>'>Modifier</a></td>
	<td><a href='formulaire_supprimer_admin_pizzas.php?rid=<?php echo $row['rid']?>'>Supprimer</a></td>
</tr>

<?php
	}

echo"</table>\n";
echo "<p><a href='formulaire_ajouter_admin_pizzas.php'>Ajouter</a>";
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