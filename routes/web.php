<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AlumniController;
use App\Http\Controllers\PengajuanController;
use App\Http\Controllers\PostinganController;
use App\Http\Controllers\PerusahaanController;
use App\Http\Controllers\TentangkamiController;
use App\Http\Controllers\TestimoniController;
use App\Http\Controllers\KontakController;


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
Route::get('', function () {
    return view('landingpage');
})->name('login');

Route::get('loginalumni', function () {
    return view('loginalumni');
});


Route::post('auth',[UserController::class,'auth']);
Route::post('/loginalumni',[UserController::class,'alumni']);
Route::get('loginadmin',[UserController::class,'index']);
Route::get('logout',[UserController::class,'logout']);

Route::get('registeralumni',[AlumniController::class,'registeralumni']);
Route::post('register/daftar',[AlumniController::class,'daftaralumni']);

Route::get('/',[TentangkamiController::class, 'tampil']);

Route::middleware('auth')->group(function () {
Route::get('dashboardadmin',[UserController::class,'show']);
Route::get('dashboardalumni',[AlumniController::class,'show']);
Route::get('logout',[AlumniController::class,'logout']);

Route::get('data_alumni',[Alumnis::class,'tampil']);

Route::get('datapengajuan',[PengajuanController::class, 'show']);
Route::get('datapengajuan/add',[PengajuanController::class, 'add']);
Route::post('datapengajuan/create',[PengajuanController::class, 'create']);
Route::get('/datapengajuan/hapus/{id}',[PengajuanController::class,'hapus']);
Route::get('/datapengajuan/edit/{id}',[PengajuanController::class,'edit']);
Route::post('/datapengajuan/update/{id}',[PengajuanController::class,'update']);

Route::get('datapostingan',[PostinganController::class, 'show']);
// Route::get('/',[TentangkamiController::class, 'tampil']);
Route::get('datapostingan/add',[PostinganController::class, 'add']);
Route::post('datapostingan/create',[PostinganController::class, 'create']);
Route::get('/datapostingan/hapus/{id}',[PostinganController::class,'hapus']);
Route::get('/datapostingan/edit/{id}',[PostinganController::class,'edit']);
Route::post('/datapostingan/update/{id}',[PostinganController::class,'update']);

Route::get('dataperusahaan',[PerusahaanController::class, 'show']);
// Route::get('/',[PerusahaanController::class, 'tampil']);
Route::get('dataperusahaan/add',[PerusahaanController::class, 'add']);
Route::post('dataperusahaan/create',[PerusahaanController::class, 'create']);
Route::get('/dataperusahaan/hapus/{id}',[PerusahaanController::class,'hapus']);
Route::get('/dataperusahaan/edit/{id}',[PerusahaanController::class,'edit']);
Route::post('/dataperusahaan/update/{id}',[PerusahaanController::class,'update']);

Route::get('tentangkami',[TentangkamiController::class, 'show']);
Route::get('tentangkami/add',[TentangkamiController::class, 'add']);
Route::post('/tentangkami/create',[TentangkamiController::class, 'create']);
Route::get('/tentangkami/hapus/{id}',[TentangkamiController::class,'hapus']);
Route::get('/tentangkami/edit/{id}',[TentangkamiController::class,'edit']);
Route::post('/tentangkami/update/{id}',[TentangkamiController::class,'update']);

Route::get('datatestimoni',[TestimoniController::class, 'show']);
// Route::get('/',[TentangkamiController::class, 'tampil']);
Route::get('datatestimoni/add',[TestimoniController::class, 'add']);
Route::post('datatestimoni/create',[TestimoniController::class, 'create']);
Route::get('/datatestimoni/hapus/{id}',[TestimoniController::class,'hapus']);
Route::get('/datatestimoni/edit/{id}',[TestimoniController::class,'edit']);
Route::post('/datatestimoni/update/{id}',[TestimoniController::class,'update']);

Route::get('datakontak',[KontakController::class, 'show']);
Route::get('datakontak/add',[KontakController::class, 'add']);
Route::post('/datakontak/create',[KontakController::class, 'create']);
Route::get('/datakontak/hapus/{id}',[KontakController::class,'hapus']);

});
