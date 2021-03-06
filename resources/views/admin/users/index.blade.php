@extends('layouts.admin')

@section('content')

<div class="container-fluid mt-5">

    <!-- Heading -->
    <div class="card mb-4 wow fadeIn">

      <!--Card content-->
      <div class="card-body d-sm-flex justify-content-between">

        <h4 class="mb-2 mb-sm-0 pt-1">
          <a href="https://mdbootstrap.com/docs/jquery/" target="_blank">Home Page</a>
          <span>/</span>
          <span>Registered Users</span>
        </h4>

      </div>

    </div>


  </div>

  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-body">
          <table class="table table-bordered table-striped">
            <thead>
              <tr>
                <td>Id</td>
                <td>Name</td>
                <td>Email</td>
                <td>Role</td>
                <td>Isban/Unban</td>
                <td>Action</td>
              </tr>
            </thead>

            <tbody>
              @foreach($users as $item)
              <tr>
              <td>{{$item->id}}</td>
              <td>{{$item->name}}</td>
              <td>{{$item->email}}</td>
              <td>{{$item->role_as}}</td>
              <td>
                @if($item->isban=='0')
                <label class="py-2 px-3 btn-primary badge">Not bannned</label>
                @elseif($item->isban=='1')
                  <label class="py-2 px-3 btn-danger badge">banned</label>
                  @endif

              </td>
              <td>
                <a href="{{url('role-edit/'.$item->id)}}" class="badge badge-pill btn-primary">EDIT</a>
                  <a href="{{url('role-delete/'.$item->id)}}" class="badge badge-pill btn-danger">DELETE</a>
              </td>
            </tr>
              @endforeach

            </tbody>

          </table>
        </div>
      </div>
    </div>
  </div>


@endsection
