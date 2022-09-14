<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta content="width=device-width,initial-scale=1.0,maximum-scale=1.0" name="viewport" />
    <meta name="twitter:widgets:theme" content="light" />
    <meta property="og:title" content="BINAR a Lighting Studio - BALI Lighting Consultant" />
    <meta property="og:type" content="website" />
    <meta property="og:image" content="https://binarlightingstudio.com/assets/img/logo/logo_binar-colour.png" />
    <meta property="og:description" content="Binar is an lighting consultant. We assist our client in aligning their architectural, interior and landscape design concepts with the right lighting design to create differentiation or value added." />
    <meta name="google-site-verification" content="sOO8Y1Q5NBD0eV2h60tJF8bd-oB9p2R8AicU_xZK8dI" />
    <meta name="msvalidate.01" content="9A2887BC5A505F3B4A7C9182A1CA13DC" />
    <meta name="p:domain_verify" content="f63adb9f42d291ab875a381e221c316a" />
    <meta name="author" content="BINAR A LIGHTING STUDIO" />
    <title>@yield('title') - Lighting Consultant</title>
    <link rel="shortcut icon" type="image/x-icon" href="/assets/img/logo/icon.png" />

    <!-- Font -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700%7CLato:300,400,700" rel="stylesheet" type="text/css" />

    <!-- Css -->
    <link rel="stylesheet" href="/assets/css/core.min.css" />
    <link rel="stylesheet" href="/assets/css/skin-architecture.css" />

</head>

<body class="shop home-page">
    <!-- Side Navigation Menu -->
    <aside class="side-navigation-wrapper enter-right" data-no-scrollbar data-animation="scale-in">
        <div class="side-navigation-scroll-pane">
            <div class="side-navigation-inner">
                <div class="side-navigation-header">
                    <div class="navigation-hide side-nav-hide">
                        <a href="#">
                            <span class="icon-cancel medium"></span>
                        </a>
                    </div>
                </div>
                <nav class="side-navigation">
                    <ul>
                        <li class="@yield('nav-lading')">
                            <a href="{{ url('/') }}" class="contains-sub-menu">Home</a>
                        </li>
                        <li class="@yield('nav-projects')">
                            <a href="{{ url('/projects') }}" class="contains-sub-menu">Projects</a>
                        </li>
                        <li class="@yield('nav-about')">
                            <a href="{{ url('/about') }}" class="contains-sub-menu">About Us</a>
                            <ul class="sub-menu">
                                <li class="@yield('nav-philosophy')">
                                    <a href="{{ url('/about#philosophy') }}">Philosophy</a>
                                </li>
                                <li class="@yield('nav-services')">
                                    <a href="{{ url('/about#services') }}">Services</a>
                                </li>
                                <li class="@yield('nav-teams')">
                                    <a href="{{ url('/about#teams') }}">Teams</a>
                                </li>
                            </ul>
                        </li>
                        <li class="@yield('nav-careers')">
                            <a href="{{ url('/careers') }}" class="contains-sub-menu">Careers</a>
                        </li>
                        <li class="@yield('nav-article')">
                            <a href="{{ url('/article') }}" class="contains-sub-menu">Article</a>
                        </li>
                        <li class="@yield('nav-contact')">
                            <a href="{{ url('/contact') }}" class="contains-sub-menu">Contact</a>
                        </li>
                    </ul>
                </nav>
                <div class="side-navigation-footer">
                    <ul class="social-list list-horizontal">
                        <li>
                            <a href="https://www.instagram.com/binar_alightingstudio/"><span class="icon-instagram small"></span></a>
                        </li>
                        <li>
                            <a href="https://www.facebook.com/binar.lighting"><span class="icon-facebook small"></span></a>
                        </li>
                        <li>
                            <a href="https://www.linkedin.com/company/binar-a-lighting-studio/"><span class="icon-linkedin small"></span></a>
                        </li>
                    </ul>
                    <p class="copyright no-margin-bottom">
                        &copy; 2022 BINAR a Lighting Studio.
                    </p>
                </div>
            </div>
        </div>
    </aside>
    <!-- Side Navigation Menu End -->

    <div class="wrapper reveal-side-navigation">
        <div class="wrapper-inner">
            <!-- Header -->
            <header class="header header-fixed header-fixed-on-mobile header-transparent background-linear" data-bkg-threshold="100">
                <div class="header-inner">
                    <div class="row nav-bar">
                        <div class="column width-12 nav-bar-inner">
                            <div class="logo">
                                <div class="logo-inner">
                                    <a href="landing-page.html"><img src="/assets/img/logo/logo_binar-colour.png" alt="BINAR a Lighting Studio Logo" /></a>
                                    <a href="landing-page.html"><img src="/assets/img/logo/logo_binar-white.png" alt="BINAR a Lighting Studio Logo" /></a>
                                </div>
                            </div>
                            <nav class="navigation nav-block secondary-navigation nav-right">
                                <ul>
                                    <li class="aux-navigation hide">
                                        <!-- Aux Navigation -->
                                        <a href="#" class="navigation-show side-nav-show nav-icon">
                                            <span class="icon-menu"></span>
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                            <nav class="navigation nav-block primary-navigation nav-right no-margin-right">
                                <ul>
                                    <li class="@yield('nav-landing')">
                                        <a href="{{ url('/') }}">Home</a>
                                    </li>
                                    <li class="@yield('nav-projects')">
                                        <a href="{{ url('/projects') }}">Projects</a>
                                    </li>
                                    <li class="@yield('nav-about') contains-mega-sub-menu">
                                        <a href="{{ url('/about') }}">About Us</a>
                                        <ul class="sub-menu">
                                            <li class="@yield('nav-philosophy')">
                                                <a href="{{ route('about_us') }}#philosophy">Philosophy</a>
                                            </li>
                                            <li class="@yield('nav-services')">
                                                <a href="{{ route('about_us') }}#services">Services</a>
                                            </li>
                                            <li class="@yield('nav-teams')">
                                                <a href="{{ route('about_us') }}#teams">Teams</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="@yield('nav-careers')">
                                        <a href="{{ url('/careers') }}">Careers</a>
                                    </li>
                                    <li class="@yield('nav-article')">
                                        <a href="{{ url('/article') }}">Article</a>
                                    </li>
                                    <li class="@yield('nav-contact') sub-menu-right">
                                        <a href="{{ url('/contact') }}">Contact</a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </header>
            <!-- Header End -->

            @yield('container')

            <!-- Footer -->
            <!-- Call to Action Section -->
            <div class="section-block replicable-content pt-60 pb-30 call-to-action-2 call-to-action-2-1 bkg-grey-ultralight background-cover">
                <div class="row">
                    <div class="column width-6 offset-3">
                        <h4 class="color-white">
                            Have a project that requires renovation or redesign? We'll be
                            happy to take a look at your project.
                        </h4>
                    </div>
                    <div class="column width-6 offset-3">
                        <a data-content="inline" data-toolbar="" data-networks="twitter;pinterest" data-modal-mode data-modal-width="800" data-lightbox-animation="fade" data-modal-animation="scaleOut" href="#signup-lightbox" class="lightbox-link button text-uppercase bkg-charcoal bkg-hover-theme color-white color-hover-white mb-30">Contact
                            Us</a>
                    </div>
                </div>
            </div>
            <!-- Call to Action Section End -->
            <footer class="footer">
                <div class="footer-bottom">
                    <div class="row">
                        <div class="column width-8">
                            <p class="copyright">
                                <strong>&copy; BINAR a Lighting Studio.</strong>
                                <a href="{{ url('/terms-condition') }}">Terms and Condition</a> &amp;
                                <a href="{{ url('/privacy-policy') }}">Privacy Policy</a>
                            </p>
                        </div>
                        <div class="column width-4">
                            <ul class="social-list list-horizontal">
                                <p class="copyright">Follow us on</p>
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                <li>
                                    <a href="https://www.instagram.com/binar_alightingstudio/"><span class="icon-instagram-with-circle medium"></span></a>
                                </li>
                                <li>
                                    <a href="https://www.linkedin.com/company/binar-a-lighting-studio/"><span class="icon-linkedin-with-circle medium"></span></a>
                                </li>
                                <li>
                                    <a href="https://www.facebook.com/binar.lighting"><span class="icon-facebook-with-circle medium"></span></a>
                                </li>
                                <li>
                                    <a href="https://id.pinterest.com/binarlightingconsultant/"><span class="icon-pinterest-with-circle medium"></span></a>
                                </li>
                                <li>
                                    <a href="https://www.youtube.com/watch?v=bIigCRnpIMU"><span class="icon-youtube-with-circle medium"></span></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </footer>
            <!-- Footer End -->
        </div>
    </div>

    <!-- Js -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="http://maps.googleapis.com/maps/api/js?v=3"></script>
    <script src="/assets/js/timber.master.min.js"></script>
</body>

</html>