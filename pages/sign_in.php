<!DOCTYPE html>
<html lang="en">
<?php   
$nameErr="";

if ($_SERVER["REQUEST_METHOD"] == "POST"){
if(!$_POST["userNameLogIn"])
$nameErr.=" &#10006; Enter your name:<br>";


if(!$_POST["passLogIn"]){
$nameErr.=" &#10006; Pleas enetr your password:<br>";

}
// if($_POST["passLogIn"]){
// $pass=$_POST["passLogIn"];
// if(strlen($pass)<8)
// $nameErr.="password shoud be greter than 8<br>";
// }
if($nameErr!=""){
    $nameErr="<div  style='padding:1%; color: rgb(128, 3, 3);border: 1px solid red; border-color:  rgba(243, 95, 95, 0.322);width:80%;margin-left:10%; border-radius: 3px;background-color: rgba(243, 95, 95, 0.322);  text-align: left;' role='alert'> ".$nameErr."</div>";
    }
}
?>
     

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sign in </title>
    <link rel="stylesheet" href="../css/style_e.css">
</head>

<body>
    <?php include_once "base.php"; ?>
    <div class="divlogin" style=" height: auto;">
        <div style="margin-top:5%; padding-bottom:2%;">
            <h2>LOGIN </h2>
     

            <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>" >
            <div id="error" style="margin-top:0%;margin-bottom:10%;"> <?php  echo $nameErr; ?> </div>
                <input class="text-F" type="email" id="tex" name="userNameLogIn" placeholder="&#9993; Email" style="width:42%;" required><br>
                <input  class="text-F" type="password" name="passLogIn" placeholder="&#128477;password" style="width:42%;" required><br>
                <a href="#" class="linklog" style="   font-size: 12px;margin-right: 22%;">forget password?</a><br>
                <input type="submit" class="btn" value="Log In"  >
            </form>
            <p>don't have an account?<a href="sign up.html" class="linklog" >sign Up</a></p>
        </div>
    </div>

 
    
    
    





    <i class="fas fa-eye"></i>
    
</body>

</html>