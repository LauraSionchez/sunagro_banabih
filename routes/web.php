<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\MailController;
use App\Http\Controllers\BanavihController;
use App\Http\Controllers\SunagroController;
use App\Http\Controllers\RecaudacionesController;
use App\Http\Controllers\ParametersController;
use Illuminate\Cache\RateLimiting\Limit;
use Illuminate\Support\Facades\RateLimiter;

/*
  |--------------------------------------------------------------------------
  | Web Routes
  |--------------------------------------------------------------------------
  |
  | Here is where you can register web routes for your application. These
  | routes are loaded by the RouteServiceProvider within a group which
  | contains the "web" middleware group. Now create something great!
  |
 */

Route::match(['get', 'post'], 'login', [UsersController::class, 'login'])->name('login');

//Route::get('send_test', [MailController::class, 'send_test'])->name('send.mail.test');


Route::match(['get', 'post'], 'PassRecovery', [UsersController::class, 'pass_recovery'])->name('pass.recovery');
Route::match(['get', 'post'], 'SetPassRecovery/{token?}', [UsersController::class, 'set_pass_recovery'])->name('set.pass.recovery');

Route::get('refreshcaptcha', [UsersController::class, 'refreshCaptcha'])->name('refreshcaptcha');





//Route::match(['get', 'post'], 'pass_recovery', [MailController::class, 'pass_recovery'])->name('view.pass.recovery');

// Route::fallback([UsersController::class, 'logout'])->name('notfound');






Route::group(array('middleware' => 'auth'), function() {
    // Esta será nuestra ruta de bienvenida.
    
    Route::get('/', [UsersController::class, 'home'])->name('home');
    //Route::get('/', [UsersController::class, 'home'])->name('home');
    
    Route::get('banavih', [BanavihController::class, 'index'])->name('Banavih.index');
    Route::get('banavih/detail', [BanavihController::class, 'show'])->name('Banavih.show');

    Route::get('sunagro', [SunagroController::class, 'index'])->name('Sunagro.index');
    Route::get('sunagro/detail', [SunagroController::class, 'show'])->name('Sunagro.show');
    
    // Esta ruta nos servirá para cerrar sesión.
    Route::get('logout', [UsersController::class, 'logOut'])->name('logout');
});

 // Query Banavih






