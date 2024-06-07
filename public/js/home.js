const { createApp, ref, onMounted } = Vue;

const app = createApp({
  setup() {
    const clientDimension = ref(0);
    const deviceSize = ref('desktop');
    const currentIndex = ref(0);

    const berserker = ref(null);
    const vikingr = ref(null);
    const valkyra = ref(null);
    const productsBanner = ref(null);
    const shield = ref(null);

    const map = ref(null);

    const initMap = async () => {
      const { Map } = await google.maps.importLibrary("maps");

      map = new Map(document.getElementById("searchMap"), {
        center: { lat: -34.397, lng: 150.644 },
        zoom: 8,
      });
    }

    const updateSize = () => {
      clientDimension.value = Math.max(document.documentElement.clientWidth || 0, window.innerWidth || 0);
      switch (true) {
        case (clientDimension.value <= 556):
          deviceSize.value = "mobile";
          break;
        case (clientDimension.value > 556 && clientDimension.value <= 991):
          deviceSize.value = "tablet";
          break;
        case (clientDimension.value > 991):
          deviceSize.value = "desktop";
          break;
      }
    };

    const handleMouseEnter = (event, color) => {
      if (deviceSize.value === 'mobile') return;
      productsBanner.value.classList.remove("blue-background");
      productsBanner.value.classList.add(color);
    };

    const handleMouseLeave = (event, color) => {
      if (deviceSize.value === 'mobile') return;
      productsBanner.value.classList.remove(color);
      productsBanner.value.classList.add("blue-background");
    };

    const showNextSlide = () => {
      const carouselContainer = document.querySelector('.carousel-container');
      const totalSlides = document.querySelectorAll('.carousel-item').length;
      const mobileHeaders = document.querySelectorAll('.mobile-header');

      mobileHeaders.forEach(node => node.classList.remove('d-block'));

      currentIndex.value = (currentIndex.value + 1) % totalSlides;

      document.querySelector(`[data-header="${currentIndex.value}"]`).classList.add('d-block');
      carouselContainer.style.transform = `translateX(-${currentIndex.value * 100}%)`;
    };

    const flyShield = () => {
      const yPosition = window.scrollY;
      const shieldOffset = shield.value.offsetTop;
      if (yPosition > shieldOffset) {
        shield.value.classList.add("shield-fly-in");
      }
    };

    onMounted(async () => {
      initMap();

      berserker.value = document.getElementById("berserker");
      vikingr.value = document.getElementById("vikingr");
      valkyra.value = document.getElementById("valkyra");
      productsBanner.value = document.getElementById("productsBanner");
      shield.value = document.getElementById("shield");

      updateSize();
      window.addEventListener("resize", updateSize);

      if (productsBanner.value) {
        berserker.value.addEventListener("mouseenter", (e) => handleMouseEnter(e, 'red-background'));
        berserker.value.addEventListener("mouseleave", (e) => handleMouseLeave(e, 'red-background'));

        vikingr.value.addEventListener("mouseenter", (e) => handleMouseEnter(e, 'black-background'));
        vikingr.value.addEventListener("mouseleave", (e) => handleMouseLeave(e, 'black-background'));

        valkyra.value.addEventListener("mouseenter", (e) => handleMouseEnter(e, 'gold-background'));
        valkyra.value.addEventListener("mouseleave", (e) => handleMouseLeave(e, 'gold-background'));

        setInterval(showNextSlide, 3000);
      }

      if (shield.value) {
        window.onscroll = flyShield;
      }
    });

    return {
      berserker,
      vikingr,
      valkyra,
      productsBanner,
      shield,
      clientDimension,
      deviceSize,
      currentIndex,
    };
  }
});

app.config.isCustomElement = (tag) => tag.startsWith('gmp-');

app.mount('#home');