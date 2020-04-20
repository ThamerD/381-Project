<?php
if(!isset($_COOKIE["login"])){
    header("Location: sign_in.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search</title>
    <link rel="stylesheet" href="../css/style_e.css">
    <script src="../js/Script.js" defer></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

</head>
<style>
        .coBody{
            width: 550px;
        }
        @media only screen and (max-width:1199px) {
            .coBody{
            width: 90%;
            max-width: 400px;

        }
    }
        </style>
<body>

<?php include_once "base.php"; ?>
    <div class="coBody" id="coBody" style="margin: auto; margin-top: 1cm;">

        <h2 style="margin-top: 0cm;">Add a Product</h2>
        <br>
<form action="listProduct.php" method='POST'>

    <label style="display: inline;">Category:</label>
    <select id="category" name='category' class="catSelect" onchange="SelectType()">
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
    <p style="text-align:left;">product name</p>
    <input type="text" style="float:none; width:100%;" class="text-F" onblur="nameEmptyS()" id="productname" name="name" placeholder="name">
    <br>
    <p style="text-align:left;">price range:</p>
    <input type="text" onblur="priceFEmpty()" name='priceFrom' id="from" class="text-F LeftWidth"  placeholder="From" >
    <input type="text" onblur="priceUEmpty()" name='priceUntil' id="until" class="text-F RightWidth"  placeholder="Until">
    <br>
    <br>
    <br>
    <!-- <br> -->
    <div id="alternativeEle">
        <input type="text"  class="text-F LeftWidth" name='author' id="authorId" onblur="isEmpty('authorId')" placeholder="Author" >
        <input type="text" class="text-F RightWidth" name='isbn' id="isbnId" onblur="isEmpty('isbnId')"  placeholder="ISBN">
        <select class="text-F LeftWidth" id="idid" name='bCond' onblur="checkSelect('idid')">
            <option value="Choose here"  class="hideOption" hidden="">Choose here</option>
            <option value="Very Good">Very Good</option>
        <option value="Good">Good</option>
        <option value="Fair">Fair</option>
        <option value="Poor">Poor</option>
    </select>
</div>
<input type="submit" value="Search" onclick="checkAll()" id="searchBtn" class="btn btn2" >
</form>
<script>
        //  check after press button "searchBtn" all fields not empty and true at all
        function checkAll(){
            var i=document.getElementById("searchBtn");
            var selIndex=document.getElementById("category").selectedIndex;
            nameEmptyS();
            priceFEmpty();
            priceUEmpty();
            switch(selIndex){
                case 0:
                    isEmpty("authorId");
                    isEmpty("isbnId");
                    checkSelect("idid");
                    break;
                case 1:
                    isEmpty("brandId");
                    CheckNumber("odoId");
                    checkYear("modelYearId");
                    checkSelect("idid");
                    break;
                case 2:
                    isEmpty("brandId");
                    checkSelect("idid");
                    break;
                case 3:break;
                case 4:
                    checkSelect("idid");
                    checkSelect("idid2");
                    break;
                case 5:
                    checkYear("releaseYearId");
                    checkSelect("idid");
            }
        }
        // this method for delete all child in id=alternativeEle
        function deleteChildInAlternativeEle(){
            var e = document.querySelector("#alternativeEle"); 
            e.innerHTML = ""; 
        }
        // this method for insert label in html
        function addLabel(where,forWho,otext){
            var Addon = document.getElementById(where);
            var newElement =document.createElement("label");
            newElement.innerHTML=otext;
            newElement.setAttribute("for",forWho);
            newElement.style.float="left";
            Addon.appendChild(newElement);
        }
        // this method for hide the first option is called "for show text"
        function hideLabelOption(){
            $('option.hideOption').prop('hidden', true);  
                    $('option.hideOption').prop('disabled', true);  
        }
        // this method for insert attrbuites of book
        function BookAtt(){//done
            deleteChildInAlternativeEle();
            AddElementForm ("alternativeEle","input","text","isEmpty('authorId')","author","text-F LeftWidth","authorId","","","Author");
            AddElementForm ("alternativeEle","input","text","isEmpty('isbnId')","isbn","text-F RightWidth","isbnId","","","ISBN");
            addSelectForm("alternativeEle",'bCond',"text-F LeftWidth","idid","checkSelect('idid')","Choose here","Very Good","Good","Fair","Poor");
            hideLabelOption();
        }
        // this method for insert attrbuites of car
        function CarAtt(){//done
            deleteChildInAlternativeEle();
            AddElementForm ("alternativeEle","input","text","isEmpty('brandId')","brand","text-F LeftWidth","brandId","","","Brand");
            AddElementForm ("alternativeEle","input","number","CheckNumber('odoId')","odo","text-F RightWidth","odoId","","","odo");
            AddElementForm ("alternativeEle","input","number","checkYear('modelYearId')","modelYear","text-F LeftWidth","modelYearId","","","Model Year");
            addSelectForm("alternativeEle",'condcar',"text-F RightWidth","idid","checkSelect('idid')","Choose here","New","Used");
            hideLabelOption();
        }
        // this method for insert attrbuites of clothing
        function ClothingAtt(){//done
            deleteChildInAlternativeEle();
            AddElementForm ("alternativeEle","input","text","isEmpty('brandId')","brand","text-F LeftWidth","brandId","","","Brand");
            addSelectForm("alternativeEle",'size',"text-F RightWidth","idid","checkSelect('idid')","Choose here","Small","Medium","Large");
            hideLabelOption();
        }
        // this method for insert attrbuites of games
        function GamesAtt(){//done
            deleteChildInAlternativeEle();
            addSelectForm("alternativeEle",'gener',"text-F LeftWidth","idid","checkSelect('idid')","Genre","Fighting","Role-playing","Shooter","Sport","Strategy");
            addSelectForm("alternativeEle",'platform',"text-F RightWidth","idid2","checkSelect('idid2')","Platform","Nintendo Switch","PC","Playstation","Xbox");
            hideLabelOption(); 
        }
        // this method for insert attrbuites of movies
        function MovieAtt(){
            deleteChildInAlternativeEle();
            addSelectForm("alternativeEle",'gener',"text-F LeftWidth","idid","checkSelect('idid')","Genre","Action","Comedy","Drama","Horror","Romance");
            AddElementForm ("alternativeEle","input","number","checkYear('releaseYearId')","releaseYear","text-F RightWidth","releaseYearId","","","Release Year");
            hideLabelOption();
        }
        // this method to insert element of type select with multi options elements for insert multi option write with that instruction
        // addSelectForm(where,oClass,oId,onblur,"for show text","option1","option2","option3")
        function addSelectForm(where,oname,oClass,oId,oonblur,...restArgs){
            var Addon = document.getElementById(where);
            var newElement =document.createElement("select");
            Addon.appendChild(newElement);
            var option = document.createElement("option");
            option.text = restArgs[0];
            option.value = restArgs[0];
            option.setAttribute("class","hideOption");
            $('option.hideOption').prop('hidden', true);
            $('option.hideOption').prop('disabled', true);  
            newElement.appendChild(option);
            for (var i = 1; i < restArgs.length; i++) {
                var option = document.createElement("option");
                option.text = restArgs[i];
                option.value = restArgs[i];
                newElement.appendChild(option);
                }
            newElement.setAttribute("class",oClass);
            newElement.setAttribute("id",oId);
            newElement.setAttribute("onblur",oonblur);
            newElement.setAttribute("name",oname);
        }
      
        // this method for change between attr by index of select is called #category
        function SelectType(){
            var sel = document.getElementById("category").selectedIndex;
            switch(sel){
                case 0:
                    BookAtt();   
                    break;
                case 1:
                    CarAtt(); 
                    break;
                case 2:
                   ClothingAtt();  
                    break;
                case 3:
                    deleteChildInAlternativeEle();
                    break;
                case 4:
                    GamesAtt();
                    break;
                case 5:
                    MovieAtt(); 
                    break;
            }
        }
        // check the price from is empty or not if empty add class redBorder to notify user is empty [for id =from]
    function priceFEmpty(){
        var p = document.getElementById("from");
        if (p.value<0 ||p.value=="")
        p.classList.add("redBorder");
        else
        $("#from").removeClass("redBorder");
        }
    // check the price until is empty or not if empty add class redBorder to notify user is empty [for id =until]
    function priceUEmpty(){
        var p = document.getElementById("until");
        var y=document.getElementById("from");
        if (p.value<=0 ||p.value=="" ||p.value<y.value)
            p.classList.add("redBorder");
        else
            $("#until").removeClass("redBorder");
        }
    // check the product name is empty or not if empty add class redBorder to notify user is empty [for id =productname]
    function nameEmptyS(){
        var p = document.getElementById("productname");
        if (p.value=="" )
            p.classList.add("redBorder");
        else
        $("#productname").removeClass("redBorder");
        }
    // this method check if textField empty or not
    function isEmpty(id){
        var p = document.getElementById(id);
        if (p.value=="" )
            p.classList.add("redBorder");
        else
            $("#"+id).removeClass("redBorder");
     }
    // this method check the numberfield if greater than 0 and not empty
    function CheckNumber(id){
        var p = document.getElementById(id);
        if (p.value<=0 ||p.value=="")
            p.classList.add("redBorder");
        else
            $("#"+id).removeClass("redBorder");
        }
    // check if selectany option from select
    function checkSelect(id){
        var sel = document.getElementById(id);           
        if(sel.selectedIndex===0)
            sel.classList.add("redBorder");
        else
            $("#"+id).removeClass("redBorder");
        }
        // check the yerar is 4 digts and greater than 1899 and less than 2021
    function checkYear(id){
        var p = document.getElementById(id);
    if (p.value<=1899 ||p.value==""||p.value>=2021)
        p.classList.add("redBorder");
    else
        $("#"+id).removeClass("redBorder");
    }
// add element with type input with almost feature [type*,onblure,name,class,id,style,text,placeholder]
// * important that mean you can write this function only write this attribute
        function AddElementForm(addAt,oElement,otype,onblur="",oname="",oClass="",oId="",ostyle="", otext="",oplaceHolder=""){
            var Addon = document.getElementById(addAt);
             var newElement =document.createElement(oElement);
             newElement.value=otext
             newElement.style=ostyle;
            newElement.setAttribute("type",otype);
            newElement.setAttribute("class",oClass);
            newElement.setAttribute("id",oId);
            newElement.setAttribute("name",oname);
            newElement.setAttribute("onblur",onblur);
            newElement.setAttribute("placeholder",oplaceHolder);
            Addon.appendChild(newElement);
        }
        </script>
    </div>
</body>

</html>