<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <title>Bukkha</title>
        <link rel="icon" type="image/ico" href="../img/logo/arrow.png" />
        
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