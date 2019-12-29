<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CvExperience extends Model
{
    protected $table = "cv_experiences";
    protected $fillable = ['cv_id','company_name','start_date','reason_for_leaving','position'];

    public function company()
    {
        return $this->belongsTo(Cv::class, "cv_id");
    }
}
