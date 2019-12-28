<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Role;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;

class RolesController extends Controller
{
    public function index()
    {
        $data = Role::get();
        return view('dashboard.roles.index', compact("data"));
    }
}
