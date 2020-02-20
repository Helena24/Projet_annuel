<!DOCTYPE html>
<html>
<?php include("entete.php"); ?>
<?php include("police.php"); ?>
<?php include("Connect.php"); ?>
<head>
<title> Ajout Recette</title>
</head> 
<body>

<script>
    $(document).ready(function () {
        $('#txtCountry').typeahead({
            source: function (query, result) {
                $.ajax({
                    url: "Add.recette.php",
					data: 'query=' + query,            
                    dataType: "json",
                    type: "POST",
                    success: function (data) {
						result($.map(data, function (item) {
							return item;
                        }));
                    }
                });
            }
        });
    });
</script>


</body>