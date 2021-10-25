import React from "react";
import './assets/scss/style.scss';
import Navbar from './components/Navbar';
import HeroSec from './components/HeroSection';
import DefBg from "./components/Deffinition";
import { BrowserRouter as Router } from 'react-router-dom';

function App() {
  return (
    <Router>
      <Navbar />
      <HeroSec />
      <DefBg />
    </Router>
  );
}

export default App;
