<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/style_e.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<link rel="stylesheet" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.1/themes/base/minified/jquery-ui.min.css" type="text/css" /> 
<script type="text/javascript" src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
<script type="text/javascript" src="http://code.jquery.com/ui/1.10.1/jquery-ui.min.js"></script>
<script type="text/javascript" src="../js/typeahead.js"></script>
</script>
</head>
<style>
	.typeahead {
        text-decoration: none;
         /* border: 2px solid #FFF;border-radius: 4px;padding: 8px 12px;max-width: 300px;min-width: 290px;background: rgba(66, 52, 52, 0.5);color: #FFF; */
        }
	.tt-menu { 
        width:300px; 
        /* text-decoration: none; */
    }
	ul.typeahead{
        margin:0px;
        padding:10px 0px;
        /* text-decoration: none; */
    }
    li{

        list-style-type: none; 
    }
  
	ul.typeahead.dropdown-menu li a {
        padding: 10px !important;
        /* border-bottom:#CCC 1px solid; */
        color:#FFF;
        /* text-decoration: none; */
    }
	ul.typeahead.dropdown-menu li:last-child a {
         border-bottom:0px !important;
         }
	.demo-label {
        font-size:1.5em;
        color: #686868;
        font-weight: 500;
        color:#FFF;
        /* text-decoration: none; */
    }
    .dropdown-menu{
        /* background:red; */
        /* background-color: #fffff1; */
    }
	.dropdown-menu>.active>a, .dropdown-menu>.active>a:focus, .dropdown-menu>.active>a:hover {
        text-decoration: none;
		color: black;
		/* background: black; */
		/* outline: 0; */
	}
	</style>
<body>
    <?php include_once "base.php"; ?>
  
    <div class="coBody" id="coBody" style="background:none;">
        <div class="search__container">
            <p class="search__title">
                Search with little word
            </p>
            <p id="error-Search">Please fill the field</p>  
            
    <input class="search__input typeahead" onkeyup="click_it()" type="text" placeholder="Search" id="myInput" name="myInput">
            
    </div>
    </div>
    <input type="button" id="myBtn-Home" value="" >
    
    <script>
    $(document).ready(function () {
        $("ul.typeahead").addClass("sss");
        $('#myInput').typeahead({
            source: function (query, result) {
                $.ajax({
                    url: "SearchAutoComplete.php",
					data: 'query=' + query,            
                    dataType: "json",
                    type: "POST",
                    success: function (data) {
						result($.map(data, function (item) {
							return item;
                        }));
                    }
                });
            }
        });
    });
</script>
    <div class="coBody coBody-HeightValue">

        <!-- <div class = "newestProduct">
            <p>subject: MW3</p>
            <p>Type:Games</p>
            <p>price:$39</p>
        </div> -->
        <?php
           $conn =new mysqli('localhost', 'root', '' , '381_db');
           $result = mysqli_query($conn,"SELECT * FROM `product` ORDER BY PRODUCT_ID DESC LIMIT 10");
           while( $row = mysqli_fetch_assoc( $result ) ){
            // echo "$row";
            // <p>{$row['PRODUCT_NAME']}</p>
            // <p>{$row['PRODUCT_ID']}</p>
            // echo"<p>{$row['PRICE']}</p>";
            // <p>{$row['CATEGORY']}</p>
            echo
            "
            <a href='product.php?ID={$row['PRODUCT_ID']}'>
              <div class = 'newestProduct' >
                <p>subject: {$row['PRODUCT_NAME']}</p>
                <p>Type:{$row['CATEGORY']}</p>
                <p>price:{$row['PRICE']} SAR</p>
        </div>
        </a>
            ";
          }
           mysqlI_close($conn);
        ?>
    </div>
    <script>
        function click_it(){
            var input = document.getElementById("myInput");
            if (event.keyCode === 13) {
      if(input.value==""){
       document.getElementById("error-Search").style.display="block";

      }else
      {
       document.getElementById("error-Search").style.display="none";
        event.preventDefault();
        document.getElementById("myBtn-Home").click();
      }
        }
        }
        // var input = document.getElementById("myInput");
// input.addEventListener("keyup", function(event) {
    
//   if (event.keyCode === 13) {
//       if(input.value==""){
//     alert("enter value please!!")
//       }else
//       {

//    event.preventDefault();
//    document.getElementById("myBtn").click();
//       }
//   }
// });
</script>
</body>
</html>