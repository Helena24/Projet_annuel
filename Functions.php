<?php
session_start();
include("police.php");


/* 
Function permettant de définir l'acces à l'administrateur

Elle Verifie que le mail de la session active n'est pas nul et qu'il correspond a l'adresse mail de l'admin
Pour que l'administrateur est accès a ses fonctions avec une autre adresse mail, il suffit de modifier 
l'adresse ci-dessous et dans la deuxième fonction
*/

function is_admin (){
    if(!empty($_SESSION['MAIL_CLIENT'] && $_SESSION['MAIL_CLIENT'] == 'administrateur@admin.fr')) {
        return true; //Il est admin 
    }
    else 
    {
        return false; // Il n'est pas admin 
    }
}


/* 
Function permettant de définir les autres users
Elle verifie que l'adresse mail de la session active n'est pas nulle et qu'elle est différente de celle de l'admin

*/
function is_user(){
    if(!empty($_SESSION['MAIL_CLIENT'] && $_SESSION['MAIL_CLIENT'] != 'administrateur@admin.fr')){
        return true; 
    }
    else 
    {
        return false; 
    }
}

 //Permet d'afficher l'entete de l'administratuer
 if (is_admin()){
    include("entete.php");
  
} 
//Permet d'fficher l'entete des users
if (is_user()){
    include("entete_client.php");
 
} 







?>
