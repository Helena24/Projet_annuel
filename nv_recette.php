<!DOCTYPE html>
<html>
<?php include("entete.php"); ?>
<?php include("police.php"); ?>
<?php include("Connect.php"); ?>
<head>
<title> Ajout Recette</title>
</head> 
<body>

<h2> Pour ajouter une recette remplissez les champs suivants : </h2>
<form method="POST" action= "Add.recette.php" enctype="multipart/form-data">
    <fieldset>
    <table>
    <tr>
        
    <form>
    <input type="text" id="recherche" />
</form>

        <td>Quantité<input name="qteAliment" required ><select name="uniteQte">
                                    <option value="Unité">Unité(s)</option>
                                    <option value="Grammes">Grammes</option>
                                    <option value="Litres">Litres</option>
                                    </select></td>
    </tr>
    <tr>
        <td colspan=2>Description de la recette<br><input style="height:300px; width:800px;" name="texteRecette" required ></td>
    </tr>
    <tr>
        <td colspan=2> <input name="add" type="submit" value="Ajouter cette recette"/></td>
    </tr>
    </fieldset>
</form>
</body>