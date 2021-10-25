import React from 'react';
import Hero from '../parts/Hero';
import Deffinition from '../parts/Deffinition';
import Testimonial from '../parts/Testimonial';
import Sliders from '../parts/Sliders';
import Help from '../parts/Help';
import Footer from '../parts/Footer';

function Home() {
    return (
        <>
            <Hero />
            <Deffinition />
            <Testimonial />
            <Sliders />
            <Help />
            <Footer />
        </>
    )
}
export default Home;