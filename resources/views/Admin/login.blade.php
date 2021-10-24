@extends('app');

@section('content')

    <section class="vh-100" style="background-color: #9A616D;">
        <div class="container py-5 h-100">
          <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col col-xl-8">
              <div class="card" style="border-radius: 1rem;">
                <div class="row g-0">
                  <div class="col-md-6 col-lg-5 d-none d-md-block">
                    <img
                      src="https://mdbootstrap.com/img/Photos/new-templates/bootstrap-login-form/img2.jpg"
                      alt="login form"
                      class="img-fluid" style="border-radius: 1rem 0 0 1rem;"
                    />
                  </div>
                  <div class="col-md-6 col-lg-7 d-flex align-items-center">
                    <div class="card-body p-4 p-lg-5 text-black">

                      <form action="{{url('admin/login')}}" method="post">
                        @csrf

                        <div class="results">
                            @if (Session::get('fail'))

                           <div class="alert alert-danger">
                               {{Session::get('fail')}}
                           </div>

                            @endif
                        </div>
                        <div class="d-flex align-items-center mb-3 pb-1">
                          <i class="fas fa-cubes fa-2x me-3" style="color: #ff6219;"></i>
                          <span class="h1 fw-bold mb-0 ">Warm Up</span>
                        </div>

                        <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Sign into your account</h5>

                        <div class="form-outline mb-4">
                          <input type="email" id="form2Example17" name="email" class="form-control form-control-lg" autocomplete="off" />
                          <label class="form-label" for="form2Example17">Email address</label>
                          <br>
                          @if ($errors->has('email'))
                          <span class="text-danger">{{ $errors->first('email') }}</span>
                          @endif

                        </div>

                        <div class="form-outline mb-4">
                          <input type="password" id="form2Example27" name="password" class="form-control form-control-lg" />
                          <label class="form-label" for="form2Example27">Password</label>
                          <br>
                          @if ($errors->has('password'))
                            <span class="text-danger">{{ $errors->first('password') }}</span>
                          @endif

                        </div>

                        <div class="pt-1 mb-4">
                          <button class="btn btn-dark btn-lg btn-block" type="submit">Login</button>
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
