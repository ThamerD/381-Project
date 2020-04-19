<?php		
	$keyword = strval($_POST['query']);
	$search_param = "%{$keyword}%";
	$conn =new mysqli('localhost', 'root', '' , '381_db');

	$sql = $conn->prepare("SELECT * FROM product WHERE PRODUCT_NAME LIKE ?");
	$sql->bind_param("s",$search_param);			
	$sql->execute();
	$result = $sql->get_result();
	if ($result->num_rows > 0) {
		while($row = $result->fetch_assoc()) {
		$countryResult[] = $row["PRODUCT_NAME"];
		}
		echo json_encode($countryResult);
	}
	$conn->close();
?>

