@extends('layout.layout-project')
@section('title', 'Villa Ali Agung | BINAR a Lighting Studio')
@section('nav-projects', 'current')
@section('container')
<!-- Content -->
<div class="content clearfix">
    <!-- About Intro -->
    <div class="section-block pt-70">
        <div class="row">
            <div class="column width-5">
                <h1 class="mb-50 title-medium">VILLA ALI AGUNG</h1>
            </div>
            <div class="column width-6 offset-1">
                <p class="mb-50">
                    This villa is located in Labuan sait with the beautifull city
                    view in the uphill. We designed a lighting for landscape in
                    this villa in simplicity but still with intimate ambiances.
                    Landscape is one of critical area in Bali’s architectural ,
                    this is the reason of how important the landscape design is to
                    go along with lighting. In order to have the right ambiance
                    needed, the specific lighting point and trees point that need
                    to highlight are critical in lighting design landscape.
                </p>
            </div>
            <div class="column width-12">
                <hr class="mb-50" />
            </div>
            <div class="column width-4">
                <p class="project-attribute">
                    <span class="project-label">Location:</span><span class="project-value">Labuan Sait, Bali</span>
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
<script src="/assets/js/portfolio/villaAliAgung.js"></script>
<script src="/assets/js/otherProjects.js"></script>
@endsection