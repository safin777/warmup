@extends('app');
@section('content')

<section class="vh-100" style="background-color: #9A616D;">
    <div class="container py-5 h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col col-xl-8">
          <div class="card" style="border-radius: 1rem;">
            <div class="row g-0 mx-auto">
              <div class="col-md-6 col-lg-7 d-flex align-items-center">
                <div class="card-body p-4 p-lg-5 text-black">
                    <form action="{{url('get/apis')}}">
                    <div class="pt-1 mb-4">
                      <button class="btn btn-dark btn-lg btn-block" type="submit">Import</button>
                    </div>
                  </form>
                </div>
                <div class="card-body p-4 p-lg-5 text-black">
                    <form action="{{url('clean/database')}}">
                        <div class="pt-1 mb-4">
                          <button class="btn btn-dark btn-lg btn-block" type="submit">Clear</button>
                        </div>
                   </form>
                </div>
              </div>

              <div class="row mx-auto">
                <div class="results">
                    @if (Session::get('success'))

                   <div class="alert alert-success">
                       {{Session::get('success')}}
                   </div>

                    @endif
                </div>
              </div>

              <div class="row mx-auto">
                <div class="results">
                    @if (Session::get('fail'))

                   <div class="alert alert-danger">
                       {{Session::get('fail')}}
                   </div>

                    @endif
                </div>
              </div>

            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  {{-- <div class="row mx-auto mx-3">
    <div class="col-md-2">
        <form action="get/apis">
            <button>Import</button>
        </form>
    </div>

    <div class="col-md-2">
        <form action="clean/database">
            <button>Delete</button>
          </form>
    </div>
  </div> --}}
@endsection

