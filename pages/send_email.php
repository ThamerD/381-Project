<?php

$link=mysqli_connect("localhost","root","","381_db");
if(!$link){
    die("we can not connect112");
}
else {
$sql = "SELECT * FROM `user` WHERE EMAIL='".$_POST['forgotmail']."'";
$res=mysqli_query($link,$sql);
$num=mysqli_num_rows($res);
echo $num;
if($num>0){
    $sql = "SELECT user_pass FROM `user` WHERE EMAIL='".$_POST['forgotmail']."'";
    $passw=mysqli_query($link,$sql);
    $pas=mysqli_fetch_row($passw);
    $emailto=$_POST["forgotmail"];
    $titl="your password";
    $bod="your password is'".$pas[0]."'";
   $ree=mail($emailto,$titl,$bod);
if($ree){
    mysqli_close($link);
    header("Location:forgot_password.php?send=we send the password by your email pleas check your email");
}
else{ echo "<h1>we have error</h1>";}
}
if($num=0){
    echo "there is error";
}

}

?>





