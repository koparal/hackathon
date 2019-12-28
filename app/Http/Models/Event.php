<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $table = "events";
    public $timestamps = true;

    protected $fillable = [
        "title",
        "lang",
        "sub_content",
        "content",
        "category_id",
        "company_id"
    ];
}
