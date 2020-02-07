<!DOCTYPE html>
<html>

<?php include("entete.php"); ?>
<?php include("police.php"); 

session_start();
echo $_SESSION['ID_CLIENT']; 
echo $_SESSION['NOM_CLIENT'];           
echo $_SESSION['PRENOM_CLIENT']; 
?>

</html>