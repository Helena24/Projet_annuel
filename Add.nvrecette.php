<!--------------------------------->
<!-- Page qui permet de faire ----->
<!-- la requete pour ajouter une --->
<!-- nouvelle recette à la base -->
<!-- de données ------------------->
<!--------------------------------->

<!DOCTYPE html>
<html>
<?php 
    // Appel de la fonction pour afficher l'entête selon l'utilisateur
    include("Functions.php"); 
?>
<?php 
    // Appel de la page qui permet de connecter à la base de données
    include("Connect.php"); 
?>
    <head>
        <!-- Texte affiché dans l'onglet ---->
        <title> Ajout Smoothie</title>
    </head>
<body>

<?php
// Si l'utilisateur appuie sur le bouton ajouter
if(isset($_POST['ajouterRecette']))
{
    // Recuperation des valeurs des champs du nom, nombre de part et description de la recette
    $nomRecette=$_POST['nomRecette'];
    $nbPart=$_POST['nbPart'];
    $derouleRecette=$_POST['derouleRecette'];

    // REquete pour ajouter ces données à la base de données
	$Requete = $connect->prepare('INSERT INTO RECETTES (NOM_RECETTE, NOMBRE_PART_RECETTE, DESCRIPTION_RECETTE) VALUES(:nomRecette, :nbPart, :derouleRecette)');
	$Requete->bindValue(":nomRecette",$nomRecette, PDO::PARAM_STR);
    $Requete->bindValue(":nbPart",$nbPart, PDO::PARAM_STR);
    $Requete->bindValue(":derouleRecette",$derouleRecette, PDO::PARAM_STR);
    $Requete->execute();
}

// Si l'utilisateur appuie sur le bouton ajouter
// On le fait après la requete précédente car le nom de la recette a été ajoutée
// Elle a donc un id et on peut ajouter les aliments, ingrédients.... 
if(isset($_POST['ajouterRecette']))
{
    //Recupération de l'id de la recette qui vient d'être ajouté à la base de donnée
    $nomRecette=$_POST['nomRecette'];
    $Requete = $connect->prepare('SELECT ID_RECETTE FROM RECETTES WHERE NOM_RECETTE="'.$nomRecette.'"');
    $Requete->execute();
    $resultat=$Requete->fetch();
    // Stockage de l'id dans la variable $idRecette
    $idRecette = $resultat['ID_RECETTE'];
    // Création d'un compteur pour savoir dans quelle case du tableau on va stocker l'id de l'aliment
    $compteur = 0;
    // Création d'un tableau qui va accueillir les id des différents aliments de la recette
    $idAl = $array;

    // On parcourt tous les champs qui contiennent les noms des aliments qui ont été ajoutés
    foreach($_POST['aliment'] as $aliment)
    {
        // On incrémentre le compteur à chaque fois
        $compteur += 1;
        // Requete pour inserer les ID des aliments un par un dans la table contenir relié à l'id de la recette 
        $RequeteInsertA = $connect->prepare('INSERT INTO CONTENIR (ID_RECETTE, ID_ALIMENT) 
        VALUES("'.$resultat['ID_RECETTE'].'",
        (SELECT ID_ALIMENT FROM ALIMENTS WHERE NOM_ALIMENT="'.$aliment.'"))');
        $RequeteInsertA->execute();
        // Requete pour récupérer l'id de l'aliment qui vient d'être ajouté à la recette
        $RecupIdAl = $connect->prepare('SELECT ID_ALIMENT FROM ALIMENTS WHERE NOM_ALIMENT="'.$aliment.'"');
        $RecupIdAl->execute();
        // Recuperation de l'id de l'aliment dans la variable
        $idAlR=$RecupIdAl->fetch();
        // Ajout de l'id de l'aliment dans une case du tableau
        $idAl[$compteur]=$idAlR['ID_ALIMENT'];
    }

    // On remet le compteur à 0 
    $compteur = 0;

    // On parcourt tous les champs quantités qui ont été saisi
    foreach($_POST['quantite'] as $quantiteAliment)
    {
        // On incrémente le compteur à chaque fois
        $compteur += 1;
        // On fait la requete pour mettre à jour la table contenir pour ajouter la valeur de la quantité de l'aliment
        // On ajoute la quantité dans la table contenir correpondant à la recette ajoutée 
        // On ajoute la quantité dans la table contenir pour l'aliment spécifié 
        $RequeteUpdateQ = $connect->prepare("UPDATE CONTENIR 
        SET QTE_ALIMENT_RECETTE =  '$quantiteAliment' 
        WHERE ID_RECETTE = '$idRecette'
        AND ID_ALIMENT = '$idAl[$compteur]'");
        $RequeteUpdateQ->execute();
    }

    // On remet le compteur à 0 
    $compteur = 0;
 
    // On parcourt tous les champs unités qui ont été saisi
    foreach($_POST['unite'] as $uniteAliment)
    {
        // On incrémente le compteur de 1
        $compteur += 1;
        // On fait la requete pour mettre à jour la table contenir pour ajouter la valeur de l'unite de l'aliment
        // On ajoute l'unite dans la table contenir correpondant à la recette ajoutée 
        // On ajoute l'unite dans la table contenir pour l'aliment spécifié 
        $RequeteUpdateU = $connect->prepare("UPDATE CONTENIR 
        SET UNITE_ALIMENT_RECETTE =  '$uniteAliment' 
        WHERE ID_RECETTE = '$idRecette'
        AND ID_ALIMENT = '$idAl[$compteur]'");
        $RequeteUpdateU->execute();
    }
    
    // On parcourt tous les champs ingrédients qui ont été saisis
    foreach($_POST['ingredient'] as $ingredient)
    {
        // Requete pour insérer les ingrédients à la recette correspondante
        $RequeteInsertI = $connect->prepare('INSERT INTO COMPOSER (ID_RECETTE, ID_INGREDIENT) 
        VALUES("'.$resultat['ID_RECETTE'].'",
        (SELECT ID_INGREDIENT FROM INGREDIENTS WHERE NOM_INGREDIENT="'.$ingredient.'"))');
        $RequeteInsertI->execute();
    }

  
}

// Affichage d'une pop-up avec le texte suivant
$message = "Recette ajoutée";
echo '<script type="text/javascript">window.alert("'.$message.'");
window.location.replace("nv_recette.php");
</script>'; 
?>



</body> 
</html> 