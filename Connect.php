<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "nutritionniste";

try 
{
    $connect = new PDO ("mysql:host=$servername;port=3306;dbname=$dbname", $username, $password); 
    $connect -> setAttribute (PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   

}
catch(PDOException $e)
{
    echo "Statut connecion : échec (".$e -> getMessage().")"; 
}
?>