<!------------------------------------>
<!-- Cette page permet de connecter -->
<!-- la base de données--------------->
<!------------------------------------>


<?php
// Champs du server, local 
$servername = "localhost";
$username = "root";
$password = "root";
// nom de la base de données
$dbname = "nutritionniste";

try 
{
    // Connexion à la base de données
    $connect = new PDO ("mysql:host=$servername;port=3306;dbname=$dbname", $username, $password); 
    $connect -> setAttribute (PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   

}
catch(PDOException $e)
{
    // Si il y a une erreur affichage d'un message
    echo "Statut connecion : échec (".$e -> getMessage().")"; 
}




   






