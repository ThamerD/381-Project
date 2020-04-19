<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sign in </title>
    <link rel="stylesheet" href="../css/style_e.css">
</head>

<?php   
$nameErr="";  
if ($_SERVER["REQUEST_METHOD"] == "POST"){
if($_POST["passwo"] && $_POST["emaillog"]){
$conn=mysqli_connect("localhost","root","","381_db");
$qur="SELECT * FROM `user` WHERE user_pass=\"".$_POST['passwo']."\" and email=\"".$_POST['emaillog']."\"";
$resl=mysqli_query($conn,$qur);
mysqli_error($conn);
$numb=mysqli_num_rows($resl);
if($numb>0){
    setcookie("login",$_POST["emaillog"],time()+60*60);
    $var=mysqli_close($conn);
    header("Location:Home.php");


}
else{
    $nameErr.="&#10006; incorrect email/password";
    $var=mysqli_close($conn);
}
}

if($nameErr!=""){
    $nameErr="<div  style='padding:1%; color: rgb(128, 3, 3);border: 1px solid red; border-color:  rgba(243, 95, 95, 0.322);width:80%;margin-left:10%; border-radius: 3px;background-color: rgba(243, 95, 95, 0.322);  text-align: left;' role='alert'> ".$nameErr."</div>";
    }
}
?>
     



<body>
    <?php include_once "base.php"; ?>
    <div class="divlogin">
  
            <h2>LOGIN </h2>
           <?php if (isset($_GET['bye'])) {
        echo("<div style='padding:1%;color: rgb(7, 128, 3);border: 1px solid red;border-color: rgba(142, 243, 95, 0.322);width:80%;margin-left:10%; border-radius: 3px;background-color: rgba(142, 243, 95, 0.322);  text-align: left;''>&#10004; " . $_GET['bye'] . "</div>");
    }
     ?>
            <div class="divins">
            <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>" >
            <div id="error" style="margin-top:0%;margin-bottom:10%;"> <?php  echo $nameErr; ?> </div>
                <input class="textr" type="email"  name="emaillog" placeholder="&#9993; Email"  required><br>
                <input  class="textr" type="password" name="passwo" placeholder="&#128477;password"  required><br>
                <a href="forgot_password.php" class="linkbol">forget password?</a><br>
                <input type="submit" class="btnr" value="Log In"  >
            </form>
            <p>don't have an account?<a href="sign_up.php" class="linklog" >sign Up</a></p>
            </div>   
    </div>

 
    
    
    





    <i class="fas fa-eye"></i>
    
</body>

</html>