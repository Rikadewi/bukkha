@extends('layout.app')

@section('menu')
<div id = "menu" class = "menu-portfolio black-background">
    <div class = "menu-back">
        <a href="/#portfolioSection">
            <img src="../img/icon/back-arrow-white.svg">
        </a>
    </div>
    <div class = "menu-logo">
        <a href = "/"><img id = "menu-img" src="../img/logo/logo2-white.png"></a>
    </div>
    <div class = "menu-filler"></div>
    <div><a href = "/#serviceSection">Service</a></div>
    <div><a class="current-menu" href = "/#portfolioSection">Portfolio</a></div>
    <div><a href = "/#valueSection">Our Value</a></div>
    <div><a href = "/#contactSection">Contact</a></div>
    <div class = "menu-filler-corner"></div>
</div>
@endsection

@section('body')
@yield('style')

<div id = "portfolio-page" class = "section fp-auto-height-responsive">
    <div class = "black-shape">
        <div class = "shape-content center">
            <h1>@yield('title-content')</h1>
            <h2>@yield('desc-content')</h2>
            <div class = "arrow">
                <a href="#detailPageSection"><i class="fas fa-angle-down"></i></a>
            </div>
        </div>
    </div>
    <div class = "slide">
        <div class = "background one">
            <div class = "insection"></div>
        </div>
    </div>
    <div class = "slide">
        <div class = "background two">
            <div class = "insection"></div>
        </div>
    </div>
    <div class = "slide">
        <div class = "background three">
            <div class = "insection"></div>
        </div>
    </div>
    <div class = "slide">
        <div class = "background four">
            <div class = "insection"></div>
        </div>
    </div>
</div>
<div id = "detail-page" class = "section gray-background">
    <div class = "paragraph">
        <div class="detail-filler">
            @yield('image')
        </div>
        <div class = "detail center">
            <div>
                <h1>@yield('title-content')</h1>
                <h2>@yield('content')</h2>
            </div>
        </div>
    </div>
</div>
@endsection

@section('script')
<script src="../js/scriptPortfolioPage.js"></script>
@endsection