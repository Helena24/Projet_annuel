<?php include("Connect.php"); ?>
<?php
   /*  $term = $_GET['term'];
     
    $requete = $connect->prepare('SELECT * FROM ALIMENTS WHERE NOM_ALIMENT LIKE :term');
    $requete->execute(array('term' => '%' .$term. '%'));
     
    $array = array();
     
    while($donnee = $requete->fetch())
    {
        array_push($array, $donnee['NOM_ALIMENT']);
    }
    echo json_encode($array);  */


    /* $sql = $connect->prepare("SELECT * FROM ALIMENTS WHERE NOM_ALIMENT LIKE ?");
	$sql->bind_param("s",$search_param);			
	$sql->execute();
	$result = $sql->get_result();
	if ($result->num_rows > 0) {
		while($row = $result->fetch_assoc()) {
		$countryResult[] = $row["NOM_ALIMENT"];
		}
		echo json_encode($countryResult);
	}
    $conn->close(); */
    


/* 
$q = $_GET["NOM_ALIMENT"];

if (!$q) return;

$query = mysql_query("SELECT NOM_ALIMENT FROM ALIMENTS WHERE NOM_ALIMENT LIKE '$q%' LIMIT 10");
echo "blabla";
while($row = mysql_fetch_array($query)) {

    $NOM_ALIMENT = $row['NOM_ALIMENT'];

   

    echo "$NOM_ALIMENT\n";

} */

if (isset($_GET['term']))
{
    $secure = htmlspecialchars($_GET['term']);
    $result = $connect->query('SELECT * FROM ALIMENTS WHERE NOM_ALIMENT LIKE "%'.$secure.'%" ORDER BY NOM_ALIMENT LIMIT 25');
    $result = $result->fetchAll(PDO::FETCH_ASSOC);
    echo json_encode($result);
}









?>