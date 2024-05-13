import React from 'react';

const Header = () => {
    return (
        <React.Fragment>
            <header className="header">
                <div className="nav"><i className="parent-icon fas fa-bars"></i>
                <a href="about.html" className="child child-1"><i className="child-icon child-icon-1 fas fa-comments"></i></a>
                <a href="#" className="child child-2"><i className="child-icon child-icon-2 fas fa-beer"></i></a>
                <a href="index.html" className="child child-3"><i className="child-icon child-icon-3 fas fa-home"></i></a>
                </div>
            </header>
        </React.Fragment>
    );
}

export default Header;