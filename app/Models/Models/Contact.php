<?php

namespace App\Models\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{


    protected $table ='users';
  protected $fillable =['name','lname','email','password','address1','address2','city','state','pincode','phone'
,'alternate_phone'


];


}
