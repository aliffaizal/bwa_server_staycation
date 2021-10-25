import styled from "styled-components";

export const Item = styled.img`
height: 160px;
margin-right: auto;
z-index: 2;
@media screen and (max-width: 768px){
    height: 200px;
    width: 200px;
    margin-top: -200px;
}
`;

export const Round = styled.img`
// margin-top: 150px;
z-index: 3;
@media screen and (max-width: 768px){
    margin-top: 200px;
    margin-right: 250px;
}
`;
export const DefContainer = styled.div`
display: flex;
height: 591px;
margin-top: -85px;
// position: relative;
background-color: #EEBECE;
z-index: 1;
`;

export const DefP = styled.p`
font-weight: 500;
font-size: 21px;
text-align: right;
letter-spacing: -0.75px;
z-index: 5;
#span{
  font-weight: bold;
  color:#0B24FB;
}
@media screen and (max-width: 768px){

  z-index: 5;
  // margin-top: 100px;
  font-size: 16px;
  line-height: 24px;
  padding: 0 32px;
  letter-spacing: -0.571429px;
}
`;