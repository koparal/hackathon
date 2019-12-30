<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Event;
use App\Http\Controllers\Controller;
use Auth;

class EventController extends Controller
{
    public function index()
    {
        $data = Event::get();
        return view('dashboard.events.index', compact("data"));
    }
}
