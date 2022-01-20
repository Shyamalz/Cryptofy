<?php
if($_SERVER["REQUEST_METHOD"]=="POST")
{
 include 'dbconnect.php';
 $username=$_POST["username"];
 $password=$_POST["password"];
 $sql="select * from user where username='$username' AND password='$password'";
 $result=mysqli_query($conn,$sql);
 $num=mysqli_num_rows($result);
 if($num==1)
 {
  session_start();
  $_SESSION["loggedin"]=true;
  $_SESSION["username"]=$username;
  header("location: http://localhost/cryptofy/chat.php");
 }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="cryptofy.png">
    <title>login</title>
    <link rel="stylesheet" href="login.css">
</head>
<body>
    <nav class="navbar">
        <div id="logo">
            <img class="logoimg"src="cryptofy.png">
            <span class="heading"><a href="cryptofy.html">CRYPTOFY</a></span>
        <ul class="hyperlinks">
            <li><a href="http://localhost:3000/">EXCHANGE</a></li>
            <li><a href="chat.php">CHAT</a></li>
            <li><a href="login.php">LOG IN</a></li>
            <li><a href="signup.php">SIGN UP</a></li>
        </ul>
        </div>
    </nav>
    <div class="wrapper fadeInDown">
        <div id="formContent">
          <!-- Tabs Titles -->
          <h2 class="active"> LOGIN </h2>
          <h2 class="inactive underlineHover"><a href="signup.php">SIGN UP</a> </h2>
      
          <!-- Icon -->
          <div class="fadeIn first">
            <img src="cryptofy.png" id="icon" alt="User Icon" />
          </div>
      
          <!-- Login Form -->
          <form action="login.php" method="post">
            <input type="text" id="login" class="fadeIn second" name="username" placeholder="username">
            <input type="password" id="password" class="fadeIn third" name="password" placeholder="password">
            <input type="submit" class="fadeIn fourth" value="Log In">
          </form>
      
          <!-- Remind Passowrd -->
          <div id="formFooter">
            <a class="underlineHover" href="#">FORGOT PASSWORD?</a>
          </div>
      
        </div>
      </div>
</body>
</html>