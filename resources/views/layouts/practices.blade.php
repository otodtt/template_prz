<!DOCTYPE html>
<html lang="bg">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home Property | Blog Single</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">





    <!-- Font awesome -->

    {{--<link href="css/font-awesome.css" rel="stylesheet">--}}
    {!!Html::style("css/font-awesome.css" )!!}
    <!-- Bootstrap -->
    {{--<link href="css/bootstrap.css" rel="stylesheet">--}}
    {!!Html::style("css/bootstrap.css" )!!}
    <!-- slick slider -->
    {{--<link rel="stylesheet" type="text/css" href="css/slick.css">--}}
    {!!Html::style("css/slick.css" )!!}
    <!-- price picker slider -->
    {{--<link rel="stylesheet" type="text/css" href="css/nouislider.css">--}}
    {!!Html::style("css/nouislider.css" )!!}

    <!-- Fancybox slider -->

    {{--<link rel="stylesheet" href="css/jquery.fancybox.css" type="text/css" media="screen"/>--}}
    {{--<link rel="stylesheet" type="text/css" href="fancybox/source/jquery.fancybox.css?v=2.1.5" media="screen"/>--}}
    {!!Html::style("css/jquery.fancybox.css" )!!}
    {!!Html::style("fancybox/source/jquery.fancybox.css?v=2.1.5" )!!}
    <!-- Theme color -->
    {{--<link id="switcher" href="css/theme-color/green-theme.css" rel="stylesheet">--}}
    {!!Html::style("css/theme-color/green-theme.css" )!!}


    <!-- Main style sheet -->
    {{--<link href="css/style.css" rel="stylesheet">--}}
    {!!Html::style("css/style.css" )!!}

    <!-- Google Font -->
    <link href='https://fonts.googleapis.com/css?family=Vollkorn' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->


    <!-- side menu -->
    <!--<link rel="stylesheet" type="text/css" href="css/side-menu.css">-->
    <!--<link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">-->

    <!--<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">-->
    {{--<link type="text/css" href="styles/template.css" rel="stylesheet"/>--}}
    {!!Html::style("styles/template.css" )!!}


    <!-- test-->
    {{--<link type="text/css" href="styles/metisMenu.min.css" rel="stylesheet"/>--}}
    {!!Html::style("styles/metisMenu.min.css" )!!}
    {{--<link type="text/css" href="styles/sb-admin-2.css" rel="stylesheet"/>--}}
    {!!Html::style("styles/sb-admin-2.css" )!!}
    {{--<link type="text/css" href="styles/side-bar-green.css" rel="stylesheet"/>--}}
    {!!Html::style("styles/side-bar-green.css" )!!}
    <!-- test-->

</head>
<body>

    <!-- Pre Loader -->
    <div id="aa-preloader-area">
        <div class="pulse"></div>
    </div>
    <!-- SCROLL TOP BUTTON -->
    <a class="scrollToTop" href="#"><i class="fa fa-angle-double-up"></i></a>
    <!-- END SCROLL TOP BUTTON -->

    <!-- Start header section -->
    <header id="aa-header" >
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="aa-header-area">
                        <div class="row">
                            <div class="col-md-6 col-sm-6 col-xs-6">
                                <div class="aa-header-left">
                                    <div class="aa-telephone-no">
                                        <!--<span class="fa fa-phone"></span> 1-900-523-3564-->
                                    </div>
                                    <div class="aa-email hidden-xs">
                                        <span class="fa fa-envelope-o"></span> info@markups.com
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- End header section -->

    <!-- Start menu section -->
    <section id="aa-menu-area" >
        <nav class="navbar navbar-default main-navbar">
            <div class="container">
                <div class="navbar-header">
                    <!-- FOR MOBILE VIEW COLLAPSED BUTTON -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar"
                            aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <!-- LOGO -->
                    <!-- Text based logo -->
                    <a class="navbar-brand aa-logo" href="/"> Home <span>Property</span></a>
                    <!-- Image based logo -->
                     <!--<a class="navbar-brand aa-logo-img" href="index.html"><img  src="img/logo.png" alt="logo"></a>-->
                </div>
                <div id="navbar" class="navbar-collapse collapse">
                    <ul id="top-menu" class="nav navbar-nav navbar-right aa-main-nav">
                        <li><a href="index.html">HOME</a></li>
                        <li class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="properties.html">PROPERTIES <span
                                    class="caret"></span></a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="properties.html">PROPERTIES</a></li>
                                <li><a href="properties-detail.html">PROPERTIES DETAIL</a></li>
                            </ul>
                        </li>
                        <li><a href="gallery.html">GALLERY</a></li>
                        <li class="dropdown active">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="blog-archive.html">BLOG <span
                                    class="caret"></span></a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="blog-archive.html">ДОБРИ РАСТИТЕЛНОЗАЩИТНИ ПРАКТИКИ</a></li>
                                <li><a href="blog-single.html">ИНТЕГРИРАНО УПРАВЛЕНИЕ НА ВРЕДИТЕЛИТЕ</a></li>
                            </ul>
                        </li>
                        <li><a href="contact.html">CONTACT</a></li>
                        <li><a href="404.html">404 PAGE</a></li>
                    </ul>
                </div>
                <!--/.nav-collapse -->
            </div>
        </nav>
    </section>
    <!-- End menu section -->

    <!-- Start Proerty header  -->
    <section id="aa-property-header">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="aa-property-header-inner">
                        <h2>ДРЗП</h2>
                        <ol class="breadcrumb">
                            <li><a href="#">HOME</a></li>
                            <li class="active">Blog Details</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Proerty header  -->



    <div class="container-fluid">
        <div class="row row-offcanvas row-offcanvas-left ">

            <div class="col-xs-6 col-sm-3 sidebar-offcanvas" id="sidebar" role="navigation">
                <div class="navbar-default sidebar" role="navigation">
                    <ul class="nav" id="side-menu">
                            <li >
                                <div class="input-group input-group-sm" id="search-bar">
                                    <span class="input-group-addon" id="sizing-addon3"><i class="fa fa-search" aria-hidden="true"></i></span>
                                    <input type="text" class="form-control" placeholder="Search" aria-describedby="sizing-addon3">
                                </div>
                            </li>
                            <li>
                                <a class="list-group-item first" href="{!!URL::to('/template-practices/introduction')!!}"><i class='fa fa-angle-double-right fa-fw'></i> УВОД</a>
                            </li>
                            <li class="active-group">
                                <a class="list-group-item" href=""><i class="fa fa-angle-double-right fa-fw"></i> ЗЪРНЕНОЖИТНИ<span class="fa arrow"></span></a>
                                <ul class="nav nav-second-level">
                                    <li >
                                        <a class="list-group-item second" href="{!!URL::to('/template-practices/triticum-spp')!!}"><i class='fa fa-angle-right fa-fw'></i> Пшеница</a>
                                    </li>
                                    <li class="active">
                                        <a class="list-group-item second" href="{!!URL::to('/template-practices/hordeum-vulgare')!!}"><i class='fa fa-angle-right fa-fw'></i> Ечемик</a>
                                    </li>
                                    <li>
                                        <a class="list-group-item second" href="{!!URL::to('/template-practices/avena-sativa')!!}"><i class='fa fa-angle-right fa-fw'></i> Овес</a>
                                    </li>
                                    <li>
                                        <a class="list-group-item second" href="{!!URL::to('/template-practices/secale-cereale')!!}"><i class='fa fa-angle-right fa-fw'></i> Ръж</a>
                                    </li>
                                    <li>
                                        <a class="list-group-item second" href="{!!URL::to('/template-practices/zea-mays')!!}"><i class='fa fa-angle-right fa-fw'></i> Царевица</a>
                                    </li>
                                    <li>
                                        <a class="list-group-item second" href="{!!URL::to('/template-practices/rodentia')!!}"><i class='fa fa-angle-right fa-fw'></i> Борба с гризачи</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a class="list-group-item" href="{!!URL::to('/админ')!!}"><i class="fa fa-angle-double-right fa-fw"></i> БОБОВИ<span class="fa arrow"></span></a>
                                <ul class="nav nav-second-level">
                                    <li>
                                        <a class="list-group-item" href="{!!URL::to('/template-practices/phaseolus-vulgaris')!!}"><i class='fa fa-angle-right fa-fw'></i> Фасул</a>
                                    </li>
                                    <li>
                                        <a class="list-group-item" href="{!!URL::to('/template-practices/glycine-max')!!}"><i class='fa fa-angle-right fa-fw'></i> Соя</a>
                                    </li>
                                    <li>
                                        <a class="list-group-item" href="{!!URL::to('/template-practices/pisum-sativum')!!}"><i class='fa fa-angle-right fa-fw'></i> Грах</a>
                                    </li>
                                    <li>
                                        <a class="list-group-item" href="{!!URL::to('/template-practices/lens-culinaris')!!}"><i class='fa fa-angle-right fa-fw'></i> Леща</a>
                                    </li>
                                    <li>
                                        <a class="list-group-item" href="{!!URL::to('/template-practices/cicer-arietinum')!!}"><i class='fa fa-angle-right fa-fw'></i> Нахут</a>
                                    </li>
                                    <li>
                                        <a class="list-group-item" href="{!!URL::to('/template-practices/medicago-sativa')!!}"><i class='fa fa-angle-right fa-fw'></i> Люцерна</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a class="list-group-item" href="{!!URL::to('/админ')!!}"><i class="fa fa-angle-double-right fa-fw"></i> ТЕХНИЧЕСКИ КУЛТУРИ<span class="fa arrow"></span></a>
                                <ul class="nav nav-second-level">
                                    <li>
                                        <a class="list-group-item" href="{!!URL::to('/template-practices/nicotiana-tabacum')!!}"><i class='fa fa-angle-right fa-fw'></i> Тютюн</a>
                                    </li>
                                    <li>
                                        <a class="list-group-item" href="{!!URL::to('/template-practices/beta-vulgaris')!!}"><i class='fa fa-angle-right fa-fw'></i> Цвекло</a>
                                    </li>
                                    <li>
                                        <a class="list-group-item" href="{!!URL::to('/template-practices/gossypium')!!}"><i class='fa fa-angle-right fa-fw'></i> Памук</a>
                                    </li>
                                    <li>
                                        <a class="list-group-item" href="{!!URL::to('/template-practices/helianthus-annuus')!!}"><i class='fa fa-angle-right fa-fw'></i> Слънчоглед</a>
                                    </li>
                                    <li>
                                        <a class="list-group-item" href="{!!URL::to('/template-practices/brassica-napus')!!}"><i class='fa fa-angle-right fa-fw'></i> Рапица</a>
                                    </li>
                                    <li>
                                        <a class="list-group-item" href="{!!URL::to('/template-practices/arachis-hypogaea')!!}"><i class='fa fa-angle-right fa-fw'></i> Фъстъци</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a class="list-group-item" href="{!!URL::to('/админ')!!}"><i class="fa fa-angle-double-right fa-fw"></i> ЗЕЛЕНЧУЦИ<span class="fa arrow"></span></a>
                                <ul class="nav nav-second-level">
                                    <li>
                                        <a class="list-group-item" href="{!!URL::to('/админ/мярки/create')!!}"><i class='fa fa-angle-right fa-fw'></i> Домати, пипер, патладжан</a>
                                    </li>
                                    <li>
                                        <a class="list-group-item" href="{!!URL::to('/админ/мярки')!!}"><i class='fa fa-angle-right fa-fw'></i> Картофи</a>
                                    </li>
                                    <li>
                                        <a class="list-group-item" href="{!!URL::to('/админ/мярки')!!}"><i class='fa fa-angle-right fa-fw'></i> Лукви култури</a>
                                    </li>
                                    <li>
                                        <a class="list-group-item" href="{!!URL::to('/админ/мярки')!!}"><i class='fa fa-angle-right fa-fw'></i> Зелеви култури</a>
                                    </li>
                                    <li>
                                        <a class="list-group-item" href="{!!URL::to('/админ/мярки')!!}"><i class='fa fa-angle-right fa-fw'></i> Тиквови култури</a>
                                    </li>
                                    <li>
                                        <a class="list-group-item" href="{!!URL::to('/админ/мярки')!!}"><i class='fa fa-angle-right fa-fw'></i> Листни зеленчуци</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a class="list-group-item" href="{!!URL::to('/админ')!!}"><i class="fa fa-angle-double-right fa-fw"></i> ЗЕЛЕНЧУЦИ В СЪОРАЖЕНИЯ<span class="fa arrow"></span></a>
                                <ul class="nav nav-second-level">
                                    <li>
                                        <a class="list-group-item" href="{!!URL::to('/админ/мярки/create')!!}"><i class='fa fa-angle-right fa-fw'></i> Домати в съоражения</a>
                                    </li>
                                    <li>
                                        <a class="list-group-item" href="{!!URL::to('/админ/мярки')!!}"><i class='fa fa-angle-right fa-fw'></i> Тиквови култури</a>
                                    </li>
                                    <li>
                                        <a class="list-group-item" href="{!!URL::to('/админ/мярки')!!}"><i class='fa fa-angle-right fa-fw'></i> Украсни култури</a>
                                    </li>
                                    <li>
                                        <a class="list-group-item" href="{!!URL::to('/админ/мярки')!!}"><i class='fa fa-angle-right fa-fw'></i> Пипер в съоражения</a>
                                    </li>
                                    <li>
                                        <a class="list-group-item" href="{!!URL::to('/админ/мярки')!!}"><i class='fa fa-angle-right fa-fw'></i> Листни зеленчуци</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a class="list-group-item" href="{!!URL::to('/админ')!!}"><i class="fa fa-angle-double-right fa-fw"></i> ОВОЩНИ КУЛТУРИ<span class="fa arrow"></span></a>
                                <ul class="nav nav-second-level">
                                    <li>
                                        <a class="list-group-item" href="{!!URL::to('/админ/мярки/create')!!}"><i class='fa fa-angle-right fa-fw'></i> Семкови овощни видове</a>
                                    </li>
                                    <li>
                                        <a class="list-group-item" href="{!!URL::to('/админ/мярки')!!}"><i class='fa fa-angle-right fa-fw'></i> Костилкови овощни видове</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a class="list-group-item" href="{!!URL::to('/админ')!!}"><i class="fa fa-angle-double-right fa-fw"></i> ЯГОДОПЛОДНИ<span class="fa arrow"></span></a>
                                <ul class="nav nav-second-level">
                                    <li>
                                        <a class="list-group-item" href="{!!URL::to('/админ/мярки/create')!!}"><i class='fa fa-angle-right fa-fw'></i> Ягода</a>
                                    </li>
                                    <li>
                                        <a class="list-group-item" href="{!!URL::to('/админ/мярки')!!}"><i class='fa fa-angle-right fa-fw'></i> Малина</a>
                                    </li>
                                    <li>
                                        <a class="list-group-item" href="{!!URL::to('/админ/мярки')!!}"><i class='fa fa-angle-right fa-fw'></i> Касис</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a class="list-group-item first" href="introduction.html"><i class='fa fa-angle-double-right fa-fw'></i> ЛОЗА</a>
                            </li>
                        </ul>
                </div>
            </div>
            <div class="col-xs-12 col-sm-9 content">
                <p class="pull-left">
                    <button type="button" class="btn btn-success btn-md" data-toggle="offcanvas">
                        <i class="fa fa-angle-double-right right-fa hidden" aria-hidden="true"></i>
                        <i class="fa fa-angle-double-left left-fa " aria-hidden="true"></i>
                        МЕНЮ
                    </button>
                </p>
                <section id="aa-blog" >
                    <div class="aa-blog-area">
                        <div class="row">
                            <div class="col-md-12" id="article_content">
                                <article class="aa-blog-single aa-blog-details">
                                    <div class="aa-blog-single-content">

                                        @yield('content')


                                    </div>
                                </article>
                            </div>

                        </div>
                    </div>
                </section>
                <hr>
                @if($has_image !== 0)
                    <div class="panel panel-default img-authors">
                        <div class="panel-heading">Снимков материал от:</div>
                        <div class="panel-body">
                            @section('authors')
                                @if($has_image == 1)
                                    @include('templates.pages.01_grain.authors.triticum_authors')
                                @elseif($has_image == 2)
                                @endif
                            @show
                        </div>
                    </div>

                @endif
            </div>
        </div>
    </div>














     <!--/ Blog  -->

    <!-- Footer -->
    <footer id="aa-footer">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="aa-footer-area">
                        <div class="row">
                            <div class="col-md-3 col-sm-6 col-xs-12">
                                <div class="aa-footer-left">
                                    <p>Designed by <a rel="nofollow" href="http://www.markups.io/">MarkUps.io</a></p>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6 col-xs-12">
                                <div class="aa-footer-middle">
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                    <a href="#"><i class="fa fa-google-plus"></i></a>
                                    <a href="#"><i class="fa fa-youtube"></i></a>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-12 col-xs-12">
                                <div class="aa-footer-right">
                                    <a href="#">Home</a>
                                    <a href="#">Support</a>
                                    <a href="#">License</a>
                                    <a href="#">FAQ</a>
                                    <a href="#">Privacy & Term</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- / Footer -->




    <!-- jQuery library -->
    <!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script> -->
    {{--<script src="js/jquery.min.js"></script>--}}
    {!!Html::script("js/jquery.min.js" )!!}
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    {{--<script src="js/bootstrap.js"></script>--}}
    {!!Html::script("js/bootstrap.js" )!!}
    <!-- slick slider -->
    {{--<script type="text/javascript" src="js/slick.js"></script>--}}
    {!!Html::script("js/slick.js" )!!}
    <!-- Price picker slider -->
    {{--<script type="text/javascript" src="js/nouislider.js"></script>--}}
    {!!Html::script("js/nouislider.js" )!!}
    <!-- mixit slider -->
    {{--<script type="text/javascript" src="js/jquery.mixitup.js"></script>--}}
    {!!Html::script("js/jquery.mixitup.js" )!!}
    <!-- Add fancyBox -->
    {{--<script type="text/javascript" src="js/jquery.fancybox.pack.js"></script>--}}
    {!!Html::script("js/jquery.fancybox.pack.js" )!!}
    <!-- Custom js -->
    {{--<script src="js/custom.js"></script>--}}
    {!!Html::script("js/custom.js" )!!}


    <!-- Add jQuery library -->
    <!--<script type="text/javascript" src="fancybox/lib/jquery-1.10.1.min.js"></script>-->
    <!--<script type="text/javascript" src="./lib/jquery-1.10.1.min.js"></script>-->

    <!-- Add mousewheel plugin (this is optional) -->
    {{--<script type="text/javascript" src="fancybox/lib/jquery.mousewheel-3.0.6.pack.js"></script>--}}
    {!!Html::script("fancybox/lib/jquery.mousewheel-3.0.6.pack.js" )!!}

    <!-- Add fancyBox main JS and CSS files -->
    {{--<script type="text/javascript" src="fancybox/source/jquery.fancybox.js?v=2.1.5"></script>--}}
    {!!Html::script("fancybox/source/jquery.fancybox.js?v=2.1.5" )!!}
    {{--<script type="text/javascript" src="js/myFancybox.js"></script>--}}
    {!!Html::script("js/myFancybox.js" )!!}

    <!--test-->
    {{--<script type="text/javascript" src="js-test/metisMenu.min.js"></script>--}}
    {{--<script type="text/javascript" src="js-test/sb-admin-2.js"></script>--}}
    {!!Html::script("js-test/metisMenu.min.js" )!!}
    {!!Html::script("js-test/sb-admin-2.js" )!!}
    <!--test-->

    <script type="text/javascript">
        $(document).ready(function () {
            $('[data-toggle=offcanvas]').click(function () {
                if ($('.sidebar-offcanvas').css('background-color') == 'rgb(255, 255, 255)') {
                    $('.list-group-item').attr('tabindex', '-1');
                } else {
                    $('.list-group-item').attr('tabindex', '');
                }
                $('.row-offcanvas').toggleClass('active');
                $('.right-fa').toggleClass('hidden');
                $('.left-fa').toggleClass('hidden');

            });
        });







        //        $(document).ready(function () {
//            // check where the shoppingcart-div is
//            var offset = $('#myScrollspy').offset();
//            $(window).scroll(function () {
//                var scrollTop = $(window).scrollTop();
//                // check the visible top of the browser
//                if (offset.top < scrollTop) {
//                    $('#nav_content').addClass('affix');
//                } else {
//                    $('#nav_content').removeClass('affix');
//                }
//            });
//        });
    </script>

</body>
</html>