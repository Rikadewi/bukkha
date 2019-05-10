@extends('layout.app')
@section('body')
<section id = "home">
    <div id = "menu">
        <div class = "menu-logo">
            <img src="img/logo/logo2-white.png">
        </div>
        <div>Service</div>
        <div>Portfolio</div>
        <div>Our Value</div>
        <div>Contact</div>
    </div>
    <div id = "tagline">
        <div>
            <img src = "img/logo/arrow-white.png">
        </div>
        <div>
            Rediscover Honest
        </div>
    </div>
</section>

<section id = "service" class = "homepage">
    <div class = "homepage-title">
        <img src = "img/logo/arrow-black.png"> SERVICE
    </div>
    <div class = "center">
        <h5>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Id alias provident ipsa quibusdam aspernatur. Laudantium nihil voluptates ratione cupiditate sint debitis reprehenderit nam laboriosam. Nam alias vero soluta dignissimos recusandae! 
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magnam necessitatibus, eum similique laborum impedit cupiditate? Blanditiis aut magnam dolor nemo, autem fuga ullam, harum neque repellendus, quis veniam odit dignissimos.
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis a porro repudiandae dolore odio sint facere mollitia explicabo saepe tenetur sed officia quibusdam, amet dignissimos quos eos cumque corrupti! Necessitatibus.
            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Laboriosam natus totam nobis dignissimos voluptas qui repellat eius laudantium ea in ad incidunt distinctio, doloribus velit nesciunt, consequatur soluta iure necessitatibus!
        </h5>  
    </div>
</section>

<section id = "portfolio" class = "homepage">
    <div class = "homepage-title">
        <img src = "img/logo/arrow-black.png"> PORTFOLIO
    </div>
    <div class = "homepage-paragraph center">
        <a href = "/portfolio/1">
            <div>
                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                <img src = "img/house/1/front.jpg">
            </div>
        </a>
        <a href = "/portfolio/1">
            <div>
                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                <img src = "img/house/2/front.jpg">
            </div>
        </a>
        <a href = "/portfolio/1">
            <div>
                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                <img src = "img/house/3/front.jpg">
            </div>
        </a>
    </div>
</section>

<section id = "value" class = "homepage">
    <div class = "homepage-title">
        <img src = "img/logo/arrow-black.png"> OUR VALUE
    </div>
    <div class = "homepage-paragraph">
        <div>
            Lorem ipsum dolor sit amet consectetur adipisicing elit.
        </div>
        <div>
            Lorem ipsum dolor sit amet consectetur adipisicing elit.
        </div>
        <div>
            Lorem ipsum dolor sit amet consectetur adipisicing elit.
        </div>
    </div>
</section>

<section id = "contact"  class = "homepage">
    <div class = "homepage-title">
        <img src = "img/logo/arrow-black.png"> CONTACT
    </div>
    <div class = "homepage-paragraph">
        Email: hezky@bukkha.com
        <br>Phone: +62812 8591 1718
    </div>
</section>
@endsection