<!DOCTYPE html>
<html lang="en">
<?php   
// $nameErr="";

// if ($_SERVER["REQUEST_METHOD"] == "POST"){
// if(!$_POST["userNameLogIn"])
// $nameErr.=" &#10006; Enter your name:<br>";


// if(!$_POST["passLogIn"]){
// $nameErr.=" &#10006; Pleas enetr your password:<br>";

// }
// // if($_POST["passLogIn"]){
// // $pass=$_POST["passLogIn"];
// // if(strlen($pass)<8)
// // $nameErr.="password shoud be greter than 8<br>";
// // }
// if($nameErr!=""){
//     $nameErr="<div  style='padding:1%; color: rgb(128, 3, 3);border: 1px solid red; border-color:  rgba(243, 95, 95, 0.322);width:80%;margin-left:10%; border-radius: 3px;background-color: rgba(243, 95, 95, 0.322);  text-align: left;' role='alert'> ".$nameErr."</div>";
//     }
// }
?>
     

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sign in </title>
    <link rel="stylesheet" href="../css/style_e.css">
</head>

<body>
    <?php include_once "base.php"; ?>
    <div class="divlogin">
  
            <h2>LOGIN </h2>
     
            <div class="divins">
            <form style="" method="post" action="<?php echo $_SERVER['PHP_SELF'];?>" >
            <!-- <div id="error" style="margin-top:0%;margin-bottom:10%;"> <?php  echo $nameErr; ?> </div> -->
                <input class="textr" type="email"  name="userNameLogIn" placeholder="&#9993; Email"  required><br>
                <input  class="textr" type="password" name="passLogIn" placeholder="&#128477;password"  required><br>
                <a href="#" class="linkbol">forget password?</a><br>
                <input type="submit" class="btnr" value="Log In"  >
            </form>
            <p>don't have an account?<a href="sign_up.php" class="linklog" >sign Up</a></p>
            </div>   
    </div>

 
    
    
    





    <i class="fas fa-eye"></i>
    
</body>

</html>