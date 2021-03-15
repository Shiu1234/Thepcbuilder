@extends('layouts.admin')

@section('content')


<div class="container-fluid mt-5">
<div class="row">
  <div class="col-md-12">
    <div class="card">
      <div class="card-body">

        <h6 class="mb-0">
          Collection/Sub-Category Edit

          <a href="/sub-category"  class="badge bg-danger float-right p-2">BACK</a>
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

  <form action="{{url('sub-category-update/'.$subcategory->id)}}" method="POST" enctype="multipart/form-data">
      {{csrf_field()}}
      {{method_field('PUT')}}
        <div class="row">
          <div class="col-md-6">

            <div class="form-group">
              <label for="">Category Id(Name)</label>
              <select class="form-control" name="category_id">
                <option value="{{$subcategory->category_id}}">{{$subcategory->category->name}}</option>
                @foreach($category as $catitem)
                <option value="{{$catitem->id}}">{{$catitem->name}}</option>



                @endforeach

              </select>
            </div>
            </div>

            <div class="col-md-6">
            <div class="form-group">
              <label for="">Name</label>
              <input type="text" value="{{$subcategory->name}}" name="name"class="form-control" placeholder="Enter name">
            </div>
            </div>

            <div class="col-md-12">
            <div class="form-group">
              <label for="">URL</label>
              <input type="text" value="{{$subcategory->url}}" name="url" class="form-control" placeholder="Enter URL">
            </div>
            </div>

            <div class="col-md-12">
            <div class="form-group">
              <label for="">Description</label>
              <textarea rows="4" name="description" class="form-control" placeholder="Enter Description">{{$subcategory->description}}</textarea>
            </div>
            </div>

            <div class="col-md-6">
            <div class="form-group">
              <label for="">Image</label>
              <input type="file" name="image"class="form-control" >
                <img src="{{asset('uploads/subcategoryimage/' .$subcategory->image)}}" width="50px">
            </div>
            </div>

            <div class="col-md-6">
            <div class="form-group">
              <label for="">priority</label>
              <input type="number" name="priority" value="{{$subcategory->priority}}" class="form-control" placeholder="Enter priority" >
            </div>
            </div>
            <div class="col-md-12">
            <div class="form-group">
              <label for="">Show/Hide</label>
              <input type="Checkbox" {{$subcategory->status == '1' ? 'checked' : '0'}} name="status"class="" placeholder="Enter name">
            </div>
            </div>
            <div class="col-md-12">
          <button type="submit" class="btn btn-primary">update</button>
  </div>
        </div>

      </form>


  </div>
</div>


@endsection
