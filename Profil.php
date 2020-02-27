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
        <td> Adresse postale </td>
        <td> <?php echo $_SESSION['NUMERO_RUE'] ?> </td> 
    </tr>








</table> 



        









</html> 