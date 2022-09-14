@extends('layout.layout-project')
@section('title', 'NOAA Social Dining | BINAR a Lighting Studio')
@section('nav-projects', 'current')
@section('container')
<!-- Content -->
<div class="content clearfix">
    <!-- About Intro -->
    <div class="section-block pt-70">
        <div class="row">
            <div class="column width-5">
                <h1 class="mb-50 title-medium">NOAA SOCIAL DINING</h1>
            </div>
            <div class="column width-6 offset-1">
                <p class="mb-50">
                    Located on the busy street of Seminyak, NOAA has been designed
                    to become a stand apart restaurant with its state-of-the-art
                    architecture that highlights the transparent roof, graceful
                    interior appearance, and inviting pedestrian’s borders. The
                    solid roof design with a light grazing wash is meant to be the
                    façade crown lighting that attracts attention and marking the
                    identity of the building. Meanwhile, the starlight on the
                    glass roof is to diminish the border between the terrace area
                    with the majestic night sky, increasing the charm of the roof
                    with its façade appearance.
                </p>
                <p class="mb-50">
                    By taking advantage of the transparent façade, the interior of
                    this building easily stands out with an overall harmony of
                    colour-changing lighting for dynamic mood purposes or by the
                    theme of events, as a compliment to the contrast task light
                    ambience. Lastly, the finishing touches of the sidewalk border
                    and its illumination effect for pedestrian level is the cherry
                    on top for the overall façade lighting ambiance.
                </p>
            </div>
            <div class="column width-12">
                <hr class="mb-50" />
            </div>
            <div class="column width-4">
                <p class="project-attribute">
                    <span class="project-label">Location:</span><span class="project-value">Petitenget, Bali</span>
                </p>
            </div>
            <div class="column width-4">
                <p class="project-attribute">
                    <span class="project-label">Architect:</span><span class="project-value">Arkana</span>
                </p>
            </div>
            <div class="column width-4">
                <p class="project-attribute">
                    <span class="project-label">Interior:</span><span class="project-value">Arkana</span>
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
<script src="/assets/js/portfolio/noaaSocialDining.js"></script>
<script src="/assets/js/otherProjects.js"></script>
@endsection