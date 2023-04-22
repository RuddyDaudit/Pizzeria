<!DOCTYPE html>
<html>
<head>
</head>
<body background="drapeau-italie.gif" width="7000" height="7000">
<?php


//include("header.php");

if(!isset($_GET['rid'])) {

    echo"<p><a href='liste_acheteurs_pizzas'>return</a>";

}else{

    $rid=$_GET['rid'];

require("db_config.php");
         try{
    
    $db = new PDO("mysql:host=$host;dbname=$db;charset=utf8",$login,$mdp);
    
    $db ->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    
    $SQL="INSERT INTO commandes VALUES(DEFAULT,?,DEFAULT,DEFAULT,?,?)";
    
        $st = $db->prepare($SQL); 
        $res = $st-> execute(array($rid));
    
    if(!$res)
       
        echo"Erreur d'ajout";
        else echo "Ajout effectué: ";     
        $db=null;
       
        } catch(PDOExecption $e){
            echo"ERREUR SQL:".$e->getMEssage();
    
        }
    
    }

?>