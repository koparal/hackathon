<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\News;
use App\Models\Role;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;

class NewsController extends Controller
{
    public function index()
    {
        $data = News::get();
        return view('dashboard.news.index', compact("data"));
    }
}
