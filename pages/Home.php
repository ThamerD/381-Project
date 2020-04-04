<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/style_e.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js">

</script>
</head>
<body>
    <?php include_once "base.php"; ?>
    <div class="coBody" id="coBody" style="background:none;">
        <div class="search__container">
            <p class="search__title">
                Search with little word
            </p>
            <p id="error-Search">Please fill the field</p>  
    <input class="search__input" onkeyup="click_it()" type="text" placeholder="Search" id="myInput" require autocomplete="off">
    </div>
    </div>
    <input type="button" id="myBtn-Home" value="" >
    <div class="coBody coBody-HeightValue">
        <div class = "newestProduct">
            <p>subject: MW3</p>
            <p>Type:Games</p>
            <p>price:$39</p>
        </div>
        <div class = "newestProduct">
            <p>subject: accentaccentaccent</p>
            <p>Type:car</p>
            <p>price:$80000</p>
        </div>
        <div class = "newestProduct">
            <p>subject: accentaccentaccent</p>
            <p>Type:car</p>
            <p>price:$80000</p>
        </div>
        <div class = "newestProduct">
            <p>subject: accentaccentaccent</p>
            <p>Type:car</p>
            <p>price:$80000</p>
        </div>
        <div class = "newestProduct">
            <p>subject: accentaccentaccent</p>
            <p>Type:car</p>
            <p>price:$80000</p>
        </div>
        <div class = "newestProduct">
            <p>subject: accentaccentaccent</p>
            <p>Type:car</p>
            <p>price:$80000</p>
        </div>
        <div class = "newestProduct">
            <p>subject: accentaccentaccent</p>
            <p>Type:car</p>
            <p>price:$80000</p>
        </div>
        <div class = "newestProduct">
            <p>subject: accentaccentaccent</p>
            <p>Type:car</p>
            <p>price:$80000</p>
        </div>
        <div class = "newestProduct">
            <p>subject: accentaccentaccent</p>
            <p>Type:car</p>
            <p>price:$80000</p>
        </div>
        <div class = "newestProduct">
            <p>subject: accentaccentaccent</p>
            <p>Type:car</p>
            <p>price:$80000</p>
        </div> <div class = "newestProduct">
            <p>subject: accentaccentaccent</p>
            <p>Type:car</p>
            <p>price:$80000</p>
        </div> <div class = "newestProduct">
            <p>subject: accentaccentaccent</p>
            <p>Type:car</p>
            <p>price:$80000</p>
        </div> <div class = "newestProduct">
            <p>subject: accentaccentaccent</p>
            <p>Type:car</p>
            <p>price:$80000</p>
        </div> <div class = "newestProduct">
            <p>subject: accentaccentaccent</p>
            <p>Type:car</p>
            <p>price:$80000</p>
        </div>
        <div class = "newestProduct">
            <p>subject: accentaccentaccent</p>
            <p>Type:car</p>
            <p>price:$80000</p>
        </div>
        <div class = "newestProduct">
            <p>subject: accentaccentaccent</p>
            <p>Type:car</p>
            <p>price:$80000</p>
        </div>
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