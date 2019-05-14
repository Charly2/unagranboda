<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->

<head>
    <meta charset="utf-8">
    <link rel="shortcut icon" type="image/x-icon" href="./favicon.ico">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?=$_TITULO?></title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/flexslider.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/responsive.css">
    <link rel="stylesheet" href="css/animate.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
</head>

<body>

<style>
    .carousel-inner .item:before{
        content: "";
        position: absolute;
        width: 100%;
        height: 100%;
        left: 0;
        top: 0;
        background: rgba(255,255,255,.5);
    }

    #header{
        width: 100%;padding: 0 3%; margin: 0;
        transition: all .2s;
    }
    #header.fixed{
        box-shadow: 2px 2px 6px;
        transition: all .2s;
    }
</style>
<!-- Header Section -->
<section class="tophead" role="tophead">
    <!-- Navigation Section -->
    <header id="header" style="">
        <div class="header-content clearfix"> <a class="logo" href="index"><img style="    width: 130px;" src="img/logo-1.png" class="img-responsive" alt=""></a>
            <nav class="navigation" style="line-height: 3" role="navigation">
                <ul class="primary-nav">
                    <li><a href="index">Inicio</a></li>
                    <li><a href="productos">Productos</a></li>
                    <li><a href="#contact">Contacto</a></li>

                </ul>
            </nav>
            <a href="#" class="nav-toggle">Menu<span></span></a> </div>
    </header>
    <!-- Navigation Section -->
</section>