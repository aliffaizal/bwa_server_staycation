import React from "react";
import Fade from "react-reveal/Fade";
import {
  Nav,
  NavbarContainer,
  NavLogo,
  NavTitle,
  NavHello,
} from "./NavbarElements";
// import { Link } from "react-router-dom";
import Logo from "../../assets/img/Logo.png";
import { animateScroll as scroll } from "react-scroll";

const Navbar = ({ toggle }) => {
  const toggleHome = () => {
    scroll.scrollToTop();
  };

  return (
    <>
      <Fade >
        <Nav style={{zIndex:99}}>
          <NavbarContainer>
            <NavLogo to="/" onClick={toggleHome}>
              <img src={Logo} alt="" style={{ height: "33px" }} />
            </NavLogo>
            <NavHello>
                Good Morning
            </NavHello>
            <NavTitle>
                Fellas
            </NavTitle>
          </NavbarContainer>
        </Nav>
      </Fade>
    </>
  );
};

export default Navbar;
