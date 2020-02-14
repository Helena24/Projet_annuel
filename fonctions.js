<form method="POST" action= "Add.recette.php" enctype="multipart/form-data">
    <fieldset>
    <table>
    <tr>

        <td>Quantité<input name="qteAliment" required ><select name="uniteQte">
                                    <option value="Unité">Unité(s)</option>
                                    <option value="Grammes">Grammes</option>
                                    <option value="Litres">Litres</option>
                                    </select></td>
    </tr>
    <tr>
        <td colspan=2>Description de la recette<br><input style="height:300px; width:800px;" name="texteRecette" required ></td>
    </tr>
    <tr>
        <td colspan=2> <input name="add" type="submit" value="Ajouter cette recette"/></td>
    </tr>
    </fieldset>
</form>