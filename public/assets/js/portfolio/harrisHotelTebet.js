let project = [
  {
    href: "/assets/img/portfolio/HarrisHotelTebet/HarrisHotelTebet-1.jpg",
    src: "/assets/img/portfolio/HarrisHotelTebet/HarrisHotelTebet-1.jpg",
    alt: "Harris Hotel Tebet",
  },
  {
    href: "/assets/img/portfolio/HarrisHotelTebet/HarrisHotelTebet-2.jpg",
    src: "/assets/img/portfolio/HarrisHotelTebet/HarrisHotelTebet-2.jpg",
    alt: "Harris Hotel Tebet",
  },
  {
    href: "/assets/img/portfolio/HarrisHotelTebet/HarrisHotelTebet-3.jpg",
    src: "/assets/img/portfolio/HarrisHotelTebet/HarrisHotelTebet-3.jpg",
    alt: "Harris Hotel Tebet",
  },
  {
    href: "/assets/img/portfolio/HarrisHotelTebet/HarrisHotelTebet-4.jpg",
    src: "/assets/img/portfolio/HarrisHotelTebet/HarrisHotelTebet-4.jpg",
    alt: "Harris Hotel Tebet",
  },
  {
    href: "/assets/img/portfolio/HarrisHotelTebet/HarrisHotelTebet-5.jpg",
    src: "/assets/img/portfolio/HarrisHotelTebet/HarrisHotelTebet-5.jpg",
    alt: "Harris Hotel Tebet",
  },
  {
    href: "/assets/img/portfolio/HarrisHotelTebet/HarrisHotelTebet-6.jpg",
    src: "/assets/img/portfolio/HarrisHotelTebet/HarrisHotelTebet-6.jpg",
    alt: "Harris Hotel Tebet",
  },
  {
    href: "/assets/img/portfolio/HarrisHotelTebet/HarrisHotelTebet-7.jpg",
    src: "/assets/img/portfolio/HarrisHotelTebet/HarrisHotelTebet-7.jpg",
    alt: "Harris Hotel Tebet",
  },
  {
    href: "/assets/img/portfolio/HarrisHotelTebet/HarrisHotelTebet-8.jpg",
    src: "/assets/img/portfolio/HarrisHotelTebet/HarrisHotelTebet-8.jpg",
    alt: "Harris Hotel Tebet",
  },
  {
    href: "/assets/img/portfolio/HarrisHotelTebet/HarrisHotelTebet-9.jpg",
    src: "/assets/img/portfolio/HarrisHotelTebet/HarrisHotelTebet-9.jpg",
    alt: "Harris Hotel Tebet",
  },
  {
    href: "/assets/img/portfolio/HarrisHotelTebet/HarrisHotelTebet-10.jpg",
    src: "/assets/img/portfolio/HarrisHotelTebet/HarrisHotelTebet-10.jpg",
    alt: "Harris Hotel Tebet",
  },
  {
    href: "/assets/img/portfolio/HarrisHotelTebet/HarrisHotelTebet-11.jpg",
    src: "/assets/img/portfolio/HarrisHotelTebet/HarrisHotelTebet-11.jpg",
    alt: "Harris Hotel Tebet",
  },
  {
    href: "/assets/img/portfolio/HarrisHotelTebet/HarrisHotelTebet-12.jpg",
    src: "/assets/img/portfolio/HarrisHotelTebet/HarrisHotelTebet-12.jpg",
    alt: "Harris Hotel Tebet",
  },
  {
    href: "/assets/img/portfolio/HarrisHotelTebet/HarrisHotelTebet-13.jpg",
    src: "/assets/img/portfolio/HarrisHotelTebet/HarrisHotelTebet-13.jpg",
    alt: "Harris Hotel Tebet",
  },
  {
    href: "/assets/img/portfolio/HarrisHotelTebet/HarrisHotelTebet-14.jpg",
    src: "/assets/img/portfolio/HarrisHotelTebet/HarrisHotelTebet-14.jpg",
    alt: "Harris Hotel Tebet",
  },
];

function showData() {
  let content = "";
  for (let i = 0; i < project.length; i++) {
    content += `<div class="grid-item">
                    <div
                      class="thumbnail product-thumbnail img-scale-in"
                      data-hover-easing="easeInOut"
                      data-hover-speed="700"
                      data-hover-bkg-color="#ffffff"
                      data-hover-bkg-opacity="0.9"
                    >
                      <a
                        class="overlay-link lightbox-link"
                        data-group="product-lightbox-gallery"
                        href="${project[i].href}"
                      >
                        <img
                          src="${project[i].src}"
                          loading="lazy"
                          alt="${project[i].alt}"
                        />
                        <span class="overlay-info">
                          <span>
                            <span class="icon-magnifying-glass"></span>
                          </span>
                        </span>
                      </a>
                    </div>
                  </div>`;
  }

  let data = `<div class="row">
                <div class="column width-12">
                 <div class="row grid content-grid-2">
                  ${content}
                 </div>
               </div>
              </div>`;

  document.getElementById("foto-project").innerHTML = data;
}
showData();
