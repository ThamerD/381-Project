
    <div class="header">
      
        <div class="logo">
            <a href="#"><img src="../img/logo.png" width="70px" height="80px" style="margin-top: 0px; margin-left: 0.5cm;" alt="logo"></a>
        </div>
        <div>

            <img onclick="OpenNav()" width="30px" height="20px" id="open" src="../img/menu_icon.png" alt="">
            <ul class="navbar" id="nav">
                <span onclick="closeNav()" id="close">X</span>
                <li><a class="menu" href="Home.html">Home</a></li>
                <li><a class="menu" href="#">Electronics</a></li>
                <li><a class="menu" href="#">Cars</a></li>
                <li><a class="menu" href="#">Clothing</a></li>
                <li><a class="menu" href="#">Furniture</a></li>
                <li><a class="menu" href="#">Games</a></li>
                <li><a class="menu" href="#">Movies</a></li>
                <li><a class="menu" href="#">Books</a></li>
                <li><a class="menu" href="#">About</a></li>
                <li><a class="menu" href="#">Support</a></li>
                <li><a class="sign" href="#">Sign Up</a></li>
                <li><a class="sign" href="#">Sign In</a></li>
            </ul>
        </div>
    </div>
  
<script>
    var x=document.getElementById("nav");
        function closeNav(){
           x.style.width="0px";
           x.style.display="none"
           x.style.zIndex="2";
           document.getElementById("coBody").style.zIndex="0";
        }
        function OpenNav(){
            x.style.width="200px";
           x.style.display="inline"
           x.style.zIndex="2";
           document.getElementById("coBody").style.zIndex="-1";
        }
    </script>
