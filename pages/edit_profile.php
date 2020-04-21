<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/style_e.css">
</head>
<body>
    <?php include_once "base.php";?>

    <?php
$conn=mysqli_connect('localhost','root','','381_db');


$mail=$_COOKIE['login'];
$prod = mysqli_query($conn,"SELECT * FROM `user` WHERE email ='".$mail."'");
if(!isset($_COOKIE["login"])){
    header("Location:sign_in.php");
    }
if(!$prod){
    echo "you can not access database";
}
$row = mysqli_fetch_assoc($prod);
$user=$row['UNAME'];
$phone=$row['PHONE_NUMBER'];
$email=$row['EMAIL'];
$pass=$row['USER_PASS'];


  
$nameErr="";
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    if(!preg_match("/^[A-Za-z0-9-_]{2,31}$/",$_POST["fName"])){
        $nameErr.=" &#10006; Enter a valid user name<br>";  
    }
     else if(!preg_match("/^[0-9]{10}$/",$_POST["phone"])){
       $nameErr.="&#10006; pleas enter valid phone number<br>"; 
     }
     else if(!preg_match('/^[\w\s?]+$/si',$_POST["pass"])){
        $nameErr.=" &#10006; your password must be contain [number,chars,space]only<br>";  
    }
   
    else if(strlen($_POST["pass"])<8){
        $nameErr.="&#10006; your password should be equal or grater than 8 digit";
    }



    


        // if(isset($_POST["fName"])){
        //         $sqli="SELECT * FROM `user` WHERE UNAME='".$_POST['fName']."'";
        //         $res=mysqli_query($prod,$sqli);
        //       $num=mysqli_num_rows($res);
             
        //         if($num>0)
        //       $nameErr.="&#10006; this name alredy used";
        //     }
        //  if(isset($_POST["phone"])){
        //         $sql="SELECT * FROM `user` WHERE PHONE_NUMBER='".$_POST['phone']."'";
        //         $res=mysqli_query($prod,$sql);
        //        mysqli_error($prod);
        //       $num=mysqli_num_rows($res);
        //         if($num>0)
        //       $nameErr.="&#10006; this phone number alredy used <br>";
        //     }
         
        //  if(isset($_POST["email"])){
        //     $qu="SELECT * FROM 'user'";
            
        //     $sql = "SELECT * FROM `user` WHERE EMAIL='".$_POST['email']."'";
        //      $res=mysqli_query($prod,$sql);
        //      if($res){
        //      $num=mysqli_num_rows($res);
        //     if($num>0)
        //     $nameErr.="&#10006; this email alredy exsist<br>";
        //      }
        //     }
            if($_POST["fName"] && $_POST["phone"] && $_POST["pass"] && $_POST["pass"]){

                $fn = $_POST["fName"];
                $ph = $_POST["phone"];
                $pa = $_POST["pass"];
                $em = $_COOKIE['login'];

                $sql = "UPDATE user SET
                UNAME = '$fn',
                PHONE_NUMBER = '$ph',
                USER_PASS = '$pa'
                WHERE EMAIL= '$em'
                ";

if (mysqli_query($conn, $sql)) {
   
    mysqli_close($conn);
    mysqli_close($prod);
    header("Location:edit_profile.php");


    // echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}





            //    $sqli = "UPDATE `user` SET UNAME='".$_POST["fName"]."',PHONE_NUMBER=".$_POST["phone"].",USER_PASS='".$_POST["pass"]."'  WHERE EMAIL='".$_COOKIE['login']."'";
            //    $sql = "UPDATE `user` SET UNAME=\'OOaaO\',PHONE_NUMBER='05050002',USER_PASS=\'12121212\' WHERE EMAIL=\'albrae-2010@hotmail.com\'";
                // $res=mysqli_query($prod,$sqli);
                // mysqli_error($res);
            //   if($res){
                // mysqli_close($prod);
                // header("Location:Home.php");
            //   }
            }




    if($nameErr!=""){
        $nameErr="<div  style='padding:1%; color: rgb(128, 3, 3);border: 1px solid red; border-color:  rgba(243, 95, 95, 0.322);width:80%;margin-left:0%; border-radius: 3px;background-color: rgba(243, 95, 95, 0.322);  text-align: left;' role='alert'> ".$nameErr."</div>";
        }


}









    


// if (isset($_GET['comp'])) {
//     echo("<div style='padding:1%;color: rgb(7, 128, 3);border: 1px solid red;border-color: rgba(142, 243, 95, 0.322);width:80%;margin-left:10%; border-radius: 3px;background-color: rgba(142, 243, 95, 0.322);  text-align: left;''>&#10004; " . $_GET['comp'] . "</div>");
// }

echo "<div class='divSignUp'>

<div style='text-align:center;'><h1>EDIT A PROFILE</h1></div>
    

        <div id='signat' style='background-color:black;padding-top:0%;' ></div>
        <form method='post' action='".$_SERVER['PHP_SELF']."' >
        <div > ".$nameErr."</div> 
          user name<input type='text' id='fName' placeholder='first name' name='fName' class='text-F' style='width:90%;margin-top:0%;' value='".$user."' required><br>
          phone number <input size='10' name='phone' maxlength='10' type='text' id='phon' placeholder='0555555555' class='text-F' id='number' style='width: 90%;' value='".$phone."' required ><br> Email address           <input type='email' id='email' placeholder='example@gmail.com' class='text-F' style='width: 90%;' value='".$email."' name='email' required><br> password
            <input type='text' id='pass' value='".$pass."' placeholder='password' class='text-F' style='width: 90%;'' name='pass' required><br> 
               
            <div style='text-align: center;'>
                <input type='submit' value='save' style='width:12%;' class='btn' > 
                <a class='btn'style='text-decoration: none;width:10%;' href='Home.php'>cancel</a><br>; 
        </form>
        </div>






</div>";



?>
<!-- <?php echo $_SERVER['PHP_SELF'];?> -->
<!-- <input type='submit' value='cancel' class='btn' > -->
<!-- <div > <?php  echo $nameErr; ?> </div>  -->

</body>
</html>



