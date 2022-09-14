@extends('layout.layout-project')
@section('title', 'Article | BINAR a Lighting Studio')
@section('nav-article', 'current')
@section('container')
<!-- Content -->
<div class="content clearfix">

    <!-- Intro Title Section 2 -->
    <div class="section-block intro-title-3 small">
        <div class="row">
            <div class="column width-12">
                <div class="title-container">
                    <div class="title-container-inner">
                        <h1 class="inline">Lighting 101</h1>
                        <ul class="breadcrumb">
                            <li>
                                <a href="index.html">Article</a>
                            </li>
                            <li>
                                Lighting 101
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Intro Title Section 2 End -->

    <!-- Content Inner -->
    <div class="section-block content-inner">
        <div class="blog-masonry grid-container fade-in-progressively" data-layout-mode="masonry" data-grid-ratio="1.5" data-animate-resize data-animate-resize-duration="0">
            <div class="row">
                <div class="column width-12">
                    <div class="row grid content-grid-3 clearfix">
                        <div class="grid-item grid-sizer">
                            <article class="post">
                                <div class="post-media">
                                    <div class="thumbnail img-scale-in" data-hover-easing="easeInOut" data-hover-speed="700" data-hover-bkg-color="#ffffff" data-hover-bkg-opacity="0.9">
                                        <a class="overlay-link" href="blog-single-post-sidebar-right.html">
                                            <img src="images/blog/grid/portrait-margins-2.jpg" alt="" />
                                            <span class="overlay-info">
                                                <span>
                                                    <span>
                                                        In Design
                                                    </span>
                                                </span>
                                            </span>
                                        </a>
                                    </div>
                                </div>
                                <div class="post-content with-background">
                                    <h2 class="post-title"><a href="blog-single-post-sidebar-right.html">Stay Creative at Home</a></h2>
                                    <div class="post-info">
                                        <span class="post-date">01 May 2020</span>
                                    </div>
                                    <p>BADA is a Bali based architecture studio. Their worked are focused on sustainable architecture based on locality of place and people. The project they work on are mostly in Bali and Lombok and some area overseas. They specialized in residential and hospitality projects.</p>
                                </div>
                            </article>
                        </div>
                        <div class="grid-item">
                            <article class="post">
                                <div class="post-media">
                                    <div class="thumbnail img-scale-in" data-hover-easing="easeInOut" data-hover-speed="700" data-hover-bkg-color="#ffffff" data-hover-bkg-opacity="0.9">
                                        <a class="overlay-link" href="blog-single-post-sidebar-right.html">
                                            <img src="images/blog/grid/landscape-margins-grid-3.jpg" alt="" />
                                            <span class="overlay-info">
                                                <span>
                                                    <span>
                                                        In Employee News
                                                    </span>
                                                </span>
                                            </span>
                                        </a>
                                    </div>
                                </div>
                                <div class="post-content with-background">
                                    <h2 class="post-title"><a href="blog-single-post-sidebar-right.html">Contrast Difference Feeling</a></h2>
                                    <div class="post-info">
                                        <span class="post-date">01 Jun 2020</span>
                                    </div>
                                    <p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam.</p>
                                </div>
                            </article>
                        </div>
                        <div class="grid-item">
                            <article class="post">
                                <div class="post-media">
                                    <div class="thumbnail img-scale-in" data-hover-easing="easeInOut" data-hover-speed="700" data-hover-bkg-color="#ffffff" data-hover-bkg-opacity="0.9">
                                        <a class="overlay-link" href="blog-single-post-sidebar-right.html">
                                            <img src="images/blog/grid/landscape-margins-grid-4.jpg" alt="" />
                                            <span class="overlay-info">
                                                <span>
                                                    <span>
                                                        In Art, Design
                                                    </span>
                                                </span>
                                            </span>
                                        </a>
                                    </div>
                                </div>
                                <div class="post-content with-background">
                                    <h2 class="post-title"><a href="blog-single-post-sidebar-right.html">Contrast Lighting</a></h2>
                                    <div class="post-info">
                                        <span class="post-date">01 Jun 2020</span>
                                    </div>
                                    <p>In the lighting world, there is one ‘strategy’ to fulfil aesthetics and at the same time provide the lighting needs is called a contrast lighting strategy. These contrast lighting can be divided into several types of ratios: 1. Dark & Light Ratio; 2. Brightness Ratio; ...</p>
                                </div>
                            </article>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Content Inner End -->

    <!-- Pagination Section 3 -->
    <div class="section-block pagination-3 no-padding-top">
        <div class="row">
            <div class="column width-12">
                <ul>
                    <li><a class="pagination-previous icon-left-open" href="#"><span class="icon-left-open-mini"></span></a></li>
                    <li><a class="current" href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">4</a></li>
                    <li><a class="pagination-next disabled" href="#"><span class="icon-right-open-mini"></span></a></li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Pagination Section 3 End -->

</div>
<!-- Content End -->
@endsection