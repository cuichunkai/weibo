<?php

namespace App\Http\Model;

use Illuminate\Database\Eloquent\Model;

class sensitive extends Model
{
     public $table = 't_sensitive';
    // public $fillable =['user_name','last_login_time','last_login_ip'];
    public $guarded =[];//都可以添加

   
}
