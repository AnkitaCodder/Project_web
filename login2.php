<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>renthouse </title>
        <link rel="stylesheet" href="css or.css">
        <link href="css/hover.css" rel="stylesheet" media="all">
        <link href="css/font-awesome.min.css" rel="stylesheet" media="all">
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
       <div class="hero">
        <div class="form-box">
            <div class="button-box">
                <div id="btn"></div>
                <button type="button" class="toggle-btn" onclick="login()">Login</button>
                <button type="button" class="toggle-btn" onclick="signup()">Sign up</button>
            </div>
        <form id="Login" class="input-group">
            <input type="text" class="input-field" placeholder="User Id" required>
            <input type="text" class="input-field" placeholder="Enter Password" required>
            <input type="checkbox" class="check-box"><span>Remember Password</span>
            <button type="submit" class="submit-btn"> Log In</button>
        </form>
        <form id="Signup" class="input-group">
            <input type="text" class="input-field" placeholder="User Id" required>
            <input type="email" class="input-field" placeholder="Email Id" required>
            <input type="contact" class="input-field" placeholder="Contact" required>
            <input type="text" class="input-field" placeholder="Enter Password" required>
            <input type="checkbox" class="check-box"><span>I agree to the terms & condition</span>
            <button type="submit" class="submit-btn"> Sign Up</button>
    </div>
    </div>


    <script>
        var x = document.getElementById("Login");
        var y = document.getElementById("Signup");
        var z = document.getElementById("btn");


        function signup(){
            x.style.left = "-400px";
            y.style.left = "50px";
            z.style.left = "110px";
        }
        function login(){
            x.style.left = "50px";
            y.style.left = "450px";
            z.style.left = "0px";
        }
    </script>

    </body>
</html>