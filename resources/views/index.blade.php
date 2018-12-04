<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from html.green-estate.krizantos.com/home_04.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 25 Sep 2018 19:04:27 GMT -->
<head>
    <title>Rosario Costantini</title>
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
        <section class="section section-welcome_map">
          <div class="search-map-custom mb-0 welcome-search-map js-welcome-search-map ">
            <div class="map" class="js-search-map-style-2"></div>
            <div class="container search-prop-home">
              <div class="js-drag-n-drop">

                <!-- ======================== FORMULARIO =================================== -->
                <form action="result/0" class="search-filter -static" method="get" >
                  <div class="search-filter_top">
                    <h5 class="mb-4 search-title">ENCONTRÁ HOY <br> LA PROPIEDAD DE TUS SUEÑOS</h5>
                    <h5 class="mb-4 search-title2">BUSCÁ TU PROPIEDAD</h5>
                    <div class="form-group mb-25">
                      <label class="pl-1 pb-1 select-label lab-hide" for="">BARRIO</label>
                      <select name="barrio" class="form-control home-sel">
                        <option value="" selected>Seleccione un Barrio</option>
                        @foreach($barrios as $barrio)
                        <option value="{{$barrio}}">{{$barrio}}</option>
                        @endforeach
                      </select>
                    </div>
                    <div class="form-group mb-25">
                      <label class="pl-1 pb-1 select-label lab-hide" for="">OPERACIÓN</label>
                      <select name = "operacion" class="form-control home-sel">
                        <option value="" selected>Tipo de Operación</option>
                        @foreach($operaciones as $operacion)
                        <option value="{{$operacion}}">{{$operacion}}</option>
                        @endforeach
                      </select>
                    </div>
                    <div class="form-group mb-25">
                      <label class="pl-1 pb-1 select-label lab-hide" for="">PROPIEDAD</label>
                      <select name="tipo" class="form-control home-sel">
                        <option value="" selected>Tipo de Propiedad</option>
                        @foreach($tiposDePropiedad as $tipo)
                        <option value="{{$tipo}}">{{$tipo}}</option>
                        @endforeach
                      </select>
                    </div>
                    <input type="hidden" name="zona" value="">
                    <input type="hidden" name="moneda" value="">
                    <input type="hidden" name="valorMinimo" value="">
                    <input type="hidden" name="valorMaximo" value="">
                    <input type="hidden" name="habitaciones" value="">


                    <input class="btn btn-primary btn-md btn-block" type="submit" value="Buscar">
                  </div>
                </form>
                <!-- ============================ FIN FORMULARIO ===================================== -->

              </div>
            </div>
          </div>
        </section>
        <section class="section section-flatList pd-50 bg-secondary brd-t brd-b">
          <div class="container">
            <h2 class="text-center mb-30">DESTACADAS</h2>
            <!-- SHUFFLE FILTER-->
            <ul class="nav filter-nav" id="myTab" role="tablist">
              <li class="nav-item"><a class="nav-link js-no-scroll active" id="rent_tab" data-toggle="tab" href="#rent" role="tab" aria-controls="rent" aria-selected="true">COMPRA</a></li>
              <li class="nav-item"><a class="nav-link js-no-scroll" id="buy_tab" data-toggle="tab" href="#buy" role="tab" aria-controls="buy" aria-selected="false">ALQUILER</a></li>
            </ul>
            <div class="tab-content" id="myTabContent">
              <div class="tab-pane fade show active" id="rent" role="tabpanel" aria-labelledby="rent_tab">
                <div class="filter-content">
                  <div class="row">
                <!-- =============================== CARTA COMPRA ===============================
                  =============================================================================== -->
                @foreach($propiedades as $propiedad)
                  @if($propiedad['operacion']== 'Venta')
                    <div class="col-lg-4 col-md-6 d-flex">
                      <div class="flat-card">
                        <div class="flat-card_top">
                          <div class="tag -sale">AL AGUA</div><a href="property-single.html">
                            <div class="-resp-bg-img" style="background-image: url({{$propiedad['img_princ']}});"></div></a>
                        </div>
                        <div class="flat-card_bot">
                          <h5 class="flat-card_title"><a href="property-single.html">{{$propiedad['titulo']}}</a></h5>
                          <p class="flat-card_price">{{$propiedad['precio']}}</p>
                          <div class="flat-card_descr">
                            <p>{{$propiedad['in_obs']}}</p>
                          </div>
                          <div class="flat-card_info">
                            <div class="flat-card_info_item"><i class="icon-bed"></i>{{$propiedad['ti_dor']}}</div>
                            <div class="flat-card_info_item"><i class="icon-shower"></i>{{$propiedad['in_ban']}}</div>
                            <div class="flat-card_info_item">{{$propiedad['in_sup']}} &#13217;</div>
                            <div class="flat-card_info_item">Cod: <a class="prop-code">{{$propiedad['in_cod']}}</a></div>
                          </div>
                        </div>
                      </div>
                    </div>
                    @endif
                  @endforeach
                  </div>
                  <!-- =============================== FIN CARTA COMPRA ===============================
                  =============================================================================== -->
                  <div class="text-center"><a class="btn btn-md btn-primary" href="propiedades">VER TODAS</a></div>
              </div>
            </div>
            <div class="tab-pane fade" id="buy" role="tabpanel" aria-labelledby="buy_tab">
              <div class="filter-content">
                <div class="row">
                <!-- ================================== CARTA ALQUILER =====================================
                ======================================================================================= -->
                @foreach($propiedades as $propiedad)
                  @if($propiedad['operacion']== 'Alquiler' || $propiedad['operacion']== 'Venta y Alquiler' || $propiedad['operacion']== 'Alquiler Temporario')
                  <div class="col-lg-4 col-md-6 d-flex">
                    <div class="flat-card">
                      <div class="flat-card_top">
                        <div class="tag -sale">AL AGUA</div><a href="property-single.html">
                          <div class="-resp-bg-img" style="background-image: url({{$propiedad['img_princ']}});"></div></a>
                      </div>
                      <div class="flat-card_bot">
                        <h5 class="flat-card_title"><a href="property-single.html">{{$propiedad['titulo']}}</a></h5>
                        <p class="flat-card_price">{{$propiedad['precio']}}</p>
                        <div class="flat-card_descr">
                          <p>{{$propiedad['in_obs']}}</p>
                        </div>
                        <div class="flat-card_info">
                          <div class="flat-card_info_item"><i class="icon-bed"></i>{{$propiedad['ti_dor']}}</div>
                          <div class="flat-card_info_item"><i class="icon-shower"></i>{{$propiedad['in_ban']}}</div>
                          <div class="flat-card_info_item">{{$propiedad['in_sup']}} &#13217;</div>
                          <div class="flat-card_info_item">Cod: <a class="prop-code">RC927</a></div>
                        </div>
                      </div>
                    </div>
                  </div>
                  @endif
                @endforeach
              <!-- =================================== FIN CARTA ALQUILER =========================================
              ================================================================================================ -->
                </div>
              </div>
              <div class="text-center"><a class="btn btn-md btn-primary" href="javascript:void(0);">VER MÁS</a></div>
            </div>
          </div>
        </section>
        <section class="section section-banner pd-60 bg-primary text-white">
          <div class="container">
            <div class="row">
              <div class="col-md-7">
                <h3 class="text-white lh-md banner-cont">Querés vender tu propiedad en Nordelta?</h3>
              </div>
              <div class="col-md-5 banner-cont banner-button"><a class="btn btn-border_white btn-md ml-auto" href="contacts.html">Tasá tu propiedad</a></div>
            </div>
          </div>
        </section>
        <section class="section section-contacts pt-3 pb-3">
          <div class="container">
            <div class="row">
              <div class="col-md-4 footer-col_item">
                <div class="descr-block  mb-3">
                  <p class="text-md-left foot-info">

                    Terrazas de la Bahía 1, Of 202 <br>
                    Bahía Grande, <br>
                    Nordelta Buenos Aires, Argentina

                  </p>
                </div>
                <ul class="social-list">
                  <li><a href="javascript:void(0);"><i class="fab fa-facebook-f i-black"></i></a></li>
                  <li><a href="javascript:void(0);"><i class="fab fa-twitter i-black"></i></a></li>
                </ul>
              </div>
              <div class="col-md-4  footer-col_item">

              </div>
              <div class="col-md-4 footer-col_item">

                <ul class="footer-contacts text-md-right foot-info">
                  <li><a href="mailto:info@rosariocostantini.com.ar" class="i-black"><i class="fas fa-envelope foot-i"></i>info@rosariocostantini.com.ar</a></li>
                  <li><a href="tel:+541148718166" class="i-black"><i class="fas fa-phone foot-i"></i>+54 11 4871 8166</a></li>
                  <li><a href="tel:+541148718158" class="i-black"><i class="fas fa-phone foot-i"></i>+54 11 4871 8158</a></li>

                </ul>
              </div>
            </div>
          </div>
        </section>
      </main>
      <!-- FOOTER-->
      <footer class="footer -sticky js-footer">
        <div class="container">
          <p class="text-center">© 2018 . Rosario Costantini Negocios Inmobiliarios</p>
        </div>
      </footer>
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
  </body>

<!-- Mirrored from html.green-estate.krizantos.com/home_04.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 25 Sep 2018 19:07:09 GMT -->
</html>
