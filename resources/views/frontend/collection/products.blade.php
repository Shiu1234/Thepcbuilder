@extends('layouts.frontend')

@section('title')
     Collections -Category -Subcategory -Products
@endsection

@section('content')


<div class="container-fluid card card-body">
  <div class="row">
  <div class="col-md-12">
  <label for="">Collection/{{$subcategory->category->group->name}}/{{$subcategory->category->name}}/{{$subcategory->name}}</label>
  </div>
  </div>

</div>


<div class="container" style="margin-top:60px;">
  <div class="row">

<div class="col-md-12 mb-3">
<span class="font-weight-bold font-sort">Sort as:</span>
<a class="font-sort" href="{{URL::current()}}">All</a>
<a class="font-sort" href="{{URL::current()."?sort=price_asc"}}">Price-Low to high</a>
<a class="font-sort" href="{{URL::current()."?sort=price_desc"}}">Price-High to low</a>
<a class="font-sort" href="{{URL::current()."?sort=newest"}}">Newest</a>
<a class="font-sort" href="{{URL::current()."?sort=popularity"}}">Popularity</a>
</div>

  <div class="col-md-12">
    <div class="row">


          @if(isset($cart_data))
              @if(Cookie::get('shopping_cart'))
            @php  session_start();  @endphp

                                      @foreach ($cart_data as $data)

                                      @php $filte = $data['item_url'];

                                      $_SESSION['files'] = $filte;

                                       @endphp



                                      @endforeach
                                      @endif
                                      @endif





@if(isset($_SESSION['files']) && !empty($_SESSION['files']))
        @foreach($products as $item)


          @if($item->url == $_SESSION['files'])




                 <div class="col-md-3 mb-4">
                   <div class="product_data">
                   <a href ="{{url('collection/'.$item->subcategory->category->group->url.'/'.$item->subcategory->category->url.'/'.$item->subcategory->url.'/'.$item->url)}}">
                   <div class="card">
                     <img src="{{asset('uploads/products/'.$item->image)}}"  style="height:100px; width:70px; margin:auto;"  alt="">

                     <div class="card-body ">



                       <h6 class="mb-4">{{$item->name}}</h6>
                       <input class="filter" type="hidden" value="{{$item->url}}">

                       <div class="row">
                         <div class="col-md-2 col-3">
                           <input type="hidden" class="product_id" value="{{$item->id}}">

                           <input type="number" hidden class="qty-input form-control" value="1" min="1" max="100">
                         </div>
                         <div class="col-md-10 col-9 cart ">
                           <button type="button"  class="add-to-cart-btn btn btn-danger mt-4  px-3  filt card-footer">Add to cart</button>
                         </div>


                       </div>


                     </div>


             </div>
           </a>
             </div>
             </div>








@endif






    @endforeach

@else

    @foreach($products as $item)







             <div class="col-md-3 mb-4">
               <div class="product_data">
               <a href ="{{url('collection/'.$item->subcategory->category->group->url.'/'.$item->subcategory->category->url.'/'.$item->subcategory->url.'/'.$item->url)}}">
               <div class="card" style="height:250px;">
                 <img src="{{asset('uploads/products/'.$item->image)}}" style="height:100px; width:70px; margin:auto;" alt="">

                 <div class="card-body bg-light">



                   <h6 class="mb-0">{{$item->name}}</h6>
                   <input class="filter" type="hidden" value="{{$item->url}}">

                   <div class="row">
                     <div class="col-md-2 col-3">
                       <input type="hidden" class="product_id" value="{{$item->id}}">

                       <input type="number" hidden class="qty-input form-control" value="1" min="1" max="100">
                     </div>
                     <div class="col-md-10 col-9 cart">
                       <button type="button"  class="add-to-cart-btn btn btn-danger m-0 px-3  filt">Add to cart</button>
                     </div>


                   </div>


                 </div>


         </div>
       </a>
         </div>
         </div>















@endforeach
@endif
  @php  session_unset();  @endphp
    </div>
  </div>
  </div>

</div>



@endsection

<style>
.cart{

  margin-top:20px;
}
</style>

<script>


// var yu = sessionStorage.getItem("key");
// console.log(yu);


</script>
