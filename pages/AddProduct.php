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

        <label style="display: inline;">Category:</label>
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
        <!-- <label id="test"></label> -->
        <br>

        <script>
            function checkSelection() {
                var sel = document.getElementById("category").selectedIndex;
                // This is for testing and will be deleted later
                // document.getElementById("test").innerHTML = "You've selected " + sel;
                var wrap=document.getElementById("wrapper");
                var wrapR=document.getElementById("wrapperR");
                var carInfo ='<label for="brand">Brand:</label><input id="brand" type="text" class="field">\
                <label for="model">Model Year:</label><input id="model" type="number" class="field">';
                var carInfoR ='<label for="odo">Odo:</label><input id="odo" type="text" class="field"><br>\
                <label for="condition">Condition:</label><select style="font-size: 15px; width: 6.9cm; margin-bottom:.5cm"><option>New</option><option>Used</option></select>';
                var cloInfo ='<label for="size" >Size:</label><input id="size" type="text" class="field">';
                var cloInfoR ='<label for="brand">Brand:</label><input id="brand" type="text" class="field">';

                switch(sel){
                    case 0:
                        wrap.innerHTML="";
                        wrapR.innerHTML=""
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
                    break;
                    case 4:
                    break;
                }
            }
        </script>

        <form id="Product" style="width: 15cm; margin: auto;">
            <div style="float: left;">
                <label for="name">Name:</label>
                <input id="name" type="text" class="field">
            </div>

            <div style="float: right;">
                <label for="price">Price:</label>$
                <input class="field" id="price" type="number" min="0.01" step="any">
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