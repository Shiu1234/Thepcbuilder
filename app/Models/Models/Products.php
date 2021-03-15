<?php

namespace App\Models\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
  protected $table ='products';
protected $fillable =[
  'name',
  'sub_category_id',
  'name',
  'url',
  'small_description',
  'image',
  ' p_highlight_heading' ,
  'p_highlights'  ,
  'p_description_heading',
  'p_description' ,
  'p_det_heading' ,
    'p_details'    ,
    'sale_tag'      ,
    'offer_tag'  ,
    'offers_products',
    'price'          ,
    'quality'        ,
    'priority'        ,
        'new_arrival_products',
    'featured_products'        ,
    'popular_products '         ,
    'offers_products'            ,
'status' ,
'meta_title',
'meta_descrip',
'meta_keyword'







];



public function subcategory(){


  return $this->belongsTo(Subcategory::class,'sub_category_id','id'); 
}
}
