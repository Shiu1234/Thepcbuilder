<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Models\Subcategory;
use App\Models\Models\Category;
use File;

class SubcategoryController extends Controller
{
    //
    public function index(){
      $category = Category::where('status','!=','3')->get();
      $subcategory = Subcategory::where('status','!=','3')->get();//3->deleted records
      return view('admin.collection.subcategory.index')
      ->with('subcategory',$subcategory)
        ->with('category',$category)
      ;
    }

    //
    public function store(Request $request){

      $subcategory = new Subcategory();
      $subcategory->category_id = $request->input('category_id');
      $subcategory->name = $request->input('name');
      $subcategory->url = $request->input('url');
      $subcategory->description = $request->input('description');
      if($request->hasfile('image')){

        $image_file = $request->file('image');
        $img_extension = $image_file->getclientOriginalExtension();
        $img_filename =time() . '.' . $img_extension;
        $image_file->move('uploads/subcategoryimage/',$img_filename);
        $subcategory->image = $img_filename;


      }
      $subcategory->priority = $request->input('priority');
        $subcategory->status   = $request->input('status  ') =='true' ? '1' : '0';

        $subcategory->save();

        return redirect()->back()->with('status' ,'Subcategory added successfully');


    }


    public function edit($id){

      $category = Category::where('status','!=','3')->get();//3-Deleted datas
      $subcategory = Subcategory::find($id);
      return view('admin.collection.subcategory.edit')
      ->with('category' ,$category)
      ->with('subcategory' ,$subcategory)
      ;

    }

    public function update(Request $request , $id){
      $subcategory = Subcategory::find($id);
      $subcategory->category_id =  $request->input('category_id');
        $subcategory->name =  $request->input('name');
          $subcategory->url = $request->input('url');
      $subcategory->description =  $request->input('description');
      if($request->hasfile('image'))
      {
        $filepath_image = 'uploads/categoryimage/'.$subcategory->image;
        if(File::exists($filepath_image)){
          File::delete($filepath_image);
      }

        $image_file = $request->file('image');
        $img_extension = $image_file->getclientOriginalExtension();
        $img_filename =time() . '.' . $img_extension;
        $image_file->move('uploads/subcategoryimage/',$img_filename);
        $subcategory->image = $img_filename;


      }
        $subcategory->priority =  $request->input('priority');
      $subcategory->status =  $request->input('status') == true ? '1' :0;
      $subcategory->update();

      return redirect('sub-category')->with('status' ,'SubCategory data updated successfully');



    }


public function delete($id){

  $subcategory =Subcategory::find($id);
  $subcategory->status = '3'; //Deleted records
  $subcategory->update();
  return redirect()->back()->with('status','SubCatagory Deleted success');

}
}
