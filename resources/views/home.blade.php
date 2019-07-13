@extends('layout.app')

@section('title')
Rancang Bangun | Arsitek Rumah | Bukkha
@endsection
@section('meta-description')
<meta name="description" 
content="Bukkha adalah perusahaan rancang bangun yang mengedepankan kenyamanan client, ergonomis, dan inovasi bangunan." data-rdm="true">
@endsection

@section('menu')
<div id = "menu" class = "black-background">
    <div class = "menu-filler-corner"></div>
    <div class = "menu-logo">
        <a href = "#homeSection"><img id = "menu-img" src="../img/logo/logo2-black.png"></a>
    </div>
    <div class = "menu-filler"></div>
    <div><a class="menu-service" href = "#serviceSection">Service</a></div>
    <div><a class="menu-portfolio" href = "#portfolioSection">Portfolio</a></div>
    <div><a class="menu-value" href = "#valueSection">Our Value</a></div>
    <div><a class="menu-contact" href = "#contactSection">Contact</a></div>
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
<div id = "home" class = "center black-background section fp-auto-height-responsive" >
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
        <div class = "background first-slide"></div>
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
            <img src = "img/logo/arrow-black.svg"> SERVICE
        </div>
        <div class="typewriter">
            <h2>From a humble abode until the highest skyscrapers, we beileve it should feel just like a bukkha. A home.</h2>
        </div>
        <div class="paragraph center">
            <div>
                <div class="title">
                    <h1>Design</h1>
                </div>
                <div>
                    <h2>We design your building based on the concept you want, develop it with creative and innovative ideas,
                    and we will provide you with every detail you need to build it.  </h2>
                </div>
            </div>
            <div>
                <div class="title">
                    <h1>Construction</h1>
                </div>
                <div>
                    <h2>We build your home, office, or any other building type with the best method possible. </h2>
                </div>
            </div>
            <div>
                <div class="title">
                    <h1>Maintenance</h1>
                </div>
                <div>
                    <h2>We guarantee the service of helping you with your building's maintenance.</h2>
                </div>
            </div>

        </div>
    </div>
</div>

<div id = "portfolio" class = "black-background section">
    <div class = "center">
        <div class = "homepage-title">
            <img src = "img/logo/arrow-white.png"> PORTFOLIO
        </div>
        <div class = "paragraph">
            <div class="center">
                <div class = "content center">
                    <div class="center">
                        <h1>Dou House</h1>
                        <h3>Modern Oriental Style</h3>
                    </div>
                    <a href="/portfolio/1">
                        <div class="button-portfolio">
                            Learn More
                        </div>
                    </a>
                </div>
                <img src = "img/house/1/square.jpg">
            </div>
            <div class="center">
                <div class = "content center">
                    <div class="center">
                        <h1>Overflow House</h1>
                        <h3>Modern Tropical Style</h3>
                    </div>
                    <a href = "/portfolio/2">
                        <div class="button-portfolio">
                            Learn More
                        </div>
                    </a>
                </div>
                <img src = "img/house/2/square.jpg">
            </div>
            <div class="center">
                <div class = "content center">
                    <div class="center">
                        <h1>Villa Trembesi</h1>
                        <h3>Contemporary Javanese Style</h3>
                    </div>
                    <a href = "/portfolio/3">
                        <div class="button-portfolio">
                            Learn More
                        </div>
                    </a>
                </div>
                <img src = "img/house/3/square.jpg">
            </div>
        </div>
    </div>
</div>

<div id = "value" class = "section">
    <div class = "center">
        <div id = "overflown-homepage-title" class = "homepage-title">
            <img src = "img/logo/arrow-black.svg"> OUR VALUE
        </div>
        <div class = "paragraph">
            <div class = "value-image center">
                <img src = "img/value/house.png">
            </div>
            <div class = "values">
                <div>
                    <div class="center">
                        <h1>Hassle Free</h1>
                        <h2>Throughout the process of realizing your dream building from legal issues until maintenance, 
                        we will offer our holistic service for you.</h2>
                    </div>
                    <div class="center">
                        <img src = "img/value/1.png">
                    </div>
                </div>
                <div>
                    <div class="center">
                        <h1>Good Design</h1>
                        <h2>Our design based on energy efficiency and sustainable approach, with innovative thinking.</h2>
                    </div>
                    <div class="center">
                        <img src = "img/value/2.png">
                    </div>
                </div>
                <div>
                    <div class="center">
                        <h1>Challenge the status quo</h1>
                        <h2>We learn for preceding buildings, but we will offer a broader ranges of design approaches and 
                        ideas for you to explore so that your building will be custom-made just for you.</h2>
                    </div>
                    <div class="center">
                        <img src = "img/value/3.svg">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div id = "contact"  class = "black-background section">
    <div class = "center wrapper">
        <div class="center">
            <div>
                <img src = "img/logo/logo3-white.png">
                <p>Contact Us</p>
            </div>
            <div class = "data">
                <a href="mailto:hello@bukkha.com" target="_blank">
                    <div>
                        <h1><i class="fas fa-envelope"></i>hello@bukkha.com</h1>
                    </div>
                </a>
                <a href="https://wa.me/+6282211511517" target="_blank">
                    <div>
                        <h1><i class="fas fa-phone"></i>+62 822 115 115 17</h1>
                    </div>
                </a>
                <a href="https://www.facebook.com/bukkha.id/" target="_blank">
                    <div>
                        <h1><i class="fab fa-facebook-square"></i>@bukkha.id</h1>
                    </div>
                </a>
                <a href="https://www.instagram.com/bukkha/" target="_blank">
                    <div>
                        <h1><i class="fab fa-instagram"></i>bukkha</h1>
                    </div>
                </a>
            </div>
        </div>
        <div class = "copyright">
            &copy Bukkha 2019
        </div>
    </div>
</div>
@endsection

@section('script')
<script src="../js/script.js"></script>
@endsection