<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class JobUser extends Model
{
    protected $table = "job_user";
    public $timestamps = false;

    protected $fillable = [
        "user_id",
        "job_id"
    ];
}
