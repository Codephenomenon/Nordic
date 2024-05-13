import React from "react";

const Home = () => {
  return (
  <main id="mainContent">
    <section className="hero">
      <div className="video">
        <video className="background-video" autoPlay muted loop>
          <source src="images/video.mp4" type="video/mp4"></source>
          <source src="images/video.webm" type="video/webm"></source>
          Your browser is not supported!
        </video>
        <div id="shield" className="side-image"></div>
        <div className="side-content">
          <h1 className="side-content-header">Why choose Nordic Ale?</h1>
          <p className="side-content-text">For those who claim the spirit of adventure, there is no other ale for you. Be wary, Nordic ale is not for the faint of heart, and offers the culmination of honeyed spices and rich flavor. Each bottle of our finest ales will take you on a long journey north, back to a time when man braved the sea in search of new lands. </p>
          <p className="side-content-text">Brewed in the heart of Denmark, Nordic boasts a strong tradition of crafting the finest meads and ales for a thousand leagues. Find Nordic ale at the purveyor of quality beverages nearest to <a href="#">you!</a></p>
        </div>
      </div>
    </section>

    <section className="promotion">
      <div className="flex-row">
        <div className="flex-row-1">
          <h2>Results</h2>
          <div id="1">
            <h3>Store name 1</h3>
            <p>address</p>
            <p>distance</p>
          </div>
          <div id="1">
            <h3>Store name 1</h3>
            <p>address</p>
            <p>distance</p>
          </div>
          <div id="1">
            <h3>Store name 1</h3>
            <p>address</p>
            <p>distance</p>
          </div>
        </div>
        <div className="flex-row-2">
          <form className="inner_content">
            <h2 className="inner_content-greeting">Find Nordic at a store near you!</h2>
            <span className="inner_content-zip"><p>zip:</p></span>
            <input type="text" className="inner_content-search" placeholder="00000..."></input>
            <button className="inner_content-button"><i className="fa fa-search"></i></button>
          </form>
        </div>
      </div>
    </section>
  </main>
  );
}
export default Home;
