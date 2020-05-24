<!DOCTYPE html>
<?php include("Functions.php");?>
<?php include("Connect.php"); ?>
<html>
<head>
    <title>Ajout ingrédient</title>
</head> 
<body>
<div class="wrapper">
    <section class="ajout-container">
        <div>
            <!-- Formulaire permettant l'ajout d'un ingredient-->
            <form method="POST" action= "Add.ingredient.php" enctype="multipart/form-data">
                <fieldset style = "border:0">
                    <input name="nomIngredient" type="text"  placeholder="Nom de l'ingrédient" required="required">
                    <button name="add" type="submit" value="Ajouter cet ingrédient">Ajouter cet ingrédient</button>
                </fieldset>
            </form> 
        </div>
    </section>   
</div>
</body>
</html>