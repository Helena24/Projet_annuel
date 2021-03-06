<!-------------------------------->
<!-- Page qui permet de voir ----->
<!-- les détails de la recette --->
<!-- sélectionnée dans le -------->
<!-- tableau --------------------->
<!-------------------------------->

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
    <!-- Nom de l'onglet -->
    <title>Recette</title>
</head> 


<!-- Récupérer le nom de la recette selon l'id qui a été sélectionné -->
<?php 
    //préparation de la requete
    $reponse = $connect->prepare('SELECT * FROM RECETTES WHERE ID_RECETTE=:id');

    //liaison du parametre
    $reponse->bindValue(':id', $_GET['idRecette'], PDO::PARAM_STR);

    //execution de la requete 
    $reponse->execute();
    
    // Recuperation de toutes les informations sur la recette sélectionnée
    while ($inforecette = $reponse->fetch())
    {?>

<!-- Affichage du nom de la recette -->
<h2><?php echo $inforecette['NOM_RECETTE']; ?></h2>

<body>
    <div class="wrapper">
        <section class="ajout-container">
            <div>
                <fieldset style = "border:0"> 
                    Cette recette est faite pour <?php 
                    // Nombre de parts de la recette
                    echo $inforecette['NOMBRE_PART_RECETTE']; 
                    ?> personne(s) <br>
                    Aliments <br>
                    <!-- Récupérer les aliments de la recette -->
                    <?php $aliment = $connect->prepare("SELECT * FROM ALIMENTS 
                    INNER JOIN CONTENIR ON ALIMENTS.ID_ALIMENT = CONTENIR.ID_ALIMENT 
                    WHERE CONTENIR.ID_RECETTE = :id");
                    //liaison du parametre
                    $aliment->bindValue(':id', $_GET['idRecette'], PDO::PARAM_STR);
                    //execution de la requete 
                    $aliment->execute();
                    while ($infoaliment = $aliment->fetch())
                    {?>
                    <?php echo $infoaliment['QTE_ALIMENT_RECETTE']; ?>
                    <?php echo $infoaliment['UNITE_ALIMENT_RECETTE']; ?>
                    <?php echo $infoaliment['NOM_ALIMENT']; ?>
                    <br>
                    <?php
                    }
                    $aliment->closeCursor(); // Termine le traitement de la requête
                    ?>                   Ingrédients <br>
                    <!-- Récupérer les ingrédients de la recette -->
                    <?php $ingredient = $connect->prepare("SELECT * FROM INGREDIENTS 
                    INNER JOIN COMPOSER ON INGREDIENTS.ID_INGREDIENT = COMPOSER.ID_INGREDIENT 
                    WHERE COMPOSER.ID_RECETTE = :id");
                    //liaison du parametre
                    $ingredient->bindValue(':id', $_GET['idRecette'], PDO::PARAM_STR);
                    //execution de la requete 
                    $ingredient->execute();
                    while ($infoingredient = $ingredient->fetch())
                    {?>
                    <?php echo $infoingredient['NOM_INGREDIENT']; ?>
                    <br>
                    <?php
                    }

                    $ingredient->closeCursor(); // Termine le traitement de la requête

                    ?>
                    Voici le déroulé de la recette : <br>
                    <?php 
                    // Affichage du déroulé de la recette
                    echo $inforecette['DESCRIPTION_RECETTE']; 
                    ?>
                    <?php
                    }
                    $reponse->closeCursor(); // Termine le traitement de la requête
                    ?>
                </fieldset>
            </div>
        </section> 
    </div>
</body>





</html>