@extends('layout.layout')
@section('title', 'BINAR a Lighting Studio')
@section('nav-landing', 'current')
@section('container')
<!-- Content -->
<div class="content clearfix">
    <!-- Fullscreen Slider Section -->
    <section class="section-block featured-media window-height tm-slider-parallax-container">
        <div class="tm-slider-container full-width-slider" data-featured-slider data-progress-bar="false" data-parallax data-parallax-fade-out data-auto-advance data-animation="slide" data-scale-under="960">
            <ul class="tms-slides">
                <li class="tms-slide" data-image data-as-bkg-image data-force-fit>
                    <div class="tms-content">
                        <div class="tms-content-inner left left-on-mobile v-align-left">
                            <div class="row">
                                <div class="column width-8">
                                    <h1 class="tms-caption title-large color-white lspacing-medium mb-20 weight-bold" data-animate-in="preset:scaleOut;duration:1000ms;" style="
                              text-shadow: 4px 4px 14px rgba(150, 150, 150, 1);
                            " data-no-scale>
                                        a Lighting Consultant in Bali
                                    </h1>
                                    <div class="clear"></div>
                                    <a href="#recent-work" class="tms-caption button scroll-link medium border-white bkg-hover-theme color-white color-hover-blue text-uppercase no-margin-bottom" data-animate-in="preset:slideInUpShort;duration:1000ms;delay:600ms;" data-no-scale>See
                                        More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <img data-src="/assets/img/landing-page/LandingPage.jpg" data-retina src="/assets/img/landing-page/LandingPage.jpg" alt="" loading="lazy" />
                </li>
            </ul>
        </div>
    </section>
    <!-- Fullscreen Slider Section End -->

    <!-- Team Grid -->
    <div id="recent-work" class="section-block team-2 bkg-grey-ultralight">
        <div class="row horizon" data-animate-in="preset:slideInRightShort;duration:1000ms;" data-threshold="0.2">
            <div class="column width-10 offset-1 center">
                <h2 class="mb-50">Recent Post</h2>
            </div>
            <div class="column width-12">
                <div class="row content-grid-3">
                    <div class="grid-item">
                        <div class="team-content">
                            <div class="thumbnail no-margin-bottom img-scale-in" data-hover-easing="easeInOut" data-hover-speed="500" data-hover-bkg-color="#ffffff" data-hover-bkg-opacity="0.9">
                                <a class="overlay-link fade-location" href="https://www.instagram.com/p/CfLxN50O2do/?utm_source=ig_web_copy_link" target="_blank">
                                    <img src="/assets/img/landing-page/recentwork-1.jpg" alt="team memeber 1" width="760" height="500" />
                                    <span class="overlay-info">
                                        <span>
                                            <span>
                                                <span>See More</span>
                                            </span>
                                        </span>
                                    </span>
                                </a>
                            </div>
                            <div class="team-content-info">
                                <h5 class="mb-5">Bali, Indonesia</h5>
                                <h6 class="occupation mb-20">Taman Dharmawangsa</h6>
                                <p>
                                    Light gives the soul of a well-designed interior and
                                    its environment. Taman Dharmawangsa is that definition
                                    of light giving the soul of the building.
                                </p>
                                <ul class="social-list list-horizontal">
                                    <li>
                                        <a class="icon-instagram medium"></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="grid-item">
                        <div class="team-content">
                            <div class="thumbnail no-margin-bottom img-scale-in" data-hover-easing="easeInOut" data-hover-speed="500" data-hover-bkg-color="#ffffff" data-hover-bkg-opacity="0.9">
                                <a class="overlay-link fade-location" href="https://www.instagram.com/p/Cch7l9MNTSA/?utm_source=ig_web_copy_link" target="_blank">
                                    <img src="/assets/img/landing-page/recentwork-2.jpg" alt="team memeber 1" width="760" height="500" />
                                    <span class="overlay-info">
                                        <span>
                                            <span>
                                                <span>See More</span>
                                            </span>
                                        </span>
                                    </span>
                                </a>
                            </div>
                            <div class="team-content-info">
                                <h5 class="mb-5">Bali, Indonesia</h5>
                                <h6 class="occupation mb-20">Pramana Vaikuntha</h6>
                                <p>
                                    The first impression never give a second chance. Take
                                    a glance at the beautiful lighting and architectural
                                    exterior of this building.
                                </p>
                                <ul class="social-list list-horizontal">
                                    <li>
                                        <a class="icon-instagram medium"></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="grid-item">
                        <div class="team-content">
                            <div class="thumbnail no-margin-bottom img-scale-in" data-hover-easing="easeInOut" data-hover-speed="500" data-hover-bkg-color="#ffffff" data-hover-bkg-opacity="0.9">
                                <a class="overlay-link fade-location" href="https://www.instagram.com/p/CeyPmIPMFJE/?utm_source=ig_web_copy_link" target="_blank">
                                    <img src="/assets/img/landing-page/recentwork-3.jpg" alt="team memeber 1" width="760" height="500" />
                                    <span class="overlay-info">
                                        <span>
                                            <span>
                                                <span>See More</span>
                                            </span>
                                        </span>
                                    </span>
                                </a>
                            </div>
                            <div class="team-content-info">
                                <h5 class="mb-5">Jakarta Selatan, Jakarta</h5>
                                <h6 class="occupation mb-20">Permata Hijau</h6>
                                <p>
                                    It's everyone's dream to have a stunning living room
                                    with lights that make and look the environment very
                                    spacious and that's what we did at Permata Hijau.
                                </p>
                                <ul class="social-list list-horizontal">
                                    <li>
                                        <a class="icon-instagram medium"></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Team Grid End -->

    <!-- Full Width Slider Section -->
    <section class="section-block bkg-charcoal no-padding">
        <div class="tm-slider-container full-width-slider" data-featured-slider data-parallax data-animation="slide" data-speed="1300" data-scale-under="960">
            <ul class="tms-slides">
                <li class="tms-slide" data-image data-as-bkg-image data-force-fit data-overlay-bkg-color="#081137" data-overlay-bkg-opacity="0.65" data-animation="slideLeftRight">
                    <div class="tms-content">
                        <div class="tms-content-inner left v-align-middle">
                            <div class="row">
                                <div class="column width-5 offset-7">
                                    <span class="tms-caption label bkg-theme color-white" data-animate-in="preset:slideInUpShort;duration:1000ms;" data-no-scale>
                                        Our Project
                                    </span>
                                    <div class="clear"></div>
                                    <h4 class="tms-caption mt-30 color-white" data-animate-in="preset:slideInUpShort;duration:1000ms;delay:200ms;" data-no-scale>
                                        The Waterfall Ulaman Retreat
                                    </h4>
                                    <div class="clear"></div>
                                    <p class="tms-caption mb-20 color-white" data-animate-in="preset:slideInUpShort;duration:1000ms;delay:400ms;" data-no-scale>
                                        This eco-friendly but luxurious hospitality
                                        accommodation brings nature into its facilities.
                                    </p>
                                    <div class="clear"></div>
                                    <ul class="list-unstyled tms-caption no-margins color-white opacity-05" data-animate-in="preset:slideInUpShort;duration:1000ms;delay:600ms;" data-no-scale>
                                        <li>
                                            <strong>Location:</strong> Tabanan, Bali-Indonesia
                                        </li>
                                        <li><strong>Architect:</strong> Inspiral</li>
                                        <li><strong>Interior:</strong> Inspiral</li>
                                    </ul>
                                    <div class="clear"></div>
                                    <a href="{{ url('/projects/ulamanRetreat') }}" class="tms-caption mt-20 button small border-white color-white bkg-hover-theme color-hover-blue" data-animate-in="preset:slideInUpShort;duration:1000ms;delay:800ms;" data-no-scale>
                                        View Details
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <img data-src="/assets/img/landing-page/slideProject-UlamanEcoRetreat.jpg" data-retina src="/assets/img/landing-page/slideProject-UlamanEcoRetreat.jpg" alt="" />
                </li>
                <li class="tms-slide" data-image data-as-bkg-image data-force-fit data-overlay-bkg-color="#081137" data-overlay-bkg-opacity="0.65" data-animation="slideLeftRight">
                    <div class="tms-content">
                        <div class="tms-content-inner left v-align-middle">
                            <div class="row">
                                <div class="column width-5">
                                    <span class="tms-caption label bkg-theme color-white" data-animate-in="preset:slideInUpShort;duration:1000ms;" data-no-scale>
                                        Our Project
                                    </span>
                                    <div class="clear"></div>
                                    <h4 class="tms-caption mt-30 color-white" data-animate-in="preset:slideInUpShort;duration:1000ms;delay:200ms;" data-no-scale>
                                        HARRIS Hotel Tuban
                                    </h4>
                                    <div class="clear"></div>
                                    <p class="tms-caption mb-20 color-white" data-animate-in="preset:slideInUpShort;duration:1000ms;delay:400ms;" data-no-scale>
                                        The color orange often appears in the interior as
                                        part of this hotel's corporate identity.
                                    </p>
                                    <div class="clear"></div>
                                    <ul class="list-unstyled tms-caption no-margins color-white opacity-05" data-animate-in="preset:slideInUpShort;duration:1000ms;delay:600ms;" data-no-scale>
                                        <li>
                                            <strong>Location:</strong> Badung, Bali-Indonesia
                                        </li>
                                        <li>
                                            <strong>Interior:</strong> Julius Design Associate
                                        </li>
                                        <li>
                                            <strong>Client:</strong> Indonesia Paradise
                                            Property
                                        </li>
                                    </ul>
                                    <div class="clear"></div>
                                    <a href="{{ url('/projects/harrisHotelTuban') }}" class="tms-caption mt-20 button small border-white color-white bkg-hover-theme color-hover-blue" data-animate-in="preset:slideInUpShort;duration:1000ms;delay:800ms;" data-no-scale>
                                        View Details
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <img data-src="/assets/img/landing-page/slideProject-HarrisHotelTuban.jpg" data-retina src="/assets/img/landing-page/slideProject-HarrisHotelTuban.jpg" alt="" />
                </li>
                <li class="tms-slide" data-image data-as-bkg-image data-force-fit data-overlay-bkg-color="#081137" data-overlay-bkg-opacity="0.65" data-animation="slideLeftRight">
                    <div class="tms-content">
                        <div class="tms-content-inner left v-align-middle">
                            <div class="row">
                                <div class="column width-5 offset-7">
                                    <span class="tms-caption label bkg-theme color-white" data-animate-in="preset:slideInUpShort;duration:1000ms;" data-no-scale>
                                        Our Project
                                    </span>
                                    <div class="clear"></div>
                                    <h4 class="tms-caption mt-30 color-white" data-animate-in="preset:slideInUpShort;duration:1000ms;delay:200ms;" data-no-scale>
                                        KARMA Residence
                                    </h4>
                                    <div class="clear"></div>
                                    <p class="tms-caption mb-20 color-white" data-animate-in="preset:slideInUpShort;duration:1000ms;delay:400ms;" data-no-scale>
                                        The renovation of this villa try to bring fresh<br />new
                                        ambience to feel.
                                    </p>
                                    <div class="clear"></div>
                                    <ul class="list-unstyled tms-caption no-margins color-white opacity-05" data-animate-in="preset:slideInUpShort;duration:1000ms;delay:600ms;" data-no-scale>
                                        <li>
                                            <strong>Location:</strong> Badung, Bali-Indonesia
                                        </li>
                                        <li><strong>Interior:</strong> RIEM Studio</li>
                                        <li><strong>Client:</strong> John Lin</li>
                                    </ul>
                                    <div class="clear"></div>
                                    <a href="{{ url('/projects/karmaResidence') }}" class="tms-caption mt-20 button small border-white color-white bkg-hover-theme color-hover-blue" data-animate-in="preset:slideInUpShort;duration:1000ms;delay:800ms;" data-no-scale>
                                        View Details
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <img data-src="/assets/img/landing-page/slideProject-KarmaResidence.jpg" data-retina src="/assets/img/landing-page/slideProject-KarmaResidence.jpg" alt="" />
                </li>
                <li class="tms-slide" data-image data-as-bkg-image data-force-fit data-overlay-bkg-color="#081137" data-overlay-bkg-opacity="0.65" data-animation="slideLeftRight">
                    <div class="tms-content">
                        <div class="tms-content-inner left v-align-middle">
                            <div class="row">
                                <div class="column width-5">
                                    <span class="tms-caption label bkg-theme color-white" data-animate-in="preset:slideInUpShort;duration:1000ms;" data-no-scale>
                                        Our Project
                                    </span>
                                    <div class="clear"></div>
                                    <h4 class="tms-caption mt-30 color-white" data-animate-in="preset:slideInUpShort;duration:1000ms;delay:200ms;" data-no-scale>
                                        Villa Beraban
                                    </h4>
                                    <div class="clear"></div>
                                    <p class="tms-caption mb-20 color-white" data-animate-in="preset:slideInUpShort;duration:1000ms;delay:400ms;" data-no-scale>
                                        Residents to enjoy the atmosphere of their
                                        surrounding whilst soaking up the natural vibe
                                    </p>
                                    <div class="clear"></div>
                                    <ul class="list-unstyled tms-caption no-margins color-white opacity-05" data-animate-in="preset:slideInUpShort;duration:1000ms;delay:600ms;" data-no-scale>
                                        <li>
                                            <strong>Location:</strong> Badung, Bali-Indonesia
                                        </li>
                                    </ul>
                                    <div class="clear"></div>
                                    <a href="{{ url('/projects/villaBeraban') }}" class="tms-caption mt-20 button small border-white color-white bkg-hover-theme color-hover-blue" data-animate-in="preset:slideInUpShort;duration:1000ms;delay:800ms;" data-no-scale>
                                        View Details
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <img data-src="/assets/img/landing-page/slideProject-VillaBeraban.jpg" data-retina src="/assets/img/landing-page/slideProject-VillaBeraban.jpg" alt="" />
                </li>
                <li class="tms-slide" data-image data-as-bkg-image data-force-fit data-overlay-bkg-color="#081137" data-overlay-bkg-opacity="0.65" data-animation="slideLeftRight">
                    <div class="tms-content">
                        <div class="tms-content-inner left v-align-middle">
                            <div class="row">
                                <div class="column width-5 offset-7">
                                    <span class="tms-caption label bkg-theme color-white" data-animate-in="preset:slideInUpShort;duration:1000ms;" data-no-scale>
                                        Our Project
                                    </span>
                                    <div class="clear"></div>
                                    <h4 class="tms-caption mt-30 color-white" data-animate-in="preset:slideInUpShort;duration:1000ms;delay:200ms;" data-no-scale>
                                        NOAA Social Dining
                                    </h4>
                                    <div class="clear"></div>
                                    <p class="tms-caption mb-20 color-white" data-animate-in="preset:slideInUpShort;duration:1000ms;delay:400ms;" data-no-scale>
                                        NOAA has been designed to become a stand apart
                                        restaurant with its state-of-the-art architecture
                                        that highlights the transparent roof, graceful
                                        interior appearance, and inviting pedestrian’s
                                        borders.
                                    </p>
                                    <div class="clear"></div>
                                    <ul class="list-unstyled tms-caption no-margins color-white opacity-05" data-animate-in="preset:slideInUpShort;duration:1000ms;delay:600ms;" data-no-scale>
                                        <li>
                                            <strong>Location:</strong> Badung, Bali-Indonesia
                                        </li>
                                        <li>
                                            <strong>Architect:</strong> Arkana Architect
                                        </li>
                                        <li><strong>Interior:</strong> Arkana Architect</li>
                                    </ul>
                                    <div class="clear"></div>
                                    <a href="{{ url('/projects/noaaSocialDining') }}" class="tms-caption mt-20 button small border-white color-white bkg-hover-theme color-hover-blue" data-animate-in="preset:slideInUpShort;duration:1000ms;delay:800ms;" data-no-scale>
                                        View Details
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <img data-src="/assets/img/landing-page/slideProject-NoaaSocialDining.jpg" data-retina src="/assets/img/landing-page/slideProject-NoaaSocialDining.jpg" alt="" />
                </li>
            </ul>
        </div>
    </section>
    <!-- Full Width Slider Section End -->

    <!-- Intro -->
    <div class="section-block pb-0">
        <div class="row">
            <div class="column width-10 offset-1 center">
                <h2 class="mb-50">Why Us?</h2>
            </div>
            <div class="column width-12">
                <hr class="mb-70" />
            </div>
        </div>
    </div>
    <!-- Intro End -->

    <!-- Basic Feature Columns -->
    <div class="section-block pt-0">
        <div class="row flex">
            <div class="column width-4">
                <div class="feature-column small left horizon" data-animate-in="preset:slideInRightShort;duration:1000ms;" data-threshold="1">
                    <span class="feature-icon icon-upload-to-cloud color-theme"></span>
                    <div class="feature-text">
                        <h3>Experienced Designer</h3>
                        <p>
                            We have a value that underlies all company activities, "To
                            provide services that accommodate client needs while
                            addressing the problem as best as possible, in the most
                            creative way possible, using all available resources, to
                            complete work properly, following the time agreed."
                        </p>
                    </div>
                </div>
            </div>
            <div class="column width-4">
                <div class="feature-column small left horizon" data-animate-in="preset:slideInRightShort;duration:1000ms;delay:200ms;" data-threshold="1">
                    <span class="feature-icon icon-fingerprint color-theme"></span>
                    <div class="feature-text">
                        <h3>Flexible in Creativity</h3>
                        <p>
                            Lighting design is made to strengthen the aesthetic value
                            of the whole space (building/interior/ landscape)
                            smoothly, without contradicting or reducing the original
                            purpose & basic functions of itself.
                        </p>
                    </div>
                </div>
            </div>
            <div class="column width-4">
                <div class="feature-column small left horizon" data-animate-in="preset:slideInRightShort;duration:1000ms;delay:400ms;" data-threshold="1">
                    <span class="feature-icon icon-crop color-theme"></span>
                    <div class="feature-text">
                        <h3>Communicative Team</h3>
                        <p>
                            We translate client needs into an idea developed with
                            dozens of brainstorming processes, amplifying clients
                            based designs into something much broader, creating a
                            visually pleasing impression, even through concepts.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Basic Feature Columns End -->
</div>
<!-- Content End -->

@endsection