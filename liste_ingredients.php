<!-------------------------------->
<!-- Page qui permet d'afficher -->
<!-- la liste des ingrédients ---->
<!-- dans un tableau ------------->
<!-- pour l'utilisateur ---------->
<!-------------------------------->


<!DOCTYPE html>
<html>
<?php 
    // Appel de la fonction pour afficher l'entête selon l'utilisateur
    include("Functions.php"); 
?>
<?php 
    // Appel de la page qui permet de connecter à la base de données
    include("Connect.php"); 
?>

<head>
    <!-- Nom de l'onglet -->
    <title>Ingrédients</title>
</head> 
<body>

<table class="content-table">
        <tr>
            <!-- Entete du tableau -->
            <th>Nom</th>
        </tr>

<?php
// Requete pour récupérér les ingrédients
$reponse = $connect->query('SELECT * FROM INGREDIENTS');
// On affiche chaque entrée une à une
while ($donnees = $reponse->fetch())
{
?>
    <tr>
    <!-- Affichage des ingrédients -->
    <td><?php echo $donnees['NOM_INGREDIENT']; ?></td>
    </tr>
<?php
}

$reponse->closeCursor(); // Termine le traitement de la requête

?>

</body>






</html>