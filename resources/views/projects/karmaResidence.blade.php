@extends('layout.layout-project')
@section('title', 'Karma Residence | BINAR a Lighting Studio')
@section('nav-projects', 'current')
@section('container')
<!-- Content -->
<div class="content clearfix">
    <!-- About Intro -->
    <div class="section-block pt-70">
        <div class="row">
            <div class="column width-5">
                <h1 class="mb-50 title-medium">KARMA RESIDENCE</h1>
            </div>
            <div class="column width-6 offset-1">
                <p class="mb-50">
                    The purpose of KARMA’s renovation is to give a fresh new
                    ambiance for the guests. The biggest challange of renovation
                    project was we need to maintain some existing site condition
                    and playing smarter with our design concept.
                </p>
                <p class="mb-50">
                    The color changing lighting design applied on the main
                    pavillion hence the owner can adjust the lighting based on the
                    mood. The surrounding area supported the ambiance in more warm
                    tone with some simple accentuation on the building and
                    interior feature. Creates a harmonious orchestra of light,
                    art, and architecture.
                </p>
            </div>
            <div class="column width-12">
                <hr class="mb-50" />
            </div>
            <div class="column width-4">
                <p class="project-attribute">
                    <span class="project-label">Location:</span><span class="project-value">Jimbaran, Bali</span>
                </p>
            </div>
            <div class="column width-4">
                <p class="project-attribute">
                    <span class="project-label">Interior:</span><span class="project-value">RIEM Studio</span>
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
<script src="/assets/js/portfolio/karmaResidence.js"></script>
<script src="/assets/js/otherProjects.js"></script>
@endsection