@extends('layout.app')
@section('body')
<div id = "menu" class = " black-background">
    <div class = "menu-logo">
        <a href = "/"><img src="../img/logo/logo2-white.png"></a>
    </div>
    <div style = "flex: 8"></div>
</div>
<section id = "portfolio-page" class = "one">
    <div>
        <div class = "black-shape">
            <div class = "shape-content center">
                <h5>Normal House</h5>
                <h4>Contemporer</h4>
                <div class = "arrow">
                    <a href="#detail-page"><i class="fas fa-angle-down"></i></a>
                </div>
            </div>
        </div>
    </div>
</section>
<section id = "detail-page" class = "gray-background paragraph">
    <div></div>
    <div class = "detail center">
        <div>
            <h2>Normal House</h2>
            <h3>
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Accusamus animi cum architecto perspiciatis voluptas illum culpa nulla harum natus earum reprehenderit quo minus temporibus nobis fugit numquam, neque facilis est.
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem blanditiis sequi alias sint sapiente at quisquam labore impedit, amet vitae excepturi, quaerat voluptatum illum explicabo mollitia veniam beatae repudiandae deleniti?
            </h3>
        </div>
    </div>
</section>
@endsection