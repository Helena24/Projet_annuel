<!DOCTYPE HTML>
<html>
<?php include("Functions.php");?>
<head>
<meta charset="UTF8" />
<title> Ajout Client</title>
<link rel="stylesheet" media="screen" href="Nutrition.css">  
</head> 
<body>
<!--    
<ul>
    <li> <a href="Accueil.html">Retour à la page précédente</a> </li>
</ul>
-->
<form method="POST" action= "Add.form.php" enctype="multipart/form-data">
<fieldset> 
     <table>
        <tr>
            <td><label>Nom :</label></td>
            <td> <input type="text" name="nomUser" required > </td>
        </tr>
        <tr>
            <td><label>Prénom :</label></td>
            <td> <input type="text" name="prenomUser" required > </td>
        </tr>
        <tr>
            <td><label>Date de naissance :</label></td>
            <td> <input name="datenaissanceUser" type="date" required > </td>
        </tr>
        <tr>
            <td><label>Adresse Mail :</label></td>
            <td> <input name="emailUser" required > </td>
        </tr>
        <tr>
            <td><label>Numéro de téléphone : </label></td>
            <td> <input name="telUser" required > </td>
        </tr>
        <tr>
            <td><label>Numéro rue : </label></td>
            <td> <input name="numRueUser" required > </td>
        </tr>
        <tr>
            <td><label>Nom rue : </label></td>
            <td> <input name="nomRueUser" required > </td>
        </tr>
        <tr>
            <td><label>Code postal : </label></td>
            <td> <input name="codePostalUser" required > </td>
        </tr>
        <tr>
            <td><label>Ville : </label></td>
            <td> <input name="villeUser" required > </td>
        </tr>
        <tr>
            <td></td>
            <td><input name="Enregistrer" type="submit" value="Enregistrer"/></td>
        </tr>
    </table>
</fieldset>
</form>
</body>
</html> 