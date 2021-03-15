<?php

namespace App\Models\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Groups extends Model
{
  protected $table ='table_groups';
protected $fillable =['name','descrip', 'url','status'];
}
