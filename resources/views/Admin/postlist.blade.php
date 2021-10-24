@extends('navbar')

@section('content')

<section class="vh-600" style="background-color: #eeaebc;">
    <div class="container py-5">
      <div class="row d-flex ">
            <div class="table-responsive">
                <table id="table_demo" class="table table-bordered table-hover table-dark">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>User name</th>
                            <th>Title</th>
                            <th>Details</th>
                            <th>Action</th>


                        </tr>
                    </thead>

                    <tbody>
                    @foreach ($posts as $post)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{$post->user->name}}</td>
                            <td style="color: greenyellow">{{$post->title}}</td>
                            <td>{{$post->body}}</td>
                            <td class="text-right">
                            <a href="{{ route('post.details', $post->id) }}" class="btn btn-sm btn-success">Details</a>
                        </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>
@endsection
@section('styles')
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.css">
@endsection

@section('javascript')
 <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.js"></script>
 <script>
     $(document).ready( function () {
      $('#table_demo').DataTable();
     } );
   </script>
 @endsection
