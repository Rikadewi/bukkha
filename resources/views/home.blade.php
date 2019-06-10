@extends('layout.app')
@section('title')
Bukkha
@endsection

@section('menu')
<div id = "menu" class = "black-background">
    <div class = "menu-filler-corner"></div>
    <div class = "menu-logo">
        <a href = "#homeSection"><img id = "menu-img" src="../img/logo/logo2-black.png"></a>
    </div>
    <div class = "menu-filler"></div>
    <div><a href = "#serviceSection">Service</a></div>
    <div><a href = "#portfolioSection">Portfolio</a></div>
    <div><a href = "#valueSection">Our Value</a></div>
    <div><a href = "#contactSection">Contact</a></div>
    <div class = "menu-filler-corner"></div>
    <!-- <div class = "menu-burger" data-toggle = "collapse" data-target = "#collapsed">
        <img src = "../img/icon/burger-black.png">
    </div> -->
</div>
<!-- <div id = "collapsed" class = "collapse">
    <div class = "center" data-toggle = "collapse" data-target = "#collapsed"><a href = "#serviceSection">Service</a></div>
    <div class = "center" data-toggle = "collapse" data-target = "#collapsed"><a href = "#portfolioSection">Portfolio</a></div>
    <div class = "center" data-toggle = "collapse" data-target = "#collapsed"><a href = "#valueSection">Our Value</a></div>
    <div class = "center" data-toggle = "collapse" data-target = "#collapsed"><a href = "#contactSection">Contact</a></div>
</div> -->
@endsection

@section('body')
<div id = "home" class = "center black-background section" >
    <div class = "static">
        <div id = "tagline" class = "center">
            <div>
                <img src = "img/logo/logo-white.png">
            </div>
            <div class = "none">
                Redefining Living
            </div>
        </div>
        <div class = "arrow none">
            <a href="#serviceSection"><i class="fas fa-angle-down"></i></a>
        </div>
    </div>
    <div class = "slide">
    </div>
    <div class = "slide">
        <div class = "background" style = "background-image: url('../img/house/1/front.jpg');">
            <div class = "insection"></div>
        </div>
    </div>
    <div class = "slide">
        <div class = "background" style = "background-image: url('../img/house/2/front.jpg');">
            <div class = "insection"></div>
        </div>
    </div>
    <div class = "slide">
        <div class = "background" style = "background-image: url('../img/house/3/front.jpg');">
            <div class = "insection"></div>
        </div>
    </div>
</div>

<div id = "service" class = "center section">
    <div class = "center">
        <div class = "homepage-title">
            <img src = "img/logo/arrow-black.png"> SERVICE
        </div>
        <!-- <div class = "headline">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Id alias provident ipsa quibusdam aspernatur. Laudantium nihil voluptates ratione cupiditate sint debitis reprehenderit nam laboriosam. Nam alias vero soluta dignissimos recusandae!     
        </div>
        <div class = "paragraph">
            <div>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Id alias provident ipsa quibusdam aspernatur. Laudantium nihil voluptates ratione cupiditate sint debitis reprehenderit nam laboriosam. Nam alias vero soluta dignissimos recusandae! 
            </div>
            <div>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis a porro repudiandae dolore odio sint facere mollitia explicabo saepe tenetur sed officia quibusdam, amet dignissimos quos eos cumque corrupti! Necessitatibus.
            </div>
        </div> -->
        <i class="fa fa-quote-right"></i>
        <div class="typewriter">
            <h1>We help you design, construct, and maintain your dream.</h1>
        </div>
        <div class="paragraph center">
            <div>
                <div class="title">
                    Design
                </div>
                <div class="description">
                    We design your building based on the concept you want, develop it with creative and innovative ideas, and we will provide you with every detail you need to build it.
                </div>
            </div>
            <div>
                <div class="title">
                    Construction
                </div>
                <div class="description">
                    We build your home, office, or any other building type with the best method possible. 
                </div>
            </div>
            <div>
                <div class="title">
                    Maintenance
                </div>
                <div class="description">
                    Your building maintenance is guaranteed under our responsibility.
                </div>
            </div>

        </div>
    </div>
</div>

<div id = "portfolio" class = "gray-background section">
    <div class = "center">
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
    </div>
</div>

<div id = "value" class = "section">
    <div class = "center">
        <div id = "overflown-homepage-title" class = "homepage-title">
            <img src = "img/logo/arrow-black.png"> OUR VALUE
        </div>
        <div class = "paragraph">
            <div class = "value-image center">
                <img src = "img/value/house.png">
            </div>
            <div class = "values">
                <div>
                    <img src = "img/value/1.png">
                    <br>Hassle Free
                    <h2>From legal issues to maintenance, we help you to do it</h2>
                </div>
                <div>
                    <img src = "img/value/2.png">
                    <br>Good Design
                    <h2>Our design based on energy efficiency and sustainable approach, with innovative thinking</h2>
                </div>
                <div>
                    <img src = "img/value/3.png">
                    <br>Challenge the status quo
                    <h2>never limit how design could be approached, find new ways to build and much more</h2>
                </div>
            </div>
        </div>
    </div>
</div>

<div id = "contact"  class = "black-background section">
    <div class = "center">
        <div>
            <img src = "img/logo/logo-white.png">
        </div>
        <div class = "data">
            <a href="mailto:hello@bukkha.com">
                <div>
                    <i class="fas fa-envelope"></i>hello@bukkha.com
                </div>
            </a>
            <a href="tel:+6282211511517">
                <div>
                    <i class="fas fa-phone"></i>+62 822 115 115 17
                </div>
            </a>
        </div>
        <div class = "footer">
            &copy Bukkha 2019
        </div>
    </div>
</div>
@endsection

@section('script')
<script src="../js/script.js"></script>
@endsection