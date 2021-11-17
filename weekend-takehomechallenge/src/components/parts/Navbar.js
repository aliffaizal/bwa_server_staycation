import React from 'react';
import Logo from "../img/Logo.png";

function Navbar() {
    return (
        // <div className="container">
            <nav className="navbar navbar-expand-lg navbar-light bg-white">
            <div class="container-fluid container">
                <a class="navbar-brand" href="">
                <img src={Logo} alt="" width="33" height="33"/>
                </a>
                <div class="flex-column me-auto">
                <ul class="navbar-nav">
                    <li class="nav-item">
                    <p>Good Morning</p>
                    </li>
                </ul>
                <ul class="navbar-nav flex-row">
                    <li class="nav-item">
                    <h4>Fellas</h4>
                    </li>
                </ul>
                </div>
                
            </div>
            </nav>
        // </div>
    )
}
export default Navbar;