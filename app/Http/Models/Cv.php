<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cv extends Model
{
    protected $table = "cvs";
    public $timestamps = true;

    protected $fillable = [
        "user_id",
        "type",
        "name",
        "surname",
        "email",
        "phone",
        "gender",
        "addess",
        "military_status",
    ];
}
