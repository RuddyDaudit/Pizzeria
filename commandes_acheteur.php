<!DOCTYPE html>
<html>
<head>
</head>
<body background="drapeau-italie.gif" width="7000" height="7000">
<?php
include("boos3.php");
require("auth/EtreAuthentifie.php");
require("db_config.php");

try {
$uid = $idm->getUid();
$db = new PDO("mysql:host=$host;dbname=$db",$login,$mdp);
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$SQL = "SELECT * FROM commandes WHERE commandes.uid = $uid ";


$st = $db->prepare($SQL);
$res = $st -> execute();
//$row = $st -> fetch();
    if($st->rowCount()==0){
        echo"<p>La liste est vide";
    }
    else{
        ?> <table class= "table table-striped">
        <thead>
        <th>Cid</th>
        <th>Ref</th>
        <th>Uid</th>
        <th>Rid</th>
        <th>Date</th>
        <th>Statut</th>
        </thead>
<?php       
foreach ($st as $row){
?>  
<tr>
    <td><?php echo htmlspecialchars ($row['cid'])?></td>
    <td><?php echo htmlspecialchars ($row['ref'])?></td>
    <td><?php echo htmlspecialchars ($row['uid'])?></td>
    <td><?php echo htmlspecialchars ($row['rid'])?></td>
    <td><?php echo htmlspecialchars ($row['date'])?></td>
    <td><?php echo htmlspecialchars ($row['statut'])?></td>
    
</tr>

<?php
    }

echo"</table>\n";
echo "<p><a href='logout.php' role='button'>Logout</a>";
echo "<p><a href='home.php'>Retour</a>";
    }
}
catch(PDOException $e){

echo("Erreur de connexion" .$e->getMessage());
}

?>

</body>
</html>