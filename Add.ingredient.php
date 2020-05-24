<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="UTF8" />
        <title>Ajout ingrédient</title>
    </head>
    <body>
<?php
include("Connect.php");
include("Functions.php");

if(isset($_POST['add']))
{
    $nomIngredient=$_POST['nomIngredient'];

	$Requete = $connect->prepare('INSERT INTO INGREDIENTS (NOM_INGREDIENT) 
    VALUES(:nomIngredient)');
	$Requete->bindValue(":nomIngredient",$nomIngredient, PDO::PARAM_STR);
	$Requete->execute();
}

?>

</body> 
</html> 