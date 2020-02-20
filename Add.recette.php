<?php		
	$keyword = strval($_POST['query']);
	$search_param = "{$keyword}%";
	include("Connect.php");

	$sql = $connect->prepare("SELECT * FROM ALIMENTS WHERE NOM_ALIMENT LIKE ?");
	$sql->bind_param("s",$search_param);			
	$sql->execute();
	$result = $sql->get_result();
	if ($result->num_rows > 0) {
		while($row = $result->fetch_assoc()) {
		$countryResult[] = $row["NOM_ALIMENT"];
		}
		echo json_encode($countryResult);
	}
	$connect->close();
?>