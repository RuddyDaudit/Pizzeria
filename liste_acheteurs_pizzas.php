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
		<th>Name</th>
		<th>Price</th>
		</thead>
<?php		
foreach ($st as $row){
?>	
<tr>
	<td><?php echo htmlspecialchars($row['nom'])?></td>
	<td><?php echo htmlspecialchars($row['prix'])?></td>

	<td><a href='order.php?rid=<?php echo $row['rid']?>'>Commander</a></td>
</tr>

<?php
	}

echo"</table>\n";
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