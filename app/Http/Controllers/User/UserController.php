<?php

namespace App\Http\Controllers\User;
use App\Http\Controllers\Controller;
use App\Models\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function index(){

        $user = Auth::user();
        $userEvents = $user->events;

        return view('user.dashboard', compact( 'user', 'userEvents' ));
    }
    
  
}
