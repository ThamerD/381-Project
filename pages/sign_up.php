<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sign in </title>
    <link rel="stylesheet" href="../css/style_e.css">
</head>

<body>

<?php include_once "base.php"; ?>
    <div class="divSignUp" style="padding-left: 1%;padding-right: 0%;">

        <h2>Sign Up</h2>
        full name<span style="color: chocolate;">*</span> <br><input type="text" placeholder="first name" class="text-F">
        <input type="text" placeholder="last name" class="text-F"> <br> phone number<span style="color: chocolate;">*</span> <input type="text" value="+966" class="text-F" style="width: 80%;"><br> Email address<span style="color: chocolate;">*</span>        <input type="email" placeholder="your@gmail.com" class="text-F" style="width: 80%;"><br> password
        <span style="color: chocolate;">*</span> <input type="password" placeholder="password" class="text-F" style="width: 80%;"><br> confirm password<span style="color: chocolate;">*</span><input type="password" placeholder="re-entir password" class="text-F"
            style="width: 80%;">
        <div style="text-align: center;">
            <input type="submit" value="sign up" class="btn">
            <p>have you account?<a href="sign in.html" class="linklog">Log In</a></p>
        </div>

    </div>



    <i class="fas fa-eye"></i>
</body>

</html>