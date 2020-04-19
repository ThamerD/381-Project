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
        width: 100%;    
      }
      .prodInfo{
        float: none;
        width: 100%;
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
$imgNum=0;

echo"
<p class='authInfo' id='athr'>
  <strong>Author: </strong><a class='author' href='../pages/profile.php'>$aName</a> 
  <span style='float:right;'>
    <i class='fa'>&#xf095;</i>
    <a class='author' href='../pages/liveChat.php'>0$aNum</a>
      </span>
</p>

<div class='container'>
    <div class='mySlides'>
      <div class='numbertext'>1 / 6</div>
        <img src='../img/1.jpg' style='width:100%'>
    </div>
  
    <div class='mySlides'>
      <div class='numbertext'>2 / 6</div>
        <img src='../img/2.jpg' style='width:100%'>
    </div>
  
    <div class='mySlides'>
      <div class='numbertext'>3 / 6</div>
        <img src='../img/3.jpg' style='width:100%'>
    </div>
  
    <div class='mySlides'>
      <div class='numbertext'>4 / 6</div>
        <img src='../img/4.jpg' style='width:100%'>
    </div>
  
    <div class='mySlides'>
      <div class='numbertext'>5 / 6</div>
        <img src='../img/5.jpg' style='width:100%'>
    </div>
  
    <div class='mySlides'>
      <div class='numbertext'>6 / 6</div>
        <img src='../img/6.jpg' style='width:100%'>
    </div>
  
    <a class='prev' onclick='plusSlides(-1)'>&#10094;</a>
    <a class='next' onclick='plusSlides(1)'>&#10095;</a>
  
    <div class='row'>
      <div class='column'>
        <img class='demo cursor' src='../img/1.jpg' style='width:100%' onclick='currentSlide(1)' alt='Product image 1'>
      </div>
      <div class='column'>
        <img class='demo cursor' src='../img/2.jpg' style='width:100%' onclick='currentSlide(2)' alt='Product image 2'>
      </div>
      <div class='column'>
        <img class='demo cursor' src='../img/3.jpg' style='width:100%' onclick='currentSlide(3)' alt='Product image 3'>
      </div>
      <div class='column'>
        <img class='demo cursor' src='../img/4.jpg' style='width:100%' onclick='currentSlide(4)' alt='Product image 4'>
      </div>
      <div class='column'>
        <img class='demo cursor' src='../img/5.jpg' style='width:100%' onclick='currentSlide(5)' alt='Product image 5'>
      </div>
      <div class='column'>
        <img class='demo cursor' src='../img/6.jpg' style='width:100%' onclick='currentSlide(6)' alt='Product image 6'>
      </div>
    </div>

  </div>


<div class='prodInfo'>
  <h3 style='text-align: center;'>$pName</h3>
</div>

<div class='prodInfo' id='prodInfo'>
    <!-- <h3 style='text-align: center;'>ASUS VivoBook S15 S532 Thin & Light 15.6' FHD, Intel Core i7-8565U CPU, 8 GB DDR4 RAM, PCIe NVMe 512 GB SSD, Windows 10 Home, S532FA-SB77, Transparent Silver</h3> -->
    <!-- <hr> -->
    <p style='font-size: 20px; margin: 0%'>Price: <span id='prc' style='color: firebrick;'>$pPrice</span></p>
    <br>
$pDesc
    <!-- <hr> -->

</div>
<button onclick='location.href='../pages/liveChat.php'' type='button' class='btn' style='float: left;'>Contact</button>
<button onclick='location.href='../pages/addproduct.php'' type='button' class='btn' style='float: left; display: none;'>Edit</button>
<button onclick='location.href=''' type='button' class='btn' style='float: left; display: none;'>Delete</button>

"
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
