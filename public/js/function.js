window.onload = function() {
// Viewport dimensions
let clientDimension, deviceSize;

function updateSize() {
  clientDimension = parseInt(Math.max(document.documentElement.clientWidth || 0, window.innerWidth || 0));
  switch (true) {
    case (clientDimension <= 556):
      deviceSize = "mobile";
      break;
    case (clientDimension > 556 && clientDimension <= 991):
      deviceSize = "tablet";
      break;
    case (clientDimension > 991):
      deviceSize = "desktop";
      break;
  }
}
 
window.addEventListener("resize", function() {
  updateSize();
});

// Homepage bottles function
const berserker = document.getElementById("berserker");
const vikingr = document.getElementById("vikingr");
const valkyra = document.getElementById("valkyra");
const productsBanner = document.getElementById("productsBanner");

berserker.addEventListener("mouseenter", function() {
  if (deviceSize == 'mobile') return;
  productsBanner.classList.remove("blue-background");
  productsBanner.classList.add("red-background");
});

berserker.addEventListener("mouseleave", function() {
  if (deviceSize == 'mobile') return;
  productsBanner.classList.remove("red-background");
  productsBanner.classList.add("blue-background");
});

vikingr.addEventListener("mouseenter", function() {
  if (deviceSize == 'mobile') return;
  productsBanner.classList.remove("blue-background");
  productsBanner.classList.add("black-background");
});

vikingr.addEventListener("mouseleave", function() {
  if (deviceSize == 'mobile') return;
  productsBanner.classList.remove("black-background");
  productsBanner.classList.add("blue-background");
});

valkyra.addEventListener("mouseenter", function() {
  if (deviceSize == 'mobile') return;
  productsBanner.classList.remove("blue-background");
  productsBanner.classList.add("gold-background");
});

valkyra.addEventListener("mouseleave", function() {
  if (deviceSize == 'mobile') return;
  productsBanner.classList.remove("gold-background");
  productsBanner.classList.add("blue-background");
});

// Homepage mobile carousel
let currentIndex = 0;

function showNextSlide() {
    const carouselContainer = document.querySelector('.carousel-container');
    const totalSlides = document.querySelectorAll('.carousel-item').length;
    currentIndex = (currentIndex + 1) % totalSlides;
    const newTransformValue = `translateX(-${currentIndex * 100}%)`;
    carouselContainer.style.transform = newTransformValue;
}

setInterval(showNextSlide, 3000);

// Shield slide-in
const shield = document.getElementById("shield");

window.onscroll = function flyShield() {
  let yPosition = window.scrollY;
  let shieldOffset = shield.offsetTop;
  if (yPosition > shieldOffset) {
    shield.classList.add("shield-fly-in")
  }
}

}
