import React from "react";
import Bg from "../img/bg.png";
import HeroItem from "../img/heroitem.png";
import Fade from 'react-reveal/Fade';
import { Link } from "react-scroll";


function Hero() {
    return (
        <div className="hero">
            <img src={Bg} className="bg"alt=""/>
                <div class="row">
            <Fade left>
                    <h1 class="col-sm-12">WEEKEND <span>FROM HOME</span></h1>
                    <p class="col-sm-12">Stay active with a little workout.</p>
            </Fade>
                </div>
            <Fade bottom>
            <img src={HeroItem} className="heroitem mx-auto" alt=""/>
            </Fade>
            <Link
                  to="def"
                  smooth={true}
                  duration={100}
                  spy={true}
                  exact="true"
                >
            <button class="btn btn-light mx-auto" >Let's Go</button>
            </Link>
        </div>
    )
}
export default Hero;