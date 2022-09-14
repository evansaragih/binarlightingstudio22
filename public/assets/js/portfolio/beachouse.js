let project = [
  {
    href: "/assets/img/portfolio/Beachouse/Beachouse-1.jpg",
    src: "/assets/img/portfolio/Beachouse/Beachouse-1.jpg",
    alt: "Harris Hotel Tebet",
  },
  {
    href: "/assets/img/portfolio/Beachouse/Beachouse-2.jpg",
    src: "/assets/img/portfolio/Beachouse/Beachouse-2.jpg",
    alt: "Harris Hotel Tebet",
  },
  {
    href: "/assets/img/portfolio/Beachouse/Beachouse-3.jpg",
    src: "/assets/img/portfolio/Beachouse/Beachouse-3.jpg",
    alt: "Harris Hotel Tebet",
  },
  {
    href: "/assets/img/portfolio/Beachouse/Beachouse-4.jpg",
    src: "/assets/img/portfolio/Beachouse/Beachouse-4.jpg",
    alt: "Harris Hotel Tebet",
  },
  {
    href: "/assets/img/portfolio/Beachouse/Beachouse-5.jpg",
    src: "/assets/img/portfolio/Beachouse/Beachouse-5.jpg",
    alt: "Harris Hotel Tebet",
  },
  {
    href: "/assets/img/portfolio/Beachouse/Beachouse-6.jpg",
    src: "/assets/img/portfolio/Beachouse/Beachouse-6.jpg",
    alt: "Harris Hotel Tebet",
  },
  {
    href: "/assets/img/portfolio/Beachouse/Beachouse-7.jpg",
    src: "/assets/img/portfolio/Beachouse/Beachouse-7.jpg",
    alt: "Harris Hotel Tebet",
  },
  {
    href: "/assets/img/portfolio/Beachouse/Beachouse-8.jpg",
    src: "/assets/img/portfolio/Beachouse/Beachouse-8.jpg",
    alt: "Harris Hotel Tebet",
  },
  {
    href: "/assets/img/portfolio/Beachouse/Beachouse-9.jpg",
    src: "/assets/img/portfolio/Beachouse/Beachouse-9.jpg",
    alt: "Harris Hotel Tebet",
  },
  {
    href: "/assets/img/portfolio/Beachouse/Beachouse-10.jpg",
    src: "/assets/img/portfolio/Beachouse/Beachouse-10.jpg",
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
