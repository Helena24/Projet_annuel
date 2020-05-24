<!DOCTYPE html>
<?php include("Functions.php");?>
<?php include("Connect.php"); ?>
<html>
<head>
    <title> Ajout Aliment</title>
</head> 
<body>
    <div class="wrapper">
        <section class="ajout-container">
            <div>
                <!-- Formulaire permettant l'ajout d'un aliment-->
                <form method="POST" action= "Add.aliment.php" enctype="multipart/form-data">
                    <fieldset style = "border:0"> 
                        <input name="nomAliment" type="text" placeholder="Nom de l'aliment" required="required">
                        <select name="categorieAliment">
                            <option value="Fruit">Fruit</option>
                            <option value="Légume">Légume</option>
                            <option value="Viande">Viande</option>
                            <option value="Poisson">Poisson</option>
                            <option value="Oeuf">Oeuf</option>
                            <option value="Fromage">Fromage</option>
                            <option value="Legumineuses">Légumineuses</option>
                        </select>
                        <input name="calorieAliment" type="number" placeholder="Calories" required="required">
                        <input name="proteineAliment" type="number" placeholder="Protéines" required="required"> 
                        <input name="glucideAliment" type="number" placeholder="Glucides" required="required">
                        <input name="lipideAliment" type="number" placeholder="Lipides" required="required" > 
                        <button name="add" type="submit" value="Ajouter cet aliment">Ajouter cet aliment</button>
                        
                    </fieldset>  
                </form>
            </div>
        </section>   
    </div>
</body>
</html>

