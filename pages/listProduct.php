<?php
// $conn=mysqli_connect("localhost","root","","381_db");
// if(!isset($_COOKIE["login"])){
// echo "<script> location.href='../pages/sign_in.php'; </script>";
// }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style_e.css">
    <title>Document</title>
</head>
<body>
<?php include_once "base.php"; ?>

<div class = "coBody opactiy-Cobody" id="coBody">
    <h2>list product</h2>
    <div class="Container-inbox">
        
        <?php
            $conn =new mysqli('localhost','root','','381_db');
            if(!$conn)
            header('Location: Error.php');
            if(isset($_POST['myInput'])){
                $sql="SELECT * FROM `product` WHERE `PRODUCT_NAME` LIKE '%{$_POST['myInput']}%'";
                $result = mysqli_query($conn,$sql);
                while($row = mysqli_fetch_assoc($result))
                {
                    $pPrice = $row['PRICE'];

                    echo "<div class = 'dw' style=' text-align: left;' ><a style=' text-decoration: none;color:black;' href='product.php?ID={$row['PRODUCT_ID']}'>
                    <p>subject: {$row['PRODUCT_NAME']}</p>
                    <p>Type:{$row['CATEGORY']} &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; price:$$pPrice</p>
    
                    </a></div>";
                    // echo $row['PRODUCT_NAME'];
                }
            }
            else
            {
                $pDesc = isset($_POST['name']) ? $_POST['name'] : null;
                $pPriceFrom = isset($_POST['priceFrom']) ? $_POST['priceFrom'] : 0;
                if ($pPriceFrom==null)
                $pPriceFrom=0;


                $pPriceUntil = isset($_POST['priceUntil']) ? $_POST['priceUntil'] : 1000000;
                if ($pPriceUntil==0)
                $pPriceUntil=1000000;
                $pCat = isset($_POST['category']) ? $_POST['category'] : null;
                // echo $pCat;
                $pCondBook = isset($_POST['bCond']) ? $_POST['bCond'] : null;
                $pAuth = isset($_POST['author']) ? $_POST['author'] : null;
                $pISBN = isset($_POST['isbn']) ? $_POST['isbn'] : null;

                $pBrand = isset($_POST['brand']) ? $_POST['brand'] : null;
                $pOdo = isset($_POST['odo']) ? $_POST['odo'] : null;
                $pModel = isset($_POST['modelYear']) ? $_POST['modelYear'] : null;
                $pCondCar = isset($_POST['condcar']) ? $_POST['condcar'] : null;

                $pSize = isset($_POST['size']) ? $_POST['size'] : null;

                $pGener = isset($_POST['gener']) ? $_POST['gener'] : null;
                $pPlatform = isset($_POST['platform']) ? $_POST['platform'] : null;
                $pYear = isset($_POST['releaseYear']) ? $_POST['releaseYear'] : null;

                // echo $pPriceFrom;
            //    echo $pPriceUntil;
            //    echo $pYear;

               
               if($pCat=="Books")
               {
                $sql = "SELECT * FROM `product` WHERE ((`PRODUCT_NAME` LIKE '%{$pDesc}%') AND (`PRICE` BETWEEN {$pPriceFrom} AND {$pPriceUntil}) AND (`CATEGORY`='Books')) AND ((`BOOK_AUTHOR` LIKE '%{$pAuth}%') AND  (`BOOK_CONDITION` = '{$pCondBook}'))";
                // $sql = "SELECT * FROM `product` WHERE ((`PRODUCT_NAME` LIKE '%{$pDesc}%') AND (`PRICE` BETWEEN {'0'} AND {'100000'}) AND (`CATEGORY`='Books')) AND ((`BOOK_AUTHOR` LIKE '%{$pAuth}%') AND  (`BOOK_CONDITION` = '{$pCondBook}'))";

                $result = mysqli_query($conn,$sql);
                while($row = mysqli_fetch_assoc($result)){
                                        $pPrice = $row['PRICE'];

                    echo "<div class = 'dw' style=' text-align: left;' ><a style=' text-decoration: none;color:black;' href='product.php?ID={$row['PRODUCT_ID']}'>
                    <p>subject: {$row['PRODUCT_NAME']}</p>
                    <p>Type:{$row['CATEGORY']} &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; price:$$pPrice</p>
    
                    </a></div>";
                }
                }
               else if($pCat =="Cars"){
                    $sql = "SELECT * FROM `product` WHERE (`PRODUCT_NAME` LIKE '%{$pDesc}%') AND (`PRICE` BETWEEN {$pPriceFrom} AND {$pPriceUntil}) AND (`BRAND` LIKE '%{$pBrand}%') AND (`CAR_ODO` >= {$pOdo}) AND (`USED` LIKE '%{$pCondCar}%') AND (`CAR_YEAR` = {$pModel})";
                    $result = mysqli_query($conn,$sql);
                    while($row = mysqli_fetch_assoc($result)){
                        $pPrice = $row['PRICE'];

                        echo "<div class = 'dw' style=' text-align: left;' ><a style=' text-decoration: none;color:black;' href='product.php?ID={$row['PRODUCT_ID']}'>
                        <p>subject: {$row['PRODUCT_NAME']}</p>
                        <p>Type:{$row['CATEGORY']} &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; price:$$pPrice</p>
        
                        </a></div>";
                    }
                }
               else if($pCat =="Clothing"){
                    $sql = "SELECT * FROM `product` WHERE (`PRODUCT_NAME` LIKE '%{$pDesc}%') AND (`PRICE` BETWEEN {$pPriceFrom} AND {$pPriceUntil})";
                    $result = mysqli_query($conn,$sql);
                    while($row = mysqli_fetch_assoc($result)){
                        $pPrice = $row['PRICE'];

                        echo "<div class = 'dw' style=' text-align: left;' ><a style=' text-decoration: none;color:black;' href='product.php?ID={$row['PRODUCT_ID']}'>
                        <p>subject: {$row['PRODUCT_NAME']}</p>
                        <p>Type:{$row['CATEGORY']} &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; price:$$pPrice</p>
        
                        </a></div>";
                    }
                }
               else if($pCat == "Games")
               {
                 $sql = "SELECT * FROM `product` WHERE (`PRODUCT_NAME` LIKE '%{$pDesc}%') AND (`PRICE` BETWEEN {$pPriceFrom} AND {$pPriceUntil}) AND (`GENRE` LIKE '%{$pGener}%') AND (`GAME_PLATFORM` LIKE '%{$pGener}%')";
                 $result = mysqli_query($conn,$sql);
                 while($row = mysqli_fetch_assoc($result)){
                    $pPrice = $row['PRICE'];

                     echo "<div class = 'dw' style=' text-align: left;' ><a style=' text-decoration: none;color:black;' href='product.php?ID={$row['PRODUCT_ID']}'>
                     <p>subject: {$row['PRODUCT_NAME']}</p>
                     <p>Type:{$row['CATEGORY']} &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; price:$$pPrice</p>
     
                     </a></div>";
                 }
                }
               else if($pCat == 'Movies'){
                 $sql = "SELECT * FROM `product` WHERE (`PRODUCT_NAME` LIKE '%{$pDesc}%') AND (`PRICE` BETWEEN {$pPriceFrom} AND {$pPriceUntil}) AND (`GENRE` LIKE '%{$pGener}%') AND (`MOVIE_YEAR` = {$pYear})";
                 $result = mysqli_query($conn,$sql);
                 while($row = mysqli_fetch_assoc($result)){
                    $pPrice = $row['PRICE'];

                     echo "<div class = 'dw' style=' text-align: left;' ><a style=' text-decoration: none;color:black;' href='product.php?ID={$row['PRODUCT_ID']}'>
                     <p>subject: {$row['PRODUCT_NAME']}</p>
                     <p>Type:{$row['CATEGORY']} &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; price:$$pPrice</p>
     
                     </a></div>";
                 }
                }
            
            }
        ?>
            
        
    </div>
</body>
</html>