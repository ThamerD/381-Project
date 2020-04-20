<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>forgot password</title>
    <link rel="stylesheet" href="../css/style_e.css">
</head>
<body>
    

<?php   include_once "base.php"; ?>


<div class="divforgot">

<h1>forgot password?</h1>



<form action="send_email.php" method="post">
<?php if (isset($_GET['send'])) {
        echo("<div style='padding:1%;color: rgb(7, 128, 3);border: 1px solid red;border-color: rgba(142, 243, 95, 0.322);width:80%;margin-left:10%; border-radius: 3px;background-color: rgba(142, 243, 95, 0.322);  text-align: left;''>&#10004; " . $_GET['send'] . "</div>");
    }
    if(isset($_GET['err'])) {
      echo  "<div  style='padding:1%; color: rgb(128, 3, 3);border: 1px solid red; border-color:  rgba(243, 95, 95, 0.322);width:80%;margin-left:8%; border-radius: 3px;background-color: rgba(243, 95, 95, 0.322);  text-align: left;' role='alert'>&#10006; ".$_GET['err']."</div>";


    }
     ?>
<label style="text-align:left;">please enter your email address to get password</label><br> <input  placeholder="&#9993;Email address" type="email" name="forgotmail" class="textr" style="height:5%;width:60%;margin-top:5%;"> <br><input type="submit" class="btne"  value="get password" >

</form>



</div>





</body>
</html>
