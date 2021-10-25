import styled from "styled-components";

export const HeroContainer = styled.div`
display: flex;
justify-content: center;
align-items: center;
height: 900px;
position: relative;
// z-index: 1;
`;

export const HeroBg = styled.img`
display: flex;
height: 90%;
margin-top: -80px;
width: 100%;
-o-object-fit: cover;
object-fit: cover;
position: relative;
top: 0;
right: 0;
bottom: 0;
left: 0;
@media screen and (max-width: 768px){
    margin-top: 160px;
    height: 120%;
}
`;

export const HeroContent = styled.div`
position: absolute;
max-width: 1200px;
display: flex;
flex-direction: column;
align-items: center;
`;

export const HeroH1 = styled.h1`
color: #fff;
font-weight: 900;
font-size: 62px;
margin-top: -320px;
text-align: center;
@media screen and (max-width: 768px){
    margin-top: -300px;
    font-size: 52px;
    padding: 0;
    #span{
        display:block;
    }
}
`;

export const HeroP = styled.p`
color: #fff;
font-weight: 600px;
font-size: 21px;
font-style: italic;
@media screen and (max-width: 768px){
    font-size: 18px;
    line-height: 19px;
}
`;

export const HeroBtn = styled.div`
display: flex;
flex-direction: column;
align-items: center;
`;

export const Button = styled.button`
position: absolute;
background: #FFFFFF;
box-shadow: 0px 20px 30px rgba(249, 131, 171, 0.5);
border-radius: 29px;
z-index: 4;
margin-top: 315px;
border: none;
padding: 15px 85px;
@media screen and (max-width: 768px){
    margin-top: 285px;
}
`;

export const HeroItem = styled.img`
position: absolute;
width: 184px;
height: 305px;
margin-top: -80px;
z-index: 2;
@media screen and (max-width: 768px){
    margin-top: -50px;
}
`;