<?php
if(isset($_POST['submit'])) {
    $pid = $_GET['ID'];
    $conn=mysqli_connect("localhost","root","","381_db");
$sql = "DELETE FROM product WHERE PRODUCT_ID=$pid";

    if (mysqli_query($conn, $sql)) {
        $message = "Product deleted sucessfully";
echo "<script type='text/javascript'>alert('$message');</script>";

    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    header("Location: home.php");
    die();
    }
?>
