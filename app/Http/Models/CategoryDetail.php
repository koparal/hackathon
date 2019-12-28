<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CategoryDetail extends Model
{
    protected $table = "categories_detail";

    protected $fillable = [
        "category_id",
        "lang",
        "name",
        "slug",
        "detail"
    ];
}
