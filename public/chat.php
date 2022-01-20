<?php
session_start();
if($_SESSION['loggedin']!=true)
{
    header("location: http://localhost/cryptofy/login.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="cryptofy.png">
    <title>chat</title>
    <link rel="stylesheet" href="chat.css">
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
    <script type="text/javascript"> let headID = document.getElementsByTagName("head")[0]; let newCss = document.createElement('link'); newCss.rel = 'stylesheet'; newCss.type = 'text/css'; newCss.href = "https://botmake.io/embed/bot1126652.css"; let newScript = document.createElement('script'); newScript.src = "https://botmake.io/embed/bot1126652.js"; newScript.type = 'text/javascript'; headID.appendChild(newScript); headID.appendChild(newCss); </script>
</body>
</html>