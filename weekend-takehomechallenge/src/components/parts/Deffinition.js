import React from "react";
import Round from "../img/Oval.svg";
import Item from "../img/item.png";

function Deffinition() {
    return (
        <section id="def">
                    <img src={Item} className="item" alt=""/>
                    <p>
                    <span>Deffinition;</span> a practice or exercise to test or improve one's fitness for athletic competition, ability, or performance to exhaust (something, such as a mine) by working to devise, arrange, or achieve by resolving difficulties. Merriam-Webster.com Dictionary.
                    <span class="author">-weekend team</span>
                    </p>
                    <img src={Round} className="round" alt=""/>
        </section>
    )
}
export default Deffinition;