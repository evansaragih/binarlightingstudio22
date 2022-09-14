@extends('layout.layout-project')
@section('title', 'Harris Hotel Batam | BINAR a Lighting Studio')
@section('nav-projects', 'current')
@section('container')
<!-- Content -->
<div class="content clearfix">
    <!-- About Intro -->
    <div class="section-block pt-70">
        <div class="row">
            <div class="column width-5">
                <h1 class="mb-50 title-medium">HARRIS HOTEL BATAM</h1>
            </div>
            <div class="column width-6 offset-1">
                <p class="mb-50">
                    Carefully combined materials and details in this prefunction
                    and ballroom, incorporating softly into the interior concept
                    to prioritize space utilization and function. The simple
                    accent on the walls and entrance provides luxurious and
                </p>
                <p class="mb-50">
                    The light up ballroom facilities is simple but complex, the
                    lighting design takes part in emphasizing the simple yet
                    exclusive impression of the area without compromising its
                    multipurpose function. It combines interior lighting levels
                    standard, subtle stunning brightness contrasts, and
                    accentuation in vertical illumination are the elaborate
                    lighting treatment for this sophisticated facility.
                </p>
            </div>
            <div class="column width-12">
                <hr class="mb-50" />
            </div>
            <div class="column width-4">
                <p class="project-attribute">
                    <span class="project-label">Location:</span><span class="project-value">Kep. Riau, Batam</span>
                </p>
            </div>
            <div class="column width-4">
                <p class="project-attribute">
                    <span class="project-label">Interior:</span><span class="project-value">Sony Sutanto</span>
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
<script src="/assets/js/portfolio/harrisHotelBatam.js"></script>
<script src="/assets/js/otherProjects.js"></script>
@endsection