import React from 'react'
import item from "../../assets/img/item.png";
import item2 from "../../assets/img/Oval.svg";
import { Round, Item, DefContainer, DefP } from './DeffinitionElements';

const index = () => {
    return (
        <>
        <DefContainer>
            <Item src={item}/>
                <DefP><span id="span">Deffinition;</span> a practice or exercise to test or improve one's fitness for athletic competition, ability, or performance to exhaust (something, such as a mine) by working to devise, arrange, or achieve by resolving difficulties. Merriam-Webster.com Dictionary.</DefP>
            <Round src={item2} />
        </DefContainer>
        </>
    )
}

export default index
