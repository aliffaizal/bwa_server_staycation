import styled from "styled-components";
import { Link as LinkR } from "react-router-dom";

export const Nav = styled.nav`
  background: white;
  height: 67px;
  display: flex;
  justify-content: center;
  position: sticky;
  top: 0;
  z-index: 99;

  @media screen and (max-width: 960px) {
    transition: 0s all ease;
  }
`;
export const NavbarContainer = styled.div`
  display: flex;
  justify-content: space-between;
  height: 80px;
  z-index: 99;
  width: 100%;
  padding: 0 24px;
  max-width: 1100px;
`;

export const NavLogo = styled(LinkR)`
  justify-self: flex-start;
  cursor: pointer;
  display: flex;
  align-items: center;
  margin-left: 24px;
  margin-top: -10px
`;

export const NavTitle = styled.div`
  color: #000000;
  display: flex;
  margin-right: auto;
  margin-left: -140px;
  font-weight: 700;
  align-items: center;
  text-decoration: none;
  padding: 0 1rem;
  height: 100%;
  cursor: pointer;
`;

export const NavHello = styled.div`
  color: #000000;
//   display: flex;
//   margin-right: auto;
  margin-top: 10px;
  font-weight: 400;
  align-items: center;
  text-decoration: none;
  padding: 0 1rem;
  height: 100%;
  cursor: pointer;
`;