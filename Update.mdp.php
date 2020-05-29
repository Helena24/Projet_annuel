<!-- 
    Page qui affiche le formulaire 
    pour changer le mot de passe
    de l'utilisateur -->

<!DOCTYPE HTML>
<?php 
// Fonction pour afficher l'entete selon l'utilisateur
include("Functions.php");?>
<html>
    <head>
        <meta charset="UTF8" />
        <title> Ajout Client</title>
    </head>
    <body>
        <div class="wrapper">
            <section class="ajout-container">
                <div>
                    <!-- Formulaire permettant de modifier le mot de passe -->
                    <form method="post" action="Update.Client.php" enctype="multipart/form-data">
                        <fieldset style = "border:0"> 
                            <input type="text" name="ancien_mdp" placeholder="Mot de passe actuel" required="required">
                            <input type="password" name="nouveau_mdp1" placeholder="Nouveau mot de passe" required="required">
                            <input type="password" name="nouveau_mdp2" placeholder="Confirmation" required="required">
                            <button type="submit" value="Modifier" name="Modifier">Modifier</button>
                        </fieldset>  
                    </form>
                </div>
            </section>   
        </div>
    </body>
</html>
