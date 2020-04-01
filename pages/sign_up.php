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
    <div class="divSignUp" id="divup" style="padding-left: 1%;padding-right: 0%;">

        <h2>Sign Up</h2>
        <form action="" >
            full name<span id="sun" style="color: chocolate;">*</span> <br><input type="text" id="fName" placeholder="first name" class="text-F" required>
            <input type="text" id="lname" placeholder="last name" class="text-F" required> <br> phone number<span style="color: chocolate;">*</span> <input type="text" value="+966" class="text-F" id="number" style="width: 80%;" required><br> Email address<span style="color: chocolate;">*</span>            <input type="email" id="email" placeholder="your@gmail.com" class="text-F" style="width: 80%;" required><br> password
            <span style="color: chocolate;">*</span> <input type="password" id="pass" placeholder="password" class="text-F" style="width: 80%;" required><br> confirm password<span style="color: chocolate;">*</span><input type="password" id="cpass" placeholder="re-entir password"
                class="text-F" style="width: 80%;" required>
            <div style="text-align: center;">
                <input type="submit" value="sign up" class="btn">
                <p>have you account?<a href="sign in.html" class="linklog">Log In</a></p>
        </form>
        </div>

    </div>
  

    <i class="fas fa-eye"></i>
</body>

</html>