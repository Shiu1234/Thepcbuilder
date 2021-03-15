<?php

namespace App\Models\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{


    protected $table ='categories';
  protected $fillable =['name','url','descrip','image','icon','status'];


//BelongTo relationship in laravel
  public function group(){


    return $this->belongsTo(Groups::class, 'group_id' ,'id');
  }
}
