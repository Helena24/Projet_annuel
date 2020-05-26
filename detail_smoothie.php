<!DOCTYPE html>
<html>
<?php include("Functions.php"); ?>
<?php include("Connect.php"); ?>

<head>
<title>Smoothie</title>
</head> 


<!-- Récupérer le nom de la recette selon l'id qui a été sélectionné -->
<?php 
//préparation de la requete
$reponse = $connect->prepare('SELECT * FROM SMOOTHIES WHERE ID_SMOOTHIE=:id');

//liaison du parametre
$reponse->bindValue(':id', $_GET['idSmoothie'], PDO::PARAM_STR);

//execution de la requete 
$reponse->execute();
while ($infosmoothie = $reponse->fetch())
{?>
<!-- Affichage du nom de la recette -->
<h2><?php echo $infosmoothie['NOM_SMOOTHIE']; ?></h2>

<body>
    <div class="wrapper">
        <section class="ajout-container">
            <div>
                <fieldset style = "border:0"> 
                    Cette recette de smoothie est faite pour 1 personne <br>
                    <!-- Récupérer les aliments de la recette -->
                    <?php $aliment = $connect->prepare("SELECT * FROM ALIMENTS 
                    INNER JOIN CONTENIR_S ON ALIMENTS.ID_ALIMENT = CONTENIR_S.ID_ALIMENT 
                    WHERE CONTENIR_S.ID_SMOOTHIE = :id");
                    //liaison du parametre
                    $aliment->bindValue(':id', $_GET['idSmoothie'], PDO::PARAM_STR);
                    //execution de la requete 
                    $aliment->execute();
                    while ($infoaliment = $aliment->fetch())
                    {?>
                    Aliments <br>
                    <?php echo $infoaliment['QTE_ALIMENT_SMOOTHIE']; ?>
                    <?php echo $infoaliment['UNITE_ALIMENT_SMOOTHIE']; ?>
                    <?php echo $infoaliment['NOM_ALIMENT']; ?>
                    <br>
                    <?php
                    }
                    $aliment->closeCursor(); // Termine le traitement de la requête

                    ?><br>
                    <!-- Récupérer les ingrédients de la recette -->
                    <?php $ingredient = $connect->prepare("SELECT * FROM INGREDIENTS 
                    INNER JOIN COMPOSER_S ON INGREDIENTS.ID_INGREDIENT = COMPOSER_S.ID_INGREDIENT 
                    WHERE COMPOSER_S.ID_SMOOTHIE = :id");
                    //liaison du parametre
                    $ingredient->bindValue(':id', $_GET['idSmoothie'], PDO::PARAM_STR);
                    //execution de la requete 
                    $ingredient->execute();
                    while ($infoingredient = $ingredient->fetch())
                    {?>
                    Ingrédients <br>
                    <?php echo $infoingredient['NOM_INGREDIENT']; ?><br>
                    <?php
                    }

                    $ingredient->closeCursor(); // Termine le traitement de la requête

                    ?>
                    Voici le déroulé de la recette : <br>
                    <?php echo $infosmoothie['DESCRIPTION_SMOOTHIE']; ?>
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