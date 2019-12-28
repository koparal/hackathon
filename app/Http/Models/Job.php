<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    protected $table = "jobs";
    public $timestamps = true;

    protected $fillable = [
        "company_id"
    ];

    public function details()
    {
        return $this->hasMany(JobDetail::class);
    }
}
