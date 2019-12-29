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
        return view('dashboard.roles.index', compact("data"));
    }
}
