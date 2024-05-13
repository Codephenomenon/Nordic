import React, { useState } from "react";
import { Link } from "react-router-dom";

function NavBar() {
  const [backgroundColor, setBackgroundColor] = useState('blue-background');

  function changeBackground(color) {
    setBackgroundColor(color);
  }

  return (
    <div>
      <nav id="productsBanner" className={`products-banner ${backgroundColor}`}>
          <div className="row">
              <div className="product product-left">
                  <Link className="" to="/" role="heading" aria-level="1">
                    <img className="product-img" src="images/berserker.png" alt="Berserker Ale" 
                      onMouseEnter={() => changeBackground('red-background')}
                      onMouseLeave={() => changeBackground('blue-background')}
                    />
                  </Link>
              </div>
              <div className="product product-top">
                  <img id="vikingr" className="product-img" src="images/vikingr-brew.png" alt="Vikingr Ale"
                      onMouseEnter={() => changeBackground('black-background')}
                      onMouseLeave={() => changeBackground('blue-background')}
                  />
              </div>
              <div className="product product-right">
                  <img id="valkyra" className="product-img" src="images/valkyra.png" alt="Valkyra Mead"
                      onMouseEnter={() => changeBackground('gold-background')}
                      onMouseLeave={() => changeBackground('blue-background')}
                  />
              </div>
          </div>
          <div className="row row-text">
              <h2 className="header">berserker</h2>
              <h2 className="header">vikingr</h2>
              <h2 className="header">valkyra</h2>
          </div>
          <div className="streak"></div>
      </nav>
    </div>
  );
}

export default NavBar;
