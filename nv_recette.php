<!DOCTYPE html>
<html>
<?php include("entete.php"); ?>
<?php include("police.php"); ?>
<?php include("Connect.php"); ?>
<head>
<title> Ajout Recette</title>
</head> 
<body>

<p><label>Nom : </label>
<input type="text" id="NOM_ALIMENT" placeholder="Veuillez taper un nom">
      <script>
        $( '#NOM_ALIMENT' ).autocomplete({
          source : 'Add.recette.php'
        });
      </script>


</body>