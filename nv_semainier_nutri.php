<!DOCTYPE html>
<html>

<?php 
include("Functions.php");
include("Connect.php");
?>
<script type="text/javascript">
// Champ pour le petit-déjeuner de lundi
function create_champ_pdlundi(i) {
var i2 = i + 1;
document.getElementById('pdlundi'+i).innerHTML = '<input id="pdlundi'+i+'" type="text" name="pdlundi['+i+']" placeholder="Aliment, recette ou smoothie à ajouter">';
document.getElementById('pdlundi'+i).innerHTML += (i <= 10) ? '<span id="pdlundi'+i2+'"><a href="javascript:create_champ_pdlundi('+i2+')">Ajouter un autre aliment, repas ou smoothie</a></span>' : '';
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

<script type="text/javascript">
// Champ pour la collation de lundi 
function create_champ_collundi(i) {
var i2 = i + 1;
document.getElementById('collundi'+i).innerHTML = '<input id="collundi'+i+'" type="text" name="collundi['+i+']" placeholder="Aliment, recette ou smoothie à ajouter">';
document.getElementById('collundi'+i).innerHTML += (i <= 10) ? '<span id="collundi'+i2+'"><a href="javascript:create_champ_collundi('+i2+')">Ajouter un autre aliment, repas ou smoothie</a></span>' : '';
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

<script type="text/javascript">
// Champ pour le dejeuner de lundi 
function create_champ_dejlundi(i) {
var i2 = i + 1;
document.getElementById('dejlundi'+i).innerHTML = '<input id="dejlundi'+i+'" type="text" name="dejlundi['+i+']" placeholder="Aliment, recette ou smoothie à ajouter">';
document.getElementById('dejlundi'+i).innerHTML += (i <= 10) ? '<span id="dejlundi'+i2+'"><a href="javascript:create_champ_dejlundi('+i2+')">Ajouter un autre aliment, repas ou smoothie</a></span>' : '';
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

<script type="text/javascript">
// Champ pour la collation 2 de lundi 
function create_champ_colbislundi(i) {
var i2 = i + 1;
document.getElementById('colbislundi'+i).innerHTML = '<input id="colbislundi'+i+'" type="text" name="colbislundi['+i+']" placeholder="Aliment, recette ou smoothie à ajouter">';
document.getElementById('colbislundi'+i).innerHTML += (i <= 10) ? '<span id="colbislundi'+i2+'"><a href="javascript:create_champ_colbislundi('+i2+')">Ajouter un autre aliment, repas ou smoothie</a></span>' : '';
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

<script type="text/javascript">
// Champ pour le diner de lundi 
function create_champ_dlundi(i) {
var i2 = i + 1;
document.getElementById('dlundi'+i).innerHTML = '<input id="dlundi'+i+'" type="text" name="dlundi['+i+']" placeholder="Aliment, recette ou smoothie à ajouter">';
document.getElementById('dlundi'+i).innerHTML += (i <= 10) ? '<span id="dlundi'+i2+'"><a href="javascript:create_champ_dlundi('+i2+')">Ajouter un autre aliment, repas ou smoothie</a></span>' : '';
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

<form id="semainierNutri" action="">

<h2>Nouveau semainier:</h2>

<!-- One "tab" for each step in the form: -->
<div class="tab">Nom du client:
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

<div class="tab">Date de début:
    <p><input name="dateDebsemainier" placeholder="AAAA/MM/JJ" type="date"></p>
</div>

<div class="tab">Lundi:
    <p>Petit-déjeuner</p>
    <!--<form autocomplete="off" action="Add.recette.php">
        <div class="autocomplete" style="width:400px;">-->
            <p><span id="pdlundi1"><a href="javascript:create_champ_pdlundi(1)">Ajouter un aliment, recette ou smoothie</a></span></p>
        <!--</div>
   </form>-->
</div>

<div class="tab">Lundi:
    <p>Collation 1</p>
    <!--<form autocomplete="off" action="Add.recette.php">
        <div class="autocomplete" style="width:400px;">-->
            <p><span id="collundi1"><a href="javascript:create_champ_collundi(1)">Ajouter un aliment, recette ou smoothie</a></span></p>
        <!--</div>
   </form>-->
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

<script>

var currentTab = 0; // Current tab is set to be the first tab (0)
showTab(currentTab); // Display the current tab

function showTab(n) {
  // This function will display the specified tab of the form ...
  var x = document.getElementsByClassName("tab");
  x[n].style.display = "block";
  // ... and fix the Previous/Next buttons:
  if (n == 0) {
    document.getElementById("prevBtn").style.display = "none";
  } else {
    document.getElementById("prevBtn").style.display = "inline";
  }
  if (n == (x.length - 1)) {
    document.getElementById("nextBtn").innerHTML = "Submit";
  } else {
    document.getElementById("nextBtn").innerHTML = "Next";
  }
  // ... and run a function that displays the correct step indicator:
  fixStepIndicator(n)
}

function nextPrev(n) {
  // This function will figure out which tab to display
  var x = document.getElementsByClassName("tab");
  // Exit the function if any field in the current tab is invalid:
  if (n == 1 && !validateForm()) return false;
  // Hide the current tab:
  x[currentTab].style.display = "none";
  // Increase or decrease the current tab by 1:
  currentTab = currentTab + n;
  // if you have reached the end of the form... :
  if (currentTab >= x.length) {
    //...the form gets submitted:
    document.getElementById("semainierNutri").submit();
    return false;
  }
  // Otherwise, display the correct tab:
  showTab(currentTab);
}

function validateForm() {
  // This function deals with validation of the form fields
  var x, y, i, valid = true;
  x = document.getElementsByClassName("tab");
  y = x[currentTab].getElementsByTagName("input");
  // A loop that checks every input field in the current tab:
  for (i = 0; i < y.length; i++) {
    // If a field is empty...
    if (y[i].value == "") {
      // add an "invalid" class to the field:
      y[i].className += " invalid";
      // and set the current valid status to false:
      valid = false;
    }
  }
  // If the valid status is true, mark the step as finished and valid:
  if (valid) {
    document.getElementsByClassName("step")[currentTab].className += " finish";
  }
  return valid; // return the valid status
}

function fixStepIndicator(n) {
  // This function removes the "active" class of all steps...
  var i, x = document.getElementsByClassName("step");
  for (i = 0; i < x.length; i++) {
    x[i].className = x[i].className.replace(" active", "");
  }
  //... and adds the "active" class to the current step:
  x[n].className += " active";
}
</script>

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

</html>