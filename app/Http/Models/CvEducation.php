<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CvEducation extends Model
{
    protected $table = "cv_educations";
    protected $fillable = ['cv_id','school_id','department','start_date','finish_date'];

    public function company()
    {
        return $this->belongsTo(Cv::class, "cv_id");
    }
}
