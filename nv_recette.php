<!DOCTYPE html>
<html>
  <?php// include("Functions.php");?>
  <?php include("Connect.php"); ?>
  <?php include("entete.php"); ?>
  
  <script type="text/javascript" src="jquery-3.4.1.min.js"></script>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>     

<script type="text/javascript">
function create_champ_aliment(i) {
var i2 = i + 1;
document.getElementById('quantite'+i).innerHTML = '<input id="quantite" type="text" name="quantite['+i+']" placeholder="Quantité">';
document.getElementById('aliment'+i).innerHTML = '<input id="myInput'+i+'" type="text" name="aliment['+i+']" placeholder="Aliment ou ingrédient">';
document.getElementById('quantite'+i).innerHTML += (i <= 10) ? '<span id="quantite'+i2+'"><a href="javascript:create_champ_quantite('+i2+')"></a></span>' : '';
document.getElementById('aliment'+i).innerHTML += (i <= 10) ? '<span id="aliment'+i2+'"><a href="javascript:create_champ_aliment('+i2+')"><img width=30 height=30 src="ajouter.png"/></a></span>' : '';
var countries = $(document).ready(function () {
    let countries = null;
    $.get('Add.recette.php')
        .done(function (data) {
            countries = JSON.parse(data);
            autocomplete(document.getElementById('myInput'+i), countries); 

        });

  })
}
// ajout de la classe JS à HTML
document.querySelector("html").classList.add('js');
 
// initialisation des variables
var fileInput  = document.querySelector( ".input-file" ),  
    button     = document.querySelector( ".input-file-trigger" ),
    the_return = document.querySelector(".file-return");
 
// action lorsque la "barre d'espace" ou "Entrée" est pressée
button.addEventListener( "keydown", function( event ) {
    if ( event.keyCode == 13 || event.keyCode == 32 ) {
        fileInput.focus();
    }
});
 
// action lorsque le label est cliqué
button.addEventListener( "click", function( event ) {
   fileInput.focus();
   return false;
});
 
// affiche un retour visuel dès que input:file change
fileInput.addEventListener( "change", function( event ) {  
    the_return.innerHTML = this.value;  
});
</script>

<body>
<?php
if(empty($_POST['valide']))
{
?>
<p class="file-return"></p>
  <!-- Champs pour le nom et le nombre de parts de la recette -->
<form method="POST" action= "" enctype="multipart/form-data"> 
  <input id="nomRecette" type="text" name="nomRecette" placeholder="Nom de la recette"> 
  <input id="nbPart" type="number" name="nbPart" placeholder="Nombre de parts de la recette"> <br>
  <!-- Choisir un fichier pour l'image de la recette  -->
  <div class="input-file-container">
    <input class="input-file" id="my-file" type="file">
    <label for="my-file" class="input-file-trigger" tabindex="0">Select a file...</label>
  </div>
  
<!-- Champs pour les aliments et ingrédients qui vont se créer si on appuie sur ajouter un champ -->
  <form autocomplete="off" action="Add.recette.php">
      <div class="autocomplete" style="width:400px;">
        <table>
          <tr>
            <td><span id="quantite1"><a href="javascript:create_champ_aliment(1)"></a></span></td>
            <td><span id="aliment1"><a href="javascript:create_champ_aliment(1)"><img width=30 height=30 src="ajouter.png"/></a></span></td>
          </tr>
        </table>
      </div>

  </form>
</form>
<input type="submit" value="Ajouter cette recette" name="valide"/>
<?php
}
else
{
    echo 'Voila le résultat du formulaire<br/>';
    var_dump($_POST);
    echo '<br/>et voila le résultat des champs en affichage<br/>';
    foreach($_POST['aliment'] as $value)
    {
        echo $value.'<br/>';
    }
}
?>
<script>
//the autocomplete function takes two arguments,the text field element and an array of possible autocompleted values
function autocomplete(inp, arr) {
  var currentFocus;
  /*execute a function when someone writes in the text field:*/
  inp.addEventListener("input", function(e) {
      var a, b, i, val = this.value;
      /*close any already open lists of autocompleted values*/
      closeAllLists();
      if (!val) { return false;}
      currentFocus = -1;
      /*create a DIV element that will contain the items (values):*/
      a = document.createElement("DIV");
      a.setAttribute("id", this.id + "autocomplete-list");
      a.setAttribute("class", "autocomplete-items");
      /*append the DIV element as a child of the autocomplete container:*/
      this.parentNode.appendChild(a);
      /*for each item in the array...*/
      for (i = 0; i < arr.length; i++) {
        /*check if the item starts with the same letters as the text field value:*/
        if (arr[i].substr(0, val.length).toUpperCase() == val.toUpperCase()) {
          /*create a DIV element for each matching element:*/
          b = document.createElement("DIV");
          /*make the matching letters bold:*/
          b.innerHTML = "<strong>" + arr[i].substr(0, val.length) + "</strong>";
          b.innerHTML += arr[i].substr(val.length);
          /*insert a input field that will hold the current array item's value:*/
          b.innerHTML += "<input type='hidden' value='" + arr[i] + "'>";
          /*execute a function when someone clicks on the item value (DIV element):*/
          b.addEventListener("click", function(e) {
              /*insert the value for the autocomplete text field:*/
              inp.value = this.getElementsByTagName("input")[0].value;
              /*close the list of autocompleted values,
              (or any other open lists of autocompleted values:*/
              closeAllLists();
          });
          a.appendChild(b);
        }
      }
  });

  /*execute a function presses a key on the keyboard:*/
  inp.addEventListener("keydown", function(e) {
      var x = document.getElementById(this.id + "autocomplete-list");
      if (x) x = x.getElementsByTagName("div");
      if (e.keyCode == 40) {
        /*If the arrow DOWN key is pressed,
        increase the currentFocus variable:*/
        currentFocus++;
        /*and and make the current item more visible:*/
        addActive(x);
      } else if (e.keyCode == 38) { //up
        /*If the arrow UP key is pressed,
        decrease the currentFocus variable:*/
        currentFocus--;
        /*and and make the current item more visible:*/
        addActive(x);
      } else if (e.keyCode == 13) {
        /*If the ENTER key is pressed, prevent the form from being submitted,*/
        e.preventDefault();
        if (currentFocus > -1) {
          /*and simulate a click on the "active" item:*/
          if (x) x[currentFocus].click();
        }
      }
  });
   
  // function to classify an item as "active":
  function addActive(x) {
    if (!x) return false;
    removeActive(x);
    if (currentFocus >= x.length) currentFocus = 0;
    if (currentFocus < 0) currentFocus = (x.length - 1);
    x[currentFocus].classList.add("autocomplete-active");
  }
  
  //function to remove the "active" class from all autocomplete items
  function removeActive(x) {
    for (var i = 0; i < x.length; i++) {
      x[i].classList.remove("autocomplete-active");
    }
  }
  
  //close all autocomplete lists in the document, except the one passed as an argument 
  function closeAllLists(elmnt) { 
    var x = document.getElementsByClassName("autocomplete-items");
    for (var i = 0; i < x.length; i++) {
      if (elmnt != x[i] && elmnt != inp) {
        x[i].parentNode.removeChild(x[i]);
      }
    }
  }
  
  //execute a function when someone clicks in the document 
  document.addEventListener("click", function (e) {
      closeAllLists(e.target);
  });
}

  //initiate the autocomplete function on the "myInput" element, and pass along the array as possible autocomplete values
  var countries = $(document).ready(function () {
    let countries = null;
    $.get('Add.recette.php')
        .done(function (data) {
            countries = JSON.parse(data);
            autocomplete(document.getElementById("myInput"), countries); 
        });

  })



</script>

</body>
</html>