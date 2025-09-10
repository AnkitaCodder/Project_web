<?php
session_start();

require_once "conn.php";


if (isset($_SESSION['userid'])) {
    header("Location: welcome.php");
}

if (isset($_POST['login'])) {
  $userid = $_POST['userid'];
  $password = ($_POST['password']);

  $sql = "SELECT * FROM ruser WHERE userid='$userid' AND password='$password'";
  $result = mysqli_query($conn, $sql);
  if ($result->num_rows > 0) {
    $row = mysqli_fetch_assoc($result);
    $_SESSION['userid'] = $row['userid'];
    header("Location: welcome.php");
  } else {
    echo "<script>alert('Woops! Email or Password is Wrong.')</script>";
  }
}


// <!---------Login end---->

if (isset($_POST['submit'])) {
  $userid = $_POST['userid'];
  $email = $_POST['email'];
  $contact = ($_POST['contact']);
  $password = ($_POST['password']);
  $cpassword = ($_POST['cpassword']);
  
  if ($password == $cpassword) {
    $sql = "SELECT * FROM ruser WHERE userid='$userid'";
    $result = mysqli_query($conn, $sql);
    if (!$result->num_rows > 0) {
      $sql = "INSERT INTO ruser (userid, email, contact, password)
          VALUES ('$userid', '$email', '$contact', '$password')";
      $result = mysqli_query($conn, $sql);
      if ($result) {
        echo "<script>alert('Wow! User Registration Completed.')</script>";
        $userid = "";
        $email = "";
        $contact = "";
        $_POST['password'] = "";
        $_POST['cpassword'] = "";
        
      } else {
        echo "<script>alert('Woops! User Email Exists.')</script>";
      }
    } else {
      echo "<script>alert('Woops! User Id Already Exists.')</script>";
    }
    
  } else {
    echo "<script>alert('Password Not Matched.')</script>";
  }
}



?>


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
        

        </div>
        <div class="hero">
        <div class="form-box">
            <div class="button-box">
                <div id="btn"></div>
                <button type="button" class="toggle-btn" onclick="login()">Login</button>
                <button type="button" class="toggle-btn" onclick="signup()">Sign up</button>
            </div>

<!-- /////LOGIN////// -->

        <form action="" id="Login" method="POST" class="input-group">
            <input type="userid" name="userid" id="userid" class="input-field" placeholder="User Id" required>
            <input type="password" name="password" id="password" class="input-field" placeholder="Enter Password" required>
            <input type="checkbox" class="check-box"><span>Remember Password</span>
            <button type="submit" name="login" Value="login" class="submit-btn"> Log In</button>
        </form>


        <!-- ////SIGN UP///// -->

            <form action="" id="Signup" method="POST" class="input-group">
            <input type="text" class="input-field" placeholder="User Id"  id="userid" name="userid"  required >
            <input type="email" name="email" id="email"  class="input-field" placeholder="Email Id"  required>
            <input type="contact" name="contact" id="contact"  class="input-field" placeholder="Contact" required>
            <input type="password" name="password" id="password" class="input-field"  placeholder="Enter Password" required>
            <input type="password" name="cpassword" id="cpassword" class="input-field"  placeholder="Enter Password" required>
            <input type="checkbox" class="check-box"><span>I agree to the terms & condition</span>
            <button type="submit" name="submit" Value="submit" class="submit-btn"> Sign Up</button>
        </form>
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