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
?>





<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>renthouse </title>
        <link rel="stylesheet" href="css admin.css">
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
                <button type="button" class="toggle-btn" onclick="login()"> Admin Login</button>
                </div>


                 <form action="" id="Login" method="POST" class="input-group">
            <input type="userid" name="userid" id="userid" class="input-field" placeholder="User Id" required>
            <input type="password" name="password" id="password" class="input-field" placeholder="Enter Password" required>
            <input type="checkbox" class="check-box"><span>Remember Password</span>
            <button type="submit" name="login" Value="login" class="submit-btn"> Log In</button>
            </form>
      </div>
    </div>
  </body>
  </html>



