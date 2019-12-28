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

    public function findCity()
    {
        return $this->belongsTo(City::class, "location","id");
    }

    public function company()
    {
        return $this->belongsTo(User::class, "company_id");
    }

    public function parent()
    {
        return $this->hasOne(JobDetail::class);
    }
}
