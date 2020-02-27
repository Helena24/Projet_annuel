<html>
  <?php include("entete.php"); ?>
  <?php include("police.php"); ?>
  <?php include("Connect.php"); ?>

<head> 

</head>
<body>

<script type="text/javascript" src='jquery-3.4.1.min.js'></script>

<form>
      <input type="text" name="NOM_ALIMENT" id="NOM_ALIMENT" />
</form>




<script>
      $('#NOM_ALIMENT').autocomplete({
          source: 'Add.recette.php',
          autoFocus : true,
          minLength: 1,
      )};
</script>

</body>
</html>



