@extends("layouts.cr")

@section("body")

    <!-- Section: testimonial -->

      <div class="banner-content-w3pvt">
            <section id="subscribe">
            <div class="container wow fadeInUp">
                <div id="text" class="section-header">
                  <h2>Verifica</h2>
                  <div class="divider-short"></div>
                  <p>Introduzca su cédula de identidad</p>
              </div>

                <form action="{{ route('processCenso') }}" method="POST" role="search">
                  @csrf
                  <div class="form-row justify-content-center" style="margin-top: 30px;">
                      <div>

                        <input id="cedula" name="verify" type="number" class="" style="margin-right: 15px; margin-left: 15px;" placeholder="Cédula">
                      </div>
                      <div class="">
                        <button style="color: white; text-shadow: grey 0.1em 0.1em 0.2em" type="submit" class="btn btn-skin btn-lg">Verifica <i class="fa fa-search"></i></button>
                      </div>
                  </div>
                </form>

              </div>
            </section>
          </div>
      </div>
      <!-- /Section: direcciones  -->

@endsection