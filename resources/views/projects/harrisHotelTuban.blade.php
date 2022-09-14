@extends('layout.layout-project')
@section('title', 'Harris Hotel Tuban | BINAR a Lighting Studio')
@section('nav-projects', 'current')
@section('container')
<!-- Content -->
<div class="content clearfix">
    <!-- About Intro -->
    <div class="section-block pt-70">
        <div class="row">
            <div class="column width-5">
                <h1 class="mb-50 title-medium">HARRIS HOTEL TUBAN</h1>
            </div>
            <div class="column width-6 offset-1">
                <p class="mb-50">
                    Located nearby airport, this well-known chain hotel offered
                    practicality, hype and fun concept for its architecture
                    interior line. It displays boldness yet gently offset by
                    curves and natural color choices with some striking decorative
                    accents for its interior.
                </p>
                <p class="mb-50">
                    The color orange often appears in the interior as part of this
                    hotel's corporate identity. Capturing the essence of what
                    interior design offered, the lighting design here shows the
                    dynamism of the lighting by emphasizing the accents of
                    interior design, paired with the soft beam from interior’s
                    curve shape with indirect light within. Gives a bright
                    ambience but with a soft touch.
                </p>
            </div>
            <div class="column width-12">
                <hr class="mb-50" />
            </div>
            <div class="column width-4">
                <p class="project-attribute">
                    <span class="project-label">Location:</span><span class="project-value">Tuban, Bali</span>
                </p>
            </div>
            <div class="column width-4">
                <p class="project-attribute">
                    <span class="project-label">Interior:</span><span class="project-value">Julius Design Associate</span>
                </p>
            </div>
            <div class="column width-4">
                <p class="project-attribute">
                    <span class="project-label">MEP:</span><span class="project-value">Banyumas</span>
                </p>
            </div>
        </div>
    </div>
    <!-- About Intro End -->

    <!-- Portfolio Grid -->
    <div id="foto-project" class="section-block grid-container fade-in-progressively no-padding-top" data-layout-mode="masonry" data-grid-ratio="1" data-animate-filter-duration="700" data-set-dimensions data-animate-resize data-animate-resize-duration="0"></div>
    <!-- Portfolio Grid End -->

    <!-- Recent Slider -->
    <div class="section-block replicable-content pb-0 bkg-grey-ultralight">
        <div class="row">
            <div class="column width-4 offset-0 left">
                <h3 class="mb-50">Other Projects</h3>
            </div>
        </div>
    </div>
    <div id="other-projects" class="section-block recent-carousel products pt-0 bkg-grey-ultralight"></div>
    <!-- Recent Slider End -->
</div>
<!-- Content End -->
<!-- Js -->
<script src="/assets/js/portfolio/harrisHotelTuban.js"></script>
<script src="/assets/js/otherProjects.js"></script>
@endsection