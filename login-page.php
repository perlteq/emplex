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
                <p>Login</p>
      
        </div>
        <div class="left-view">

        </div>
        <div class="right-view">
            <div class="tit">
                <h4>Emplex</h4>
                <p>Login</p>
            </div>
            <div class="form-class">
                <form action="login-page.php" method="post" id="signup_form">
                    <center>
                    <!-- <input type="text"placeholder="Enter username..."class="input-class"> -->
                    <input type="email"name="email"placeholder="Enter email..."class="input-class">
                    <input type="password" name="password1" id="password1" placeholder="Enter password..."class="input-class">

                    <button type="submit"name="login" class="button-class1">Login</button>
                    </center>


                </form>
                <button id="f-password">forgot password</button><br>
                        <div class="alert">
                            <center>
                            <input type="email"name="email"placeholder="Enter email..."class="input-class">      
                            <button type="submit"name="login" class="button-class1">Submit</button>
                            </center>
                        </div>
                <button id="new-user">New staff? Click to register</button>
            </div>
        </div>
    </div>
    <style>
       .left-view{
           background-position-y:100px;
       }
       #new-user{
           background:none;
           font-family:ebrima;
           font-size:15px;
           color:#fe9810;
           padding-left:200px;
       }
       /*alert*/
        .alert{
            position:relative;
            bottom:300px;
            display: none;
            width:400px;
            background:whitesmoke;
            height:60vh;
            align-items:center;
            border-radius:10px;
        }
        .alert .input-class{
            width:70%;
        }
        .alert .button-class1{
            width:70%;
        }
        

       @media (max-width:800px) {
        .left-view{
           background-position-y:center;
           background-size:300px;
       }
        #show p{
            font-size:20px;
            font-weight:bold;
        }
        .right-view{
            box-shadow: 0px 0px 30px -0.2px #581cad;
        }
       }
    </style>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.3/dist/jquery.validate.js"></script>
    <script src="js/messages.js"></script>
    <script src="js/validation.js"></script>
</body>
</html>