<?php
// $conn=mysqli_connect("localhost","root","","381_db");
if(!isset($_COOKIE["login"])){
echo "<script> location.href='../pages/sign_in.php'; </script>";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style_e.css">
</head>
<style>
    
</style>
<body>
<?php include_once "base.php"; ?>

    <div class = "coBody opactiy-Cobody" id="coBody">
        <h2>Inbox</h2>
        <div class="Container-inbox">
        <?php
        $email=$_COOKIE['login'];
         $conn =new mysqli('localhost', 'root', '' , '381_db');
        //  $sql = "SELECT * FROM `inbox` WHERE `from_user` = '{$email}' or`to_user`= '{$email}'";
         $sql = "SELECT * FROM `inbox` WHERE `from_user` = '{$email}' or`to_user`= '{$email}'";
         $result = mysqli_query($conn,$sql);
         while( $row = mysqli_fetch_assoc( $result ) ){
             if($row["to_user"]===$email)
            //  $sql2="SELECT * FROM `user` WHERE `from_user` =`EMAIL` AND {$row['from_user']} = `EMAIL`;
             echo "
             <div class='card-inbox'>
             <img  src='https://profiles.utdallas.edu/img/default.png' width='50px' height ='50px' class ='profile-img padding-inbox' alt=''>
                 <p  class='profile-img padding-inbox' ><a href='liveChat.php?email={$row['from_user']}'>{$row['from_user']}</a></p>
                 
         </div>
             ";
             else
             echo "
             <div class='card-inbox'>
             <img  src='https://profiles.utdallas.edu/img/default.png' width='50px' height ='50px' class ='profile-img padding-inbox' alt=''>
                 <p  class='profile-img padding-inbox' ><a href='liveChat.php?email={$row['to_user']}'>{$row['to_user']}</a></p>
                
         </div>
             ";
            //  echo $row["from_user"];
            //  echo $row["chat_message"];
         }
        ?>
        </div>
    </div>
</body>
</html>