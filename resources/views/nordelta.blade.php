<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from html.green-estate.krizantos.com/home_04.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 25 Sep 2018 19:04:27 GMT -->
<head>
    <title>Rosario Costantini | Nordelta</title>
    <meta name="description" content="Description of the site">
    <meta charset="UTF-8">
    <meta name="format-detection" content="telephone=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=yes, maximum-scale=1">
    <!-- connection FAVICONS-->
    <link rel="apple-touch-icon" sizes="180x180" href="img/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="img/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="img/favicon-16x16.png">
    <link rel="manifest" href="img/site.webmanifest">
    <link rel="mask-icon" href="img/safari-pinned-tab.svg" color="#65b5e3">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="theme-color" content="#ffffff">
    <!-- THE BACKGROUND OF THE STATUS-BAR (ON MOBILE)-->
    <meta name="theme-color" content="#000">
    <!-- connection GOOGLE FONTS-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:300,400,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=PT+Serif:700i&amp;amp;subset=cyrillic" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">
    <!-- connection CSS-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <link class="js-color-css" rel="stylesheet" href="css/all.css">

    <link rel="stylesheet" href="css/custom.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">


</head>
<body>
<div class="wrap-for-sticky js-wrap-for-sticky">
  <!-- HEADER-->
  @include('header')
  <!-- HEADER END-->
    <!-- CONTENT-->
    <main class="main">
        <section class="section section-catalog full-height">
            <div class="row no-gutters">
                <div class="col-lg-3 sidebar d-none d-lg-block">
                    <div class="sidebar">
                        <div class="container">
                            <form class="side-form" action="">
                                <div class="form-group form-custom">
                                    <label class="pl-1 pb-1 select-label" for="">OPERACIÓN</label>
                                    <select class="form-control form-sm">
                                        <option value="any" selected disabled>Tipo de Operación</option>
                                        <option value="type_1">Compra</option>
                                        <option value="type_2">Alquiler</option>
                                        <option value="type_3">Alquiler Temporario</option>
                                    </select>
                                </div>
                                <div class="form-group form-custom">
                                    <label class="pl-1 pb-1 select-label" for="">PROPIEDAD</label>
                                    <select class="form-control form-sm">
                                        <option value="any_Purpose" selected disabled>Tipo de Propiedad</option>
                                        <option value="Purpose_1">Casa</option>
                                        <option value="Purpose_2">Departamento</option>
                                        <option value="Purpose_3">Local</option>
                                        <option value="Purpose_4">Lote</option>
                                    </select>
                                </div>
                                <div class="form-group form-custom">
                                    <label class="pl-1 pb-1 select-label" for="">Precio</label>

                                    <div class="d-flex justify-content-between">
                                        <select class="form-control mon-sel form-sm">
                                            <option value="any_Purpose">US$</option>
                                            <option value="Purpose_1">AR$</option>
                                        </select>
                                        <input type="tel" class="form-control mon-inp form-sm" placeholder="Desde">
                                        <input type="tel" class="form-control mon-inp form-sm" placeholder="Hasta">
                                    </div>
                                </div>
                                <div class="form-group form-custom">
                                    <label class="pl-1 pb-1 select-label" for="">ZONA</label>
                                    <select class="form-control form-sm">
                                        <option value="any_Purpose" selected disabled>Zonas</option>
                                        <option value="Purpose_1">Nordelta</option>
                                        <option value="Purpose_2">GBA Zona Norte</option>
                                        <option value="Purpose_3">Miami</option>
                                        <option value="Purpose_4">Puertos</option>
                                    </select>
                                </div>
                                <div class="form-group form-custom">
                                    <label class="pl-1 pb-1 select-label" for="">BARRIO</label>
                                    <select class="form-control form-sm">
                                        <option value="any_Purpose" selected disabled>Localidades y Barrios</option>
                                        <option value="Purpose_1">Cabos del Lago</option>
                                        <option value="Purpose_2">Los Castores</option>
                                        <option value="Purpose_3">Bahía Grande</option>
                                        <option value="Purpose_4">Puertos</option>
                                    </select>
                                </div>
                                <div class="form-group form-custom">
                                    <label class="pl-1 pb-1 select-label" for="">LOTE</label>
                                    <select class="form-control form-sm">
                                        <option value="any_Purpose" selected disabled>Tipo de Lote</option>
                                        <option value="Purpose_1">A la calle</option>
                                        <option value="Purpose_2">Al Agua</option>
                                        <option value="Purpose_3">Al Golf</option>
                                        <option value="Purpose_4">Interno</option>
                                    </select>
                                </div>
                                <div class="form-group form-custom">
                                    <label class="pl-1 pb-1 select-label" for="">Habitaciones</label>
                                    <select class="form-control form-sm">
                                        <option value="any_Purpose" selected disabled>Cantidad de habitaciones</option>
                                        <option value="Purpose_1">1</option>
                                        <option value="Purpose_2">2</option>
                                        <option value="Purpose_3">3</option>
                                        <option value="Purpose_4">4</option>
                                        <option value="Purpose_4">5+</option>
                                    </select>
                                </div>
                                <button class="btn btn-primary btn-md btn-block btn-search" type="submit" value="Buscar">Buscar </button>
                            </form>
                        </div>
                    </div>

                </div>
                <div class="col-lg-9 bg-secondary catalog-content">
                    <img src="img/masterplan.jpg" alt="" style="width:80%; margin-top: 20px;">












                </div>
            </div>
            <!-- Scroll top button-->
            <button class="scroll-top-btn js-scroll-top-btn js-scroll-top" type="button"><i class="scroll-top-btn-icon fas fa-chevron-up"></i></button>
            <!-- Preloader-->
            <div class="preloader js-preloader">
                <div class="preloader_logo">
                    <div class="sk-double-bounce">
                        <div class="sk-child sk-double-bounce1"></div>
                        <div class="sk-child sk-double-bounce2"></div>
                    </div>
                </div>
            </div>
            <!-- page helper-->
            <div class="page-helper">
                <div class="tog-nav page-helper_btn -JS_helper_click d-xl-none d-md-block">FILTROS<i class="fas fa-filter"></i></div>
                <div class="page-helper_block">
                    <div class="page-helper_container">
                        <div class="page-helper_main_title">Page menu</div>
                        <div class="page-helper_col"><a class="page-helper_item" href="home_01.html">
                            <div class="page-helper_img_wrap">
                                <div class="-resp-bg-img page-helper_img" style="background-image: url('img/preview/home_01.png');"></div>
                            </div>
                            <div class="page-helper_title">Home 01</div></a></div>
                        <div class="page-helper_col"><a class="page-helper_item" href="home_02.html">
                            <div class="page-helper_img_wrap">
                                <div class="-resp-bg-img page-helper_img" style="background-image: url('img/preview/home_02.png');"></div>
                            </div>
                            <div class="page-helper_title">Home 02</div></a></div>
                        <div class="page-helper_col"><a class="page-helper_item" href="home_03.html">
                            <div class="page-helper_img_wrap">
                                <div class="-resp-bg-img page-helper_img" style="background-image: url('img/preview/home_03.png');"></div>
                            </div>
                            <div class="page-helper_title">Home 03</div></a></div>
                        <div class="page-helper_col"><a class="page-helper_item" href="home_04.html">
                            <div class="page-helper_img_wrap">
                                <div class="-resp-bg-img page-helper_img" style="background-image: url('img/preview/home_04.png');"></div>
                            </div>
                            <div class="page-helper_title">Home 04</div></a></div>
                        <div class="page-helper_col"><a class="page-helper_item" href="about.html">
                            <div class="page-helper_img_wrap">
                                <div class="-resp-bg-img page-helper_img" style="background-image: url('img/preview/about.png');"></div>
                            </div>
                            <div class="page-helper_title">About</div></a></div>
                        <div class="page-helper_col"><a class="page-helper_item" href="catalog_01.html">
                            <div class="page-helper_img_wrap">
                                <div class="-resp-bg-img page-helper_img" style="background-image: url('img/preview/catalog_1.png');"></div>
                            </div>
                            <div class="page-helper_title">Properties 01</div></a></div>
                        <div class="page-helper_col"><a class="page-helper_item" href="catalog_02.html">
                            <div class="page-helper_img_wrap">
                                <div class="-resp-bg-img page-helper_img" style="background-image: url('img/preview/catalog_2.png');"></div>
                            </div>
                            <div class="page-helper_title">Properties 02</div></a></div>
                        <div class="page-helper_col"><a class="page-helper_item" href="property-single.html">
                            <div class="page-helper_img_wrap">
                                <div class="-resp-bg-img page-helper_img" style="background-image: url('img/preview/single_property.png');"></div>
                            </div>
                            <div class="page-helper_title">Properties single</div></a></div>
                        <div class="page-helper_col"><a class="page-helper_item" href="agencies.html">
                            <div class="page-helper_img_wrap">
                                <div class="-resp-bg-img page-helper_img" style="background-image: url('img/preview/agencies.png');"></div>
                            </div>
                            <div class="page-helper_title">Agencies</div></a></div>
                        <div class="page-helper_col"><a class="page-helper_item" href="agency_single.html">
                            <div class="page-helper_img_wrap">
                                <div class="-resp-bg-img page-helper_img" style="background-image: url('img/preview/single_agency.png');"></div>
                            </div>
                            <div class="page-helper_title">Agencie single</div></a></div>
                        <div class="page-helper_col"><a class="page-helper_item" href="blog.html">
                            <div class="page-helper_img_wrap">
                                <div class="-resp-bg-img page-helper_img" style="background-image: url('img/preview/blog.png');"></div>
                            </div>
                            <div class="page-helper_title">Blog</div></a></div>
                        <div class="page-helper_col"><a class="page-helper_item" href="blog-single.html">
                            <div class="page-helper_img_wrap">
                                <div class="-resp-bg-img page-helper_img" style="background-image: url('img/preview/single_blog.png');"></div>
                            </div>
                            <div class="page-helper_title">Blog single</div></a></div>
                        <div class="page-helper_col"><a class="page-helper_item" href="contacts.html">
                            <div class="page-helper_img_wrap">
                                <div class="-resp-bg-img page-helper_img" style="background-image: url('img/preview/contact_us.png');"></div>
                            </div>
                            <div class="page-helper_title">Contact</div></a></div>
                        <div class="page-helper_col"><a class="page-helper_item" href="page_404.html">
                            <div class="page-helper_img_wrap">
                                <div class="-resp-bg-img page-helper_img" style="background-image: url('img/preview/page_404.png');"></div>
                            </div>
                            <div class="page-helper_title">404</div></a></div>
                    </div>
                </div>
            </div>
</div>
</div>
</section>
</main>

<!-- FOOTER-->
<!--<footer class="footer -sticky js-footer">-->
    <!--<div class="container">-->
        <!--<p class="text-center">© 2018 . Rosario Costantini Negocios Inmobiliarios</p>-->
    <!--</div>-->
<!--</footer>-->
<!-- FOOTER END-->
<!-- Scroll top button-->
<button class="scroll-top-btn js-scroll-top-btn js-scroll-top" type="button"><i class="scroll-top-btn-icon fas fa-chevron-up"></i></button>
<!-- Preloader-->
<div class="preloader js-preloader">
    <div class="preloader_logo">
        <div class="sk-double-bounce">
            <div class="sk-child sk-double-bounce1"></div>
            <div class="sk-child sk-double-bounce2"></div>
        </div>
    </div>
</div>
<!-- page helper-->



<!-- NAV MOBILE -->

<div class="mob-filter col-lg-12">
    <div class="container">
        <div class="text-right close-nav"><i class="fas fa-times"></i></div>

        <form class="side-form" action="">

            <div class="form-group mb-25">
                <label class="pl-1 pb-1 select-label" for="">OPERACIÓN</label>
                <select class="form-control">
                    <option value="any" selected disabled>Tipo de Operación</option>
                    <option value="type_1">Compra</option>
                    <option value="type_2">Alquiler</option>
                    <option value="type_3">Alquiler Temporario</option>
                </select>
            </div>
            <div class="form-group mb-25">
                <label class="pl-1 pb-1 select-label" for="">PROPIEDAD</label>
                <select class="form-control">
                    <option value="any_Purpose" selected disabled>Tipo de Propiedad</option>
                    <option value="Purpose_1">Casa</option>
                    <option value="Purpose_2">Departamento</option>
                    <option value="Purpose_3">Local</option>
                    <option value="Purpose_4">Lote</option>
                </select>
            </div>
            <div class="form-group mb-25">
                <label class="pl-1 pb-1 select-label" for="">ZONA</label>
                <select class="form-control">
                    <option value="any_Purpose" selected disabled>Zonas</option>
                    <option value="Purpose_1">Nordelta</option>
                    <option value="Purpose_2">GBA Zona Norte</option>
                    <option value="Purpose_3">Miami</option>
                    <option value="Purpose_4">Puertos</option>
                </select>
            </div>
            <div class="form-group mb-25">
                <label class="pl-1 pb-1 select-label" for="">BARRIO</label>
                <select class="form-control">
                    <option value="any_Purpose" selected disabled>Localidades y Barrios</option>
                    <option value="Purpose_1">Cabos del Lago</option>
                    <option value="Purpose_2">Los Castores</option>
                    <option value="Purpose_3">Bahía Grande</option>
                    <option value="Purpose_4">Puertos</option>
                </select>
            </div>
            <div class="form-group mb-25">
                <label class="pl-1 pb-1 select-label" for="">LOTE</label>
                <select class="form-control">
                    <option value="any_Purpose" selected disabled>Tipo de Lote</option>
                    <option value="Purpose_1">A la calle</option>
                    <option value="Purpose_2">Al Agua</option>
                    <option value="Purpose_3">Al Golf</option>
                    <option value="Purpose_4">Interno</option>
                </select>
            </div>
            <div class="form-group mb-25">
                <label class="pl-1 pb-1 select-label" for="">Habitaciones</label>
                <select class="form-control">
                    <option value="any_Purpose" selected disabled>Cantidad de habitaciones</option>
                    <option value="Purpose_1">1</option>
                    <option value="Purpose_2">2</option>
                    <option value="Purpose_3">3</option>
                    <option value="Purpose_4">4</option>
                    <option value="Purpose_4">5+</option>
                </select>
            </div>
            <div class="form-group mb-25">
                <label class="pl-1 pb-1 select-label" for="">Precio</label>

                <div class="d-flex justify-content-between">
                    <select class="form-control mon-sel">
                        <option value="any_Purpose">US$</option>
                        <option value="Purpose_1">AR$</option>
                    </select>
                    <input type="tel" class="form-control mon-inp" placeholder="Desde">
                    <input type="tel" class="form-control mon-inp" placeholder="Hasta">
                </div>
            </div>
            <button class="btn btn-primary btn-md btn-block btn-search" type="submit" value="Buscar">Buscar </button>
        </form>

    </div>
</div>

<!-- FIN NAV MOBIEL -->

<!-- connection JAVASCRIPT-->
<script src="libs/jquery/jquery.min.js"></script>
<script src="libs/bootstrap/bootstrap.bundle.min.js"></script>
<script src="libs/tweenmax/TweenMax.min.js"></script>
<script src="libs/vivus/vivus.min.js"></script>
<script src="libs/polyfill/polyfill.min.js"></script>
<script src="libs/slick/slick.min.js"></script>
<script src="libs/select2/js/select2.full.min.js"></script>
<script src="libs/nouislider/wNumb.js"></script>
<script src="libs/nouislider/nouislider.min.js"></script>
<script src="libs/slick-lightbox/slick-lightbox.min.js"></script>
<script src="libs/countUp/countUp.min.js"></script>
<script src="libs/shuffle/shuffle.js"></script>
<script src="libs/interact/interact.min.js"></script>
<script src="libs/waypoint/jquery.waypoints.min.js"></script>
<script src="libs/particles/particles.min.js"></script>
<script src="js/common.js"></script>
</div>

<script>
    $('.tog-nav').on('click', function(e) {
        $('.mob-filter').toggleClass('mob-show');
        e.preventDefault();
    });

    $('.close-nav').on('click', function(e) {
        $('.mob-filter').toggleClass('mob-show');
        e.preventDefault();
    });
</script>
</body>

<!-- Mirrored from html.green-estate.krizantos.com/home_04.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 25 Sep 2018 19:07:09 GMT -->
</html>
