<!DOCTYPE html>
<html>
<?php include("entete.php"); ?>
<?php include("police.php"); ?>
<?php include("Connect.php"); ?>
<head>
<title> Ajout Aliment</title>
</head> 
<body>

<h2> Pour ajouter un aliment remplissez les champs suivants : </h2>
<form method="POST" action= "Add.aliment.php" enctype="multipart/form-data">
    <fieldset>
        Aliment                     <input name="nomAliment" required ><br>
        Catégorie d'aliment         <select name="categorieAliment">
                                    <option value="Fruit">Fruit</option>
                                    <option value="Légume">Légume</option>
                                    <option value="Viande">Viande</option>
                                    <option value="Poisson">Poisson</option>
                                    <option value="Oeuf">Oeuf</option>
                                    <option value="Fromage">Fromage</option>
                                    <option value="Legumineuses">Légumineuses</option>
                                    </select><br>
        Calories                 <input name="calorieAliment" required > <br>
        Protéines                <input name="proteineAliment" required > <br>
        Glucides                 <input name="glucideAliment" required > <br>
        Lipides                  <input name="lipideAliment" required > <br>
        <br> <input name="add" type="submit" value="Ajouter cet aliment"/>
    </fieldset>
</form>
</body>






</html>