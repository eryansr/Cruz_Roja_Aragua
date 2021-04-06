@extends("layouts.cr")

@section("body")

  <!-- Section: intro -->
  <section id="intro" class="intro">

      <!--slider-->
      <section class="carousel-default">
        <div id="carousel-default" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carousel-default" data-slide-to="0" class=""></li>
            <li data-target="#carousel-default" data-slide-to="1" class=""></li>
            <li data-target="#carousel-default" data-slide-to="2" class="active"></li>
          </ol>
          <div class="carousel-inner" role="listbox">
            <!-- NOTE: Bootstrap v4 changes class name to carousel-item -->
            <div class="item">
              <img src="web/img/1-01.jpg" alt="First slide">
            </div>
            <div class="item">
              <img src="web/img/1-02.jpg" alt="Second slide">

            </div>
            <div class="item active">
              <img src="web/img/1-03.jpg" alt="Third slide">

            </div>
          </div>
          <a class="left carousel-control" href="#carousel-default" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="right carousel-control" href="#carousel-default" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </section>
  </section>
  <!-- slider -->

  <!-- /Section: intro -->

  <section id="" class="home-section paddingbot-0">
    <div class="container marginbot-0">
      <div class="row">
        <div class="col-lg-8 col-lg-offset-2">
          <div class="wow fadeInDown" data-wow-delay="0.1s">
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Cards -->
  <div id="wrapper">
      <div class="album py-5 bg-light">
        <div class="container ">
          <div class="row wow fadeInDown" data-wow-delay="0.1s">
            <div class="colmd6-cards col-md-6">
              <div class="card mb-4 shadow-sm">
                <div>
                  <a href="{{ route('voluntarios.index') }}">
                    <img src="web/img/Voluntariado.jpg" title="Ir a la Página de Voluntariado." style="margin-top: 30px; margin-bottom: 20px" class="card-img-top img_fluid img-responsive img1" alt="imagen Voluntariado">
                  </a>
                </div>
                <div class="card-body">
                  <h4 class="h-bold card-title">Voluntariado</h4>
                  <p class="card-text" style="text-align: justify; margin-top: -5px; margin-bottom: 25px; margin-right: 20px; margin-left: 20px;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati reprehenderit deserunt sint porro ex cumque atque error. Dolorem et, perferendis voluptatum fugit ratione, doloremque ad minima dicta accusantium.</p>
                </div>
                <div class="card text-right">
                  <a href="{{ route('voluntarios.create') }}">
                    <button class="btn btn-skin btn-lg" title="Ir a la Página de Voluntariado." style="margin-bottom: 15px">Involúcrate <i class="fa fa-angle-right"></i></button>
                  </a>
                </div>
              </div>
            </div>
            <div class="colmd6-cards col-md-6">
              <div class="card mb-4 shadow-sm">
                <div>
                  <a href="Censo.html">
                  <img src="web/img/censo.jpg" title="Ir a la Página de Censo." style="margin-top: 30px; margin-bottom: 20px" class="card-img-top img_fluid img-responsive img2" alt="imagen Censo">
                  </a>
                </div>
                <div class="card-body">
                  <h4 class="h-bold card-title">Censo</h4>
                  <p class="card-text" style="text-align: justify; margin-top: -5px; margin-bottom: 25px; margin-right: 20px; margin-left: 20px;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati reprehenderit deserunt sint porro ex cumque atque error. Dolorem et, perferendis voluptatum fugit ratione, doloremque ad minima dicta accusantium.</p>
                </div>
                <div class="card text-right">
                  <a href="Censo.html">
                    <button class="btn btn-skin btn-lg" title="Ir a la Página de Censo." style="margin-bottom: 10px; align-items: center;">Verifica <i class="fa fa-angle-right"></i></button>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
  </section>
  <!-- Cards -->


  <!-- Section: team -->
  <section id="doctor" class="home-section bg-gray paddingbot-60">
    <div class="container marginbot-50">
      <div class="row">
        <div class="col-lg-8 col-lg-offset-2">
          <div class="wow fadeInDown" data-wow-delay="0.1s">
            <div class="section-heading text-center">
              <h2 class="h-bold">Doctors</h2>
              <p>Ea melius ceteros oportere quo, pri habeo viderer facilisi ei</p>
            </div>
          </div>
          <div class="divider-short"></div>
        </div>
      </div>
    </div>

    <div class="container">
      <div class="row">
        <div class="col-lg-12">

          <div id="filters-container" class="cbp-l-filters-alignLeft">
            <div data-filter="*" class="cbp-filter-item-active cbp-filter-item">All (
              <div class="cbp-filter-counter"></div>)</div>
            <div data-filter=".cardiologist" class="cbp-filter-item">Cardiologist (
              <div class="cbp-filter-counter"></div>)</div>
            <div data-filter=".psychiatrist" class="cbp-filter-item">Psychiatrist (
              <div class="cbp-filter-counter"></div>)</div>
            <div data-filter=".neurologist" class="cbp-filter-item">Neurologist (
              <div class="cbp-filter-counter"></div>)</div>
          </div>

          <div id="grid-container" class="cbp-l-grid-team">
            <ul>
              <li class="cbp-item psychiatrist">
                <a href="doctors/member1.html" class="cbp-caption cbp-singlePage">
                  <div class="cbp-caption-defaultWrap">
                    <img src="web/img/team/1.jpg" alt="" width="100%">
                  </div>
                  <div class="cbp-caption-activeWrap">
                    <div class="cbp-l-caption-alignCenter">
                      <div class="cbp-l-caption-body">
                        <div class="cbp-l-caption-text">VIEW PROFILE</div>
                      </div>
                    </div>
                  </div>
                </a>
                <a href="doctors/member1.html" class="cbp-singlePage cbp-l-grid-team-name">Alice Grue</a>
                <div class="cbp-l-grid-team-position">Psychiatrist</div>
              </li>
              <li class="cbp-item cardiologist">
                <a href="doctors/member2.html" class="cbp-caption cbp-singlePage">
                  <div class="cbp-caption-defaultWrap">
                    <img src="web/img/team/2.jpg" alt="" width="100%">
                  </div>
                  <div class="cbp-caption-activeWrap">
                    <div class="cbp-l-caption-alignCenter">
                      <div class="cbp-l-caption-body">
                        <div class="cbp-l-caption-text">VIEW PROFILE</div>
                      </div>
                    </div>
                  </div>
                </a>
                <a href="doctors/member2.html" class="cbp-singlePage cbp-l-grid-team-name">Joseph Murphy</a>
                <div class="cbp-l-grid-team-position">Cardiologist</div>
              </li>
              <li class="cbp-item cardiologist">
                <a href="doctors/member3.html" class="cbp-caption cbp-singlePage">
                  <div class="cbp-caption-defaultWrap">
                    <img src="web/img/team/3.jpg" alt="" width="100%">
                  </div>
                  <div class="cbp-caption-activeWrap">
                    <div class="cbp-l-caption-alignCenter">
                      <div class="cbp-l-caption-body">
                        <div class="cbp-l-caption-text">VIEW PROFILE</div>
                      </div>
                    </div>
                  </div>
                </a>
                <a href="doctors/member3.html" class="cbp-singlePage cbp-l-grid-team-name">Alison Davis</a>
                <div class="cbp-l-grid-team-position">Cardiologist</div>
              </li>
              <li class="cbp-item neurologist">
                <a href="doctors/member4.html" class="cbp-caption cbp-singlePage">
                  <div class="cbp-caption-defaultWrap">
                    <img src="web/img/team/4.jpg" alt="" width="100%">
                  </div>
                  <div class="cbp-caption-activeWrap">
                    <div class="cbp-l-caption-alignCenter">
                      <div class="cbp-l-caption-body">
                        <div class="cbp-l-caption-text">VIEW PROFILE</div>
                      </div>
                    </div>
                  </div>
                </a>
                <a href="doctors/member4.html" class="cbp-singlePage cbp-l-grid-team-name">Adam Taylor</a>
                <div class="cbp-l-grid-team-position">Neurologist</div>
              </li>

            </ul>
          </div>
        </div>
      </div>
    </div>

  </section>
  <!-- /Section: team -->

  <!-- Section: direcciones -->
  <section id="facilities" class="home-section paddingbot-60">
      <div class="container marginbot-50">
        <div class="row">
          <div class="col-lg-8 col-lg-offset-2">
            <div class="wow fadeInDown" data-wow-delay="0.1s">
              <div class="section-heading text-center">
                <h2 class="h-bold">Nuestras Direcciones</h2>
              </div>
            </div>
            <div class="divider-short"></div>
          </div>
        </div>
      </div>
    </section>


  <!-- Section: testimonial -->

  <section id="testimonial" class="home-section paddingbot-60 parallax" data-stellar-background-ratio="0.5">

      <div class="carousel-reviews broun-block">
        <div class="container">
          <div class="row">
            <div id="carousel-reviews" class="carousel slide" data-ride="carousel">
              <div class="carousel-inner">
                <div class="item active">
                  <div class="col-md-4 col-sm-6">
                    <div class="block-text rel zmin">
                      <a title="" href="Direcciones.html">Dirección de Salud</a>
                      <div style="margin-top: 15px">
                          <p style="text-align: justify">Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis, officia rerum velit atque nulla unde quis doloribus suscipit, </p>
                      </div>
                      <ins class="ab zmin sprite sprite-i-triangle block"></ins>
                    </div>
                    <div class="person-text rel text-light">
                      <img src="web/img/direccion-01.png" alt="" class="person img-circle" />
                      <a title="" href="Direcciones.html">Dirección de Salud</a>
                    </div>
                  </div>
                  <div class="col-md-4 col-sm-6 hidden-xs">
                    <div class="block-text rel zmin">
                      <a title="" href="Direcciones.html">Dirección de Socorro</a>
                      <div style="margin-top: 15px">
                        <p style="text-align: justify">Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis, officia rerum velit atque nulla unde quis doloribus suscipit, </p>
                      </div>
                      <ins class="ab zmin sprite sprite-i-triangle block"></ins>
                    </div>
                    <div class="person-text rel text-light">
                      <img src="web/img/direccion-02.png" alt="" class="person img-circle" />
                      <a title="" href="Direcciones.html">Dirección de Socorro</a>
                    </div>
                  </div>
                  <div class="col-md-4 col-sm-6 hidden-sm hidden-xs">
                    <div class="block-text rel zmin">
                      <a title="" href="Direcciones.html">Dirección de Busqueda y RCF</a>
                      <div style="margin-top: 15px">
                        <p style="text-align: justify">Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis, officia rerum velit atque nulla unde quis doloribus suscipit, </p>
                      </div>
                      <ins class="ab zmin sprite sprite-i-triangle block"></ins>
                    </div>
                    <div class="person-text rel text-light">
                      <img src="web/img/direccion-03.png" alt="" class="person img-circle" />
                      <a title="" href="Direcciones.html">Dirección de Busqueda y RCF</a>
                    </div>
                  </div>
                </div>

                <div class="item">
                  <div class="col-md-4 col-sm-6">
                    <div class="block-text rel zmin">
                      <a title="" href="Direcciones.html">Dirección de Migración</a>
                      <div style="margin-top: 15px">
                        <p style="text-align: justify">Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis, officia rerum velit atque nulla unde quis doloribus suscipit, </p>
                      </div>
                      <ins class="ab zmin sprite sprite-i-triangle block"></ins>
                    </div>
                    <div class="person-text rel text-light">
                      <img src="web/img/direccion-04.png" alt="" class="person img-circle" />
                      <a title="" href="Direcciones.html">Dirección de Migración</a>
                    </div>
                  </div>
                  <div class="col-md-4 col-sm-6 hidden-xs">
                    <div class="block-text rel zmin">
                      <a title="" href="Direcciones.html">Dirección Juvenil</a>
                      <div style="margin-top: 15px">
                          <p style="text-align: justify">Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis, officia rerum velit atque nulla unde quis doloribus suscipit, </p>
                      </div>
                      <ins class="ab zmin sprite sprite-i-triangle block"></ins>
                    </div>
                    <div class="person-text rel text-light">
                      <img src="web/img/direccion-05.png" alt="" class="person img-circle" />
                      <a title="" href="Direcciones.html">Dirección Juvenil</a>
                    </div>
                  </div>
                  <div class="col-md-4 col-sm-6 hidden-sm hidden-xs">
                    <div class="block-text rel zmin">
                      <a title="" href="Direcciones.html">Dirección de Difusión</a>
                      <div style="margin-top: 15px">
                          <p style="text-align: justify">Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis, officia rerum velit atque nulla unde quis doloribus suscipit, </p>
                      </div>
                      <ins class="ab zmin sprite sprite-i-triangle block"></ins>
                    </div>
                    <div class="person-text rel text-light">
                      <img src="web/img/direccion-06.png" alt="" class="person img-circle" />
                      <a title="" href="Direcciones.html">Dirección de Difusión</a>
                    </div>
                  </div>
                </div>

                <div class="item">
                    <div class="col-md-4 col-sm-6">
                      <div class="block-text rel zmin">
                        <a title="" href="Direcciones.html">Dirección de Gestión y Proyectos</a>
                        <div style="margin-top: 15px">
                          <p style="text-align: justify">Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis, officia rerum velit atque nulla unde quis doloribus suscipit, </p>
                        </div>
                        <ins class="ab zmin sprite sprite-i-triangle block"></ins>
                      </div>
                      <div class="person-text rel text-light">
                        <img src="web/img/direccion-07.png" alt="" class="person img-circle" />
                        <a title="" href="Direcciones.html">Dirección de Gestión y Proyectos</a>
                      </div>
                    </div>
                    <div class="col-md-4 col-sm-6 hidden-xs">
                      <div class="block-text rel zmin">
                        <a title="" href="Direcciones.html">Dirección de Comunicaciones</a>
                        <div style="margin-top: 15px">
                          <p style="text-align: justify">Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis, officia rerum velit atque nulla unde quis doloribus suscipit, </p>
                        </div>
                        <ins class="ab zmin sprite sprite-i-triangle block"></ins>
                      </div>
                      <div class="person-text rel text-light">
                        <img src="web/img/direccion-08.png" alt="" class="person img-circle" />
                        <a title="" href="Direcciones.html">Dirección de Comunicaciones</a>
                      </div>
                    </div>
                  </div>
              </div>

              <a class="left carousel-control" href="#carousel-reviews" role="button" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left"></span>
                </a>
              <a class="right carousel-control" href="#carousel-reviews" role="button" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right"></span>
                </a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- /Section: direcciones  -->



@endsection