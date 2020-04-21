<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add a Product</title>
    <link rel="stylesheet" href="../css/style_e.css">
    <script src="../js/Script.js" defer></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

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
$conn=mysqli_connect("localhost","root","","381_db");
if(!isset($_COOKIE["login"])){
echo "<script> location.href='../pages/sign_in.php'; </script>";
}

include_once "base.php"; ?>
    <div class="coBody xyz" id="coBody" style="margin: auto; margin-top: 1cm;">

        <h2 style="margin-top: 0cm;">Add a Product</h2>
        <br>



        <form class="formP" id="Product" method="post" action="../pages/insertP.php" enctype="multipart/form-data">

        <label style="display: inline;">Category:</label>
        <select id="category" name="category" class="catSelect" onchange="checkSelection()">
            <option value="Books" selected>Books</option>
            <option value="Cars">Cars</option>
            <option value="Clothing">Clothing</option>
            <option value="Electronics">Electronics</option>
            <!-- <option>Furniture</option> -->
            <option value="Games">Games</option>
            <option value="Movies">Movies</option>
        </select>
        <br>
        <br>
            <div class="left">
                <label for="name">Name:</label>
                <input name="name" id="name" type="text" class="field" onblur="nameEmpty()" required>
            </div>

            <div class="right">
                <!-- <label for="price">Price:</label>
                <input name="price" class="field" id="currency-field" type="number" min="0.01" step="any" onblur="priceEmpty()"> -->
                <label for="currency-field">Price:</label>
                <!-- <input type="text" class="field" name="currency-field" id="currency-field" pattern="^\$\d{1,3}(,\d{3})*(\.\d+)?$" -->
                <input type="text" class="field" name="currency-field" id="currency-field" pattern="^\\d{1,3}(,\d{3})*(\.\d+)?"

                 value="" data-type="currency" onblur="priceEmpty()" required>
            </div>

            <div id="wrapper" class="left"></div>
            <div id="wrapperR" class="right"></div>
            <!-- <br> -->

            <div class="left">
            <label for="description">Description:</label>
            <textarea style=" margin:0cm 0cm 1cm; display: block;" id="description" name="description" cols="115" rows="6"></textarea>
            </div>
        <div class="im">
        <input type="file" name="file_img[]" id="gallery-photo-add" multiple />
        </div>



            <input type="submit" class="btn" style="margin: auto; margin-top: 0.5cm;">
        </form>
        <div class="gallery" style="max-width: 100%;"></div>

    </div>
</body>

</html>