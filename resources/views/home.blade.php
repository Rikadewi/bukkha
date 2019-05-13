@extends('layout.app')
@section('body')
<div id = "menu" class = " black-background">
    <div class = "menu-logo">
        <a href = "#home"><img id = "menu-img" src="../img/logo/logo2-white.png"></a>
    </div>
    <div style = "flex: 4"></div>
    <div><a href = "#service">Service</a></div>
    <div><a href = "#portfolio">Portfolio</a></div>
    <div><a href = "#value">Our Value</a></div>
    <div><a href = "#contact">Contact</a></div>
</div>

<section id = "home" class = "black-background">
    <div id = "tagline" class = "center">
        <div>
            <img src = "img/logo/logo-white.png">
        </div>
        <div class = "none">
            Redefining Living
        </div>
    </div>
    <div class = "arrow">
        <a href="#service"><i class="fas fa-angle-down"></i></a>
    </div>
</section>

<section id = "service" class = "center">
    <div class = "center">
        <div class = "homepage-title">
            <img src = "img/logo/arrow-black.png"> SERVICE
        </div>
        <div class = "headline">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Id alias provident ipsa quibusdam aspernatur. Laudantium nihil voluptates ratione cupiditate sint debitis reprehenderit nam laboriosam. Nam alias vero soluta dignissimos recusandae!     
        </div>
        <div class = "paragraph">
            <div>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Id alias provident ipsa quibusdam aspernatur. Laudantium nihil voluptates ratione cupiditate sint debitis reprehenderit nam laboriosam. Nam alias vero soluta dignissimos recusandae! 
            </div>
            <div>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis a porro repudiandae dolore odio sint facere mollitia explicabo saepe tenetur sed officia quibusdam, amet dignissimos quos eos cumque corrupti! Necessitatibus.
            </div>
        </div>
    </div>
</section>

<section id = "portfolio" class = "center gray-background">
    <div class = "homepage-title">
        <img src = "img/logo/arrow-white.png"> PORTFOLIO
    </div>
    <div class = "paragraph">
        <div>
            <a href = "/portfolio/1">
                <div class = "content center">
                    <h5>Normal house</h5>
                    <h4>Contemporer</h4>
                </div>
                <img src = "img/house/1/square.jpg">
            </a>
        </div>
        <div>
            <a href = "/portfolio/2">
                <div class = "content center">
                    <h5>Medium house</h5>
                    <h4>Renaissance</h4>
                </div>
                <img src = "img/house/2/square.jpg">
            </a>
        </div>
        <div>
            <a href = "/portfolio/3">
                <div class = "content center">
                    <h5>Epic house</h5>
                    <h4>Industry 4.0</h4>
                </div>
                <img src = "img/house/3/square.jpg">
            </a>
        </div>
    </div>
</section>

<section id = "value" class = "center">
    <div class = "homepage-title">
        <img src = "img/logo/arrow-black.png"> OUR VALUE
    </div>
    <div class = "paragraph">
        <div class = "value-image center">
            <img src = "img/house/sketch.jpg">
        </div>
        <div class = "values">
            <div>
                <img src = "img/value/1.png">
                <br>Execellent Goal
            </div>
            <div>
                <img src = "img/value/2.png">
                <br>Extraoradinary Idea
            </div>
            <div>
                <img src = "img/value/3.png">
                <br>Extra Icon
            </div>
        </div>
    </div>
</section>

<section id = "contact"  class = "black-background center">
    <div>
        <img src = "img/logo/logo-white.png">
    </div>
    <div class = "data">
        <div>
            <i class="fas fa-envelope"></i>hezky@bukkha.com
        </div>
        <div>
            <i class="fas fa-phone"></i>+62 812 8591 1718
        </div>
    </div>
    <div class = "footer">
        &copy Bukkha 2019
    </div>
</section>
@endsection