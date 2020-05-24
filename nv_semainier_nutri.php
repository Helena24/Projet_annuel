<!DOCTYPE html>
<html>

<?php 
 include("Functions.php");
include("Connect.php");
?>


<form id="semainierNutri" action="Add.semainier.nutri.php">

<h1>Nouveau semainier:</h1>

<!-- One "tab" for each step in the form: -->
<div class="tab">Nom du client:
    <label for="client"></label>
    <select name="Client">
    <?php
    $reponse = $connect->query('SELECT ID_CLIENT, NOM_CLIENT, PRENOM_CLIENT FROM CLIENTS');
    while ($donnees = $reponse->fetch())
    {
    echo '<option value="' . $donnees['ID_CLIENT'] . '">' . $donnees['NOM_CLIENT'] . " " . $donnees['PRENOM_CLIENT'] . '</option>';
    }              
    ?>
    </select>
</div>

<div class="tab">Contact Info:
  <p><input placeholder="E-mail..." oninput="this.className = ''"></p>
  <p><input placeholder="Phone..." oninput="this.className = ''"></p>
</div>

<div class="tab">Birthday:
  <p><input placeholder="dd" oninput="this.className = ''"></p>
  <p><input placeholder="mm" oninput="this.className = ''"></p>
  <p><input placeholder="yyyy" oninput="this.className = ''"></p>
</div>

<div class="tab">Login Info:
  <p><input placeholder="Username..." oninput="this.className = ''"></p>
  <p><input placeholder="Password..." oninput="this.className = ''"></p>
</div>

<div style="overflow:auto;">
  <div style="float:right;">
    <button type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
    <button type="button" id="nextBtn" onclick="nextPrev(1)">Next</button>
  </div>
</div>

<!-- Circles which indicates the steps of the form: -->
<div style="text-align:center;margin-top:40px;">
  <span class="step"></span>
  <span class="step"></span>
  <span class="step"></span>
  <span class="step"></span>
</div>

</form>

</html>