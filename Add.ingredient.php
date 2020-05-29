<!--------------------------------->
<!-- Page qui permet de faire ----->
<!-- la requete pour ajouter un --->
<!-- nouvel ingrédient à la base -->
<!-- de données ------------------->
<!--------------------------------->

<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="UTF8" />
        <!-- Texte affiché dans l'onglet ---->
        <title>Ajout ingrédient</title>
    </head>
    <body>
<?php
// Appel de la page qui permet de connecter à la base de données
include("Connect.php");
// Appel de la fonction pour afficher l'entête selon l'utilisateur
include("Functions.php");

// Si l'utilisateur appuie sur le bouton ajouter
if(isset($_POST['add']))
{
    // Recupération du nom de l'ingredient dans le champ du formulaire
    $nomIngredient=$_POST['nomIngredient'];

    // Requete pour ajouter le nouvel ingrédient dans la base de données
	$Requete = $connect->prepare('INSERT INTO INGREDIENTS (NOM_INGREDIENT) 
    VALUES(:nomIngredient)');
	$Requete->bindValue(":nomIngredient",$nomIngredient, PDO::PARAM_STR);
	$Requete->execute();
}

// Affichage d'une pop-up avec le message suivant
$message = "Ingrédient ajouté";
echo '<script type="text/javascript">window.alert("'.$message.'");
window.location.replace("nv_ingredient.php");
</script>'; 

?>

</body> 
</html> 