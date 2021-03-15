<?php

use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('frontend.index');
});
//front-end
Route::get('collection/{group_url}','App\Http\Controllers\Frontend\CollectionController@groupview');
Route::get('collection/{group_url}/{cate_url}','App\Http\Controllers\Frontend\CollectionController@subcategoryview');
Route::get('collection/{group_url}/{cate_url}/{subcate_url}','App\Http\Controllers\Frontend\CollectionController@productsview');
Route::get('collection/{group_url}/{cate_url}/{subcate_url}/{prod_url}','App\Http\Controllers\Frontend\CollectionController@prodview');

Route::post('add-to-cart','App\Http\Controllers\Frontend\CartController@addtocart');
Route::get('cart','App\Http\Controllers\Frontend\CartController@index');
Route::get('load-cart-data','App\Http\Controllers\Frontend\CartController@cartloadbyajax');
  Route::post('update-to-cart','App\Http\Controllers\Frontend\CartController@updatetocart');
  Route::delete('delete-from-cart','App\Http\Controllers\Frontend\CartController@deletefromcart');
  Route::get('clear-cart','App\Http\Controllers\Frontend\CartController@clearcart');
//calculator
Route::get('processor','App\Http\Controllers\Frontend\CollectionController@processor');
Route::get('calculator/{id}','App\Http\Controllers\Frontend\CollectionController@calculate');
Route::get('/thank-you','App\Http\Controllers\Frontend\CartController@thankyou');

Route::get('/customize-pc','App\Http\Controllers\CustomizepcController@index');
Route::get('contact','App\Http\Controllers\Frontend\ContactusController@index');
Route::post('get-quote','App\Http\Controllers\Frontend\ContactusController@submitform');


// Route::get('/sell-laptop', function () {
//     return view('vendor.sellcomputer');
// });

//   Route::get('/sell-laptop' ,'App\Http\Controllers\SellController@index');
//
//   Route::get('/sell-product/{product-name}' ,'App\Http\Controllers\SellController@sellold');
//
// Route::get('/sell-product', function () {
//     return view('vendor.sell-product');
// });
//
// Route::get('/used-series', function () {
//     return view('vendor.usedseries');
// });
//
// Route::get('/calculator', function () {
//     return view('vendor.calculator');
// });
//
// Route::get('/calculate-price', function () {
//     return view('vendor.calculateprice');
// });
//
// Route::get('/addfeatures', function () {
//     return view('vendor.addfeatures');
// });



Auth::routes();
Route::group(['middleware' => ['auth' ,'isUser']], function() {

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('checkout' ,'App\Http\Controllers\Frontend\CheckoutController@index');
Route::post('place-order','App\Http\Controllers\Frontend\CheckoutController@storeorder');
Route::get('customize/{id}','App\Http\Controllers\Frontend\CustomizeController@index');

Route::post('confirm-razorpay-payment','App\Http\Controllers\Frontend\CheckoutController@checkamount');



  });

Route::group(['middleware' => ['auth' ,'isAdmin']], function() {

  Route::get('/dashboard', function () {
      return view('admin.dashboard');
  });

  Route::get('registered-users' ,'App\Http\Controllers\Admin\RegisteredController@index');
  Route::get('role-edit/{id}','App\Http\Controllers\Admin\RegisteredController@edit');
    Route::put('role-update/{id}','App\Http\Controllers\Admin\RegisteredController@update');
    Route::get('role-delete/{id}' ,'App\Http\Controllers\Admin\RegisteredController@delete');

    //Groups
      Route::get('group' ,'App\Http\Controllers\Admin\GroupController@index');
      Route::get('group-add' ,'App\Http\Controllers\Admin\GroupController@viewpage');

        Route::post('group-store' ,'App\Http\Controllers\Admin\GroupController@store');
          Route::get('group-edit/{id}' ,'App\Http\Controllers\Admin\GroupController@edit');
          Route::put('group-update/{id}' ,'App\Http\Controllers\Admin\GroupController@update');
          Route::get('group-delete/{id}' ,'App\Http\Controllers\Admin\GroupController@delete');
          Route::get('group-deleted-records' ,'App\Http\Controllers\Admin\GroupController@deletedrecords');
            Route::get('group-restore/{id}' ,'App\Http\Controllers\Admin\GroupController@deletedrestore');

            //category
            Route::get('/category' ,'App\Http\Controllers\Admin\CategoryController@index');
            Route::get('/category-add' ,'App\Http\Controllers\Admin\CategoryController@create');
              Route::post('/category-store' ,'App\Http\Controllers\Admin\CategoryController@store');
                Route::get('/category-edit/{id}' ,'App\Http\Controllers\Admin\CategoryController@edit');
                  Route::put('/category-update/{id}' ,'App\Http\Controllers\Admin\CategoryController@update');
                    Route::get('/category-delete/{id}' ,'App\Http\Controllers\Admin\CategoryController@delete');


//Sub Category

Route::get('sub-category' ,'App\Http\Controllers\Admin\SubcategoryController@index') ;
Route::post('sub-category-store','App\Http\Controllers\Admin\SubcategoryController@store');
Route::get('subcategory-edit/{id}','App\Http\Controllers\Admin\SubcategoryController@edit');
Route::put('sub-category-update/{id}','App\Http\Controllers\Admin\SubcategoryController@update');
Route::get('subcategory-delete/{id}','App\Http\Controllers\Admin\SubcategoryController@delete');


//ProductsController
Route::get('products', 'App\Http\Controllers\Admin\ProductsController@index');
Route::get('add-products', 'App\Http\Controllers\Admin\ProductsController@store');
Route::post('product-store' ,'App\Http\Controllers\Admin\ProductsController@add');
Route::get('product-edit/{id}' ,'App\Http\Controllers\Admin\ProductsController@edit');
Route::put('update-product/{id}' ,'App\Http\Controllers\Admin\ProductsController@update');
Route::get('delete-products/{id}','App\Http\Controllers\Admin\ProductsController@delete');

});


Route::group(['middleware' => ['auth' ,'isVendor']], function() {

  Route::get('/vendor-dashboard', function () {
      return view('vendor.dashboard');
  });

});
