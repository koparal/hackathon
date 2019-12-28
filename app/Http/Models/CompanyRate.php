<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CompanyRate extends Model
{
    protected $table = "company_rates";
    public $timestamps = true;

    protected $fillable = [
        "company_id",
        "user_id",
        "transportation_rate",
        "eat_rate",
        "management_rate",
        "general_rate"
    ];
}
