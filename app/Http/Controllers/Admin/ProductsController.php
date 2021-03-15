<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Models\Subcategory;
use App\Models\Models\Products;
use File;

class ProductsController extends Controller
{
    //

    public function index(){
      $products =Products::where('status' ,'!=' ,'3')->get();
      return view('admin.collection.products.index')
      ->with('products',$products)
      ;
    }

    public function store(){

      $subcategory = Subcategory::where('status','!=','3')->get();
      return view('admin.collection.products.create')
      ->with('subcategory' ,$subcategory)
      ;
    }

    public function add(Request $request){
      $products = new Products();
        $products->name  =$request->input('name');
      $products->sub_category_id  =$request->input('sub_category_id');
        $products->url =$request->input('url');
          $products->small_description =$request->input('small_description');
          if($request->hasfile('image')){

            $image_file = $request->file('image');
            $img_extension = $image_file->getclientOriginalExtension();
            $img_filename =time() . '.' . $img_extension;
            $image_file->move('uploads/products/',$img_filename);
            $products->image = $img_filename;


          }
            $products->p_highlight_heading =$request->input('p_highlight_heading');
              $products->p_highlights =$request->input('p_highlights');
                $products->p_description_heading =$request->input('p_description_heading');
                  $products->p_description =$request->input('p_description');
                    $products->p_det_heading =$request->input('p_det_heading');
                      $products->p_details =$request->input('p_details');
                        $products->offer_tag =$request->input('offer_tag');
                        $products->sale_tag =$request->input('sale_tag');
                          $products->price =$request->input('price');
                            $products->quality =$request->input('quality');
                              $products->priority =$request->input('priority');
                                $products->new_arrival_products  =$request->input('new_arrival_products') == true ? '1' :'0';
                                  $products->featured_products =$request->input('featured_products')== true ? '1' :'0';
                                    $products->popular_products =$request->input('popular_products')== true ? '1' :'0';
                                      $products->offers_products =$request->input('offers_products')== true ? '1' :'0';
                                        $products->status =$request->input('status')== 'true' ? '1' :'0';
                                    $products->meta_title =$request->input('meta_title');

                                        $products->meta_descrip =$request->input('meta_descrip');
                                          $products->meta_keyword =$request->input('meta_keyword');

                                $products->save();
                                return redirect()->back()->with('status','Product added successfully');





    }


    public function edit($id){
     $subcategory = Subcategory::where('status','!=','3')->get(); //3->Deleted status
      $products = Products::find($id);
      return view('admin.collection.products.edit')
        ->with('subcategory' ,$subcategory)
        ->with('products' ,$products)
      ;


    }

    public function update(Request $request,$id){

      $products = Products::find($id);
      $products->name  =$request->input('name');
    $products->sub_category_id  =$request->input('sub_category_id');
      $products->url =$request->input('url');
        $products->small_description =$request->input('small_description');
        if($request->hasfile('image'))
        {
          $filepath_image = 'uploads/products/'.$products->image;
          if(File::exists($filepath_image)){
            File::delete($filepath_image);
        }

          $image_file = $request->file('image');
          $img_extension = $image_file->getclientOriginalExtension();
          $img_filename =time() . '.' . $img_extension;
          $image_file->move('uploads/products/',$img_filename);
          $products->image = $img_filename;


        }
          $products->p_highlight_heading =$request->input('p_highlight_heading');
            $products->p_highlights =$request->input('p_highlights');
              $products->p_description_heading =$request->input('p_description_heading');
                $products->p_description =$request->input('p_description');
                  $products->p_det_heading =$request->input('p_det_heading');
                    $products->p_details =$request->input('p_details');
                      $products->offer_tag =$request->input('offer_tag');
                      $products->sale_tag =$request->input('sale_tag');
                        $products->price =$request->input('price');
                          $products->quality =$request->input('quality');
                            $products->priority =$request->input('priority');
                              $products->new_arrival_products  =$request->input('new_arrival_products') == true ? '1' :'0';
                                $products->featured_products =$request->input('featured_products')== true ? '1' :'0';
                                  $products->popular_products =$request->input('popular_products')== true ? '1' :'0';
                                    $products->offers_products =$request->input('offers_products')== true ? '1' :'0';
                                      $products->status =$request->input('status')== 'true' ? '1' :'0';
                                  $products->meta_title =$request->input('meta_title');

                                      $products->meta_descrip =$request->input('meta_descrip');
                                        $products->meta_keyword =$request->input('meta_keyword');

                              $products->update();
                              return redirect()->back()->with('status','Product updated successfully');



    }

    public function delete($id){

      $products = Products::find($id);
      $products->status = '3'; //Deleted records
      $products->update();
      return redirect()->back()->with('status','Products Deleted success');

    }


}
