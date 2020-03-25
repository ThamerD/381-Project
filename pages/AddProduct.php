<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add a Product</title>
    <link rel="stylesheet" href="../css/style_e.css">

</head>

<body>

<?php include_once "base.php"; ?>
    <div class="coBody" id="coBody" style="margin: auto; width: 30%; margin-top: 1cm; background-color: rgba(255, 255, 255, 0.9);">
        <h2 style="margin-top: 0cm;">Add a Product</h2>
        <br>

        <label>Category:</label>
        <select id="category" onchange="checkSelection()" style="font-size: 17px;">
            <option selected>Electronics</option>
            <option>Cars</option>
            <option>Clothing</option>
            <option>Furniture</option>
            <option>Games</option>
            <option>Movies</option>
            <option>Books</option>
        </select>
        <br>
        <label id="test"></label>
        <br>

        <script>
            function checkSelection() {
                var sel = document.getElementById("category").selectedIndex;
                // This is for testing and will be deleted later
                document.getElementById("test").innerHTML = "You've selected " + sel;
                var wrap=document.getElementById("wrapper");
                var carInfo ='<br><label for="brand">Brand:</label><input id="brand" type="text" class="text-D">' +
                <br><label for="odo">Odo:</label><input id="odo" type="text" class="text-D">';
                var cloInfo ='<br><label for="size">Size:</label><input id="size" type="text" class="text-D">';
                switch(sel){
                    case 0:
                     wrap.innerHTML="";
                     break;
                    case 1:
                    wrap.innerHTML=carInfo; 
                    break;
                    case 2: wrap.innerHTML=cloInfo; break;
                    case 3:
                    case 4:
                }
            }
        </script>

        <form id="Product" style="width: 11cm; margin: auto;">
            <div style="float: left;">
                <label for="name" style="display: block;">Name:</label>
                <input id="name" type="text" class="text-D" style="width: 6.85cm;">
            </div>

            <div style="float: right;">
                <label for="price" style="display: block; left: 10px; position: relative;">Price:</label> $
                <input id="price" type="number" min="0.01" step="any" class="text-D" style="width: 3cm; margin-left: 0px;">
                <!-- <input type="text" name="currency-field" id="currency-field" pattern="^\$\d{1,3}(,\d{3})*(\.\d+)?$" value="" data-type="currency" placeholder="$1,000,000.00"> -->
            </div>
            <br>

            <label style="display: block;" for="description">Description:</label>
            <textarea id="description" cols="59" rows="5" style="float: left; margin-bottom: .5cm;"></textarea>
            <br>
            <label for="images">Images:</label>
            <input id="images" type="file" multiple><br>

            <div id="wrapper"></div>

            <!-- <label for="brand">Brand:</label>
            <input id="brand" type="text" class="text-D"> -->

            <input type="submit" class="btn">
            <!-- Add category-specific inputs such as ODR, assign required and optional information -->
        </form>
    </div>
</body>

</html>