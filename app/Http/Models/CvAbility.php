<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CvAbility extends Model
{
    protected $table = "cv_abilities";
    protected $fillable = ['cv_id','name','level'];

    public function company()
    {
        return $this->belongsTo(Cv::class, "cv_id");
    }
}
