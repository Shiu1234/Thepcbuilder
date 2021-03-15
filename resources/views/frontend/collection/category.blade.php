@extends('layouts.frontend')

@section('title')
     Collections -Category
@endsection

@section('content')


<div class="container-fluid card card-body">
  <div class="row">
  <div class="col-md-12">
  <label for="">Collection/{{$group->name}}</label>
  </div>
  </div>

</div>


<div class="container" style="margin-top:60px;">
  <div class="row">
  <div class="col-md-12">
    <div class="row">
        @foreach($category as $cate_item)
      <div class="col-md-3 mb-4">
        <div class="card" style="">
          <img src="{{asset('uploads/categoryimage/'.$cate_item->image)}}" class="card-img-top w-100" style="height:180px;" alt="">

          <div class="card-body bg-light">
            <a href="{{url('collection/'.$cate_item->group->url.'/'.$cate_item->url)}}" class="text-center">
            <h4 class="mb-0">{{$cate_item->name}}</h4>
          </a>
          </div>


  </div>
  </div>
    @endforeach
    </div>
  </div>
  </div>

</div>

@endsection
