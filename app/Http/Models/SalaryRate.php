<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SalaryRate extends Model
{
    protected $table = "salary_rates";

    public $timestamps = false;

    protected $fillable = [
        "company_id",
        "user_id",
        "department_id",
        "salary"
    ];
}
