@extends('layout.app')
@section('title')
Rancang Bangun | Arsitek Rumah | Bukkha
@endsection
@section('meta-description')
<meta name="description" content="Bukkha adalah perusahaan rancang bangun yang mengedepankan kenyamanan client, ergonomis, dan inovasi bangunan." data-rdm="true">
@endsection
@section('og-description')
<meta property="og:desription" content="Bukkha adalah perusahaan rancang bangun yang mengedepankan kenyamanan client, ergonomis, dan inovasi bangunan.">@endsection
@endsection

@section('menu')
<div id = "menu" class = " black-background" style = "display: flex">
<div style = "flex: 1"></div>
    <div class = "menu-logo" style = "display: block">
        <a href = "/"><img src="../img/logo/logo2-white.png"></a>
    </div>
    <div style = "flex: 7"></div>
</div>
@endsection

@section('body')
@yield('style')

<div id = "portfolio-page" class = "section">
    <div class = "black-shape">
        <div class = "shape-content center">
            @yield('title')
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
        <div></div>
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