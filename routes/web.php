<?php



use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MasukController;
use App\Http\Controllers\KeluarController;
use App\Http\Controllers\LaporanController;
use App\Http\Controllers\PesananController;
use App\Http\Controllers\FeedBackController;
use App\Http\Controllers\DashboardController;
// Route::get('/', function () {
//     return view('welcome');
// });
Route::auth();
Route::get('/', [DashboardController::class, 'index']);
Route::get('/Register', [LoginController::class, 'register']);
Route::post('/Register/True', [LoginController::class, 'register_user']);
Route::post('/Login/True', [LoginController::class, 'login_true']);
Route::get('/Logout', [LoginController::class, 'logout']);
Route::get('/Dashboard/Barang', [MasukController::class, 'index']);
Route::get('/Dashboard/Laporan', [LaporanController::class, 'index']);
Route::get('/Dashboard/Settings', [AdminController::class, 'AdminSettings']);
Route::get('/Dashboard/User', [UserController::class, 'index']);
Route::get('/Dashboard/Barang', [MasukController::class, 'index']);
Route::get('/Login', [LoginController::class, 'index']);
Route::get('/Dashboard', [AdminController::class, 'index']);
Route::get('/Dashboard/Pesanan', [PesananController::class, 'index']);
Route::get('/login', [LoginController::class, 'index']);
Route::get('/Dashboard/FeedBack', [FeedBackController::class, 'index']);

Route::get('/Dashboard', [AdminController::class, 'index'])->middleware('auth');
//middleware
Route::group(['middleware' => ['auth','hakakses:admin']], function (){
    Route::post('/Dashboard/Barang/insert', [MasukController::class, 'create']);
    Route::get('/Dashboard/Barang/Show{id}', [MasukController::class, 'show']);
    Route::post('/Dashboard/Barang/edit{id}', [MasukController::class, 'edit']);
    Route::get('/Dashboard/Barang/delete{id}', [MasukController::class, 'destroy']);
    Route::post('/Dashboard/Laporan/insert', [LaporanController::class, 'insert']);
    Route::get('/Dashboard/Laporan/Delete{id}', [LaporanController::class, 'delete']);
    Route::get('/Dashboard/User{id}', [UserController::class, 'delete']);
    Route::post('/Dashboard/User/edit{id}', [UserController::class, 'edit']);
    Route::get('/Dashboard/User/show{id}', [UserController::class, 'show']);
    Route::get('/Dashboard/Pesanan/show{id}', [PesananController::class, 'show']);
    Route::get('/Dashboard/Pesanan/Delete{id}', [PesananController::class, 'delete']);


});

