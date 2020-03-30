<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add a Product</title>
    <link rel="stylesheet" href="../css/style_e.css">
    <script src="../js/Script.js" defer></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
</head>

<body>

<?php include_once "base.php"; ?>
    <div class="coBody" id="coBody" style="margin: auto; width: 30%; margin-top: 1cm; background-color: rgba(255, 255, 255, 0.9);">
        <h2 style="margin-top: 0cm;">Add a Product</h2>
        <br>

        <label style="display: inline;">Category:</label>
        <select id="category" onchange="checkSelection()" style="font-size: 23px;">
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

        <form id="Product" style="width: 15cm; margin: auto;" method="post" action="#">
            <div style="float: left;">
                <label for="name">Name:</label>
                <input name="name" id="name" type="text" class="field" onblur="nameEmpty()">
            </div>

            <div style="float: right;">
                <!-- <label for="price">Price:</label>
                <input name="price" class="field" id="currency-field" type="number" min="0.01" step="any" onblur="priceEmpty()"> -->
                <label for="currency-field">Price:</label>
                <input type="text" class="field" name="currency-field" id="currency-field" pattern="^\$\d{1,3}(,\d{3})*(\.\d+)?$"
                 value="" data-type="currency" onblur="priceEmpty()">
            </div>
<!-- <input type="text" name="currency-field" id="currency-field" pattern="^\$\d{1,3}(,\d{3})*(\.\d+)?$" value="" data-type="currency" placeholder="$1,000,000.00"> -->

            <div id="wrapper" style="float: left;"></div>
            <div id="wrapperR" style="float: right;"></div>
            <!-- <br> -->

            <div style="float: left;">
            <label for="description">Description:</label>
            <textarea style="display: block;" id="description" cols="78" rows="5"></textarea>
            </div>
        <div >
            <label style="display: inline;" for="images">Images:</label>
            <input style="margin:1cm 0cm 1cm" id="images" type="file" multiple>
        </div>


            <!-- <label for="brand">Brand:</label>
            <input id="brand" type="text" class="field"> -->
            <input type="submit" class="btn" style="margin-left: 0cm;">
            <!-- Add category-specific inputs such as ODR, assign required and optional information -->
        </form>
    </div>
</body>

</html>