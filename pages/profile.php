<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/style_e.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body style="text-align:left;">

<?php  include_once "base.php";?>

<div class="divfor" id="coBody">
<div style="background-color: rgba(98, 99, 100, 0.39);border-radius: 10px;height: auto;padding:1%;">
<table>
<tr rowspan="2">
<td rowspan="2" ><img src="..\img\download.png" alt="img user"  width="80px" style="border-radius:50%;"> 

<?php
if(!isset($_COOKIE["login"])){
    echo "<script> location.href='../pages/sign_in.php'; </script>";
    }
echo "</td>";
$conn =new mysqli('localhost', 'root', '' , '381_db');
$sql="SELECT * FROM `user` WHERE EMAIL='".$_GET['email']."'";
$result = mysqli_query($conn,$sql);
    echo mysqli_error($conn);
$row = mysqli_fetch_row($result);

echo "<td style='padding-left:5%;' ><h3>".$row[0]." </h3></td>";

echo "</tr>";

echo "<tr>"; 

echo  "<td style='color:blue'> <i class='fa' style='color:black;'>&#xf095;</i>".$row[2]."</td>";


echo "</tr>";





echo "</table>";

echo "</div>";
mysqli_close($conn);
?>

<?php
if(isset($_COOKIE['login']))
if($_GET['email'] !=$_COOKIE['login']){

    
    echo "<a class='btnf' href='liveChat.php?email=".$_GET['email']."'>start chat</a><br>"; 

}
else{
 
    echo "<a class='btnf' href='edit_profile.php?mail=".$_GET['email']."'>edit</a><br>"; 

}
?>

<h2>product:</h2>

<?php


           $conn =new mysqli('localhost', 'root', '' , '381_db');
           $result = mysqli_query($conn,"SELECT * FROM `product` WHERE EMAIL='".$_GET['email']."'");
           while( $row = mysqli_fetch_assoc( $result ) ){
            echo
            "
            <div class = 'dw' style=' text-align: left;' >
            <a style=' text-decoration: none;color:black;' href='product.php?ID={$row['PRODUCT_ID']}'>
                <p>subject: {$row['PRODUCT_NAME']}</p>
                <p>Type:{$row['CATEGORY']} </p> 
                <p>price:{$row['PRICE']} SAR</p>
            
                </a>
        </div>
            ";
          }
           mysqlI_close($conn);
        ?>

</div>
    
</body>
</html>