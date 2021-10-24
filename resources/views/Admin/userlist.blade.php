@extends('navbar')

@section('content')

<section class="vh-600" style="background-color: #eeaebc;">
    <div class="container py-5">
      <div class="row d-flex justify-content-center">
            <div class="table-responsive">
                <table id="table_demo" class="table table-bordered table-hover table-dark">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>User Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Comapny</th>
                            <th>Website</th>
                            <th>Action</th>

                        </tr>
                    </thead>

                    <tbody>
                    @foreach ($users as $user)
                        <tr>
                            <td>{{$user->id}}</td>
                            <td>{{$user->name}}</td>
                            <td>{{$user->username}}</td>
                            <td style="color: greenyellow">{{$user->email}}</td>
                            <td>{{$user->phone}}</td>
                            <td>{{$user->company_name}}</td>
                            <td><a href="{{$user->website}}">{{$user->website}}</a></td>
                            <td class="text-right">
                            <a href="{{ URL::to('user/details/'.base64_encode($user->id))}}" class="btn btn-sm btn-success">Details</a>
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
