@extends('layout.layout')
@section('title', 'Projects | BINAR a Lighting Studio')
@section('nav-projects', 'current')
@section('container')
<!-- Content -->
<div class="content clearfix">
    <!-- Intro Title Section 2 -->
    <div class="section-block intro-title-2">
        <div class="row">
            <div class="column width-12">
                <div class="title-container">
                    <div class="title-container-inner center">
                        <h1 class="inline weight-bold no-margin-bottom" style="text-shadow: 4px 4px 14px rgba(150, 150, 150, 1)">
                            Projects
                        </h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Intro Title Section 2 End -->

    <!-- Product Grid -->
    <div class="section-block grid-filter-menu center">
        <div class="row">
            <div class="column width-12">
                <ul>
                    <li><a class="active" href="#" data-filter="*">All</a></li>
                    <li><a href="#" data-filter=".design">Design</a></li>
                    <li><a href="#" data-filter=".identity">Identity</a></li>
                    <li><a href="#" data-filter=".photography">Photograhy</a></li>
                    <li>
                        <a href="#" data-filter=".application">Applications</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div id="product-grid" class="section-block grid-container products fade-in-progressively center no-padding-top" data-layout-mode="masonry" data-grid-ratio="1.5" data-animate-resize data-animate-resize-duration="0"></div>
    <!-- Product Grid End -->
</div>
<!-- Content End -->
<!-- JS -->
<script src="/assets/js/portfolio.js"></script>
@endsection