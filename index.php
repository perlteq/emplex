<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="shortcut icon" href="image/logo.png" type="image/x-icon">
   
    <title>Home</title>
</head>
<body>
    <div class="container">
        <div id="show">
                <h4>Emplex</h4>
                <p>Sign up</p>
      
        </div>
        <div class="left-view">

        </div>
        <div class="right-view">
            <div class="tit">
                <h4>Emplex</h4>
                <p>Sign up</p>
            </div>
            <div class="form-class">
                <form action="index.php" method="post" id="signup_form">
                    <center>
                    <!-- <input type="text"placeholder="Enter username..."class="input-class"> -->
                    <input type="email"name="email"placeholder="Enter email..."class="input-class">
                    <input type="password" name="password1" id="password1" placeholder="Enter password..."class="input-class">
                    <input type="password" name="password2" id="password2" placeholder="Confirm password..."class="input-class"><br>

                    <button type="submit"name="register" class="button-class1">Register</button>
                    <h2><span>Or</span></h2>
                    <button type="submit" name="login"class="button-class2">Login</button><br>
                    </center>
                    <button type="submit" id="f-password">forgot password</button>

                </form>
            </div>
        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.3/dist/jquery.validate.js"></script>
    <script src="js/messages.js"></script>
    <script src="js/validation.js"></script>
</body>
</html>