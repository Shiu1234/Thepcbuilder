@extends('layouts.admin')

@section('content')

<div class="container-fluid mt-5">

    <!-- Heading -->
    <div class="card mb-4 wow fadeIn">

      <!--Card content-->
      <div class="card-body d-sm-flex justify-content-between">

        <h4 class="mb-2 mb-sm-0 pt-1">
          <a href="#" >Collections</a>
          <span>/</span>
          <span>Deleted Groups History</span>

        </h4>

        <form class="d-flex justify-content-center">
          <!-- Default input -->
          <input type="search" placeholder="Type your query" aria-label="Search" class="form-control">
          <button class="btn btn-primary btn-sm my-0 p" type="submit">
            <i class="fa fa-search"></i>
          </button>

        </form>

      </div>

    </div>
    <!-- Heading -->

<div class="row">

  <div class="col-md-12">
    <div class="card">
      <div class="card-body">
    <table class="table table-stripped table-bordered ">
      <thead>
        <th>ID</th>
        <th>Name</th>
        <th>Description</th>
        <th>Show/Hide</th>
        <th>Action</th>

      </thead>
      <tbody>
        @foreach($group as $item)
      <tr>
        <td>{{$item->id}}</td>
        <td>{{$item->name}}</td>
        <td>{{$item->descrip}}</td>
        <td>
          <input type="checkbox" {{$item->status=='1' ? 'checked' : ''}}>

        </td>
        <td>

          <a href="{{url('group-restore/'.$item->id)}}" class="badge btn-danger">Restore</a>
        </td>

      </tr>
      @endforeach
      </tbody>
    </table>
  </div>
</div>
  </div>
</div>








  </div>


@endsection
