<?php
session_start();
include("Functions.php");  
?>

<html>
<body>
<form method="post" action="Update.Client.php" enctype="multipart/form-data">
    <fieldset style = "border:0"> 
        <table class="content-table">
            <tbody>
                <tr>
                    <td width="200">Nom</td>
                    <td > <input name="nom"  placeholder="<?php echo $_SESSION['NOM_CLIENT'] ?> "> </td>
                </tr>
                <tr class="active-row">
                    <td>Prénom</td>
                    <td > <input name="prenom" placeholder="<?php echo $_SESSION['PRENOM_CLIENT'] ?>"> </td>
                </tr>
                <tr>
                    <td>Date de naissance</td>
                    <td> <input name="date_naissance"  placeholder="<?php echo $_SESSION['DATE_NAISSANCE_CLIENT'] ?> "> </td>
                </tr>
                <tr class="active-row">
                    <td> Adresse mail </td>
                    <td> <input name="mail"  placeholder="<?php echo $_SESSION['MAIL_CLIENT'] ?> "> </td>
                </tr>
                <tr> 
                    <td>Numéro téléphone</td>
                    <td> <input name="telephone"  placeholder="<?php echo $_SESSION['TEL_CLIENT'] ?> "> </td>
                </tr>
                <tr class="active-row">
                    <td> Adresse Postale</td>
                    <td> 
                    <input  name="numero_rue" placeholder="<?php echo $_SESSION['NUMERO_RUE'] ?>"> 
                    <input name="nom_rue"  placeholder="<?php echo $_SESSION['NOM_RUE']?>"> 
                    <input name="code_postal"  placeholder="<?php echo $_SESSION['CODE_POSTAL']?>"> 
                    <input name="ville"  placeholder="<?php echo $_SESSION['VILLE']?>" > </td>
                </tr>
                <tr>
                    <td colspan="2" > <button type="submit" name="Modifier_profil">Modifier</button> </td>
                </tr>
            </tbody>
        </table>
    </fieldset>
</form>
</body>
</html> 