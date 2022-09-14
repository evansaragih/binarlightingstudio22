let otherProjects = [
  {
    src: "/assets/img/portfolio/grid/ProjectLagunaLuxury.jpg",
    alt: "Laguna Luxury Hotel & Resort",
    projectName: "Laguna Luxury Hotel & Resort",
    projectLocation: "Nusa Dua, Bali",
    link: "#",
  },
  {
    src: "/assets/img/portfolio/grid/ProjectVillaKevin.jpg",
    alt: "Villa Kevin",
    projectName: "Villa Kevin",
    projectLocation: "Uluwatu, Bali",
    link: "project-villaKevin.html",
  },
  {
    src: "/assets/img/portfolio/grid/ProjectPermataHijau.jpg",
    alt: "Permata Hijau",
    projectName: "Permata Hijau",
    projectLocation: "Permata Hijau, Jakarta",
    link: "project-permataHijauResidence.html",
  },
  {
    src: "/assets/img/portfolio/grid/ProjectMUResidence.jpg",
    alt: "MU Residence",
    projectName: "MU Residence",
    projectLocation: "Seminyak, Bali",
    link: "project-muResidence.html",
  },
  {
    src: "/assets/img/portfolio/grid/ProjectOceanPalmResidence.jpg",
    alt: "Ocean Palm",
    projectName: "Ocean Palm",
    projectLocation: "Pererenan, Bali",
    link: "project-oceanPalmResidence.html",
  },
  {
    src: "/assets/img/portfolio/grid/ProjectBeachouse.jpg",
    alt: "Beachouse",
    projectName: "Beachouse",
    projectLocation: "Gili Trawangan",
    link: "project-beachouse.html",
  },
  {
    src: "/assets/img/portfolio/grid/ProjectHootenResidence.jpg",
    alt: "Hooten Residence",
    projectName: "Hooten Residence",
    projectLocation: "Ubud, Bali",
    link: "project-hootenResidence.html",
  },
  {
    src: "/assets/img/portfolio/grid/ProjectTheWaterfallUlaman.jpg",
    alt: "The Waterfall Ulaman Retreat",
    projectName: "The Waterfall Ulaman Retreat",
    projectLocation: "Tabanan, Bali",
    link: "project-ulamanRetreat.html",
  },
  {
    src: "/assets/img/portfolio/grid/ProjectVillaSentul.jpg",
    alt: "Villa Sentul",
    projectName: "Villa Sentul",
    projectLocation: "Sentul, Bogor",
    link: "project-villaSentul.html",
  },
  {
    src: "/assets/img/portfolio/grid/ProjectKarmaResidence.jpg",
    alt: "Karma Residence",
    projectName: "Karma Residence",
    projectLocation: "Jimbaran, Bali",
    link: "project-karmaResidence.html",
  },
  {
    src: "/assets/img/portfolio/grid/ProjectHarrisHotelTuban.jpg",
    alt: "Harris Hotel Tuban",
    projectName: "Harris Hotel Tuban",
    projectLocation: "Tuban, Bali",
    link: "project-harrisHotelTuban.html",
  },
  {
    src: "/assets/img/portfolio/grid/ProjectHarrisHotelTebet.jpg",
    alt: "Harris Hotel Tebet",
    projectName: "Harris Hotel Tebet",
    projectLocation: "Tebet, Jakarta Selatan",
    link: "project-harrisHotelTebet.html",
  },
  {
    src: "/assets/img/portfolio/grid/ProjectHarrisHotelBatam.jpg",
    alt: "Harris Hotel Batam",
    projectName: "Harris Hotel Batam",
    projectLocation: "Kep. Riau, Batam",
    link: "project-harrisHotelBatam.html",
  },
  {
    src: "/assets/img/portfolio/grid/ProjectAdiwanaJeevalokha.jpg",
    alt: "Adiwana Jeevalokha",
    projectName: "Adiwana Jeevalokha",
    projectLocation: "Ubud, Bali",
    link: "project-adiwanaJeevalokha.html",
  },
  {
    src: "/assets/img/portfolio/grid/ProjectVillaAliAgung.jpg",
    alt: "Villa Ali Agung",
    projectName: "Villa Ali Agung",
    projectLocation: "Kerobokan, Bali",
    link: "project-villaAliAgung.html",
  },
  {
    src: "/assets/img/portfolio/grid/ProjectNOAASocialDining.jpg",
    alt: "NOAA Social Dining",
    projectName: "NOAA Social Dining",
    projectLocation: "Petitenget, Bali",
    link: "project-noaaSocialDining.html",
  },
  {
    src: "/assets/img/portfolio/grid/ProjectMixedUseAreaLampung.jpg",
    alt: "Mixed Use Area Lampung",
    projectName: "Mixed Use Area Lampung",
    projectLocation: "Bandar Lampung",
    link: "project-mixedUseAreaLampung.html",
  },
  {
    src: "/assets/img/portfolio/grid/ProjectVillaBeraban.jpg",
    alt: "Villa Beraban",
    projectName: "Villa Beraban",
    projectLocation: "Seminyak, Bali",
    link: "project-villaBeraban.html",
  },
];

console.log(otherProjects);

function showData() {
  let content = "";

  for (let i = 0; i < 4; i++) {
    const random = Math.floor(Math.random() * otherProjects.length);
    let index = random;
    let newData = otherProjects.splice(index, 1)[0];

    content += `<li class="tms-slide product">
                  <div class="grid-item product portrait grid-sizer">
                    <div
                      class="thumbnail product-thumbnail img-scale-in"
                      data-hover-easing="easeInOut"
                      data-hover-speed="700"
                      data-hover-bkg-color="#ffffff"
                      data-hover-bkg-opacity="0.5"
                    >
                      <a class="overlay-link" href="${newData.link}">
                        <img
                          src="${newData.src}"
                          alt="${newData.alt}"
                        />
                        <span class="overlay-info">
                          <span>
                            <span> View </span>
                          </span>
                        </span>
                      </a>
                      </div>
                      <div class="product-details">
                        <h3 class="product-title">
                          <a href="${newData.link}">${newData.projectName}</a>
                        </h3>
                        <span class="product-price price">
                          <span class="amount">${newData.projectLocation}</span>
                        </span>
                      </div>
                    </div>
                </li>`;
  }

  let data = `<div class="row">
                <div class="column width-12 slider-column no-padding">
                  <div
                    class="tm-slider-container recent-slider"
                    data-carousel-visible-slides="3"
                    data-nav-keyboard="false"
                    data-nav-pagination="false"
                  >
                    <ul class="tms-slides">
                      ${content}
                    </ul>
                  </div>
                </div>
              </div>`;

  document.getElementById("other-projects").innerHTML = data;
}
showData();
