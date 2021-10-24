@extends('navbar')

@section('content')

<section class="vh-600" style="background-color: #eeaebc;">
    <div class="container">

      <div class="row d-flex mx-auto">
        <div class="col-md-12">
            <div class="card" style="width: 65rem; background-color:#eb6985;">
                <div class="card-body">
                  <h5 class="card-title">{{$userDetails->name}}</h5>
                  <h6 class="card-subtitle mb-2 text-muted">{{$userDetails->email}}</h6>
                  <p class="card-text">Company Name: {{$userDetails->company_name}}</p>
                  <p class="card-text">City:{{$userDetails->city}}</p>
                  <p class="card-text">Phone : {{$userDetails->phone}}</p>
                  <a href="{{$userDetails->website}}" class="card-link">Website Link</a>
                </div>
              </div>
        </div>
      </div>

      {{-- Post section --}}

      
    </div>
</section>
@endsection

