<!DOCTYPE html>
<html lang="en">

<?php  
   
$nameErr="";
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    
//here we check the user input 
if(!preg_match("/^[A-Za-z0-9-_]{2,31}$/",$_POST["fName"])){
    $nameErr.=" &#10006; Enter a valid user name<br>";  
}
 else if(!preg_match("/^[0-9]{10}$/",$_POST["phone"])){
   $nameErr.="&#10006; pleas enter valid phone number<br>"; 
 }
 else if(!preg_match('/^[\w\s?]+$/si',$_POST["pass"])){
    $nameErr.=" &#10006; your password must be contain [number,chars,space]only<br>";  
}
else if($_POST["pass"]!=$_POST["password"]){

    $nameErr.=" &#10006; password and confirm password are not same :<br>";

}
else if(strlen($_POST["pass"])<8){
    $nameErr.="&#10006; your password should be equal or grater than 8 digit";
}
//here we will start to connect to database and check if there is any confilct
$con=mysqli_connect("localhost","root","","381_db");
    
if(!$con){
die("sorry we can not reach database");}
else {


if(isset($_POST["fName"])){
        $sql="SELECT * FROM `user` WHERE UNAME='".$_POST['fName']."'";
        $res=mysqli_query($con,$sql);
      $num=mysqli_num_rows($res);
     
        if($num>0)
      $nameErr.="&#10006; this name alredy used";
    }
 if(isset($_POST["phone"])){
        $sql="SELECT * FROM `user` WHERE PHONE_NUMBER='".$_POST['phone']."'";
        $res=mysqli_query($con,$sql);
       mysqli_error($con);
      $num=mysqli_num_rows($res);
        if($num>0)
      $nameErr.="&#10006; this phone number alredy used <br>";
    }
 
 if(isset($_POST["email"])){
    $qu="SELECT * FROM 'user'";
    
    $sql = "SELECT * FROM `user` WHERE EMAIL='".$_POST['email']."'";
     $res=mysqli_query($con,$sql);
     if($res){
     $num=mysqli_num_rows($res);
    if($num>0)
    $nameErr.="&#10006; this email alredy exsist<br>";
     }
    }
}
//here we will insert user input and we check every thing is good 
if($_POST["email"] && $_POST["fName"] && $_POST["phone"] && $_POST["pass"] && $_POST["password"]){


    $sql="INSERT INTO user VALUES ('".$_POST['fName']."','".$_POST['email']."',".$_POST['phone'].",'".$_POST['pass']."',0)";
    $res=mysqli_query($con,$sql);
  if($res){
    mysqli_close($con);
    header("Location:sign_in.php?bye=Registration completed successfully try to log in");
  }
else {
    die("can not select ");
}
}
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
    <div class="divSignUp" id="divup" >

        <h2>Sign Up</h2>
        <div > <?php  echo $nameErr; ?> </div> 
        <div id="signat" style="background-color:black;padding-top:0%;" ></div>
        <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>" >
          user name<span id="sun" style="color: chocolate;">*</span> <input type="text" id="fName" placeholder="first name" name="fName" class="text-F" style="width:90%;margin-top:0%;" required><br>
          phone number<span style="color: chocolate;">*</span> <input size="10" name="phone" maxlength="10" type="text" id="phon" placeholder="0555555555" class="text-F" id="number" style="width: 90%;" required ><br> Email address<span style="color: chocolate;">*</span>            <input type="email" id="email" placeholder="example@gmail.com" class="text-F" style="width: 90%;" name="email" required><br> password
            <span style="color: chocolate;">*</span> <input type="password" id="pass" placeholder="password" class="text-F" style="width: 90%;" name="pass" required><br> confirm password<span style="color: chocolate;">*</span><input name="password" type="password" id="cpass" placeholder="re-entir password"
                class="text-F" style="width: 90%;" required >
            <div style="text-align: center;">
                <input type="submit" value="sign up" class="btn" >
                <p>have you account?<a href="sign_in.php" class="linklog">Log In</a></p>
        </form>
        </div>
       
    </div>
  

    <i class="fas fa-eye"></i>
</body>

</html>