<!-------------------------------->
<!-- Page qui permet de faire ---->
<!-- la requete pour ajouter un -->
<!-- nouvel aliment à la base  --->
<!-- de données ------------------>

<!------------------------------->

<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="UTF8" />
        <!-- Texte affiché dans l'onglet ---->
        <title> Ajout Aliment</title>
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
    // Recuperation du nom de l'aliment dans le champ du formulaire
    $nomAliment=$_POST['nomAliment'];
    // Recuperation de la categorie de l'aliment dans le champ du formulaire
    $option = isset($_POST['categorieAliment']) ? true : false; //toujours basé sur l'attribut name du select
    if($option) {
        $valueCategorie = htmlentities($_POST['categorieAliment'], ENT_QUOTES, "UTF-8"); //permet de protéger tout les caractères spéciaux
        //ensuite requête pour ajouter en base ...
    } else {
        echo "Task option is required";
        exit; 
    }
    // Ajout des différents champs du formulaire à la base de données
    $calorieAliment=$_POST['calorieAliment'];
    $proteineAliment=$_POST['proteineAliment'];
    $glucideAliment=$_POST['glucideAliment'];
    $lipideAliment=$_POST['lipideAliment'];

    // Requete pour ajouter à la base de données
	$Requete = $connect->prepare('INSERT INTO ALIMENTS (NOM_ALIMENT,CATEGORIE_ALIMENT,CALORIE_ALIMENT,PROTEINE_ALIMENT,GLUCIDE_ALIMENT,LIPIDE_ALIMENT) 
    VALUES(:nomAliment, :categorieAliment, :calorieAliment, :proteineAliment, :glucideAliment, :lipideAliment)');
	$Requete->bindValue(":nomAliment",$nomAliment, PDO::PARAM_STR);
	$Requete->bindValue(":categorieAliment",$valueCategorie, PDO::PARAM_STR);
    $Requete->bindValue(":calorieAliment",$calorieAliment, PDO::PARAM_STR);
    $Requete->bindValue(":proteineAliment",$proteineAliment, PDO::PARAM_STR);
    $Requete->bindValue(":glucideAliment",$glucideAliment, PDO::PARAM_STR);
    $Requete->bindValue(":lipideAliment",$lipideAliment, PDO::PARAM_STR);
	$Requete->execute();
}

// Affichage d'une pop-up avec le message suivant
$message = "Aliment ajouté";
echo '<script type="text/javascript">window.alert("'.$message.'");
window.location.replace("nv_aliment.php");
</script>'; 

?>

</body> 
</html> 