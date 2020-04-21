<!DOCTYPE html>
<html lang='en'>

<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Edit a Product</title>
    <link rel='stylesheet' href='../css/style_e.css'>
    <!-- <script src='../js/Script.js' defer></script> -->
    <script src='https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js'></script>

    <style>
        .coBody{
            width: 820px;

        }
        label{
            display: block;
            font-size: 22px;

        }
        @media only screen and (max-width:700px) {
            .coBody{
            width: 92%;
            max-width: 400px;
            /* background-color: pink; */

        }

            form{
                left: 50px;
                position: relative;    
                margin: auto;
            }
            label, .catSelect{
                font-size: 18px;
            }
        .field, .wideSelect, label{
            width: 7.8cm;

        }
        .btn{
            float: left;
        }
        .im{
            float: right;
        }
        label{
        font-size: 18px;
        width: 7.8cm;
    }
    .right{
        clear: both;
        float: right;

    }
      .left{
        clear: both;
        float: right;


    }
    .formP{
        width: 5cm;
        left: 50px;
        position: relative;    
        margin: auto;
    }
    textarea{
        width: 7.8cm;

    }
    .catSelect{
        font-size: 18px;
    }
    .field, .wideSelect{
        width: 7.8cm;

    }
    .btn{
        float: left;
    }
    .im{
        float: right;
    }


        }
    </style>
</head>

<body>

<?php
$conn=mysqli_connect('localhost','root','','381_db');
if(!isset($_COOKIE["login"])){
    echo "<script> location.href='../pages/sign_in.php'; </script>";
    }
    
include_once 'base.php';

$pid = $_GET['ID'];

$prod = mysqli_query($conn,"SELECT * FROM `product` WHERE PRODUCT_ID = $pid");
$row = mysqli_fetch_assoc($prod);

$pName =  $row['PRODUCT_NAME'];
$pPrice =  $row['PRICE'];
$pDesc =  $row['DESCRIPTION'];


$pCat =  $row['CATEGORY'];
$pCond =  $row['USED'] ;
$pAuth =  $row['BOOK_AUTHOR'] ;
$pISBN =  $row['BOOK_ISBN'];
$pPages =  $row['BOOK_NUM_PAGE'];
$pBCond =  $row['BOOK_CONDITION'];
$pBrand =  $row['BRAND'];
$pODO =  $row['CAR_ODO'];
$pModel =  $row['CAR_YEAR'];
$pSize =  $row['CLOTHING_SIZE'];
$pGenre =  $row['GENRE'];
$pPlatform =  $row['GAME_PLATFORM'];
$pYear =  $row['MOVIE_YEAR'];

echo"
    <div class='coBody xyz1' id='coBody' style='margin: auto; margin-top: 1cm;'>

        <h2 style='margin-top: 0cm;'>Edit a Product</h2>
        <br>



        <form class='formP' id='Product' method='post' action='../pages/EditDB.php?ID=$pid' enctype='multipart/form-data'>

        <label style='display: inline;'>Category:</label>
        <select id='category' name='category' id='category' class='catSelect' onchange='checkSelection()'>
            <option value='Books' selected>Books</option>
            <option value='Cars'>Cars</option>
            <option value='Clothing'>Clothing</option>
            <option value='Electronics'>Electronics</option>
            <!-- <option>Furniture</option> -->
            <option value='Games'>Games</option>
            <option value='Movies'>Movies</option>
        </select>
        <script>
              let element = document.getElementById('category');
              element.value = '$pCat';

              let elementA = document.getElementById('cond');
    elementA.value = '$pCond';
    
    let elementB = document.getElementById('size');
    elementB.value = '$pSize';
    
    let elementC = document.getElementById('bCond');
    elementC.value = '$pBCond';
    
    let elementD = document.getElementById('size');
    elementD.value = '$pSize';
    
    let elementE = document.getElementById('genre');
    elementE.value = '$pGenre';
    
    let elementF = document.getElementById('platform');
    elementF.value = '$pPlatform';


        </script>
        <br>
        <br>
            <div class='left'>
                <label for='name'>Name:</label>
                <input name='name' id='name' type='text' class='field' onblur='nameEmpty()' required value='$pName'>
            </div>

            <div class='right'>
                <!-- <label for='price'>Price:</label> -->
                <!-- <input name='price' class='field' id='currency-field' type='text' min='0.01' step='any' onblur='priceEmpty()' value='$pPrice'> -->
                <label for='currency-field'>Price:</label>
                <input type='text' class='field' name='currency-field' id='currency-field'
                 data-type='currency' onblur='priceEmpty()' required value='$pPrice' >
            </div>

            <div id='wrapper' class='left'></div>
            <div id='wrapperR' class='right'></div>
            <!-- <br> -->

            <div class='left'>
            <label for='description'>Description:</label>
            <textarea style=' margin:0cm 0cm 1cm; display: block;' id='description' name='description' cols='115' rows='6'>$pDesc</textarea>
            </div>
        <div class='im'>
        <input type='file' name='file_img[]' id='gallery-photo-add' multiple />
        </div>



            <input type='submit' class='btn' style='margin: auto; margin-top: 0.5cm;'>
        </form>
        <div class='gallery' style='max-width: 100%;'></div>

    </div>
    </body>
";


?>

<script>
checkSelection();
function checkSelection() {
  var sel = document.getElementById("category").selectedIndex;
  // This is for testing and will be deleted later
  // document.getElementById("test").innerHTML = "You"ve selected " + sel;
  var wrap=document.getElementById("wrapper");
  var wrapR=document.getElementById("wrapperR");
  var carInfo ='<label for="brand">Brand:</label><input name="brand" id="brand" type="text" class="field" value="<?php echo $pBrand?>">\
  <label for="model">Model Year:</label><input name="model" id="model" type="number" class="field" value="<?php echo $pModel?>">';
  var carInfoR ='<label for="odo">Odo:</label>\
  <div class="km">\
  <input name="odo" type="number" id="odo" class="field" value="<?php echo $pODO?>"/>\
  </div>\
  <label for="condition">Condition:</label><select id="cond" name="cond" class= "wideSelect" value="<?php echo $pCond?>">\
  <option value=""  disabled hidden>Choose here</option><option value="Used">Used</option><option value="New">New</option></select>';
  var cloInfo ='<label for="size" >Size:</label><select id="size" name"size" class= "wideSelect" value="<?php echo $pSize?>">\
  <option value=""  disabled hidden>Choose here</option><option value="Small">Small</option><option value="Medium">Medium</option><option value="Large">Large</option></select>';
  var cloInfoR ='<label for="brand">Brand:</label><input name="brand" id="brand" type="text" class="field" value="<?php echo $pBrand?>">';
  var bokInfo ='<label for="author">Author:</label><input name="author" id="author" type="text" class="field" value="<?php echo $pAuth?>">\
  <label for="pages">Number of Pages:</label><input name="pages" id="pages" type="number" class="field" value="<?php echo $pPages?>">';
  var bokInfoR='<label for="isbn">ISBN:</label><input name="isbn" id="isbn" type="text" class="field" value="<?php echo $pISBN ?>">\
  <label for="condition">Condition:</label><select id="bCond" name="bCond" class= "wideSelect" value="<?php echo $pBCond?>">\
  <option value=""  disabled hidden>Choose here</option><option value="Very Good">Very Good</option><option value="Good">Good</option><option value="Fair">Fair</option><option value="Poor">Poor</option></select>';
  var movInfo='<label for="Genre">Genre:</label><select id="genre" name="genre" class= "wideSelect" value="<?php echo $pGenre?>">\
  <option value=""  disabled hidden>Choose here</option><option value="action">Action</option><option value="Comedy">Comedy</option><option value="Drama">Drama</option><option value="Horror">Horror</option>\
  <option value="romance">Romance</option></select>';
  var movInfoR='<label for="year">Release Year:</label><input name="year" id="year" type="number" class="field" value="<?php echo $pYear?>">';
  var gamInfo='<label for="Genre">Genre:</label><select id="genre" name="genre" class= "wideSelect" value="<?php echo $pGenre?>">\
  <option value=""  disabled hidden>Choose here</option><option value="Fighting">Fighting</option><option value="Role-playing">Role-playing</option><option value="Shooter">Shooter</option>\
  <option value="sport">Sport</option><option value="Strategy">Strategy</option></select>';
  var gamInfoR='<label for="platform">Platform:</label><select id="platform" name="platform" class= "wideSelect" value="<?php echo $pPlatform?>">\
  <option value=""  disabled hidden>Choose here</option><option value="Nintendo Switch">Nintendo Switch</option><option value="PC">PC</option><option value="Playstation">Playstation</option>\
  <option value="Xbox">Xbox</option></select>';




//   var elementa = document.getElementById('cond');
//     elementa.value = '';
    // echo $pSize;
    // let element1 = document.getElementById('size');
    // element1.value = '$pSize';
    
    // let element2 = document.getElementById('bCond');
    // element2.value = '$pBCond';
    
    // let element3 = document.getElementById('size');
    // element3.value = '$pSize';
    
    // let element4 = document.getElementById('genre');
    // element4.value = '$pGenre';
    
    // let element5 = document.getElementById('platform');
    // element5.value = '$pPlatform';






  switch(sel){
      case 0:
          wrap.innerHTML=bokInfo;
          wrapR.innerHTML=bokInfoR;
          break;
      case 1:
          wrap.innerHTML=carInfo; 
          wrapR.innerHTML=carInfoR;
          break;
      case 2:
          wrapR.innerHTML=cloInfo;
          wrap.innerHTML=cloInfoR;
          break;
      case 3:
        wrap.innerHTML="";
        wrapR.innerHTML="";
      break;
      case 4:
        wrap.innerHTML=gamInfo;
        wrapR.innerHTML=gamInfoR;
      break;
      case 5:
        wrap.innerHTML=movInfo;
        wrapR.innerHTML=movInfoR;
      break;
      case 6:
      wrap.innerHTML="";
      wrapR.innerHTML="";
    break;
  }
}
function priceEmpty(){
  var p = document.getElementById("currency-field");
  if (p.value==0 ||p.value=="")
  p.classList.add("redBorder");
}
function nameEmpty(){
  var p = document.getElementById("name");
  if (p.value=="")
  p.classList.add("redBorder");
}

$("input[data-type='currency']").on({
    keyup: function() {
      formatCurrency($(this));
    },
    blur: function() { 
      formatCurrency($(this), "blur");
    }
});


function formatNumber(n) {
  // format number 1000000 to 1,234,567
  return n.replace(/\D/g, "").replace(/\B(?=(\d{3})+(?!\d))/g, ",");
}


function formatCurrency(input, blur) {
  // appends $ to value, validates decimal side
  // and puts cursor back in right position.
  
  // get input value
  var input_val = input.val();
  
  // don't validate empty input
  if (input_val === "") { return; }
  
  // original length
  var original_len = input_val.length;

  // initial caret position 
  var caret_pos = input.prop("selectionStart");
    
  // check for decimal
  if (input_val.indexOf(".") >= 0) {

    // get position of first decimal
    // this prevents multiple decimals from
    // being entered
    var decimal_pos = input_val.indexOf(".");

    // split number by decimal point
    var left_side = input_val.substring(0, decimal_pos);
    var right_side = input_val.substring(decimal_pos);

    // add commas to left side of number
    left_side = formatNumber(left_side);

    // validate right side
    right_side = formatNumber(right_side);
    
    // On blur make sure 2 numbers after decimal
    if (blur === "blur") {
      right_side += "00";
    }
    
    // Limit decimal to only 2 digits
    right_side = right_side.substring(0, 2);

    // join number by .
    input_val = "$" + left_side + "." + right_side;

  } else {
    // no decimal entered
    // add commas to number
    // remove all non-digits
    input_val = formatNumber(input_val);
    input_val = "$" + input_val;
    
    // final formatting
    if (blur === "blur") {
      // input_val += ".00";
    }
  }
  
  // send updated string to input
  input.val(input_val);

  // put caret back in the right position
  var updated_len = input_val.length;
  caret_pos = updated_len - original_len + caret_pos;
  input[0].setSelectionRange(caret_pos, caret_pos);
}
$(function() {
  // Multiple images preview in browser
  var imagesPreview = function(input, placeToInsertImagePreview) {

      if (input.files) {
          var filesAmount = input.files.length;

          for (i = 0; i < filesAmount; i++) {
              var reader = new FileReader();

              reader.onload = function(event) {
                  $($.parseHTML('<img>')).attr({'src': event.target.result, 'width':'200px' }).appendTo(placeToInsertImagePreview);
              }

              reader.readAsDataURL(input.files[i]);
          }
      }

  };

  $('#gallery-photo-add').on('change', function() {
      imagesPreview(this, 'div.gallery');
  });
});
</script>
</html>
