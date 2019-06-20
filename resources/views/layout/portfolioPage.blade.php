@extends('layout.app')

@section('menu')
<div id = "menu" class = "portfolio-menu black-background" style = "display: flex">
    <div>
        <a href = "/"><i class="fas fa-chevron-circle-left"></i></a>
    </div>
    <div class = "menu-logo" style = "display: block">
        <a href = "/"><img src="../img/logo/logo2-white.png"></a>
    </div>
    <div style = "flex: 7"></div>
</div>
@endsection

@section('body')
@yield('style')

<div id = "portfolio-page" class = "section fp-auto-height-responsive">
    <div class = "black-shape">
        <div class = "shape-content center">
            @yield('title-content')
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
        <div class="detail-filler"></div>
        <div class = "detail center">
            <div>
                @yield('content')
            </div>
        </div>
    </div>
</div>
@endsection

@section('script')
<script src="../js/scriptPortfolioPage.js"></script>
@endsection