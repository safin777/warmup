@extends('navbar')

@section('content')
<section class="vh-600" style="background-color: #eeaebc;">
    <div class="container">
      <div class="row">
          <h2 class="align-item-center">{{$post->title}}</h2>

            <div class="col-12 mb-4">
                <div class="card">
                    <div class="card-header">
                        <h4 style="color:rgb(27, 48, 231)">{{ $post->title }}</h4>
                    </div>
                    <div class="card-body">
                        <p class="p-2">
                            {{ $post->body }}
                        </p>
                    </div>
                    <div class="card-footer">
                    <strong style="color:blue">Posted By:{{$userInfo->name}}</strong>
                    </div>
                </div>
            </div>
      </div>

      <div class="row">
          <div class="col-12 mb-4">
              <div class="card">
                  <div class="card-header">
                      <h4 style="color:blue">Comments</h4>
                  </div>
                  <div class="card-body">
                      @foreach ($postComments as $comment)
                     <ul>

                         <li class="p-2 ">
                           {{$comment->body}}
                         </li>
                     </ul>
                      @endforeach
                  </div>

              </div>
          </div>
    </div>

    </div>
</section>

@endsection
