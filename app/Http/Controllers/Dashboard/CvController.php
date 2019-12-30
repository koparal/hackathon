<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Cv;
use App\Models\News;
use App\Http\Controllers\Controller;
use Auth;

class CvController extends Controller
{
    public function index()
    {
        $data = Cv::get();
        return view('dashboard.cvs.index', compact("data"));
    }
}
