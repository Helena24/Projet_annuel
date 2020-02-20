<!DOCTYPE html>
<html>
<?php include("entete.php"); ?>
<?php include("police.php"); ?>
<?php include("Connect.php"); ?>
<head>
<title> Ajout Recette</title>
</head> 
<body>

<h2> Pour ajouter une recette remplissez les champs suivants : </h2>
<p><label>Nom : </label>
<input type="text" id="nom" placeholder="Veuillez taper un nom">
<script>
var liste = [
    "Draggable",
    "Droppable",
    "Resizable",
    "Selectable",
    "Sortable"
];

$('#nom').autocomplete({
    source : liste
});
</script>


</body>