@extends('index')
@section('content')
  <section class="vh-100" style="background-color: #ffffff;">
    <div class="container py-5 h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col col-xl-10">
          <div class="card" style="border-radius: 1rem;">
            <div class="row g-0">
              <div class="col-md-6 col-lg-5 d-none d-md-block">
                <img src="{!! asset('img/MujeresUahc.jpg') !!}"
                  alt="mujeres uahc" class="img-fluid" style="border-radius: 1rem 0 0 1rem;" />
              </div>
              <div class="col-md-6 col-lg-7 d-flex align-items-center">
                <div class="card-body p-4 px-lg-5 text-black">

                  <form>
                    <div class="d-flex align-items-center">
                      <img src="{!! asset('img/logohorizontal-sindicato-color428.png') !!}"
                      alt="logo horizontal" class="img-fluid" style="border-radius: 1rem 0 0 1rem;" />
                    </div>

                    <div class="form-outline mb-4">
                      <input type="email" id="form2Example17" class="form-control form-control-lg" />
                      <label class="form-label" for="form2Example17">Usuario</label>
                    </div>

                    <div class="form-outline mb-4">
                      <input type="password" id="form2Example27" class="form-control form-control-lg" />
                      <label class="form-label" for="form2Example27">Clave</label>
                    </div>

                    <div class="pt-1 mb-4">
                      <button class="btn btn-dark btn-lg btn-block w-100" type="button">Ingresar</button>
                    </div>

                  </form>

                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection