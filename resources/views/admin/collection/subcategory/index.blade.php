@extends('layouts.admin')

@section('content')

<div class="modal fade" id="SubcategoryModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
        <form action="{{url('sub-category-store')}}" method="POST" enctype="multipart/form-data">
      <div class="modal-body">

          {{csrf_field()}}
        <div class="row">
          <div class="col-md-6">

            <div class="form-group">
              <label for="">Category Id(Name)</label>
              <select class="form-control" name="category_id">
                <option value="">Select</option>
                @foreach($category as $catitem)
                <option value="{{$catitem->id}}">{{$catitem->name}}</option>



                @endforeach

              </select>
            </div>
            </div>

            <div class="col-md-6">
            <div class="form-group">
              <label for="">Name</label>
              <input type="text" name="name"class="form-control" placeholder="Enter name">
            </div>
            </div>

            <div class="col-md-6">
            <div class="form-group">
              <label for="">Custom URL/Slug</label>
              <input type="text" name="url" class="form-control" placeholder="Enter name">
            </div>
            </div>

            <div class="col-md-12">
            <div class="form-group">
              <label for="">Description</label>
              <textarea rows="4" name="description" class="form-control" placeholder="Enter Description"></textarea>
            </div>
            </div>

            <div class="col-md-6">
            <div class="form-group">
              <label for="">Image</label>
              <input type="file" name="image"class="form-control" >
            </div>
            </div>

            <div class="col-md-6">
            <div class="form-group">
              <label for="">priority</label>
              <input type="number" name="priority" class="form-control" placeholder="Enter priority" >
            </div>
            </div>
            <div class="col-md-12">
            <div class="form-group">
              <label for="">Show/Hide</label>
              <input type="Checkbox" name="status"class="" placeholder="Enter name">
            </div>
            </div>

        </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
      </div>
        </form>
    </div>
  </div>
</div>

<div class="container-fluid mt-5">
<div class="row">
  <div class="col-md-12">
    <div class="card">
      <div class="card-body">

        <h6 class="mb-0">
          Collection/Sub-Category
          <a href="#" class="badge bg-primary float-right p-2 ml-2">Deleted Records</a>
          <a href="#" data-toggle="modal" data-target="#SubcategoryModal" class="badge bg-primary float-right p-2">Add SubCategories</a>
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
        <th>Category Name</th>
          <th>Image</th>
        <th>Show/Hide</th>
        <th>Action</th>
      </thead>
      <tbody>
        @foreach($subcategory as $item)
        <tr>
          <td>{{$item->id}}</td>
          <td>{{$item->name}}</td>
          <td>{{$item->category->name}}</td>
          <td>
            <img src="{{asset('uploads/subcategoryimage/' .$item->image)}}" width="50px">
          </td>
          <td>
            <input type="checkbox" {{$item->status=='1' ? 'checked' : ''}}>

          </td>
          <td>
            <a href="{{url('subcategory-edit/'.$item->id)}}" class="badge btn-primary">Edit</a>
            <a href="{{url('subcategory-delete/'.$item->id)}}" class="badge btn-danger">Delete</a>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>



@endsection
