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
          <span>Products</span>
          <a href="{{url('add-products')}}" class="badge bg-primary p-2 float-right ml-2">Add Products</a>
          <a href="" class="badge bg-primary p-2 float-right">History of deleted records </a>
        </h4>


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
        <th>Sub Category Id</th>
        <th>Image</th>
        <th>Show/Hide</th>
        <th>Action</th>
      </thead>
      <tbody>
@foreach($products as $item)
        <tr>

          <td>{{$item->id}}</td>
          <td>{{$item->name}}</td>
          <td>{{$item->subcategory->name}}</td>
          <td><img src="{{asset('uploads/products/'.$item->image)}}" width="60px" alt="Product_image"></td>
          <td>
            <input type="checkbox" {{$item->status == '1' ? 'checked' :''}}>
          </td>
          <td>
            <a href="{{url('product-edit/'.$item->id)}}" class=" badge  btn-info">Edit</a>
              <a href="{{url('delete-products/'.$item->id)}}" class="badge btn-danger">Delete</a>
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
