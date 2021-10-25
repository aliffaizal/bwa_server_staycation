import Slider from 'react-slick';
import React, {Component,useState, useEffect} from 'react'
import {Card} from 'react-bootstrap'
import axios from 'axios'

const Sliders = ()=>{
  const settings = {
    dots: false,
    infinite: false,
    speed: 500,
    slidesToShow: 2,
    slidesToScroll: 1,
    mobileFirst: true,
    responsive: [
      {
        breakpoint: 768,
        settings: {
          dots: true,
          arrows: false,
          infinite: true,
          slidesToShow: 1,
          slidesToScroll: 1,
          swipeToSlide: true,
      }
      },
    ]
  };
  const [testi, setTesti] = useState([])

    useEffect(() => {
        axios.get('https://wknd-take-home-challenge-api.herokuapp.com/testimonial')
            .then(res => {
                console.log(res)
                setTesti(res.data)
            })
            .catch(err => {
                console.log(err)
            })
    }, [])
  return (
    <div className="sliderslick container col-12 col-md-5">
        <Slider {...settings}>
        {testi.map(testim => (
                <div class="card-group">
                  <Card key={testim.id}>
                    <Card.Body>
                      <Card.Title>{testim.by}</Card.Title>
                      <Card.Text class="card-text">{testim.testimony}</Card.Text>
                    </Card.Body>
                  </Card>
                </div>
            ))}
        </Slider>
      </div>
  )
}

export default Sliders
