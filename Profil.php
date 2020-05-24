<?php
session_start();
include("Functions.php");  
?>

<html>
<body>
    <table class="content-table">
        <tbody>
            <tr>
                <td>Nom</td>
                <td> <?php echo $_SESSION['NOM_CLIENT'] ?> </td> 
                <td contenteditable="true"> Contenu initial </td>
            </tr>
            <tr class="active-row">
                <td>Prénom</td>
                <td> <?php echo $_SESSION['PRENOM_CLIENT'] ?> </td> 
            </tr>
            <tr>
                <td>Date de naissance</td>
                <td> <?php echo $_SESSION['DATE_NAISSANCE_CLIENT'] ?> </td> 
            </tr>
            <tr class="active-row">
                <td> Adresse mail </td>
                <td> <?php echo $_SESSION['MAIL_CLIENT'] ?> </td>  
            </tr>
            <tr> 
                <td>Numéro téléphone</td>
                <td> <?php echo $_SESSION['TEL_CLIENT'] ?> </td> 
            </tr>
            <tr class="active-row">
                <td> Adresse Postale</td>
                <td> <?php echo $_SESSION['NUMERO_RUE'] ; echo' '; echo $_SESSION['NOM_RUE']; echo' '; echo $_SESSION['CODE_POSTAL']; echo ' '; echo $_SESSION['VILLE'] ?> </td> 
            </tr>
        </tbody>
    </table>
</body>
</html> 