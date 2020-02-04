<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="UTF8" />
        <title> Ajout Client</title>
      <!--  <link rel="stylesheet" media="screen" href="Style.css"> -->
    </head>
    <body>
        <!--
        <ul>
            <li> <a href="Addform.html">Retour en arrière</a> </li>
        </ul>
        -->

<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "nutritionniste";

try 
{
    $connection = new PDO ("mysql:host=$servername;port=3606;dbname=$dbname", $username, $password); 
    $connection -> setAttribute (PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Statut connexion : reussie"; 

}
catch(PDOException $e)
{
    echo "Statut connecion : échec (".$e -> getMessage().")"; 
}

// Ajout des champs dans la table Clients 

if (isset ($_POST['add'])){
    //On récupère les valeurs entrées :
    $nomUser=$_POST['nomUser'];
    $prenomUser=$_POST["prenomUser"];
    $datenaissanceUser=$_POST["datenaissanceUser"];
    $emailUser=$_POST['emailUser'];
    $telUser=$_POST["telUser"];
    $adresseUser=$_POST["adresseUser"];

$connection->exec ('INSERT INTO CLIENTS (NOM_CLIENT,PRENOM_CLIENT,DATE_NAISSANCE_CLIENT,MAIL_CLIENT,TEL_CLIENT,ADRESSE_POSTALE_CLIENT)
                   VALUES("'.$nomUser.'", "'.$prenomUser.'","'.$datenaissanceUser.'","'.$emailUser.'","'.$telUser.'","'.$adresseUser.'")');

echo 'Le client a bien été ajouté !';
}
?>

</body> 
</html> 