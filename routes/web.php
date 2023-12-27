<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\KendaraanController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\RentalController;
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
    return view('landing-page');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/kendaraan', [KendaraanController::class, 'index'])->name('kendaraan.index');
Route::get('/mykendaraan', [KendaraanController::class, 'mykendaraan'])->name('kendaraan.mykendaraan');
Route::get('/kendaraan/create', [KendaraanController::class, 'create'])->name('kendaraan.create');
Route::post('/kendaraan/store', [KendaraanController::class, 'store'])->name('kendaraan.store');
Route::get('/kendaraan/edit/{id}', [KendaraanController::class, 'edit'])->name('kendaraan.edit');
Route::put('/kendaraan/update/{id}',[KendaraanController::class, 'update'])->name('kendaraan.update');
Route::get('/kendaraan/detail/{id}',[KendaraanController::class, 'show'])->name('kendaraan.detail');
Route::delete('/kendaraan/delete/{id}', [KendaraanController::class, 'destroy'])->name('kendaraan.destroy');

Route::get('/rent/{id}', [RentalController::class, 'index'])->name('rental.index');
Route::get('/rent/create/{id}', [RentalController::class, 'create'])->name('rental.create');
Route::post('/rent/update/{id}', [RentalController::class, 'update'])->name('rental.update');

Route::get('/payment/{id}', [PaymentController::class, 'index'])->name('payment.index');
Route::post('/payment/process/{rentalId}', [PaymentController::class, 'process'])->name('payment.process');
Route::get('/payment/success', [PaymentController::class, 'success'])->name('payment.success');


require __DIR__.'/auth.php';
