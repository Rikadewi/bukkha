<!DOCTYPE html PUBLIC 
"-//W3C//DTD XHTML 1.0 Strict//EN" "DTD/xhtml1-strict.dtd">
<html>
    <head>
    
        <title>@yield('title')</title>
        
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        @yield('meta-description')
        <meta property="og:title" content="Bukkha">
        <meta property="og:site_name" content="Bukkha">
        @yield(og-description)
        <meta property="og:type" content="business">
        <meta property="og:url" content="http://bukkha.com">
        <meta property="og:image" content="https://bukkha.com/img/logo/arrow-black.png">

        
        <link rel="icon" type="image/ico" href="../img/logo/arrow-black.png" />
        
        <!--Font-->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
        <!--Bootstrap-->
        <link rel="stylesheet" href="../css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <!--Style-->
        <link rel="stylesheet" type="text/css" href="../css/fullpage.css" />
        <link rel="stylesheet" type="text/css" href="../css/style.css">
    </head>
    <body>
        @yield('menu')
        <div id = "fullpage">
            @yield('body')
        </div>
        <!-- JQuery -->
        <script src="../js/jquery.min.js"></script>
        <!-- Script -->
        <script type="text/javascript" src="../js/fullpage.js"></script>
        @yield('script')
    </body>
</html>