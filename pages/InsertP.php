<?php
// $servername = "localhost";
// $username = "username";
// $password = "password";
// $dbname = "myDB";
$email='thamer@hotmail.com';
$name = isset($_POST['name']) ? $_POST['name'] : null;
// ID
$pDesc = isset($_POST['description']) ? $_POST['description'] : null;
$pPrice = isset($_POST['currency-field']) ? $_POST['currency-field'] : null;
$pCat = isset($_POST['category']) ? $_POST['category'] : null;
$pCond = isset($_POST['cond']) ? $_POST['cond'] : null;
$pAuth = isset($_POST['author']) ? $_POST['author'] : null;
$pISBN = isset($_POST['isbn']) ? $_POST['isbn'] : null;
$pPages = isset($_POST['pages']) ? $_POST['pages'] : null;
$pBCond = isset($_POST['bCond']) ? $_POST['bCond'] : null;
$pBrand = isset($_POST['brand']) ? $_POST['brand'] : null;
$pODO = isset($_POST['odo']) ? $_POST['odo'] : null;
$pModel = isset($_POST['model']) ? $_POST['model'] : null;
$pSize = isset($_POST['size']) ? $_POST['size'] : null;
$pGenre = isset($_POST['genre']) ? $_POST['genre'] : null;
$pPlatform = isset($_POST['platform']) ? $_POST['platform'] : null;
$pYear = isset($_POST['year']) ? $_POST['year'] : null;









$conn=mysqli_connect("localhost","root","","381_db");
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
    $sql="INSERT INTO `product`(`EMAIL`, `PRODUCT_NAME`, `PRODUCT_ID`, `DESCRIPTION`, `PRICE`,`CATEGORY`, `USED`, `BOOK_AUTHOR`, `BOOKI_SBN`,
`BOOK_NUM_PAGE`, `BOOK_CONDITION`, `BRAND`,`CAR_ODO`, `CAR_YEAR`, `CLOTHING_SIZE`, `GENRE`, `GAME_PLATFORM`, `MOVIE_YEAR`)
VALUES ('$email','$name','','$pDesc','$pPrice','$pCat','$pCond','$pAuth','$pISBN','$pPages','$pBCond','$pBrand','$pODO','$pModel','$pSize','$pGenre','$pPlatform','$pYear')";
// $test='test321';
//     $sql="INSERT INTO `user`(`UNAME`, `EMAIL`, `PHONE_NUMBER`, `USER_PASS`, `ADMIN`) VALUES ('$test','tha@hotmail.com','540403334','123','0')";
       if (mysqli_query($conn, $sql)) {
        // echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

     $last_id = mysqli_insert_id($conn);
	for($i = 0; $i < count($_FILES['file_img']['name']); $i++)
	{
		$filetmp = $_FILES["file_img"]["tmp_name"][$i];
		$filename = $_FILES["file_img"]["name"][$i];
		$filetype = $_FILES["file_img"]["type"][$i];
		$filepath = "photo/".$filename;
	
	move_uploaded_file($filetmp,$filepath);
	
	$sql = "INSERT INTO `product_images`(`ID`, `IMAGE_DIR`) VALUES ('$last_id','$filepath')";
	$result = mysqli_query($conn, $sql);
	
	}
 mysqli_close($conn);
?>