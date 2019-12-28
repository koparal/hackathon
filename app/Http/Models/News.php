<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $table = "news";
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
