<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\UserController;

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

 	->prefix('admin') //definisce il prefisso "admin/" per le rotte di questo gruppo
 	->name('admin.') //definisce il pattern con cui generare i nomi delle rotte cioè "admin.qualcosa"
 	->group(function () {
 	
 		Route::get('/', [DashboardController::class, 'index'])->name('dashboard');

});

Route::middleware(['auth', 'role:user']) // Middleware per utenti con ruolo 'user'
    ->prefix('user')
    ->name('user.')
    ->group(function () {
        // Rotte dell'area utente
        Route::get('/dashboard', [UserController::class, 'index'])->name('dashboard');
    });




require __DIR__.'/auth.php';
