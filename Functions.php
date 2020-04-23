<?php
session_start();
include("police.php");

//function permettant de définir l'administrateur 
function is_admin (){
    if(!empty($_SESSION['MAIL_CLIENT'] && $_SESSION['MAIL_CLIENT'] == 'victor.janneteau@laposte.net')) {
        return true; //Il est admin 
    }
    else 
    {
        return false; // Il n'est pas admin 
    }
}

//function permettant de définir les autres users
function is_user(){
    if(!empty($_SESSION['MAIL_CLIENT'] && $_SESSION['MAIL_CLIENT'] !='victor.janneteau@laposte.net')){
        return true; 
    }
    else 
    {
        return false; 
    }
}

 //Pages a afficher si il s'agit d'une connexion admin 
 if (is_admin()){
    include("entete.php");
} 

if (is_user()){
    include("entete_client.php");
} 







?>
