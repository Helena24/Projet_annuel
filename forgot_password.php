<!-------------------------------->
<!-- Page qui permet d'afficher -->
<!-- la page si l'utilisateur ---->
<!-- la oublié son mot de passe -->
<!-------------------------------->

<!DOCTYPE HTML>


<html>
    <head>
        <meta charset="UTF8" />
        <!-- Nom de l'onglet-->
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
                    <!-- Lien pour retourner à la page de connexion -->
                    <a href="Login.form.html">Retour à la page de connexion</a>
                </div>
            </section>   
        </div>
    </body>
</html>