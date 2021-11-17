import React from 'react';
import './App.css';
import Navbar from './components/parts/Navbar';
import Footer from './components/parts/Footer';
import Home from './components/pages/Home';

function App() {
  return (
    <div>
      <Navbar />
      <Home />
      <Footer />
    </div>
  );
}

export default App;
