<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserExtra extends Model
{
    protected $table = "user_extras";
    public $timestamps = false;

    protected $fillable = ["user_id","key","value"];
}
