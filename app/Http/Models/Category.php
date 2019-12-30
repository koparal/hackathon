<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = "categories";

    protected $fillable = [
        "parent_id"
    ];

    public function detail()
    {
        return $this->hasOne(CategoryDetail::class)->where('lang','tr');
    }
}
