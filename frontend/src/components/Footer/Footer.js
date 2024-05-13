import React from "react";

const Footer = () => {
  return (
    <footer>
      <div className="row">
        <div className="footer-box">
            <h2 className="footer-box-header">Terms of Service</h2>
            <ul className="footer-box-list">
            <a href="#"><li className="footer-box-list-item">Policy Change</li></a>
            <a href="#"><li className="footer-box-list-item">Legal</li></a>
            <a href="#"><li className="footer-box-list-item">FAQ</li></a>
            </ul>
        </div>
        <div className="footer-box">
            <h2 className="footer-box-header">Nordic&#174; contests</h2>
            <span className="footer-box-span">NO PURCHASE NECESSARY. Open to US residents 21+. Begins 1/1/18 and ends 12/31/18. See Official Rules for additional eligibility requirements, rewards and complete details.</span>
        </div>
        <div className="footer-box">
            <ul className="social-list">
            <a href="#"><li className="social-list-item"><i className="fab fa-twitter-square"></i></li></a>
            <a href="#"><li className="social-list-item"><i className="fab fa-facebook"></i></li></a>
            <a href="#"><li className="social-list-item"><i className="fab fa-instagram"></i></li></a>
            <a href="#"><li className="social-list-item"><i className="fab fa-youtube"></i></li></a>
            </ul>
        </div>
      </div>
    </footer>
  );
}
export default Footer;