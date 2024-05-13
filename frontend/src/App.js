import React from "react";
import { Switch, Route } from "react-router-dom";
import "./css/style.css";

// Layout
import NavBar from "./components/NavBar/NavBar";
import Footer from "./components/Footer/Footer";
import Header from "./components/Header/Header";

// Pages
import Home from "./Home";

//TODO Web Template Studio: Add routes for your new pages here.
const App = () => {
    return (
      <React.Fragment>
        <Header />
        <NavBar />
        <Switch>
          <Route exact path = "/" component = { Home } />
        </Switch>
        <Footer />
      </React.Fragment>
    );
}

export default App;
