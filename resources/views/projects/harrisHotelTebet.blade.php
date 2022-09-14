@extends('layout.layout-project')
@section('title', 'Harris Hotel Tebet | BINAR a Lighting Studio')
@section('nav-projects', 'current')
@section('container')
<!-- Content -->
<div class="content clearfix">
    <!-- About Intro -->
    <div class="section-block pt-70">
        <div class="row">
            <div class="column width-5">
                <h1 class="mb-50 title-medium">HARRIS HOTEL TEBET</h1>
            </div>
            <div class="column width-6 offset-1">
                <p class="mb-50">
                    We believe that hotel lobby design is the key to making a good
                    first impression. The Harris Tebet project has been
                    re-imagined with a new look of a fresh urban style. It is very
                    important to set the basics correctly because perfection is
                    achieved within the smallest of details such as supporting the
                    interior design element. Therefore, the lighting we offered
                    emphasizes the focal point and portrayal displayed by the
                    interior. This combination formed a meaningful lighting
                    harmonization which leaves a fresh and welcoming ambiance that
                    invites people to join together or be alone amongst others,
                    creating a sense of energy and belonging.
                </p>
                <p class="mb-50">
                    The reception area as the heart of the lobby is a great place
                    to display flair and finesse lighting and combine practicality
                    with prettiness. The bespoke lighting for this area is by
                    providing a subtle backdrop grazing lighting, added with
                    framing lights using narrow directional spot downlights.
                    Following that concept, the accent to the column is replicated
                    using a similar type of lighting. The overall concept is
                    refined by providing vertical lighting on the room barrier
                    which has combined nicely with the downlight’s arrangements
                    for the main lighting of the room.
                </p>
            </div>
            <div class="column width-12">
                <hr class="mb-50" />
            </div>
            <div class="column width-4">
                <p class="project-attribute">
                    <span class="project-label">Location:</span><span class="project-value">Tebet, Jakarta Selatan</span>
                </p>
            </div>
            <div class="column width-4">
                <p class="project-attribute">
                    <span class="project-label">Interior:</span><span class="project-value">Studio Satu</span>
                </p>
            </div>
            <div class="column width-4">
                <p class="project-attribute">
                    <span class="project-label">MEP:</span><span class="project-value">Studio Satu</span>
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
<script src="/assets/js/portfolio/harrisHotelTebet.js"></script>
<script src="/assets/js/otherProjects.js"></script>
@endsection