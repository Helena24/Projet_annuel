<!DOCTYPE html>
<html>
<?php include("Functions.php"); ?>
<?php include("Connect.php"); ?>
<!-- Récupérer l'id de la recette sélectionnée pour voir le détail --> 
<?php if(isset($_POST['detail']));
$id_el = $_POST['id']; 
?>

<head>
<title>Smoothie</title>
</head> 


<!-- Récupérer le nom de la recette selon l'id qui a été sélectionné -->
<?php $smoothie = $connect->query("SELECT * FROM SMOOTHIES WHERE ID_SMOOTHIE = '$id_el'");
while ($infosmoothie = $smoothie->fetch())
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
                    <?php $aliment = $connect->query("SELECT * FROM ALIMENTS 
                    INNER JOIN CONTENIR_S ON ALIMENTS.ID_ALIMENT = CONTENIR_S.ID_ALIMENT 
                    WHERE CONTENIR_S.ID_SMOOTHIE = '$id_el'");
                    while ($infoaliment = $aliment->fetch())
                    {?>
                    Aliments <br>
                    <?php echo $infoaliment['QTE_ALIMENT_SMOOTHIE']; ?>
                    <?php echo $infoaliment['UNITE_ALIMENT_SMOOTHIE']; ?>
                    <?php echo $infoaliment['NOM_ALIMENT']; ?>
                    <?php $caloriestotales = $caloriestotales + (($infoaliment['QTE_ALIMENT_SMOOTHIE']/100) * $infoaliment['CALORIE_ALIMENT']); ?>
                    <br>
                    Calories
                    <?php
                    }
                    echo $caloriestotales; 
                    $aliment->closeCursor(); // Termine le traitement de la requête

                    ?><br>
                    <!-- Récupérer les ingrédients de la recette -->
                    <?php $ingredient = $connect->query("SELECT * FROM INGREDIENTS 
                    INNER JOIN COMPOSER_S ON INGREDIENTS.ID_INGREDIENT = COMPOSER_S.ID_INGREDIENT 
                    WHERE COMPOSER_S.ID_SMOOTHIE = '$id_el'");
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
                    $smoothie->closeCursor(); // Termine le traitement de la requête
                    ?>
                </fieldset>
            </div>
        </section> 
    </div>
</body>





</html>