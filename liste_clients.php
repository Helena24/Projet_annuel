<!-------------------------------->
<!-- Page qui permet d'afficher -->
<!-- la liste des clients   ------>
<!-- dans un tableau ------------->
<!-- pour l'aministrateur -------->
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
    <title>Aliments</title>
</head> 
<body>

<table class="content-table">
        <tr>
            <!-- Nom des entetes tu tableau --> 
            <th>Nom</th>
            <th>Prénom</th>
            <th>Date de naissance</th>
            <th>Adresse mail</th>
            <th>Téléphone</th>
            <th>Adresse</th>
        </tr>

<?php
$reponse = $connect->query('SELECT * FROM CLIENTS INNER JOIN ADRESSE ON CLIENTS.ID_CLIENT = ADRESSE.ID_CLIENT');
// On affiche chaque entrée une à une
while ($donnees = $reponse->fetch())
{
    // Pour ne pas afficher l'adresse mail de l'administrateur
    if($donnees['MAIL_CLIENT'] != "victor.janneteau@laposte.net"){
    ?>
        <tr>
        <!-- Affichage des données --> 
        <td><?php echo $donnees['NOM_CLIENT']; ?></td>
        <td><?php echo $donnees['PRENOM_CLIENT']; ?></td>
        <td><?php echo $donnees['DATE_NAISSANCE_CLIENT']; ?></td>
        <td><?php echo $donnees['MAIL_CLIENT']; ?></td>
        <td><?php echo $donnees['TEL_CLIENT']; ?></td>
        <td><?php echo $donnees['NUMERO_RUE']; echo " "; echo $donnees['NOM_RUE']; echo " "; echo $donnees['CODE_POSTAL']; echo " "; echo $donnees['VILLE'];?></td>
        </tr>
    <?php
    }
}
    $reponse->closeCursor(); // Termine le traitement de la requête
    ?>

</body>






</html>