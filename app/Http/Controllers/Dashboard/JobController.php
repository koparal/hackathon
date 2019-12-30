<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Job;
use App\Http\Controllers\Controller;
use Auth;

class JobController extends Controller
{
    public function index()
    {
        $data = Job::get();
        return view('dashboard.jobs.index', compact("data"));
    }
}
