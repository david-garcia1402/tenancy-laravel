<?php

declare(strict_types=1);

use App\Http\Controllers\ForumController;
use Illuminate\Support\Facades\Route;
use Stancl\Tenancy\Middleware\InitializeTenancyByDomain;
use Stancl\Tenancy\Middleware\PreventAccessFromCentralDomains;

/*
|--------------------------------------------------------------------------
| Tenant Routes
|--------------------------------------------------------------------------
|
| Here you can register the tenant routes for your application.
| These routes are loaded by the TenantRouteServiceProvider.
|
| Feel free to customize them however you want. Good luck!
|
*/

Route::middleware([
    'web',
    InitializeTenancyByDomain::class,
    PreventAccessFromCentralDomains::class,
])->group(function () {
    Route::post('/storeuser', [ForumController::class, 'store'])->name('userstore-escola');
    Route::get('/', [ForumController::class, 'welcome'])->name('welcome-escola');
    Route::get('/welcome/login', [ForumController::class, 'login'])->name('login-escola');
    Route::post('verifylogin', [ForumController::class, 'verifylogin'])->name('verifylogin-escola');
    Route::get('/welcome/create', [ForumController::class, 'create'])->name('create-escola');
    Route::get('/forum', [ForumController::class, 'index'])->name('forum-escola');
    Route::get('/logout', [ForumController::class, 'logout'])->name('logout-escola');
    Route::get('/user', [ForumController::class, 'user'])->name('user-escola');
});
