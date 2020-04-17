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
            width: 550px;

        }
        label{
            display: block;
            font-size: 22px;

        }
        @media only screen and (max-width:700px) {
            .coBody{
            width: 90%;
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

        <form class="formP" id="Product" method="post" action="#">
            <div class="left">
                <label for="name">Name:</label>
                <input name="name" id="name" type="text" class="field" onblur="nameEmpty()">
            </div>

            <div class="right">
                <!-- <label for="price">Price:</label>
                <input name="price" class="field" id="currency-field" type="number" min="0.01" step="any" onblur="priceEmpty()"> -->
                <label for="currency-field">Price:</label>
                <input type="text" class="field" name="currency-field" id="currency-field" pattern="^\$\d{1,3}(,\d{3})*(\.\d+)?$"
                 value="" data-type="currency" onblur="priceEmpty()">
            </div>
<!-- <input type="text" name="currency-field" id="currency-field" pattern="^\$\d{1,3}(,\d{3})*(\.\d+)?$" value="" data-type="currency" placeholder="$1,000,000.00"> -->

            <div id="wrapper" class="left"></div>
            <div id="wrapperR" class="right"></div>
            <!-- <br> -->

            <div class="left">
            <label for="description">Description:</label>
            <textarea style=" margin:0cm 0cm 1cm; display: block;" id="description" cols="78" rows="5"></textarea>
            </div>
        <div class="im">
            <label style="display: inline" for="images">Images:</label>
            <input style="margin:0cm 0cm 0.7cm" id="images" type="file" multiple>
        </div>


            <!-- <label for="brand">Brand:</label>
            <input id="brand" type="text" class="field"> -->
            <input type="submit" class="btn" style="margin: auto;">
            <!-- Add category-specific inputs such as ODR, assign required and optional information -->
        </form>
    </div>
</body>

</html>