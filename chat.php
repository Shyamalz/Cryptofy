<?php
session_start();
if($_SESSION['loggedin']!=true)
{
    header("location: http://localhost/cryptofy/login.php");
    exit;
}
$username=$_SESSION["username"];
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
            <li><a href="login.php">LOG OUT</a></li>
            <li><a href="team_cryptofy.html">ABOUT US</a></li>
        </ul>
        </div>
    </nav>
    <div id="head">
        
        
        <div class="ret">
            <div class="img"><img class="chatbot" src="chatbot-data.png" alt="" height="450px">
                <div class="span2">
                    <span class="span">CHAT BOT</span>    
                    A chatbot is a software that helps customers by automating conversations and interact with them through messaging platforms. <br>
                    <span class="span3">Hey <?php echo "$username" ?>. Click on cryptofy below to interact.</span>

                </div>
               
        </div>
    </div>
        
    </div>
    <script type="text/javascript"> let headID = document.getElementsByTagName("head")[0]; let newCss = document.createElement('link'); newCss.rel = 'stylesheet'; newCss.type = 'text/css'; newCss.href = "https://botmake.io/embed/bot1126652.css"; let newScript = document.createElement('script'); newScript.src = "https://botmake.io/embed/bot1126652.js"; newScript.type = 'text/javascript'; headID.appendChild(newScript); headID.appendChild(newCss); </script>
</body>
</html>