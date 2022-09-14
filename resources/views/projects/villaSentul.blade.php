@extends('layout.layout-project')
@section('title', 'Villa Sentul | BINAR a Lighting Studio')
@section('nav-projects', 'current')
@section('container')
<!-- Content -->
<div class="content clearfix">
    <!-- About Intro -->
    <div class="section-block pt-70">
        <div class="row">
            <div class="column width-5">
                <h1 class="mb-50 title-medium">VILLA SENTUL</h1>
            </div>
            <div class="column width-6 offset-1">
                <p class="mb-50">
                    An inspiring story behind this personally and emotionally
                    designed residential facility, which the house is a token of
                    unconditional love for the beloved wife. A simple but creative
                    architectural building, stands out amidst landscape and after
                    sequence, a serene dwellings. The perfect cozy place called
                    home. Supporting the concept itself, the lighting creates a
                    sequence of accented entrances and dim light to get around and
                    enter the building. The honesty of the lighting can be seen in
                    the exterior and interior using the appropriate lighting
                    arrangement, it is not overly done, it is not too remote, it
                    is just enough.
                </p>
            </div>
            <div class="column width-12">
                <hr class="mb-50" />
            </div>
            <div class="column width-4">
                <p class="project-attribute">
                    <span class="project-label">Location:</span><span class="project-value">Sentul, Bogor</span>
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
<script src="/assets/js/portfolio/villaSentul.js"></script>
<script src="/assets/js/otherProjects.js"></script>
@endsection