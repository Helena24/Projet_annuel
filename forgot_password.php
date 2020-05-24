<!DOCTYPE HTML>


<html>
    <head>
        <meta charset="UTF8" />
        <title> Mot de passe oublié</title>
        <link rel="stylesheet" href="Nutrition.css" />
    </head>
    <body>
        <div class="wrapper">
            <section class="login-container">
                <div>
                    <!-- Formulaire permettant de réinitialiser le mot de passe -->
                    <header style= background:#eee>
                        <img src="logo-cutout.png" height="130" width="100" /></a>
                    </header>
                    <form method="post" action="Update.Client.php" enctype="multipart/form-data">
                        <fieldset style = "border:0"> 
                            <input type="text" name="nom" placeholder="Nom" required="required">
                            <input type="text" name="prenom" placeholder="Prénom" required="required">
                            <input type="text" name="mail" placeholder="Adresse mail" required="required">

                            <button type="submit" value="Reinitialiser" name="Reinitialiser">Réinitialiser le mot de passe</button>
                           
                        </fieldset>  
                    </form>
                    <a href="Login.form.html">Retour à la page de connexion</a>
                </div>
            </section>   
        </div>
    </body>
</html>