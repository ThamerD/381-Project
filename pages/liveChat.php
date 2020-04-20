<?php
// $conn=mysqli_connect("localhost","root","","381_db");
if(!isset($_COOKIE["login"])){
echo "<script> location.href='../pages/sign_in.php'; </script>";
}
if(!isset($_GET['email']))
echo "<script> location.href='../pages/inbox.php'; </script>";
?>
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
        <p class="profile-name"><a style="text-decoration:none; color:white;" name="" href=""><?php echo $_GET['email'] ?></a></p>
    </div>
</div>
<div class="container" style="overflow-y: scroll;" id="Container">
    
    <?php
        $emailReceiver=$_GET['email'];
        $conn =new mysqli('localhost', 'root', '' , '381_db');
        $emailSender=$_COOKIE['login'];
        $sql12="SELECT * FROM `chat` WHERE (`to_user`='{$emailSender}' AND `from_user`='{$emailReceiver}') OR (`to_user`='{$emailReceiver}' AND `from_user`='{$emailSender}')";
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

 

</div>

<form action="SendChat.php" method="POST" >
 <input  type='text' name='message' class='text-F text-for-message' id='Message'>
<?php
 echo "<input  type='email' name='email' value='{$_GET['email']}'  class='text-F text-for-message' id='email' hidden> ";
?>
<input type="submit" value="Send" class="btn text-for-message btn-width" id="SendMessage" onclick="SendMessage()">
</form>
</div>

<script>
//
var objDiv = document.getElementById("Container");
objDiv.scrollTop = objDiv.scrollHeight;
///
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