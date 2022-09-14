let projects = [
  {
    name: "Laguna Luxury Hotel & Resort",
    image: "/assets/img/portfolio/grid/ProjectLagunaLuxury.jpg",
    imageAlt: "Laguna Luxury Hotel & Resort",
    type: "design",
    badge: "onsale",
    page: "/project/laguna-luxury",
    location: "Nusa Dua, Bali",
  },
  {
    name: "Villa Kevin",
    image: "/assets/img/portfolio/grid/ProjectVillaKevin.jpg",
    imageAlt: "Villa Kevin",
    type: "design",
    badge: "onsale",
    page: "/project/villa-kevin",
    location: "Uluwatu, Bali",
  },
  {
    name: "Permata Hijau Residence",
    image: "/assets/img/portfolio/grid/ProjectPermataHijau.jpg",
    imageAlt: "Permata Hijau Residence",
    type: "design",
    badge: "onsale",
    page: "/project/permata-hijau-residence",
    location: "Permata Hijau, Jakarta",
  },
  {
    name: "MU Residence",
    image: "/assets/img/portfolio/grid/ProjectMUResidence.jpg",
    imageAlt: "MU Residence",
    type: "design",
    badge: "onsale",
    page: "/project/mu-residence",
    location: "Seminyak, Bali",
  },
  {
    name: "Ocean Palm Residence",
    image: "/assets/img/portfolio/grid/ProjectOceanPalmResidence.jpg",
    imageAlt: "Ocean Palm Residence",
    type: "design",
    badge: "onsale",
    page: "/project/ocean-palm-residence",
    location: "Pererenan, Bali",
  },
  {
    name: "Beachouse",
    image: "/assets/img/portfolio/grid/ProjectBeachouse.jpg",
    imageAlt: "Beachouse",
    type: "design",
    badge: "onsale",
    page: "/project/beachouse",
    location: "Gili Trawangan",
  },
  {
    name: "Hooten Residence",
    image: "/assets/img/portfolio/grid/ProjectHootenResidence.jpg",
    imageAlt: "Hooten Residence",
    type: "design",
    badge: "onsale",
    page: "/project/hooten-residence",
    location: "Tunon, Bali",
  },
  {
    name: "The Waterfall Ulaman Retreat",
    image: "/assets/img/portfolio/grid/ProjectTheWaterfallUlaman.jpg",
    imageAlt: "The Waterfall Ulaman",
    type: "design",
    badge: "onsale",
    page: "/project/ulaman-retreat",
    location: "Tabanan, Bali",
  },
  {
    name: "Villa Sentul",
    image: "/assets/img/portfolio/grid/ProjectVillaSentul.jpg",
    imageAlt: "Villa Sentul",
    type: "design",
    badge: "onsale",
    page: "/project/villa-sentul",
    location: "Sentul, Bogor",
  },
  {
    name: "Karma Residence",
    image: "/assets/img/portfolio/grid/ProjectKarmaResidence.jpg",
    imageAlt: "Karma Residence",
    type: "design",
    badge: "onsale",
    page: "/project/karma-residence",
    location: "Jimbaran, Bali",
  },
  {
    name: "Harris Hotel Tuban",
    image: "/assets/img/portfolio/grid/ProjectHarrisHotelTuban.jpg",
    imageAlt: "Harris Hotel Tuban",
    type: "design",
    badge: "onsale",
    page: "/project/harris-hotel-tuban",
    location: "Tuban, Bali",
  },
  {
    name: "HARRIS Hotel Tebet",
    image: "/assets/img/portfolio/grid/ProjectHarrisHotelTebet.jpg",
    imageAlt: "Harris Hotel Tebet",
    type: "design",
    badge: "onsale",
    page: "/project/harris-hotel-tebet",
    location: "Tebet, Jakarta Selatan",
  },
  {
    name: "HARRIS Hotel Batam",
    image: "/assets/img/portfolio/grid/ProjectHarrisHotelBatam.jpg",
    imageAlt: "Harris Hotel Batam",
    type: "design",
    badge: "onsale",
    page: "/project/harris-hotel-batam",
    location: "Kep. Riau, Batam",
  },
  {
    name: "Adiwana Jeevalokha",
    image: "/assets/img/portfolio/grid/ProjectAdiwanaJeevalokha.jpg",
    imageAlt: "Adiwana Jeevalokha",
    type: "design",
    badge: "onsale",
    page: "/project/adiwana-jeevalokha",
    location: "Ubud, Bali",
  },
  {
    name: "Villa Ali Agung",
    image: "/assets/img/portfolio/grid/ProjectVillaAliAgung.jpg",
    imageAlt: "Villa Ali Agung",
    type: "design",
    badge: "onsale",
    page: "/project/villa-ali-agung",
    location: "Bali",
  },
  {
    name: "NOAA Social Dining",
    image: "/assets/img/portfolio/grid/ProjectNOAASocialDining.jpg",
    imageAlt: "NOAA Social Dining",
    type: "design",
    badge: "onsale",
    page: "/project/noaa-social-dining",
    location: "Petitenget, Bali",
  },
  {
    name: "Mixed Use Area Lampung",
    image: "/assets/img/portfolio/grid/ProjectMixedUseAreaLampung.jpg",
    imageAlt: "Mixed Use Area Lampung",
    type: "design",
    badge: "onsale",
    page: "/project/mixed-use-area-lampung",
    location: "Bandar Lampung",
  },
  {
    name: "Villa Beraban",
    image: "/assets/img/portfolio/grid/ProjectVillaBeraban.jpg",
    imageAlt: "Villa Beraban",
    type: "design",
    badge: "onsale",
    page: "/project/villa-beraban",
    location: "Seminyak, Bali",
  },
];

function showData() {
  let content = "";
  for (let i = 0; i < projects.length; i++) {
    content += `<div class="grid-item product portrait grid-sizer ${projects[i].type}">
                    <div
                      class="thumbnail product-thumbnail img-scale-in"
                      data-hover-easing="easeInOut"
                      data-hover-speed="700"
                      data-hover-bkg-color="#ffffff"
                      data-hover-bkg-opacity="0.5"
                    >
                      <span class="${projects[i].badge}">${projects[i].location}</span>
                      <a class="overlay-link" href="${projects[i].page}">
                        <img
                          src="${projects[i].image}"
                          alt=""
                        />
                        <span class="overlay-info">
                          <span>
                            <span> View </span>
                          </span>
                        </span>
                      </a>
                    </div>
                    <div class="product-details center">
                      <h3 class="product-title">
                        <a href="#">${projects[i].name} </a>
                      </h3>
                    </div>
                  </div>`;
  }

  let data = `<div class="row">
                <div class="column width-12">
                  <div class="row grid content-grid-3">
                  ${content}
                  </div>
                </div>
              </div>`;

  document.getElementById("product-grid").innerHTML = data;
}
showData();
