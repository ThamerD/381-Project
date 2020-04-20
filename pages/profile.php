<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/style_e.css">

</head>
<body>

<?php  include_once "base.php";?>

<div class="divfor" id="coBody">

<!-- <table style="width:40%;">
<tr>
<td><img src="..\img\download.png" alt="img user"  width="80px" style="border-radius:50%;"> 

</td>
<td colspan="2" style="padding-left:0%;margin-left:0%;background-color:black;"><h3>user name </h3></td>

</tr>




</table> -->
<div  style="background-color: rgba(98, 99, 100, 0.39);border-radius: 10px;height: auto;padding:1%;">
<img src="..\img\download.png" alt="img user" class="dfdf"  width="80px" style="border-radius:50%;margin:0%;"></div> <label class="lep"><b> name user </b>
<form action="" >
<input type="submit" class="btnf" value="start chat">
</form>

</label> 
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
                <p>Type:{$row['CATEGORY']}  <label style='margin-left:60%;'>price:{$row['PRICE']} SAR</label></p>
            
                </a>
        </div>
            ";
          }
           mysqlI_close($conn);
        ?>

</div>
    
</body>
</html>