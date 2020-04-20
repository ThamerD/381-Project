<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Live Chat</title>
    <link rel="stylesheet" href="../css/style_e.css">
</head>
<body>
<?php include_once "base.php"; ?>
<div class = "chat-profile">
 <?php
    
 ?>
    <div class = "profile-card">
        <img src="https://profiles.utdallas.edu/img/default.png" width="50px" height = "50px" class = "profile-img" alt="">
        <p class="profile-name"><a style="text-decoration:none; color:white;" name="" href="profile.php?p="><?php echo $_GET['email']; ?></a></p>
    </div>
</div>
<div class="container" id="Container">
    
    <?php
        $conn =new mysqli('localhost', 'root', '' , '381_db');
        $emailSender=$_COOKIE['login'];
        $sql12="SELECT * FROM `chat` WHERE (`to_user`='aalzughibi2@gmail.com' AND `from_user`='thamer@hotmail.com') OR (`to_user`='thamer@hotmail.com' AND `from_user`='aalzughibi2@gmail.com')";
        $result12=mysqli_query($conn,$sql12);
        while( $row = mysqli_fetch_assoc( $result12 ) ){
            if($row['from_user']==$emailSender)
            echo" <div class='message-orange'>
            <p class='message-content'>{$row['chat_message']}</p>
            <div class='message-timestamp-right'>{$row['timestamp']}</div>
        </div>";
        else
        echo" <div class='message-blue'>
            <p class='message-content'>{$row['chat_message']}</p>
            <div class='message-timestamp-left'>{$row['timestamp']}</div>
        </div>";
        }
    ?>

    <!-- <div class="message-blue">
        <p class="message-content">This is an awesome message!</p>
        <div class="message-timestamp-left">SMS 13:37</div>
    </div> -->

</div>
<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST" >
<input  type="text" name="message" class="text-F text-for-message" id="Message">
<input type="submit" value="Send" class="btn text-for-message btn-width" id="SendMessage" onclick="SendMessage()">
</form>
</div>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        
        $emailSender=$_COOKIE['login'];
        $messageBody= $_POST['message'];
        $date = date('Y-m-d H:i:s');
        echo $date;
        $sql = "INSERT INTO `chat` (`ID`, `to_user`, `from_user`, `chat_message`, `timestamp`, `status`) VALUES (NULL, '{$emailSender}', 'thamer@hotmail.com','{$messageBody}', CURRENT_TIMESTAMP, '0')";
        $result=mysqli_query($conn,$sql);
        // mysqli_error($result);
        $sql2 = "SELECT * FROM `inbox` WHERE (`from_user` ='{$emailSender}' AND `to_user` = 'thamer@hotmail.com') OR (`from_user` = 'thamer@hotmail.com' AND `to_user`= '{$emailSender}')";
        $result2=mysqli_query($conn,$sql2);
        if(mysqli_num_rows($result2)==0){
            $sql3 = "INSERT INTO `inbox` (`id`, `from_user`, `to_user`) VALUES (NULL, '{$emailSender}', 'thamer@hotmail.com')";
        $result3=mysqli_query($conn,$sql3);
        }
        
        
    }
?>
<script>
    function SendMessage(){
    var cont = document.getElementById("Container");
    var div1 =document.createElement("div");
    div1.setAttribute("class","message-orange");
    var par= document.createElement("p")
    par.setAttribute("class","message-content");
    par.setAttribute("style","width:200px;");
    par.appendChild(document.createTextNode(document.getElementById("Message").value));
    div1.appendChild(par);
    var div2=document.createElement("div")
    div2.setAttribute("class","message-timestamp-right");
    var dates=new Date();
    div2.appendChild(document.createTextNode(dates.getHours()+":"+dates.getMinutes()));
    div1.appendChild(div2);
    cont.appendChild(div1);
    }
</script>
</body>
</html>