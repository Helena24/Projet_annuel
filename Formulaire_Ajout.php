<?php 
//include("Functions.php");
include "entete.php";
session_start(); 
?>

<!DOCTYPE HTML>
<html>
<head>
    <meta charset="UTF8" />
    <title> Ajout Client</title>
    <link rel="stylesheet" media="screen" href="Nutrition.css">
</head> 
<body>
    <div class="wrapper">
        <section class="ajout-container">
            <div>
                <form method="post" action= "Add.form.php" enctype="multipart/form-data">
                    <fieldset style = "border:0"> 
                        <input type="text" name="nomUser" placeholder="Nom" required="required">
                        <input type="text" name="prenomUser" placeholder="Prénom" required="required" > 
                        <input type="date" name="datenaissanceUser" placeholder="Date de naissance" required="required">
                        <input type="text" name="emailUser" placeholder="Adresse mail" required="required"> 
                        <input type="text" name="telUser" placeholder="Numéro de téléphone" required="required"> 
                        <input type="text" name="numRueUser" placeholder="Numéro de rue" required="required"> 
                        <input type="text" name="nomRueUser" placeholder="Nom de la rue" required="required"> 
                        <input type="text" name="codePostalUser" placeholder="Code postal" required="required"> 
                        <input type="text" name="villeUser" placeholder="Ville" required="required"> 
                        <button type="submit" value="Enregistrer" name="Enregistrer">ENREGISTRER</button>
                    </fieldset>  
                </form>
            </div>
        </section>   
    </div>
</body>
</html> 
