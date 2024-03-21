<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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
    return view('dashboard');
});

Auth::routes();

Route::get('/admin/dashboard', [App\Http\Controllers\Administrator\DashboardController::class, 'index'])->name('admin.dashboard');
Route::get('/admin/survei', [App\Http\Controllers\Administrator\SurveiController::class, 'index'])->name('admin.survei');
Route::post('/admin/survei/simpan', [App\Http\Controllers\Administrator\SurveiController::class, 'simpan'])->name('admin.survei.simpan');

Route::post('/admin/datatable', [App\Http\Controllers\Administrator\DatatableController::class, 'index'])->name('admin.datatable');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/wizard', [App\Http\Controllers\HomeController::class, 'wizard'])->name('wizard');

Route::post('/modal/{name}', function (Request $request) {
    $param = $request->segment(2);
    return view('administrator/modal/' . $param);
});
