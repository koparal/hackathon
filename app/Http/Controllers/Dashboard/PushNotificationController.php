<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Role;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;

class PushNotificationController extends Controller
{
    public function index()
    {
        return view('dashboard.push.index', compact("data"));
    }

    public function create()
    {
        return view('dashboard.push.create', compact("data"));
    }
    public function targets()
    {
        return view('dashboard.push.targets', compact("data"));
    }

}
