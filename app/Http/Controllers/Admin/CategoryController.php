<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Models\Groups;
use App\Models\Models\Category;
use File;

class CategoryController extends Controller
{
    public function index(){
      $category = Category::where('status','!=','3')->get();
      return view('admin.collection.category.index')->with('category' ,$category);

    }

    public function create(){
      $group = Groups::where('status','!=','3')->get();//2-Deleted datas
      return view('admin.collection.category.create')
      ->with('group' ,$group)
      ;

    }

    public function store(Request $request ){

      $category = new Category();
      $category->group_id = $request->input('group_id');
        $category->name = $request->input('name');
        $category->url = $request->input('url');
          $category->descrip = $request->input('descrip');
          //  $category->image= $request->input('images');

          if($request->hasfile('image')){

            $image_file = $request->file('image');
            $img_extension = $image_file->getclientOriginalExtension();
            $img_filename =time() . '.' . $img_extension;
            $image_file->move('uploads/categoryimage/',$img_filename);
            $category->image = $img_filename;


          }
            //  $category->icon = $request->input('icon');

            if($request->hasfile('icon')){

              $icon_file = $request->file('icon');
              $icon_extension = $icon_file->getclientOriginalExtension();
              $icon_filename =time() . '.' . $icon_extension;
              $icon_file->move('uploads/categoryicon/',$icon_filename);
              $category->icon = $icon_filename;


            }
                $category->status = $request->input('status') == true ? '1' : '0';//1= hide 0= show
                $category->save();
                return redirect()->back()->with('status','Category added successfully');
    }


    public function edit($id){

      $group = Groups::where('status','!=','2')->get();//2-Deleted datas
      $category = Category::find($id);
      return view('admin.collection.category.edit')
      ->with('group' ,$group)
      ->with('category' ,$category)
      ;

    }

    public function update(Request $request , $id){
      $category = Category::find($id);
        $category->url =  $request->input('url');
      $category->group_id =  $request->input('group_id');
      $category->descrip =  $request->input('descrip');
      if($request->hasfile('image'))
      {
        $filepath_image = 'uploads/categoryimage/'.$category->image;
        if(File::exists($filepath_image)){
          File::delete($filepath_image);
      }

        $image_file = $request->file('image');
        $img_extension = $image_file->getclientOriginalExtension();
        $img_filename =time() . '.' . $img_extension;
        $image_file->move('uploads/categoryimage/',$img_filename);
        $category->image = $img_filename;


      }


        if($request->hasfile('icon')){

          $filepath_icon = 'uploads/categoryicon/'.$category->icon;
          if(File::exists($filepath_icon)){
            File::delete($filepath_icon);
        }

          $icon_file = $request->file('icon');
          $icon_extension = $icon_file->getclientOriginalExtension();
          $icon_filename =time() . '.' . $icon_extension;
          $icon_file->move('uploads/categoryicon/',$icon_filename);
          $category->icon = $icon_filename;


        }
      $category->status =  $request->input('status') == true ? '1' :0;
      $category->update();

      return redirect()->back()->with('status' ,'Category data updated successfully');



    }


public function delete($id){

  $category =Category::find($id);
  $category->status = '3'; //Deleted records
  $category->update();
  return redirect()->back()->with('status','Catagory Deleted success');

}



}
