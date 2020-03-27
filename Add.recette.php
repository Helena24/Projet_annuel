<?php include("Connect.php"); ?>
<?php
  
    $result = $connect->query('SELECT nom_aliment FROM ALIMENTS ORDER BY NOM_ALIMENT');
    $result = $result->fetchAll(PDO::FETCH_ASSOC);
    $res = [];
    foreach($result as $ligne) {
        $res[] = $ligne['nom_aliment']; 
    }
    echo json_encode($res); 

   /*  $result = $connect->query('SELECT nom_aliment FROM ALIMENTS ORDER BY NOM_ALIMENT');
    $liste = array();
    $r = mysql_query($requete) or die (mysql_error());
    while($resultat = mysql_fetch_assoc($r))
    {$liste[]=htmlentities($resultat['nom_aliment']);} */


    /* $request = $connect -> prepare('SELECT nom_aliment FROM ALIMENTS ORDER BY NOM_ALIMENT');
    $request -> execute();
    $table_nom = array (); 
    while ($data = $request -> fetch())
    $table_nom[]=$data['nom_aliment'];
    
    $number = $request -> rowcount();
    for ($i =0; $i<$number; $i++)
    {
        echo $table_nom[$i];
    
    }
 */

?>