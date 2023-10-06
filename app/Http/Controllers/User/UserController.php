<?php

namespace App\Http\Controllers\User;
use App\Http\Controllers\Controller;
use App\Models\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
class UserController extends Controller
{
    public function index(){

        $user = Auth::user();
        $userEvents = $user->events;

        return view('user.dashboard', compact( 'user', 'userEvents' ));
    }
    
    public function edit() {
        $user = Auth::user();
        return view('user.edit', compact('user'));
    }
    
    public function update(Request $request) {
        $user = Auth::user();
    
        $this->validate($request, [
            'name' => ['required', 'string', 'max:255'],
            'surname' => ['required', 'string', 'max:255'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);
    
        $user->update([
            'name' => $request->input('name'),
            'surname' => $request->input('surname'),
            'password' => Hash::make($request->input('password')),
        ]);
    
        return redirect()->route('user.dashboard')->with('success', 'Profilo aggiornato con successo.');
    }
    
}
