<!-------------------------------->
<!-- Page qui affiche ------------>
<!-- le formulaire d'ajout des --->
<!--  ingrédient------------------>
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
<html>
<head>
    <!-- Nom de l'onglet -->
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