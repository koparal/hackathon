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

    public function category()
    {
        return $this->belongsTo(Category::class, "category_id");
    }

    public function company()
    {
        return $this->belongsTo(User::class, "company_id");
    }

    public function detail()
    {
        return $this->hasOne(JobDetail::class);
    }

    public function details()
    {
        return $this->hasMany(JobDetail::class);
    }
}
