@extends('layout.layout-project')
@section('title', 'Hooten Residence | BINAR a Lighting Studio')
@section('nav-projects', 'current')
@section('container')
<!-- Content -->
<div class="content clearfix">
    <!-- About Intro -->
    <div class="section-block pt-70">
        <div class="row">
            <div class="column width-5">
                <h1 class="mb-50 title-medium">Hooten Residence</h1>
            </div>
            <div class="column width-6 offset-1">
                <p class="mb-50">
                    Located just off the riverbank overlooking the lush greenery
                    of the paddy fields, a white modern modest building stands.
                    Combining nature using lighting design was planned to enhance
                    the beauty of the architectural building and its surroundings.
                    Therefore, The Bali Lighting Consultant complimented the
                    beauty and its environment with warmed dim lighting in several
                    key points areas. These allowed residents to enjoy the
                    atmosphere of their surrounding whilst soaking up the natural
                    vibe.
                </p>
                <p class="mb-50">
                    The Bali Lighting Consultant, the goal is to maximize the
                    potential of the lighting fixture to gain its extensive
                    function. The team accomplished this by using street lights as
                    a form of task lighting to create shadows for an artistic
                    visualization ambience at night. The pool itself has become a
                    medium for beautification because it mirrors the building
                    lighting at night which elevates the overall beauty and mood.
                </p>
            </div>
            <div class="column width-12">
                <hr class="mb-50" />
            </div>
            <div class="column width-4">
                <p class="project-attribute">
                    <span class="project-label">Location:</span><span class="project-value">Ubud, Bali</span>
                </p>
            </div>
            <div class="column width-4">
                <p class="project-attribute">
                    <span class="project-label">Interior:</span><span class="project-value">SBO</span>
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
<script src="/assets/js/portfolio/hootenResidence.js"></script>
<script src="/assets/js/otherProjects.js"></script>
@endsection