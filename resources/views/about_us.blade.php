@extends('layout.layout')
@section('title', 'About Us | BINAR a Lighting Studio')
@section('nav-about', 'current')
@section('container')
<!-- Content -->
<div class="content clearfix">
    <!-- Intro Title Section 2 -->
    <div class="section-block intro-title-2-1">
        <div class="row">
            <div class="column width-12">
                <div class="title-container">
                    <div class="title-container-inner left">
                        <h1 class="inline weight-bold no-margin-bottom color-white" style="text-shadow: 4px 4px 14px rgba(150, 150, 150, 1)">
                            ABOUT US
                        </h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Intro Title Section 2 End -->

    <!-- Service Section -->
    <section class="section-block replicable-content" id="services">
        <div class="row">
            <div class="column width-3">
                <h3 class="mb-50">We're Good At</h3>
            </div>
            <div class="column width-8 offset-1">
                <div class="row content-grid-3 flex">
                    <div class="grid-item no-margin-bottom">
                        <h5 class="mb-30 weight-bold text-uppercase">
                            Architectural Lighting
                        </h5>
                        <p class="mb-50">
                            We collaborate with the architect(s) in developing the
                            concept of the building and its surroundings to get the
                            right visualisation of the façade and exterior area, with
                            aspects around lighting level, brightness contrast, safety
                            aspect, eye sights and in particularly during evening
                            time.
                        </p>
                    </div>
                    <div class="grid-item no-margin-bottom">
                        <h5 class="mb-30 weight-bold text-uppercase">
                            Landscape Lighting
                        </h5>
                        <p>
                            More to intangible aspect of lighting design, the
                            landscape design supports the architectural value of the
                            premises, thus, we collaborate with the landscape designer
                            to understand the right amount of the lighting needed to
                            build senses of comfort, safety and balance.
                        </p>
                    </div>
                    <div class="grid-item no-margin-bottom">
                        <h5 class="mb-30 weight-bold text-uppercase">
                            Interior Lighting
                        </h5>
                        <p class="mb-50">
                            Moving into the building, we collaborate with interior
                            designer to get the right suitable lighting ambiance based
                            on the designed space to calculate the lighting level,
                            brightness contrast, eye sights and safety aspect.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Service Section End -->

    <!-- Hero 5 Section -->
    <div class="section-block hero-5 hero-5-2 clear-height show-media-column-on-mobile bkg-theme-binar" id="philosophy">
        <div class="media-column width-6 horizon" data-animate-in="preset:slideInLeftShort;duration:1000ms;delay:200ms;" data-threshold="0.6"></div>
        <div class="row">
            <div class="column width-5 push-7">
                <div class="hero-content split-hero-content">
                    <div class="hero-content-inner left horizon" data-animate-in="preset:slideInRightShort;duration:1000ms;delay:200ms;" data-threshold="0.5">
                        <p class="lead color-white">
                            The story initially began in 2019 by 3 Co-founder
                            co-operating to work on lighting & architectural projects.
                        </p>
                        <p class="color-grey-light">
                            After much discussion & consideration, the three agreed to
                            continue this collaboration on behalf of themselves and
                            finally formed Binar. Currently, Binar is based in Bali to
                            catch up with the Central & East Indonesia market.
                        </p>
                        <p class="color-grey-light">
                            The main & essential activity of Binar lies in the field
                            of architectural lighting design, where Binar produces
                            lighting designs that support architects, interior
                            designers, & artists/landscape designers to show the best
                            side of their creations. Lighting design is made to
                            strengthen the aesthetic value of the whole space
                            (building/interior/ landscape) smoothly, without
                            contradicting or reducing the original purpose & basic
                            functions of itself.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Hero 5 Section End -->

    <!-- Team Grid -->
    <div class="section-block replicable-content team-2 bkg-grey-ultralight" id="teams">
        <div class="row">
            <div class="column width-6">
                <h3 class="mb-50">The Team</h3>
            </div>
            <div class="column width-12">
                <div class="row content-grid-3">
                    <div class="grid-item horizon" data-animate-in="preset:slideInUpShort;duration:1000ms;" data-threshold="0.3">
                        <div class="thumbnail no-margin-bottom" data-hover-easing="easeInOut" data-hover-speed="500" data-hover-bkg-color="#ffffff" data-hover-bkg-opacity="0.9">
                            <img src="/assets/img/about/team-member-1.jpg" width="760" height="500" alt="" />
                        </div>
                        <div class="team-content-info">
                            <h4 class="mb-5">Tracy Andhini</h4>
                            <h4 class="occupation">Managing Director</h4>
                            <p>
                                Duis aute irure dolor in reprehenderit in voluptate
                                velit esse cillum dolore eu fugiat nulla pariatur.
                                Excepteur sint occaecat cupidatat non proident, sunt in
                                culpa qui officia deserunt mollit.
                            </p>
                            <ul class="social-list list-horizontal">
                                <li>
                                    <a href="#"><span class="icon-facebook small"></span></a>
                                </li>
                                <li>
                                    <a href="#"><span class="icon-twitter small"></span></a>
                                </li>
                                <li>
                                    <a href="#"><span class="icon-dribbble small"></span></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="grid-item horizon" data-animate-in="preset:slideInUpShort;duration:1000ms;delay:300ms;" data-threshold="0.3">
                        <div class="thumbnail no-margin-bottom" data-hover-easing="easeInOut" data-hover-speed="500" data-hover-bkg-color="#ffffff" data-hover-bkg-opacity="0.9">
                            <img src="/assets/img/about/team-member-2.jpg" width="760" height="500" alt="" />
                        </div>
                        <div class="team-content-info">
                            <h4 class="mb-5">Kunti Ambarwati</h4>
                            <h4 class="occupation">Managing Director</h4>
                            <p>
                                At vero eos et accusamus et iusto odio dignissimos
                                ducimus qui blanditiis praesentium voluptatum deleniti
                                atque corrupti quos dolores et quas molestias excepturi
                                sint occaecati cupiditate non.
                            </p>
                            <ul class="social-list list-horizontal">
                                <li>
                                    <a href="#"><span class="icon-facebook small"></span></a>
                                </li>
                                <li>
                                    <a href="#"><span class="icon-twitter small"></span></a>
                                </li>
                                <li>
                                    <a href="#"><span class="icon-github small"></span></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="grid-item horizon" data-animate-in="preset:slideInUpShort;duration:1000ms;delay:600ms;" data-threshold="0.3">
                        <div class="thumbnail no-margin-bottom" data-hover-easing="easeInOut" data-hover-speed="500" data-hover-bkg-color="#ffffff" data-hover-bkg-opacity="0.9">
                            <img src="/assets/img/about/team-member-3.jpg" width="760" height="500" alt="" />
                        </div>
                        <div class="team-content-info">
                            <h4 class="mb-5">Mira Sofjan</h4>
                            <h4 class="occupation">Principal Designer</h4>
                            <p>
                                At vero eos et accusamus et iusto odio dignissimos
                                ducimus qui blanditiis praesentium voluptatum deleniti
                                atque corrupti quos dolores et quas molestias excepturi
                                sint occaecati cupiditate non.
                            </p>
                            <ul class="social-list list-horizontal">
                                <li>
                                    <a href="#"><span class="icon-facebook small"></span></a>
                                </li>
                                <li>
                                    <a href="#"><span class="icon-behance small"></span></a>
                                </li>
                                <li>
                                    <a href="#"><span class="icon-dribbble small"></span></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="grid-item horizon" data-animate-in="preset:slideInUpShort;duration:1000ms;delay:600ms;" data-threshold="0.3">
                        <div class="thumbnail no-margin-bottom" data-hover-easing="easeInOut" data-hover-speed="500" data-hover-bkg-color="#ffffff" data-hover-bkg-opacity="0.9">
                            <img src="/assets/img/about/team-member-4.jpg" width="760" height="500" alt="" />
                        </div>
                        <div class="team-content-info">
                            <h4 class="mb-5">Atika Tara</h4>
                            <h4 class="occupation">Lighting Designer</h4>
                            <p>
                                At vero eos et accusamus et iusto odio dignissimos
                                ducimus qui blanditiis praesentium voluptatum deleniti
                                atque corrupti quos dolores et quas molestias excepturi
                                sint occaecati cupiditate non.
                            </p>
                            <ul class="social-list list-horizontal">
                                <li>
                                    <a href="#"><span class="icon-facebook small"></span></a>
                                </li>
                                <li>
                                    <a href="#"><span class="icon-behance small"></span></a>
                                </li>
                                <li>
                                    <a href="#"><span class="icon-dribbble small"></span></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="grid-item horizon" data-animate-in="preset:slideInUpShort;duration:1000ms;delay:600ms;" data-threshold="0.3">
                        <div class="thumbnail no-margin-bottom" data-hover-easing="easeInOut" data-hover-speed="500" data-hover-bkg-color="#ffffff" data-hover-bkg-opacity="0.9">
                            <img src="/assets/img/about/team-member-5.jpg" width="760" height="500" alt="" />
                        </div>
                        <div class="team-content-info">
                            <h4 class="mb-5">Dian Putra</h4>
                            <h4 class="occupation">Lighting Designer</h4>
                            <p>
                                At vero eos et accusamus et iusto odio dignissimos
                                ducimus qui blanditiis praesentium voluptatum deleniti
                                atque corrupti quos dolores et quas molestias excepturi
                                sint occaecati cupiditate non.
                            </p>
                            <ul class="social-list list-horizontal">
                                <li>
                                    <a href="#"><span class="icon-facebook small"></span></a>
                                </li>
                                <li>
                                    <a href="#"><span class="icon-behance small"></span></a>
                                </li>
                                <li>
                                    <a href="#"><span class="icon-dribbble small"></span></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Team Grid End -->

    <!-- Hero Section 5 -->
    <section id="concept" class="section-block hero-5 hero-5-1 window-height right bkg-white color-charcoal">
        <div class="media-column width-6"></div>
        <div class="row">
            <div class="column width-5">
                <div class="hero-content split-hero-content">
                    <div class="hero-content-inner left horizon" data-animate-in="preset:slideInRightShort;duration:1000ms;" data-threshold="0.5">
                        <h3 class="mb-50">Light Change The Soul of An Object</h3>
                        <p class="lead mb-30 opacity-05">
                            "Light changes the soul of an object" which interpreted as
                            lighting designs strengthens & emphasizes the atmosphere
                            of a space, producing an intimate relationship between the
                            user and the atmosphere of the room/place by harnessing
                            the power of emotion.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero Section 5 End -->
</div>
<!-- Content End -->
@endsection