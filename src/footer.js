import { directive } from "@babel/types";
import React from "react";
import "./footer.css";
// import GitHubIcon from '@material-ui/icons/GitHub';

function Footer(){
    return(
        <div className="footer">
            <footer>
            <div id="foot">
                {/* <a class="profile-links" href="https://www.linkedin.com/in/shyamal-jain-328051204"><i class="fa fa-facebook"></i></a>
                <a class="profile-links" href="https://www.instagram.com/shyamal_jain/"><i class="fa fa-instagram"></i></a>
                <a class="profile-links" href="https://github.com/shyamalz"><i class="fab fa-github"></i></a> */}
                <h2 class="copyright">©2021 All Rights Reserved | @ Shyamal Jain</h2>
            </div>
            </footer>
        </div>
    )
}

export default Footer;