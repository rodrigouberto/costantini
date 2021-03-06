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
    <link rel="apple-touch-icon" sizes="180x180" href="{{asset('img/apple-touch-icon.png')}}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{asset('img/favicon-32x32.png')}}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('img/favicon-16x16.png')}}">
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
    <link class="js-color-css" rel="stylesheet" href="{{asset('css/all.css')}}">
    <link rel="stylesheet" href="{{asset('css/custom.css')}}">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">


  </head>
  <body>
    <div class="wrap-for-sticky js-wrap-for-sticky">
          <!-- HEADER-->
          <header class="header js-header">
              <nav class="navbar navbar-expand-lg"><a href="index.html" class="logo"><img class="header-logo" src="img/logo3.png" alt=""></a>
                <button class=" mr-2 navbar-toggler" type="button" data-toggle="collapse" data-target="#header_navbar" aria-controls="header_navbar" aria-expanded="false" aria-label="Toggle navigation"><span class="hamburger hamburger--elastic js-hamburger"><span class="hamburger-box"><span class="hamburger-inner"></span></span></span></button>
                <div class="collapse navbar-collapse" id="header_navbar">
                  <ul class="navbar-nav ml-auto">
                    <li class="nav-item"><a class="nav-link" href="{{url('/')}}/index">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{url('/')}}/propiedades">Propiedades</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{url('/')}}/nordelta">Nordelta</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{url('/')}}/puertos">Puertos</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{url('/')}}/about">Nosotros</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{url('/')}}/tasaciones">Tasaciones</a></li>
                  </ul>
            </div>
          </nav>
      </header>
      <!-- HEADER END-->
      <!-- CONTENT-->
      <main class="main pt120">
        <section class="section single -flat">
          <div class="container">
            <div class="row">
              <div class="col-lg-8">
                <article class="article-single -flat pb-0">
                  <div class="article-top">
                    <div class="article-top_header">
                      <h1 class="h5 article-top_header_title">{{$propiedad['titulo']}}</h1>
                      <div class="article-top_header_price">{{$propiedad['precio']}}</div>
                    </div>
                    <div class="article-top_sliders_wrap">
                      <div class="article-top_slider_for_resize js-slider-resize"><i class="fas fa-expand-arrows-alt"></i></div>
                      <div class="article-top_slider_for js-single-slider-for -style_2">
                        <div class="item">
                          <div class="item-inner">
                            <div class="tag-list">
                              <div class="tag -sale">{{$propiedad['operacion']}}</div>

                            </div><a class="-resp-bg-img" href="img/flat/full/flat-1.png" style="background-image: url({{$propiedad['img_princ']}});"></a>
                          </div>
                        </div>
                        <div class="item">
                          <div class="item-inner">
                            <div class="tag-list">
                              <div class="tag -sale">sale</div>
                            </div><a class="-resp-bg-img" href="img/flat/full/flat-2.png" style="background-image: url(img/flat/flat-2.png);"></a>
                          </div>
                        </div>
                        <div class="item">
                          <div class="item-inner"><a class="-resp-bg-img" href="img/flat/full/flat-3.png" style="background-image: url(img/flat/flat-3.png);"></a></div>
                        </div>
                        <div class="item">
                          <div class="item-inner"><a class="-resp-bg-img" href="img/flat/full/flat-4.png" style="background-image: url(img/flat/flat-4.png);"></a></div>
                        </div>
                        <div class="item">
                          <div class="item-inner">
                            <div class="tag-list">

                            </div><a class="-resp-bg-img" href="img/flat/full/flat-5.png" style="background-image: url(img/flat/flat-5.png);"></a>
                          </div>
                        </div>
                        <div class="item">
                          <div class="item-inner"><a class="-resp-bg-img" href="img/flat/full/flat-6.png" style="background-image: url(img/flat/flat-6.png);"></a></div>
                        </div>
                      </div>
                      <div class="article-top_slider_nav js-single-slider-nav">
                        <div class="item">
                          <div class="item-inner">
                            <div class="-resp-bg-img" style="background-image: url(img/flat/flat-1.png);"></div>
                          </div>
                        </div>
                        <div class="item">
                          <div class="item-inner">
                            <div class="-resp-bg-img" style="background-image: url(img/flat/flat-2.png);"></div>
                          </div>
                        </div>
                        <div class="item">
                          <div class="item-inner">
                            <div class="-resp-bg-img" style="background-image: url(img/flat/flat-3.png);"></div>
                          </div>
                        </div>
                        <div class="item">
                          <div class="item-inner">
                            <div class="-resp-bg-img" style="background-image: url(img/flat/flat-4.png);"></div>
                          </div>
                        </div>
                        <div class="item">
                          <div class="item-inner">
                            <div class="-resp-bg-img" style="background-image: url(img/flat/flat-5.png);"></div>
                          </div>
                        </div>
                        <div class="item">
                          <div class="item-inner">
                            <div class="-resp-bg-img" style="background-image: url(img/flat/flat-6.png);"></div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="article-info article-row">
                    <h3>Datos Principales</h3>
                    <div class="article-info_container">
                      <div class="article-info_item">
                        <div class="icon"> <i class="icon-bed"></i></div>
                        <div class="title">Habitaciones: {{$propiedad['ti_dor']}}</div>
                      </div>
                      <div class="article-info_item">
                        <div class="icon"> <i class="icon-shower"></i></div>
                        <div class="title">Baños: {{$propiedad['in_ban']}}</div>
                      </div>
                      <div class="article-info_item">
                        <div class="icon"> <i class="icon-house"></i></div>
                        <div class="title">Garage: {{$propiedad['garage']}}</div>
                      </div>
                      <div class="article-info_item">
                        <div class="icon"> <i class="icon-select"></i></div>
                        <div class="title"> Terreno: {{$propiedad['in_sup']}}&#13217;</div>
                      </div>
                    </div>
                  </div>
                  <div class="article-descr article-row">
                    <h3>Descripción</h3>
                    <div class="descr-block">
                      {{$propiedad['in_obs']}}
                    </div>
                  </div>
                  <div class="article-features article-row">
                    <h3>Datos Adicionales</h3>
                    <ul class="article-features_ist">
                      <li>Baulera</li>
                      <li>Garage para tres autos</li>
                      <li>Seguridad</li>
                      <li>Riego Automático</li>
                      <li>Pileta</li>
                      <li>Parrilla</li>
                      <li>2 Habitaciones</li>
                      <li>3 Baños</li>

                    </ul>
                  </div>
                  <div class="article-plans article-row">
                    <h3>Planos</h3>
                    <div class="article-plans_container js-plans-lightbox">
                      <div class="article-plans_col">
                        <div class="article-plans_item"><a class="img -resp-bg-img" href="img/plans/plans_1.png" style="background-image: url(img/plans/plans_1.png);"></a>
                          <div class="overlay-resize"><i class="icon-expand"></i></div>
                        </div>
                      </div>
                      <div class="article-plans_col">
                        <div class="article-plans_item"><a class="img -resp-bg-img" href="img/plans/plans_2.png" style="background-image: url(img/plans/plans_2.png);"></a>
                          <div class="overlay-resize"><i class="icon-expand"></i></div>
                        </div>
                      </div>
                      <div class="article-plans_col">
                        <div class="article-plans_item"><a class="img -resp-bg-img" href="img/plans/plans_3.png" style="background-image: url(img/plans/plans_3.png);"></a>
                          <div class="overlay-resize"><i class="icon-expand"></i></div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="article-location article-row">
                    <h3>Ubicación</h3>
                    <div id="map" class="article-location_map">

                    </div>
                  </div>

                </article>
              </div>
              <div class="col-lg-4">
                <div class="single-sidebar">
                  <div class="agenecy-sidebar mb-30">

                    <div class="agenecy-sidebar_bot">
                      <form action="javascript:void(0);">
                        <div class="form-group">
                          <input class="form-control" type="text" placeholder="Nombre y Apellido*" required>
                        </div>
                        <div class="form-group">
                          <input class="form-control" type="text" placeholder="Email*" required>
                        </div>
                        <div class="form-group">
                          <textarea class="form-control" placeholder="Mensaje"></textarea>
                        </div>
                        <div class="search-filter_submit">
                          <input class="btn btn-primary btn-md btn-block" type="submit" value="Consultar">
                        </div>
                      </form>
                      <a class="btn btn-primary btn-md btn-block btn-wpp mt-3">Consultar por Whatsapp</a>
                        </div>
                    </div>


                    </div>
                  </div>

                </div>
              </div>
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
              <div class="col-md-3 offset-md-2 footer-col_item">

              </div>
              <div class="col-md-3 footer-col_item">

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
      <footer class="footer js-footer">
        <div class="container">
          <p class="text-center">© 2018 . Rosario Costantini Negocios Inmobiliarios</p>
        </div>
      </footer>
      <!-- FOOTER END-->


      </main>



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
      <script src="{{asset('libs/jquery/jquery.min.js')}}"></script>
      <script src="{{asset('libs/bootstrap/bootstrap.bundle.min.js')}}"></script>
      <script src="{{asset('libs/tweenmax/TweenMax.min.js')}}"></script>
      <script src="{{asset('libs/vivus/vivus.min.js')}}"></script>
      <script src="{{asset('libs/polyfill/polyfill.min.js')}}"></script>
      <script src="{{asset('libs/slick/slick.min.js')}}"></script>
      <script src="{{asset('libs/select2/js/select2.full.min.js')}}"></script>
      <script src="{{asset('libs/nouislider/wNumb.js')}}"></script>
      <script src="{{asset('libs/nouislider/nouislider.min.js')}}"></script>
      <script src="{{asset('libs/slick-lightbox/slick-lightbox.min.js')}}"></script>
      <script src="{{asset('libs/countUp/countUp.min.js')}}"></script>
      <script src="{{asset('libs/shuffle/shuffle.js')}}"></script>
      <script src="{{asset('libs/interact/interact.min.js')}}"></script>
      <script src="{{asset('libs/waypoint/jquery.waypoints.min.js')}}"></script>
      <script src="{{asset('libs/particles/particles.min.js')}}"></script>
      <script src="{{asset('js/common.js')}}"></script>

      <script>
      var map;
      function initMap() {
        map = new google.maps.Map(document.getElementById('map'), {
          center: {lat: -34.3966100, lng: -58.6476400},
          zoom: 15
        });
      }
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCpoFPIYbM5FJS_U25PB-RjycMfE5m4xAg&callback=initMap"
    async defer></script>

    </div>
  </body>

<!-- Mirrored from html.green-estate.krizantos.com/home_04.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 25 Sep 2018 19:07:09 GMT -->
</html>
