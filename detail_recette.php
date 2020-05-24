<!DOCTYPE html>
<html>
<?php include("Functions.php"); ?>
<?php include("Connect.php"); ?>
<!-- Récupérer l'id de la recette sélectionnée pour voir le détail --> 
<?php if(isset($_POST['detail']));
$id_el = $_POST['id']; 
?>

<head>
<title>Recette</title>
</head> 


<!-- Récupérer le nom de la recette selon l'id qui a été sélectionné -->
<?php $recette = $connect->query("SELECT * FROM RECETTES WHERE ID_RECETTE = '$id_el'");
while ($inforecette = $recette->fetch())
{?>
<!-- Affichage du nom de la recette -->
<h2><?php echo $inforecette['NOM_RECETTE']; ?></h2>

<body>
    <div class="wrapper">
        <section class="ajout-container">
            <div>
                <fieldset style = "border:0"> 
                    Cette recette est faite pour <?php echo $inforecette['NOMBRE_PART_RECETTE']; ?> personne(s) <br>
                    <!-- Récupérer les aliments de la recette -->
                    <?php $aliment = $connect->query("SELECT * FROM ALIMENTS 
                    INNER JOIN CONTENIR ON ALIMENTS.ID_ALIMENT = CONTENIR.ID_ALIMENT 
                    WHERE CONTENIR.ID_RECETTE = '$id_el'");
                    while ($infoaliment = $aliment->fetch())
                    {?>
                    Aliments <br>
                    <?php echo $infoaliment['QTE_ALIMENT_RECETTE']; ?>
                    <?php echo $infoaliment['UNITE_ALIMENT_RECETTE']; ?>
                    <?php echo $infoaliment['NOM_ALIMENT']; ?>
                    <br>
                    <?php
                    }

                    $aliment->closeCursor(); // Termine le traitement de la requête

                    ?>
                    <!-- Récupérer les ingrédients de la recette -->
                    <?php $ingredient = $connect->query("SELECT * FROM INGREDIENTS 
                    INNER JOIN COMPOSER ON INGREDIENTS.ID_INGREDIENT = COMPOSER.ID_INGREDIENT 
                    WHERE COMPOSER.ID_RECETTE = '$id_el'");
                    while ($infoingredient = $ingredient->fetch())
                    {?>
                    Ingrédients <br>
                    <?php echo $infoingredient['NOM_INGREDIENT']; ?>
                    <?php
                    }

                    $ingredient->closeCursor(); // Termine le traitement de la requête

                    ?>
                    Voici le déroulé de la recette : <br>
                    <?php echo $inforecette['DESCRIPTION_RECETTE']; ?>
                    <?php
                    }
                    $recette->closeCursor(); // Termine le traitement de la requête
                    ?>
                </fieldset>
            </div>
        </section> 
    </div>
</body>





</html>