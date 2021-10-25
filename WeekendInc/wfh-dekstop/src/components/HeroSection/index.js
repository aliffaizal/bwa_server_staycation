import React from 'react'
import Background from "../../assets/img/bg.png";
import Item from "../../assets/img/heroitem.png";
import { HeroBg, HeroContainer, HeroContent, HeroH1, HeroP, HeroItem, HeroBtn, Button } from './HeroElements';

function index() {
    return (
        <>
        <HeroContainer>
            <HeroBg src={Background} />
            <HeroContent>
                <HeroH1>WEEKEND <span id="span">FROM HOME</span></HeroH1>
                <HeroP>Stay active with a little workout.</HeroP>
                <HeroItem src={Item} />
                <HeroBtn>
                    <Button>
                        Let's Go
                    </Button>
                </HeroBtn>
            </HeroContent>
        </HeroContainer>
        </>
    )
}

export default index
