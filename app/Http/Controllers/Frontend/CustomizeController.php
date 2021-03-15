<?php

namespace App\Http\Controllers\Frontend;
use App\Models\Models\Products;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Models\SubCategory;

class CustomizeController extends Controller
{
    public function index($id){
      $product =Products::find($id);
      return view('frontend.customize.index')->with('product',$product);

}

}
