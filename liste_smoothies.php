<!-------------------------------->
<!-- Page qui permet d'afficher -->
<!-- la liste des smoothies ------>
<!-- dans un tableau ------------->
<!-- avec la possibilité --------->
<!-- de voir les détails --------->
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
    <title>Liste des smoothies</title>
</head> 
<body>

<table class="content-table">
        <tr>
            <!-- Entete du tableau -->  
            <th>Nom</th>
            <th></th>
        </tr>

<?php
// Requete pour récupérer les smoothies
$reponse = $connect->query('SELECT * FROM SMOOTHIES');
// On affiche chaque entrée une à une
while ($donnees = $reponse->fetch())
{
?>
    <tr>
    <!-- Affichage des smoothies -->
    <td><?php echo $donnees['NOM_SMOOTHIE']; ?></td>
    <!-- Lien pour voir les détails du smoothie -->
    <td><td><a href="detail_smoothie.php?idSmoothie=<?= $donnees['ID_SMOOTHIE']?>">Détails</a></td></td>
    </tr>
<?php
}

$reponse->closeCursor(); // Termine le traitement de la requête

?>

</body>






</html>