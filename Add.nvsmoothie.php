<!--------------------------------->
<!-- Page qui permet de faire ----->
<!-- la requete pour ajouter un --->
<!-- nouveau smoothie à la base -->
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
if(isset($_POST['ajouterSmoothie']))
{
    // Recuperation des valeurs des champs du nom et description de la recette
    $nomSmoothie=$_POST['nomSmoothie'];
    $derouleSmoothie=$_POST['derouleSmoothie'];
    
    // REquete pour ajouter ces données à la base de données
    $Requete = $connect->prepare('INSERT INTO SMOOTHIES (NOM_SMOOTHIE, DESCRIPTION_SMOOTHIE) VALUES(:nomSmoothie, :derouleSmoothie)');
    $Requete->bindValue(":nomSmoothie",$nomSmoothie, PDO::PARAM_STR);
    $Requete->bindValue(":derouleSmoothie",$derouleSmoothie, PDO::PARAM_STR);
    $Requete->execute();
}

// Si l'utilisateur appuie sur le bouton ajouter
// On le fait après la requete précédente car le nom du smoothie a été ajouté
// Il a donc un id et on peut ajouter les aliments, ingrédients.... 
if(isset($_POST['ajouterSmoothie']))
{
    //Recupération de l'id de la recette qui vient d'être ajouté à la base de donnée
    $nomSmoothie=$_POST['nomSmoothie'];
    $Requete = $connect->prepare('SELECT ID_SMOOTHIE FROM SMOOTHIES WHERE NOM_SMOOTHIE="'.$nomSmoothie.'"');
    $Requete->execute();
    $resultat=$Requete->fetch();
    // Stockage de l'id dans la variable $idSmoothie
    $idSmoothie = $resultat['ID_SMOOTHIE'];
    
    // On parcourt tous les champs ingrédients qui ont été saisis
    foreach($_POST['ingredient'] as $ingredient)
    {
        // Requete pour insérer les ingrédients au smoothie correspondant
        $RequeteInsertI = $connect->prepare('INSERT INTO COMPOSER_S (ID_SMOOTHIE, ID_INGREDIENT) 
        VALUES("'.$resultat['ID_SMOOTHIE'].'",
        (SELECT ID_INGREDIENT FROM INGREDIENTS WHERE NOM_INGREDIENT="'.$ingredient.'"))');
        $RequeteInsertI->execute();
    }
}
// Si l'utilisateur appuie sur le bouton ajouter
if(isset($_POST['ajouterSmoothie']))
{
    //Recupération de l'id de la recette qui vient d'être ajouté à la base de donnée
    $nomSmoothie=$_POST['nomSmoothie'];
    $Requete = $connect->prepare('SELECT ID_SMOOTHIE FROM SMOOTHIES WHERE NOM_SMOOTHIE="'.$nomSmoothie.'"');
    $Requete->execute();
    $resultat=$Requete->fetch();
    // Stockage de l'id dans la variable $idSmoothie
    $idSmoothie = $resultat['ID_SMOOTHIE'];
    // Création d'un compteur pour savoir dans quelle case du tableau on va stocker l'id de l'aliment
    $compteur = 0;
    // Création d'un tableau qui va accueillir les id des différents aliments de la recette
    $idAl = $array;

    // On parcourt tous les champs aliments
    foreach($_POST['aliment'] as $aliment)
    {
        // On incrément le compteur
        $compteur += 1;
        // Requete pour ajouter les aliments un par un, relié à l'id du smoothie
        $RequeteInsertS = $connect->prepare('INSERT INTO CONTENIR_S (ID_SMOOTHIE, ID_ALIMENT) 
        VALUES("'.$resultat['ID_SMOOTHIE'].'",
        (SELECT ID_ALIMENT FROM ALIMENTS WHERE NOM_ALIMENT="'.$aliment.'"))');
        $RequeteInsertS->execute();
        // Recuperation de l'id de l'aliment qui vient d'etre ajouté au smoothie
        $RecupIdAl = $connect->prepare('SELECT ID_ALIMENT FROM ALIMENTS WHERE NOM_ALIMENT="'.$aliment.'"');
        $RecupIdAl->execute();
        // Recuperation de l'id dans la variable $idAlR
        $idAlR=$RecupIdAl->fetch();
        // Ajout de l'id de l'aliment dans une case du tableau
        $idAl[$compteur]=$idAlR['ID_ALIMENT'];
    }

    // Compteur prend la valeur 0
    $compteur = 0;
        
    // On parcourt tous les champs quantités
    foreach($_POST['quantite'] as $quantiteAliment)
    {
        // On incrémente le compteur
        $compteur += 1;
        // On fait la requete pour mettre à jour la table contenir pour ajouter la valeur de la quantité de l'aliment
        // On ajoute la quantité dans la table contenir correpondant au smoothie ajouté 
        // On ajoute la quantité dans la table contenir pour l'aliment spécifié  
        $RequeteUpdateQ = $connect->prepare("UPDATE CONTENIR_S 
        SET QTE_ALIMENT_SMOOTHIE =  '$quantiteAliment' 
        WHERE ID_SMOOTHIE = '$idSmoothie'
        AND ID_ALIMENT = '$idAl[$compteur]'");
        $RequeteUpdateQ->execute();
    }

    // Compteur prend la valeur  0
    $compteur = 0;

    // On parcourt tous les champs unités
    foreach($_POST['unite'] as $uniteAliment)
    {
        // On incrémente le compteur
        $compteur += 1;
        // On fait la requete pour mettre à jour la table contenir pour ajouter la valeur de l'unite de l'aliment
        // On ajoute l'unite dans la table contenir correpondant au smoothie ajouté 
        // On ajoute l'unite dans la table contenir pour l'aliment spécifié 
        $RequeteUpdateU = $connect->prepare("UPDATE CONTENIR_S 
        SET UNITE_ALIMENT_SMOOTHIE =  '$uniteAliment' 
        WHERE ID_SMOOTHIE = '$idSmoothie'
        AND ID_ALIMENT = '$idAl[$compteur]'");
        $RequeteUpdateU->execute();
    }

}

// Affichage d'une pop-up avec le texte suivant
$message = "Smoothie ajouté";
echo '<script type="text/javascript">window.alert("'.$message.'");
window.location.replace("nv_smoothie.php");
</script>'; 
?>



</body> 
</html> 