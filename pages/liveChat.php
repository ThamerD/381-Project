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
 
    <div class = "profile-card">
        <img src="https://profiles.utdallas.edu/img/default.png" width="50px" height = "50px" class = "profile-img" alt="">
        <p class="profile-name"><a style="text-decoration:none; color:white;" href="#">Abdullah Ali</a></p>
    </div>
</div>
<div class="container" id="Container">
    <div class="message-blue">
        <p class="message-content">This is an awesome message!</p>
        <div class="message-timestamp-left">SMS 13:37</div>
    </div>
    
    <div class="message-orange">
        <p class="message-content">I agree that your message is awesome!</p>
        <div class="message-timestamp-right">SMS 13:37</div>
    </div>
    
    <div class="message-blue">
        <p class="message-content">Thanks!</p>
        <div class="message-timestamp-left">SMS 13:37</div>
    </div>
    <div class="message-blue">
        <p class="message-content">Thanks!</p>
        <div class="message-timestamp-left">SMS 13:37</div>
    </div>
    <div class="message-blue">
        <p class="message-content">Thanks!</p>
        <div class="message-timestamp-left">SMS 13:37</div>
    </div>
</div>
<input  type="text" name="" class="text-F text-for-message" id="Message">
<input type="submit" value="Send" class="btn text-for-message btn-width" id="SendMessage" onclick="SendMessage()">

</div>

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