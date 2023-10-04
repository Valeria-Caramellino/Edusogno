<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index() {
        
        $user = Auth::user();
        $events = Event::all();

        return view('admin.dashboard', compact( 'user','events' ));
    
    }
}
