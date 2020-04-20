<?php
// if ($_SERVER["REQUEST_METHOD"] == "POST")
//     {
        $conn =new mysqli('localhost', 'root', '' , '381_db');
        $emailReceiver=$_POST['email'];
        $emailSender=$_COOKIE['login'];
        $messageBody= $_POST['message'];
        // $Receiver=$_POST['email'];
        $date = date('Y-m-d H:i:s');
        echo $date;
        $sql = "INSERT INTO `chat` (`ID`, `to_user`, `from_user`, `chat_message`, `timestamp`, `status`) VALUES (NULL, '{$emailReceiver}', '{$emailSender}','{$messageBody}', CURRENT_TIMESTAMP, '0')";
        $result=mysqli_query($conn,$sql);
        // mysqli_error($result);
        $sql2 = "SELECT * FROM `inbox` WHERE (`from_user` ='{$emailSender}' AND `to_user` = '{$emailReceiver}') OR (`from_user` = '{$emailReceiver}' AND `to_user`= '{$emailSender}')";
        $result2=mysqli_query($conn,$sql2);
        if(mysqli_num_rows($result2)==0){
            $sql3 = "INSERT INTO `inbox` (`id`, `from_user`, `to_user`) VALUES (NULL, '{$emailSender}', '{$emailReceiver}')";
        $result3=mysqli_query($conn,$sql3);
        }
        header("Location: liveChat.php?email={$emailReceiver}")
        
    // }
?>