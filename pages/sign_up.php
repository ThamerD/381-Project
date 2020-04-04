<!DOCTYPE html>
<html lang="en">

<?php  
   
$nameErr="";
if ($_SERVER["REQUEST_METHOD"] == "POST"){
// if(!$_POST["fName"]){


// }
if(isset($_POST["fName"]))
if(!preg_match("/^[A-Za-z]{2,31}$/",$_POST["fName"])){
    $nameErr.=" &#10006; Enter your name:<br>";


    
}

 if(!preg_match("/^\([0-9]{3}\)-[0-9]{3}-[0-9]{4}$/",$_POST["phone"])){
   $nameErr.="pleas enter valid phone number<br>"; 
 }




// $nameErr.=" &#10006; Pleas enetr your password:<br>";
// }
// if($_POST["passLogIn"]){
// $pass=$_POST["passLogIn"];
// if(strlen($pass)<8)
// $nameErr.="password shoud be greter than 8<br>";
// }
if($nameErr!=""){
    $nameErr="<div  style='padding:1%; color: rgb(128, 3, 3);border: 1px solid red; border-color:  rgba(243, 95, 95, 0.322);width:80%;margin-left:0%; border-radius: 3px;background-color: rgba(243, 95, 95, 0.322);  text-align: left;' role='alert'> ".$nameErr."</div>";
    }
}
?>






<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sign up</title>
    <link rel="stylesheet" href="../css/style_e.css">
</head>

<body>

    <?php include_once "base.php"; ?>
    <div class="divSignUp" id="divup" style="padding-left: 1%;padding-right: 0%; height: auto;">

        <h2>Sign Up</h2>
        <div  style=""> <?php  echo $nameErr; ?> </div>
        <!-- <div id="signat" style="background-color:black;padding-top:0%;" ></div> -->
        <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>"  >
            first name<span id="sun" style="color: chocolate;">*</span> <br><input type="text" id="fName" placeholder="first name" name="fName" class="text-F" style="width:80%;"><br>
           last name<span id="sun" style="color: chocolate;">*</span> <br><input style="width:80%;" type="text" id="lname" placeholder="last name" class="text-F" > <br> phone number<span style="color: chocolate;">*</span> <input size="10" name="phone" maxlength="12" type="text" id="phon"  value="+966" class="text-F" id="number" style="width: 80%;" ><br> Email address<span style="color: chocolate;">*</span>            <input type="email" id="email" placeholder="your@gmail.com" class="text-F" style="width: 80%;" ><br> password
            <span style="color: chocolate;">*</span> <input type="password" id="pass" placeholder="password" class="text-F" style="width: 80%;" ><br> confirm password<span style="color: chocolate;">*</span><input type="password" id="cpass" placeholder="re-entir password"
                class="text-F" style="width: 80%;" >
            <div style="text-align: center;">
                <input type="submit" value="sign up" class="btn"  >
                <p>have you account?<a href="sign in.html" class="linklog">Log In</a></p>
        </form>
        </div>

    </div>
  

    <i class="fas fa-eye"></i>

<!-- 
<script>

function fun(){
if(document.getElementById("fName").value.trim()==""){
    var error="";
    error+="pleas enter first name";
    document.getElementById("signat").innerHTML="<div  style='padding:1%; color: rgb(128, 3, 3);border: 1px solid red; border-color:  rgba(243, 95, 95, 0.322);width:80%;margin-left:0%; border-radius: 3px;background-color: rgba(243, 95, 95, 0.322);  text-align: left;'>#"+error+"</div>";




   return false;


}










var num=/^\(?([0-9]{3})\)?[-. ]?([0-9]{3})[-. ]?([0-9]{4})$/;

if(document.getElementById("phon").value.match(num)){
    return ture;
}
else{
    var error="";
    error+="pleas enter falid password";
    document.getElementById("signat").innerHTML="<div  style='padding:1%; color: rgb(128, 3, 3);border: 1px solid red; border-color:  rgba(243, 95, 95, 0.322);width:80%;margin-left:0%; border-radius: 3px;background-color: rgba(243, 95, 95, 0.322);  text-align: left;'>#"+error+"</div>";
// return false;
}



}


</script> -->


</body>

</html>