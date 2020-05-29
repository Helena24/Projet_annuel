<!--------------------------------->
<!-- Page qui permet de faire ----->
<!-- la requete pour ajouter des --->
<!--  mesures à la base -->
<!-- de données ------------------->
<!--------------------------------->

<!DOCTYPE html>
<html>
<?php     
// Appel de la fonction pour afficher l'entête selon l'utilisateur
include("Functions.php");
?>
    <head>
        <!-- Texte affiché dans l'onglet ---->
        <title>Mesures balances</title>
    </head>
	

<?php
// Appel de la page qui permet de connecter à la base de données
Include 'Connect.php';

// Si l'utilisateur appuie sur le bouton ajouter
if(isset($_POST['save']))
{
    // Recuperation des différentes valeurs des champs du formulaire
    $DateB=$_POST['DateB'];
    $PourcentMG=$_POST['PourcentMG'];
    $Masse=$_POST['Masse'];
    $PourcentH2O=$_POST['PourcentH2O'];
    $GV=$_POST['GV'];
    $Masseosseuse=$_POST['Masseosseuse'];
    $Massemuscu=$_POST['Massemuscu'];
    $Indiceeffort=$_POST['Indiceeffort'];
    $Agemetabolique=$_POST['Agemetabolique'];
	$id=$_POST['id'];

    // Requete pour ajouter les données à la base de données
	$Requete = $connect->prepare('INSERT INTO `mesures`(`ID_CLIENT`,`DATE_MESURES`, `POURCENTAGE_MASSE_GRAISSEUSE`, `MASSE`, `POURCENTAGE_EAU_CORPS`, `GRAISSE_VISCERALE`, `MASSE_OSSEUSE`, `MASSE_MUSCULAIRE`, `INDICE_EFFORT`, `AGE_METABOLIQUE`) 
    VALUES (:id, :DateB, :PourcentMG, :Masse, :PourcentH2O, :GV, :Masseosseuse, :Massemuscu, :Indiceeffort, :Agemetabolique)');
    $Requete->bindValue(":id",$id, PDO::PARAM_STR);
    $Requete->bindValue(":DateB",$DateB, PDO::PARAM_STR);
    $Requete->bindValue(":PourcentMG",$PourcentMG, PDO::PARAM_STR);
    $Requete->bindValue(":Masse",$Masse, PDO::PARAM_STR);
    $Requete->bindValue(":PourcentH2O",$PourcentH2O, PDO::PARAM_STR);
    $Requete->bindValue(":GV",$GV, PDO::PARAM_STR);
    $Requete->bindValue(":Masseosseuse",$Masseosseuse, PDO::PARAM_STR);
    $Requete->bindValue(":Massemuscu",$Massemuscu, PDO::PARAM_STR);
    $Requete->bindValue(":Indiceeffort",$Indiceeffort, PDO::PARAM_STR);
	$Requete->bindValue(":Agemetabolique",$Agemetabolique, PDO::PARAM_STR);
	$Requete->execute();
}

// Affichage d'une pop-up avec le texte suivant
$message = "Mesures ajoutées";
echo '<script type="text/javascript">window.alert("'.$message.'");
window.location.replace("Mesures.php");
</script>'; 

?>


</html>