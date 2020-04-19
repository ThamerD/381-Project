<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../css/style_e.css">
    <script src="../js/Script.js" defer></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <style>
        .coBody{
            /* width: 1400px; */
            padding: 10px;
            height:100%;

        }
          /* Position the image container (needed to position the left and right arrows) */
          .container {
            top: 0px;
            position: relative;
            float: left;
            width: 50%;
            overflow: hidden;
            padding: 0px 50px 0px;
            background-color: white;

          }
        @media only screen and (max-width:1400px) {
            .coBody{
            width: 90%;
            /* max-width: 400px; */

        }
        .container {
        float: none;
        width: 50%;    
      }
      .prodInfo{
        float: none;
        width: 50%;
    }
    }
    * {
    box-sizing: border-box;
    }

    </style>
</head>

<body>

<?php include_once "base.php";

?>
<div class="coBody" id="coBody" style="margin: auto; margin-top: 1cm;">

<?php 
$conn=mysqli_connect("localhost","root","","381_db");
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// var qs = new Querystring();
// var pid = qs.get("ID");
$pid = $_GET['ID'];

$prod = mysqli_query($conn,"SELECT * FROM `product` WHERE PRODUCT_ID = $pid");
$row = mysqli_fetch_assoc($prod);
$em = $row['EMAIL'];
$pName = $row['PRODUCT_NAME'];
$pPrice = $row['PRICE'];
$pDesc = $row['DESCRIPTION'];

$au =  mysqli_query($conn,"SELECT * FROM `user` WHERE EMAIL = '$em'" );
$row2 = mysqli_fetch_assoc($au);
$aNum = $row2['PHONE_NUMBER'];
$aName = $row2['UNAME'];

$im = mysqli_query($conn,"SELECT IMAGE_DIR FROM `product_images` WHERE ID = '$pid'" );
$im2 = mysqli_query($conn,"SELECT IMAGE_DIR FROM `product_images` WHERE ID = '$pid'" );

$imgNum=1;
$imgNum2=1;



echo"
<p class='authInfo' id='athr'>
  <strong>Author: </strong><a class='author' href='../pages/profile.php'>$aName</a> 
  <span style='float:right;'>
    <i class='fa'>&#xf095;</i>
    <a class='author' href='../pages/liveChat.php'>0$aNum</a>
      </span>
</p>
<br>

<div class='prodInfo'>
  <h3 style='text-align: center;'>$pName</h3>
    <!-- <h3 style='text-align: center;'>ASUS VivoBook S15 S532 Thin & Light 15.6' FHD, Intel Core i7-8565U CPU, 8 GB DDR4 RAM, PCIe NVMe 512 GB SSD, Windows 10 Home, S532FA-SB77, Transparent Silver</h3> -->
    <!-- <hr> -->
    <p style='font-size: 20px; margin: 0%'>Price: <span id='prc' style='color: firebrick;'>$pPrice</span></p>
    <br>
    <p style='white-space: pre-wrap;'>
$pDesc
</p>
    <!-- <hr> -->

</div>

<div class='container'>";
if (mysqli_num_rows($im)<>0)
while( $images = mysqli_fetch_assoc($im) ){
  $photo = $images['IMAGE_DIR'];
  echo"
  <div class='mySlides'>
  <img src='$photo' style='width:100%'>
</div>

  ";
  
  
  $imgNum=$imgNum+1;
}


echo"
<a class='prev' onclick='plusSlides(-1)'>&#10094;</a>
<a class='next' onclick='plusSlides(1)'>&#10095;</a>
<div class='row'>";

if (mysqli_num_rows($im)<>0)
while( $images = mysqli_fetch_assoc($im2) ){
  $photo = $images['IMAGE_DIR'];
  echo"
  <div class='column'>
  <img class='demo cursor' src='$photo' style='width:100%' onclick='currentSlide($imgNum2)' alt='Product image $imgNum2'>
</div>
";
$imgNum2=$imgNum2+1;
}

?>



<script>
    var slideIndex = 1;
    showSlides(slideIndex);
    
    function plusSlides(n) {
      showSlides(slideIndex += n);
    }
    
    function currentSlide(n) {
      showSlides(slideIndex = n);
    }
    
    function showSlides(n) {
      var i;
      var slides = document.getElementsByClassName("mySlides");
      var dots = document.getElementsByClassName("dot");
      if (n > slides.length) {slideIndex = 1}    
      if (n < 1) {slideIndex = slides.length}
      for (i = 0; i < slides.length; i++) {
          slides[i].style.display = "none";  
      }
      for (i = 0; i < dots.length; i++) {
          dots[i].className = dots[i].className.replace(" active", "");
      }
      slides[slideIndex-1].style.display = "block";  
      dots[slideIndex-1].className += " active";
    }
    </script>



<!-- MAGE BUTTONS BIGGER -->
<!-- EDIT -->



    </body>
