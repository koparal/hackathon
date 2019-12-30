<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CvLanguage extends Model
{
    protected $table = "cv_languages";
    protected $fillable = ['cv_id','name','level'];

    public function company()
    {
        return $this->belongsTo(Cv::class, "cv_id");
    }
}
