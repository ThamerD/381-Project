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
    <div class="divlogin">
        <div style="margin-top:15%;">

            <h2>LOGIN </h2>

            <form>
                <input class="text-F" type="email" id="tex" name="userNameLogIn" placeholder="&#9993; Email"><br>



                <input class="text-F" type="password" name="passLogIn" placeholder="&#128477;password"><br>
                <a href="#" class="linklog" style="   font-size: 12px;margin-right: 22%;">forget password?</a><br>

                <input type="submit" class="btn" value="Log In">

            </form>

            <p>don't have an account?<a href="sign up.html" class="linklog">sign Up</a></p>

        </div>

    </div>


    <i class="fas fa-eye"></i>
    <script>
        var x = document.getElementById("nav");


        function closeNav() {
            x.style.width = "0px";
            x.style.display = "none"
        }

        function OpenNav() {
            x.style.width = "200px";
            x.style.display = "inline"
        }
    </script>
</body>

</html>