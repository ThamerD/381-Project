<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search</title>
    <link rel="stylesheet" href="../css/style_e.css">
    <script src="../js/Script.js" defer></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <style>
        .coBody{
            width: 550px;
        }
        @media only screen and (max-width:1199px) {
            .coBody{
            width: 90%;
            max-width: 400px;

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


        }
    </style>
</head>

<body>

<?php include_once "base.php"; ?>
    <div class="coBody" id="coBody" style="margin: auto; margin-top: 1cm;">

        <h2 style="margin-top: 0cm;">Add a Product</h2>
        <br>

        <label style="display: inline;">Category:</label>
        <select id="category" class="catSelect" onchange="checkSelection()">
            <option>Books</option>
            <option>Cars</option>
            <option>Clothing</option>
            <option>Electronics</option>
            <!-- <option>Furniture</option> -->
            <option>Games</option>
            <option>Movies</option>
        </select>
        <br>
        <!-- <label id="test"></label> -->
        <br>

        <script>
        </script>

        <form id="Product" method="post" action="#">
            <div class="left">
                <label for="name">Name:</label>
                <input name="name" id="name" type="text" class="field" onblur="nameEmpty()">
            </div>
            <div class="left">
                <label for="currency-field">Price between :</label>
                <input type="text" style="float:left;width:50%;" class="field" name="currency-field" id="currency-field" pattern="^\$\d{1,3}(,\d{3})*(\.\d+)?$"
                 value="" data-type="currency" onblur="priceEmpty()">

                 <input type="text" class="field"  style="float:left; width:50%; marign:40px;" name="currency-field" id="currency-field" pattern="^\$\d{1,3}(,\d{3})*(\.\d+)?$"
                 value="" data-type="currency" onblur="priceEmpty()">
            </div>
<!-- <input type="text" name="currency-field" id="currency-field" pattern="^\$\d{1,3}(,\d{3})*(\.\d+)?$" value="" data-type="currency" placeholder="$1,000,000.00"> -->

            <div id="wrapper" class="left"></div>
            <div id="wrapperR" class="right"></div>
            <!-- <br> -->
            <!-- <label for="brand">Brand:</label>
            <input id="brand" type="text" class="field"> -->
            <input type="submit" class="btn" style="margin: auto;">
            <!-- Add category-specific inputs such as ODR, assign required and optional information -->
        </form>
    </div>
   <style>
   </style>
</body>

</html>