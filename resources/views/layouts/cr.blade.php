<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Página de la Cruz Roja</title>
  <!-- Favicons -->
  <link href="web/img/favicon.png" rel="icon">


  <!-- css -->
  <link href="web/css/bootstrap.min.css" rel="stylesheet" type="text/css">
  <link href="web/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
  <link rel="stylesheet" type="text/css" href="web/plugins/cubeportfolio/css/cubeportfolio.min.css">
  <link href="web/css/nivo-lightbox.css" rel="stylesheet" />
  <link href="web/css/nivo-lightbox-theme/default/default.css" rel="stylesheet" type="text/css" />
  <link href="web/css/owl.carousel.css" rel="stylesheet" media="screen" />
  <link href="web/css/owl.theme.css" rel="stylesheet" media="screen" />
  <link href="web/css/animate.css" rel="stylesheet" />
  <link href="web/css/style.css" rel="stylesheet">

  <!-- boxed bg -->
  <link id="bodybg" href="web/bodybg/bg1.css" rel="stylesheet" type="text/css" />
  <!-- template skin -->
  <link id="t-colors" href="web/color/default.css" rel="stylesheet">

@yield("head")
</head>
<body id="page-top" data-spy="scroll" data-target=".navbar-custom">


  <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
    <div class="top-area">
      <div class="container">
        <div class="row">
          <div class="col-sm-6 col-md-6">
            <a class="navbar-brand" href="{{ route('cr') }}">
              <img class="logo" src="img/logo3-01.png" alt="" />
            </a>
            <p class="bold text-left"> </p>
          </div>
          <div class="col-sm-6 col-md-6">
            <div class="social-links-nav">
              <a href="https://www.facebook.com/cruzrojaaraguaoficial/" class="redes-link-nav logosredes navbar-brand2"><i class="fa fa-facebook"></i></a>
              <a href="https://twitter.com/CruzRojaAragua" class="redes-link-nav logosredes navbar-brand2"><i class="fa fa-twitter"></i></a>
              <a href="https://www.instagram.com/cruzrojaaraguaoficial/" class="redes-link-nav logosredes navbar-brand2"><i class="fa fa-instagram"></i></a>
            </div>
            <p class="bold text-right"></p>
          </div>
        </div>
      </div>
    </div>
    <div class="container navigation ftco-navbar-light">
      <div class="navbar-header page-scroll">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
          <i class="fa fa-bars"></i>
        </button>
      </div>
      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse navbar-right navbar-main-collapse bloque-both">
        <ul class="nav navbar-nav nav-menu-red ">
          <li>
            <a href="{{route('cr')}}" style="font-size: 16px;">INICIO</a>
          </li>
        </ul>
        </div>
        <div class="collapse navbar-collapse navbar-right navbar-main-collapse bloque-right">
          <ul class="nav navbar-nav nav-menu-red ">
            <li class="dropdown">
              <a href="{{route('info')}}" style="font-size: 16px;" data-toggle="dropdown">QUIÉNES SOMOS <i class="fa fa-angle-down"></i></a>
              <ul class="dropdown-menu" style="margin-top: 0px;">
                  <li><a href="{{route('info')}}"><i class="fa fa-angle-double-right arrow-color-footer"></i> Historia</a></li>
                  <li><a href="{{route('info')}}"><i class="fa fa-angle-double-right arrow-color-footer"></i> Misión y Visión </a></li>
                  <li><a href="{{route('info')}}"><i class="fa fa-angle-double-right arrow-color-footer"></i> Principios de la Cruz Roja</a></li>
                </ul>
            </li>
          </ul>
        </div>
          <div class="collapse navbar-collapse navbar-right navbar-main-collapse bloque-right">
            <ul class="nav navbar-nav nav-menu-red ">
              <li class="dropdown">
                <a href="{{route('info')}}" style="font-size: 16px;" data-toggle="dropdown">SERVICIOS <i class="fa fa-angle-down"></i></a>
                  <ul class="dropdown-menu" style="margin-top: 0px;">
                    <li><a href="{{route('info')}}"><i class="fa fa-angle-double-right arrow-color-footer"></i> Historia</a></li>
                    <li><a href="{{route('info')}}"><i class="fa fa-angle-double-right arrow-color-footer"></i> Misión y Visión </a></li>
                    <li><a href="{{route('info')}}"><i class="fa fa-angle-double-right arrow-color-footer"></i> Principios de la Cruz Roja</a></li>
                  </ul>
              </li>
            </ul>
          </div>

          <div class="collapse navbar-collapse navbar-right navbar-main-collapse bloque-right">
            <ul class="nav navbar-nav nav-menu-red ">
              <li class="dropdown">
                <a href="{{route('address')}}" style="font-size: 16px;" data-toggle="dropdown">INFORMACIÓN <i class="fa fa-angle-down"></i></a>
                  <ul class="dropdown-menu" style="margin-top: 0px;">
                    <li><a href="{{route('address')}}"><i class="fa fa-angle-double-right arrow-color-footer"></i> direcciones</a></li>
                    <li><a href="{{route('address')}}"><i class="fa fa-angle-double-right arrow-color-footer"></i> Home Form</a></li>
                    <li><a href="{{route('address')}}"><i class="fa fa-angle-double-right arrow-color-footer"></i> Home video</a></li>
                  </ul>
              </li>
            </ul>
          </div>
          <!--botones-->
  <div class="collapse navbar-collapse navbar-main-collapse navbar-custom-botones" style="float: right; margin-left: 1px;">
    <ul class="nav navbar-nav nav-menu-botones">
    <li  id="sinlinia">
      <a href="{{route('censoinfo')}}" class="boton-censo" style="font-size: 16px;" type="submit">CENSO</a>
    </li>
    </ul>
  </div>
  <div class="collapse navbar-collapse navbar-main-collapse navbar-custom-boton" style="float: right; margin-right: 1px;">
      <ul class="nav navbar-nav nav-menu-boton">
        <li  id="sinlinia">
      <a href="{{route('voluntarioinfo')}}" style="font-size: 16px;" type="submit">VOLUNTARIADO</a>
      </li>
    </ul>
  </div>
</div>
</div>
      <!--botones-->
@yield("nav")
</nav>

<div>
  @yield("body")
</div>

<div>
  <!--footer-->
  <footer id="footer">
    <div class="footer-top">
    <div class="container">
      <div class="row">
        <div class="col-sm-6 col-md-4">
          <div class="wow fadeInDown" data-wow-delay="0.1s">
            <div class="widget">
              <h5>Acerca de la Cruz Roja</h5>
              <div class="divider-short-footer"></div>
              <p id="color">
                Lorem ipsum dolor sit amet, ne nam purto nihil impetus, an facilisi accommodare sea
              </p>
            </div>
          </div>
          <div class="wow fadeInDown" data-wow-delay="0.1s">
            <div class="widget a li-footer">
              <h5>Información</h5>
              <div class="divider-short-footer"></div>
              <ul>
                <li><i class="fa fa-angle-right arrow-color-footer"></i><a href="Informacion.html"> Historia</a></li>
                <li><i class="fa fa-angle-right arrow-color-footer"></i><a href="Informacion.html"> Misión y Visión</a></li>
                <li><i class="fa fa-angle-right arrow-color-footer"></i><a href="Informacion.html"> Principios</a></li>
                <li><i class="fa fa-angle-right arrow-color-footer"></i><a href="Direcciones.html"> Direcciones</a></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-4">
          <div class="wow fadeInDown" data-wow-delay="0.1s">
            <div class="widget">
              <h5>Cruz Roja</h5>
              <div class="divider-short-footer"></div>
              <p id="color">
                Nam leo lorem, tincidunt id risus ut, ornare tincidunt naqunc sit amet.
              </p>
              <ul>
                <li id="color">
                  <span class="fa-stack">
                    <i class="fa fa-circle fa-stack-2x"></i>
                    <i class="fa fa-envelope-o fa-stack-1x fa-inverse"></i>
                  </span> ejemplo@mail.com
                </li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-4">
          <div class="wow fadeInDown" data-wow-delay="0.1s">
            <div class="widget">
              <h5>Síguenos</h5>
              <div class="divider-short-footer"></div>
              <!--social
              <ul class="company-social">
                <li class="social-facebook" title="Síguenos en Facebook"><a href="#"><i class="fa fa-facebook"></i></a></li>
                <li class="social-twitter" title="Síguenos en Twitter"><a href="#"><i class="fa fa-twitter"></i></a></li>
                <li class="social-instagram" title="Síguenos en Instagram"><a href="#"><i class="fa fa-instagram"></i></a></li>
              </ul>
              -->
              <div class="social-links">
                <a title="Síguenos en Twitter" href="https://twitter.com/CruzRojaAragua" class="redes-link-footer"><i class="fa fa-twitter"></i></a>
                <a title="Síguenos en Facebook" href="#" class="redes-link-footer"><i class="fa fa-facebook"></i></a>
                <a title="Síguenos en Instagram" href="https://www.instagram.com/cruzrojaaraguaoficial/" class="redes-link-footer"><i class="fa fa-instagram"></i></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="sub-footer">
      <div class="container">
        <div class="row">
          <div class="col-sm-6 col-md-6">
            <div class="wow fadeInLeft" data-wow-delay="0.1s">
              <div class="text-left">
                <p>&copy;Copyright - Cruz Roja. Todos los Derechos Reservados.</p>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-md-6 col-lg-6">
            <div class="wow fadeInRight" data-wow-delay="0.1s">
              <div class="text-right">
                <div class="credits">
                  <!--
                    All the links in the footer should remain intact.
                    You can delete the links only if you purchased the pro version.
                    Licensing information: https://bootstrapmade.com/license/
                    Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Medicio
                  -->
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>

</div>

  <a href="#" class="scrollup" style="z-index: 1000;"><i class="fa fa-angle-up active"></i></a>

  <!-- Core JavaScript Files -->
  <script src="web/js/jquery.min.js"></script>
  <script src="web/js/jquery.easing.min.js"></script>
  <script src="web/js/jquery.scrollTo.js"></script>
  <script src="web/js/jquery.appear.js"></script>
  <script src="web/js/bootstrap.min.js"></script>
  <script src="web/js/wow.min.js"></script>
  <script src="web/js/stellar.js"></script>
  <script src="web/plugins/cubeportfolio/js/jquery.cubeportfolio.min.js"></script>
  <script src="web/js/owl.carousel.min.js"></script>
  <script src="web/js/nivo-lightbox.min.js"></script>
  <script src="web/js/custom.js"></script>
</body>

</html>
