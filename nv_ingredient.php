<!DOCTYPE html>
<html>
<?php include("Functions.php");?>
<?php include("Connect.php"); ?>
<head>
<title>Ajout ingrédient</title>
</head> 
<body>

<h2> Pour ajouter un ingrédient remplissez les champs suivants : </h2>
<form method="POST" action= "Add.ingredient.php" enctype="multipart/form-data">
    <fieldset>
        Ingrédient                     <input name="nomIngredient" required ><br>
        <br> <input name="add" type="submit" value="Ajouter cet ingrédient"/>
    </fieldset>
</form>
</body>






</html>