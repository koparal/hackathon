<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class JobDetail extends Model
{
    protected $table = "job_details";

    protected $fillable = [
        "job_id",
        "lang",
        "title",
        "detail",
        "number_of_people",
        "category_id",
        "type",
        "location",
    ];

    public function parent()
    {
        return $this->hasOne(JobDetail::class);
    }
}
