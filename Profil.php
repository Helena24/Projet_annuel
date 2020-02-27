<html> 
<?php include("entete.php"); ?>
<?php include("police.php"); ?>
<?php session_start();?>

<table> 
    <tr> 
        <td> Nom </td>
        <td> <?php echo $_SESSION['NOM_CLIENT'] ?> </td> 
    </tr>
    <tr> 
        <td> Prénom </td>
        <td> <?php echo $_SESSION['PRENOM_CLIENT'] ?> </td> 
    </tr>
    <tr> 
        <td> Date de naissance </td>
        <td> <?php echo $_SESSION['DATE_NAISSANCE_CLIENT'] ?> </td> 
    </tr>
    <tr> 
        <td> Adresse mail </td>
        <td> <?php echo $_SESSION['MAIL_CLIENT'] ?> </td> 
    </tr>
    <tr> 
        <td> Numéro téléphone </td>
        <td> <?php echo $_SESSION['TEL_CLIENT'] ?> </td> 
    </tr>
    <tr> 
        <td> Adresse Postale </td>
        <td> 
            <table>
            <tr> 
                <td> Numéro de rue</td>
                <td> <?php echo $_SESSION['NUMERO_RUE'] ?> </td>
            </tr> 
            <tr> 
                <td> Nom de rue</td>
                <td> <?php echo $_SESSION['NOM_RUE'] ?> </td>
            </tr> 
            <tr> 
                <td> Code Postal</td>
                <td> <?php echo $_SESSION['CODE_POSTAL'] ?> </td>
            </tr> 
            <tr> 
                <td> Ville</td>
                <td> <?php echo $_SESSION['VILLE'] ?> </td>
            </tr> 
            </table>
        </td>   
    </tr>
    <tr> 
        <td> Mot de passe </td>
        <td> echo bouton changer mdp ou pas ?? </td> 
    </tr>







</table> 



        









</html> 