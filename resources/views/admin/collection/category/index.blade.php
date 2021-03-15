@extends('layouts.admin')

@section('content')

<div class="container-fluid mt-5">
<div class="row">
  <div class="col-md-12">
    <div class="card">
      <div class="card-body">

        <h6 class="mb-0">
          Collection/Category
          <a href="#" class="badge bg-primary float-right p-2 ml-2"></a>
          <a href="{{url('category-add')}}" class="badge bg-primary float-right p-2">Add Categories</a>
        </h6>
      </div>
    </div>
  </div>
</div>
</div>



<div class="row mt-3">

  <div class="col-md-12">
    @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
    @endif
    <div class="card">
      <div class="card-body">
    <table class="table table-stripped table-bordered ">
      <thead>
        <th>ID</th>
        <th>Name</th>
        <th>Group Name</th>
        <th>Icon</th>
          <th>Image</th>
        <th>Show/Hide</th>
        <th>Action</th>
      </thead>
      <tbody>
        @foreach($category as $item)
      <tr>
        <td>{{$item->id}}</td>
        <td>{{$item->name}}</td>
        <td>{{$item->group->name}}</td>
        <td>
          <img src="{{asset('uploads/categoryicon/' .$item->icon)}}" width="50px">
        </td>
        <td>
          <img src="{{asset('uploads/categoryimage/' .$item->image)}}" width="50px">
        </td>
        <td>
          <input type="checkbox" {{$item->status=='1' ? 'checked' : ''}}>

        </td>
        <td>
          <a href="{{url('category-edit/'.$item->id)}}" class="badge btn-primary">Edit</a>
          <a href="{{url('category-delete/'.$item->id)}}" class="badge btn-danger">Delete</a>
        </td>
      </tr>
      @endforeach
      </tbody>
    </table>
  </div>
</div>



@endsection
