<!-------------------------------->
<!-- Page qui permet de faire ---->
<!-- la requete pour supprimer  -->
<!-- un ingrédient de la base ---->
<!-- de données ------------------>
<!-------------------------------->

<?php 
    // Appel de la fonction pour afficher l'entête selon l'utilisateur
    include("Functions.php"); 
?>
<?php 
    // Appel de la page qui permet de connecter à la base de données
    include("Connect.php"); 
?>
<?php
    //préparation de la requete
    $reponse = $connect->prepare('DELETE FROM INGREDIENTS WHERE ID_INGREDIENT=:id');

    //liaison du parametre
    $reponse->bindValue(':id', $_GET['idIngredient'], PDO::PARAM_STR);

    //execution de la requete 
    $executeIsOk = $reponse->execute();

    // booleen pour savoi si ça a fonctionné
    if($executeIsOk){
        $message = 'Ingrédient supprimé';
    }else{
        $message = 'Echec de la suppression car cet ingrédient est présent dans une recette';
    };

    //affichage du message et redirection
    echo '<script type="text/javascript">window.alert("'.$message.'");
    window.location.replace("suppr_ingredient.php");
    </script>'; 
?>
