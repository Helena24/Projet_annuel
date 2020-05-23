<!DOCTYPE HTML>


<html>
    <head>
        <meta charset="UTF8" />
        <title> Mot de passe oublié</title>
        <link rel="stylesheet" href="Nutrition.css" />
    </head>
    <body>
        <div class="wrapper">
            <section class="ajout-container">
                <div>
                    <!-- Formulaire permettant de réinitialiser le mot de passe -->
                    <form method="post" action="Update.Client.php" enctype="multipart/form-data">
                        <fieldset style = "border:0"> 
                            <input type="text" name="nom" placeholder="Nom" required="required">
                            <input type="text" name="prenom" placeholder="Prénom" required="required">
                            <input type="text" name="mail" placeholder="Adresse mail" required="required">

                            <button type="submit" value="Reinitialiser" name="Reinitialiser">Réinitialiser le mot de passe</button>
                        </fieldset>  
                    </form>
                </div>
            </section>   
        </div>
    </body>
</html>