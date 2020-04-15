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
            width: 1400px;
            padding: 10px;

        }
        @media only screen and (max-width:1199px) {
            .coBody{
            width: 90%;
            max-width: 400px;

        }
    }
    * {
    box-sizing: border-box;
    }

    </style>
</head>

<body>

<?php include_once "base.php"; ?>
<div class="coBody" id="coBody" style="margin: auto; margin-top: 1cm;">

<!-- <div class="imgDiv" id="imgDiv"> -->
<!--  Add images as such: https://www.w3schools.com/howto/howto_js_slideshow.asp
+ zoom as such:https://www.w3schools.com/howto/howto_js_image_zoom.asp with image thumbnails
ex:  https://bit.ly/3b14ShD and https://bit.ly/39VULJD -->
<!-- IMAGES HERE -->
<p class="authInfo" id="athr">
  <strong>Author: </strong><a class="author" href="../pages/profile.php">Abu Raghad Alraghadeen 511 </a> 
  <span style="float:right;">
    <i class="fa">&#xf095;</i>
    <a class="author" href="../pages/liveChat.php">0560030311</a>
      </span>
</p>
<hr>

<!-- Container for the image gallery -->
<div class="container">
    <!-- Full-width images with number text -->
    <div class="mySlides">
      <div class="numbertext">1 / 6</div>
        <img src="../img/1.jpg" style="width:100%">
    </div>
  
    <div class="mySlides">
      <div class="numbertext">2 / 6</div>
        <img src="../img/2.jpg" style="width:100%">
    </div>
  
    <div class="mySlides">
      <div class="numbertext">3 / 6</div>
        <img src="../img/3.jpg" style="width:100%">
    </div>
  
    <div class="mySlides">
      <div class="numbertext">4 / 6</div>
        <img src="../img/4.jpg" style="width:100%">
    </div>
  
    <div class="mySlides">
      <div class="numbertext">5 / 6</div>
        <img src="../img/5.jpg" style="width:100%">
    </div>
  
    <div class="mySlides">
      <div class="numbertext">6 / 6</div>
        <img src="../img/6.jpg" style="width:100%">
    </div>
  
    <!-- Next and previous buttons -->
    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
    <a class="next" onclick="plusSlides(1)">&#10095;</a>
  
    <!-- Image text -->
    <!-- <div class="caption-container">
      <p id="caption"></p>
    </div> -->
  
    <!-- Thumbnail images -->
    <div class="row">
      <div class="column">
        <img class="demo cursor" src="../img/1.jpg" style="width:100%" onclick="currentSlide(1)" alt="The Woods">
      </div>
      <div class="column">
        <img class="demo cursor" src="../img/2.jpg" style="width:100%" onclick="currentSlide(2)" alt="Cinque Terre">
      </div>
      <div class="column">
        <img class="demo cursor" src="../img/3.jpg" style="width:100%" onclick="currentSlide(3)" alt="Mountains and fjords">
      </div>
      <div class="column">
        <img class="demo cursor" src="../img/4.jpg" style="width:100%" onclick="currentSlide(4)" alt="Northern Lights">
      </div>
      <div class="column">
        <img class="demo cursor" src="../img/5.jpg" style="width:100%" onclick="currentSlide(5)" alt="Nature and sunrise">
      </div>
      <div class="column">
        <img class="demo cursor" src="../img/6.jpg" style="width:100%" onclick="currentSlide(6)" alt="Snowy Mountains">
      </div>
    </div>

  </div>


<!-- </div> -->
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
<div class="prodInfo" id="prodInfo">
    <h3 style="text-align: center;">ASUS VivoBook S15 S532 Thin & Light 15.6" FHD, Intel Core i7-8565U CPU, 8 GB DDR4 RAM, PCIe NVMe 512 GB SSD, Windows 10 Home, S532FA-SB77, Transparent Silver</h3>
    <hr>
    <p style="font-size: 20px; margin: 0%">Price: <span id="prc" style="color: firebrick;">$280.76</span></p>
    <br>

    ScreenPad 2.0 adds an interactive, secondary 5.65" touchscreen to enhance productivity
    ScreenPad 2.0 fits a series of handy ASUS utility apps: Quick Key, Number Key, Handwriting, Slide Xpert, etc.
    15.6" Full HD 4 way NanoEdge bezel display with stunning 88% screen-to-body ratio and 5.65" Full HD ScreenPad 2.0
    Powerful Intel Core i7-8565U Processor (8M Cache, up to 4.6 GHz)
    8 GB DDR4 RAM and PCIe NVMe 512 GB SSD; Windows 10 Home
    Ergonomic chiclet backlit keyboard and facial login via Windows Hello
    Exclusive Ergolift design for improved typing position
    Comprehensive connections including USB 3.1 Type-C, USB 3.1 Type A, USB 2.0, and HDMI; Wi-Fi 5/802.11ac Wi-Fi
    <hr>

</div>



    </body>