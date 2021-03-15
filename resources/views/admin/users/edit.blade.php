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
          <span>Registered Users Edit role</span>
        </h4>

      </div>

    </div>


  </div>

  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-body">
          @if (session('status'))
              <div class="alert alert-success" role="alert">
                  {{ session('status') }}
              </div>
          @endif
          <h4>Current Role:{{$users_role->role_as}}</h4>
          <h5>
            isban status
            @if($users_role->isban=='0')
            <label class="py-2 px-3 btn-primary badge">Not bannned</label>
            @elseif($users_role->isban=='1')
              <label class="py-2 px-3 btn-danger badge">banned</label>
              @endif
          </h5>


          <form action="{{url('role-update/'.$users_role->id )}}" method="POST">
            {{csrf_field()}}
            @method('PUT')
          <div class="form-group">
            <input type="text" name="name" class="form-control" value="{{ $users_role->name }}">

          </div>

          <div class="form-group">
            <input type="text" name="name" class="form-control" readonly value="{{$users_role->email}}">

          </div>

          <div class="form-group">
            <select name="roles" class="form-control">
              <option value="">Default</option>
                <option value="admin">admin</option>
                  <option value="vendor">vendor</option>

            </select>

          </div>

          <div class="form-group">
            <select name="isban" class="form-control">
              <option value="">--Select Ban/Unban--</option>
              <option value="">Default</option>
                <option value="1">Ban</option>
                  <option value="0">Unban</option>

            </select>

          </div>
          <div class="form-group">
          <button type="submit" class="btn btn-primary">Update</button>

          </div>
</form>


        </div>
      </div>
    </div>
  </div>


@endsection
