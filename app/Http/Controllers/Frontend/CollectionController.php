<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Request;
use Illuminate\Support\Facades\Cookie;
use App\Models\Models\Groups;
use App\Models\Models\Category;
use App\Models\Models\SubCategory;
use App\Models\Models\Products;

class CollectionController extends Controller
{
    public function groupview($group_url){

      $group = Groups::where('url',$group_url)->first();
      $group_id =$group->id;

      $category =Category::where('group_id',$group_id)->where('status','!=','2')->where('status','0')->get();
      return view('frontend.collection.category')
      ->with('category',$category)
      ->with('group',$group)
      ;

    }

    public function subcategoryview($group_url,$cate_url){

      $cookie_data = stripslashes(Cookie::get('shopping_cart'));
      $cart_data = json_decode($cookie_data, true);

      $category = Category::where('url',$cate_url)->first();
      $category_id =$category->id;

      $subcategory =SubCategory::where('category_id',$category_id)->where('status','!=','2')->where('status','0')->get();
      return view('frontend.collection.subcategory')
      ->with('subcategory',$subcategory)
      ->with('category',$category)
        ->with('cart_data',$cart_data)
      ;

    }

    public function cartloadbyajax()
     {
         if(Cookie::get('shopping_cart'))
         {
             $cookie_data = stripslashes(Cookie::get('shopping_cart'));
             $cart_data = json_decode($cookie_data, true);
             $totalcart = count($cart_data);

             echo json_encode(array('totalcart' => $totalcart)); die;
             return;
         }
         else
         {
             $totalcart = "0";
             echo json_encode(array('totalcart' => $totalcart)); die;
             return;
         }
     }


    public function productsview(Request $request,$group_url,$cate_url,$subcate_url)
    {

      $cookie_data = stripslashes(Cookie::get('shopping_cart'));
      $cart_data = json_decode($cookie_data, true);

      $subcategory = SubCategory::where('url',$subcate_url)->first();
      $subcategory_id =$subcategory->id;

      if(Request::get('sort') == 'price_asc')
      {
      $products =Products::where('sub_category_id',$subcategory_id)
      ->orderBy('offer_tag','asc')
      ->where('status','!=','2')
      ->where('status','0')->get();

      }elseif(Request::get('sort') == 'price_desc'){
        $products =Products::where('sub_category_id',$subcategory_id)
        ->orderBy('offer_tag','desc')
        ->where('status','!=','2')
        ->where('status','0')->get();
      }elseif(Request::get('sort') == 'newest'){
        $products =Products::where('sub_category_id',$subcategory_id)
        ->orderBy('created_at','desc')
        ->where('status','!=','2')
        ->where('status','0')->get();
      }elseif(Request::get('sort') == 'popularity'){
        $products =Products::where('sub_category_id',$subcategory_id)
        ->where('popular_products','1')
        ->where('status','!=','2')
        ->where('status','0')->get();
      }

      else{
          $products =Products::where('sub_category_id',$subcategory_id)->where('status','!=','2')->where('status','0')->get();

}

      return view('frontend.collection.products')
      ->with('products',$products)
      ->with('subcategory',$subcategory)
        ->with('cart_data',$cart_data)
      ;

    }


    public function prodview($group_url,$cate_url,$subcate_url,$prod_url){



      $products =Products::where('url',$prod_url)->where('status','!=','2')->where('status','0')->first();
      return view('frontend.collection.product-view')
      ->with('products',$products)

      ;

    }

    public function calculate($id){

      return view('frontend.collection.calculate-price');
    }
}
