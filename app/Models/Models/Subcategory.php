<?php

namespace App\Models\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subcategory extends Model
{
  protected $table ='subcategorys';
protected $fillable =[
  'category_id',
  'name',
  'url',
  'description',
  'image'




];


public function category(){


  return $this->belongsTo(Category::class ,'category_id','id');
}
}
