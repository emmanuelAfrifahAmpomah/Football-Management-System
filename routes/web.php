<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

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

// Route::get('/', function () {
//     return view('welcome');
// });

//Routes to pages
Route::get('/', [HomeController::class, 'index']);
Route::get('/home', [HomeController::class, 'redirect']);
Route::get('/add_player', [AdminController::class, 'addview']);
// Route::get('/registration', [HomeController::class, 'registration'])->name('page_register');


// Routes to database

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

// ROLES & PERMISSIONS ROUTES
Route::get('create-role', function()
{
// $role = Role::create(['name'=>'admin']);
// return $role;
// $permission = Permission::create(['name'=>'']);
// return $permission;

// $user = auth()->user();
// $user->assignRole('admin');
// return $user;
});