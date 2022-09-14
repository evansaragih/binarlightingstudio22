@extends('layout.layout-project')
@section('title', 'Mixed Use Area Lampung | BINAR a Lighting Studio')
@section('nav-projects', 'current')
@section('container')
<!-- Content -->
<div class="content clearfix">
    <!-- About Intro -->
    <div class="section-block pt-70">
        <div class="row">
            <div class="column width-5">
                <h1 class="mb-50 title-medium">MIXED USE AREA LAMPUNG</h1>
            </div>
            <div class="column width-6 offset-1">
                <p class="mb-50">
                    Mixed-Use Area Lampung Project is one of our projects, located
                    in Bandar Lampung, worked together with a contractor from PT
                    Hasta KARYA Nusaphala. We experimented with various lighting
                    concepts to attain the magnificent, formal, & warm lighting
                    design of a mixed area/co-working/leisure theme. The final
                    design is achieved by infusing different modern & rigid
                    designs into the big tropical theme, creating a soft contrast
                    for each different room.
                </p>
            </div>
            <div class="column width-12">
                <hr class="mb-50" />
            </div>
            <div class="column width-4">
                <p class="project-attribute">
                    <span class="project-label">Location:</span><span class="project-value">Bandar Lampung</span>
                </p>
            </div>
            <div class="column width-4">
                <p class="project-attribute">
                    <span class="project-label">Architect:</span><span class="project-value">Putri Bali Design</span>
                </p>
            </div>
            <div class="column width-4">
                <p class="project-attribute">
                    <span class="project-label">Interior:</span><span class="project-value">Putri Bali Design</span>
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
<script src="/assets/js/portfolio/mixedUseAreaLampung.js"></script>
<script src="/assets/js/otherProjects.js"></script>
@endsection