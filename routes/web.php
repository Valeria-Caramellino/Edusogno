<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\EventController;
use App\Http\Controllers\User\EventController as UserEventController;
use App\Http\Controllers\User\UserController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('auth.register');
});

Route::middleware(['auth'])

 	->prefix('admin') 
 	->name('admin.')
 	->group(function () {
 	
 		Route::get('/', [DashboardController::class, 'index'])->name('dashboard');

        Route::resource( 'events', EventController::class );

});

Route::middleware(['auth', 'role:user']) // Middleware per utenti con ruolo 'user'
    ->prefix('user')
    ->name('user.')
    ->group(function () {
        // Rotte dell'area utente
        Route::get('/dashboard', [UserController::class, 'index'])->name('dashboard');

        Route::resource( 'events', UserEventController::class );
        
        Route::post('events/join', [UserEventController::class, 'joinEvent'])->name('events.join');
});




require __DIR__.'/auth.php';
