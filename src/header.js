import { directive } from "@babel/types";
import React from "react";
import "./header.css";


function Header(){
    return(
        <div className="header">
            <nav class="navbar">
        <div id="logo">
            <img class="logoimg"src="cryptofy.png"></img>
            <span class="heading"><a href="http://localhost/cryptofy/cryptofy.html">CRYPTOFY</a></span>
        <ul class="hyperlinks">
            <li><a href="http://localhost:3000/">EXCHANGE</a></li>
            <li><a href="http://localhost/cryptofy/chat.php">CHAT</a></li>
            <li><a href="http://localhost/cryptofy/login.php">LOG IN</a></li>
            <li><a href="http://localhost/cryptofy/signup.php">SIGN UP</a></li>
            <li><a href="http://localhost/cryptofy/team_cryptofy.html">ABOUT US</a></li>
        </ul>
        </div>
    </nav>
        </div>
    )
}

export default Header;