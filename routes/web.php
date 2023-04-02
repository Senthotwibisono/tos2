<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SystemController;

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

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('dashboard');

// Route::get('/dashboard', function () {
//     return view('dashboard');
// });  

Route::get('/master/port', function () {
    return view('master.port');
});

Route::get('/invoice', function () {
    return view('invoice.dashboard');
});




Auth::routes();

Route::get('/system/user', [SystemController::class, 'user'])->name('system.user.main');
Route::get('/system/role', [SystemController::class, 'role'])->name('system.role.main');
Route::get('/system/role/addrole', [SystemController::class, 'createrole'])->name('system.role.cretae');
Route::post('/system/role/rolestore', [SystemController::class, 'rolestore']);
Route::get('/system/edit_role={id}', [SystemController::class, 'edit_role'])->name('system.role.edit');
Route::patch('/system/role_update={id}', [SystemController::class, 'update_role']);
Route::delete('/system/delete_role={id}', [SystemController::class, 'delete_role']);

Route::middleware('role:admin')->get('/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('dashboard');
