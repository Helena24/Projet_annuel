<!DOCTYPE html>
<html>
<?php include("Functions.php"); ?>
<?php include("Connect.php"); ?>
<head>
<title>Aliments</title>
</head> 
<body>

<table class="content-table">
        <tr>
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
    ?>
        <tr>
        <td><?php echo $donnees['NOM_CLIENT']; ?></td>
        <td><?php echo $donnees['PRENOM_CLIENT']; ?></td>
        <td><?php echo $donnees['DATE_NAISSANCE_CLIENT']; ?></td>
        <td><?php echo $donnees['MAIL_CLIENT']; ?></td>
        <td><?php echo $donnees['TEL_CLIENT']; ?></td>
        <td><?php echo $donnees['NUMERO_RUE']; echo " "; echo $donnees['NOM_RUE']; echo " "; echo $donnees['CODE_POSTAL']; echo " "; echo $donnees['VILLE'];?></td>
        </tr>
    <?php
    }
    $reponse->closeCursor(); // Termine le traitement de la requête
    ?>

</body>






</html>