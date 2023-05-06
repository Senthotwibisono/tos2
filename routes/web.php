<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SystemController;
use App\Http\Controllers\VesselController;
use App\Http\Controllers\MasterController;
use App\Http\Controllers\BayplanImportController;
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

//Route::get('/master/port', function () {
//    return view('master.port');
//});

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

Route::get('/system/user/create_user', [SystemController::class, 'create_user'])->name('system.user.cretae');
Route::post('/system/user_store', [SystemController::class, 'user_store']);
Route::get('/system/edit_user={id}', [SystemController::class, 'edit_user'])->name('system.user.edit');
Route::patch('/system/user_update={id}', [SystemController::class, 'update_user']);
Route::delete('/system/delete_user={id}', [SystemController::class, 'delete_user']);

Route::get('/planning/vessel-schedule', [VesselController::class, 'index']);
Route::get('/planning/create-schedule', [VesselController::class, 'create']);
Route::post('/getvessel', [VesselController::class, 'getvessel'])->name('getvessel');
Route::post('/getvessel_agent', [VesselController::class, 'getvessel_agent'])->name('getvessel_agent');
Route::post('/getvessel_liner', [VesselController::class, 'getvessel_liner'])->name('getvessel_linert');
Route::post('/reg_flag', [VesselController::class, 'reg_flag'])->name('reg_flag');
Route::post('/length', [VesselController::class, 'length'])->name('length');
Route::post('/bcode', [VesselController::class, 'bcode'])->name('bcode');
Route::post('/from', [VesselController::class, 'from'])->name('from');
Route::post('/tlength', [VesselController::class, 'tlength'])->name('tlength');
Route::post('/origin', [VesselController::class, 'origin'])->name('origin');
Route::post('/next', [VesselController::class, 'next'])->name('next');
Route::post('/dest', [VesselController::class, 'dest'])->name('dest');
Route::post('/last', [VesselController::class, 'last'])->name('last');
Route::post('/planning/vessel_schedule_store', [VesselController::class, 'schedule_store'])->name('/planning/vessel_schedule_store');
Route::get('/planning/schedule_schedule={ves_id}', [VesselController::class, 'edit_schedule']);
Route::patch('/planning/schedule_update={ves_id}', [VesselController::class, 'update_schedule']);
Route::delete('/planning/delete_schedule={ves_id}', [VesselController::class, 'delete_schedule']);


//role master Port
Route::get('/master/port', [MasterController::class, 'port']);
Route::post('/master/port_store', [MasterController::class, 'port_store'])->name('/master/port_store');
Route::post('/master/port_edit_store', [MasterController::class, 'port_edit_store'])->name('/master/port_edit_store');
Route::delete('/master/delete_port={port}', [MasterController::class, 'delete_port']);
Route::get('/master/edit_port', [MasterController::class, 'edit_port']);

//role master Vessel
Route::get('/master/vessel', [MasterController::class, 'vessel']);
Route::post('/master/vessel_store', [MasterController::class, 'vessel_store'])->name('/master/vessel_store');
Route::post('/master/vessel_edit_store', [MasterController::class, 'vessel_edit_store'])->name('/master/vessel_edit_store');
Route::delete('/master/delete_vessel={vessel}', [MasterController::class, 'delete_vessel']);
Route::get('/master/edit_vessel', [MasterController::class, 'edit_vessel']);


//role master VesBerthsel
Route::get('/master/berth', [MasterController::class, 'berth']);
Route::post('/master/berth_store', [MasterController::class, 'berth_store'])->name('/master/berth_store');
Route::post('/master/berth_edit_store', [MasterController::class, 'berth_edit_store'])->name('/master/berth_edit_store');
Route::delete('/master/delete_berth={berth_no}', [MasterController::class, 'delete_berth']);
Route::get('/master/edit_berth', [MasterController::class, 'edit_berth']);


//role Vessel Servicel
Route::get('/master/service', [MasterController::class, 'service']);
Route::post('/master/service_store', [MasterController::class, 'service_store'])->name('/master/service_store');
Route::post('/master/service_edit_store', [MasterController::class, 'service_edit_store'])->name('/master/service_edit_store');
Route::delete('/master/delete_service={service_id}', [MasterController::class, 'delete_service']);
Route::get('/master/edit_service', [MasterController::class, 'edit_service']);


//role ISO Code
Route::get('/master/isocode', [MasterController::class, 'isocode']);
Route::post('/master/isocode_store', [MasterController::class, 'isocode_store'])->name('/master/isocode_store');
Route::post('/master/isocode_edit_store', [MasterController::class, 'isocode_edit_store'])->name('/master/isocode_edit_store');
Route::delete('/master/delete_isocode={iso_code}', [MasterController::class, 'delete_isocode']);
Route::get('/master/edit_isocode', [MasterController::class, 'edit_isocode']);



//role Yard Block
Route::get('/master/block', [MasterController::class, 'block']);
Route::post('/master/block_store', [MasterController::class, 'block_store'])->name('/master/block_store');
Route::get('/master/edit_block', [MasterController::class, 'edit_block']);


Route::get('/planning/bayplan_import', [ BayplanImportController::class, 'index']);

Route::middleware('role:admin')->get('/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('dashboard');

