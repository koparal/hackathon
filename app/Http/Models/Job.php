<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    protected $table = "jobs";
    public $timestamps = true;

    protected $fillable = [
        "company_id"
    ];

    public function company()
    {
        return $this->belongsTo(User::class, "company_id");
    }

    public function details()
    {
        return $this->hasMany(JobDetail::class);
    }
}
