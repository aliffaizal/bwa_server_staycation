import React, {useState, useEffect} from 'react'
import { FontAwesomeIcon } from '@fortawesome/react-fontawesome'
import { faArrowRight } from '@fortawesome/free-solid-svg-icons'
import axios from 'axios'
import item1 from "../img/item1.svg";
import item2 from "../img/item2.png";

const Help = () => {
    const [help, setHelp] = useState([])

    useEffect(() => {
        axios.get('https://wknd-take-home-challenge-api.herokuapp.com/help-tips')
            .then(res => {
                console.log(res)
                setHelp(res.data)
            })
            .catch(err => {
                console.log(err)
            })
    }, [])
    return (
        <section id="help">
            <div className="container">
            <h1 className="helptips">Help & Tips</h1>
            <div className="row">
            {help.map(helps => (
                <div class="card-group col-12 col-sm-4">
                    <div class="card" key={helps.id}>
                        <img src={helps.image} class="card-img-top" alt="..."/>
                        <div class="card-body row">
                            <h5 class="card-title d-flex justify-content-between w-100">{helps.title}<button class="btn btn-sm"><FontAwesomeIcon icon={faArrowRight} /></button></h5>
                        </div>
                    </div>
                </div>
                ))}
                </div>
                <img src={item1} class="item1" />
            </div>
                <h1 className="allset">You're all set.</h1>
                <p class="isiallset ">The wise man therefore always holds in these matters to this principle of selection.</p>
                <img src={item2} class="item2" />
        </section>
    )
}

export default Help
