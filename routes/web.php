<?php

use App\Http\Controllers\buahController;
use App\Http\Controllers\dashboardController;
use App\Http\Controllers\gasController;
use App\Http\Controllers\pengukuranController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\suhuController;
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
    return view('login');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/pengukuran', [pengukuranController::class, 'index'])->name('pengukuran');
    Route::get('/buah', [buahController::class, 'index'])->name('buah');
    Route::get('/suhu', [suhuController::class, 'index'])->name('suhu');
    Route::get('/gas', [gasController::class, 'index'])->name('gas');

    Route::get('/pengukurancreate', [pengukuranController::class, 'create'])->name('pengukurancreate');
    Route::get('/buahcreate', [buahController::class, 'create'])->name('buahcreate');
    Route::get('/suhucreate', [suhuController::class, 'create'])->name('suhucreate');
    Route::get('/gascreate', [gasController::class, 'create'])->name('gascreate');

    Route::post('/pengukuranstore', [pengukuranController::class, 'store'])->name('pengukuranstore');
    Route::post('/buahstore', [buahController::class, 'store'])->name('buahstore');
    Route::post('/suhustore', [suhuController::class, 'store'])->name('suhustore');
    Route::post('/gasstore', [gasController::class, 'store'])->name('gasstore');

    Route::delete('/pengukuran/{id}', [pengukuranController::class, 'destroy'])->name('pengukurandestroy');
    Route::delete('/buah/{id}', [buahController::class, 'destroy'])->name('buahdestroy');
    Route::delete('/suhu/{id}', [suhuController::class, 'destroy'])->name('suhudestroy');
    Route::delete('/gas/{id}', [gasController::class, 'destroy'])->name('gasdestroy');

    Route::get('/editpengukuran/{id}', [pengukuranController::class, 'edit'])->name('editpengukuran');
    Route::get('/editbuah/{id}', [buahController::class, 'edit'])->name('editbuah');
    Route::get('/editsuhu/{id}', [suhuController::class, 'edit'])->name('editsuhu');
    Route::get('/editgas/{id}', [gasController::class, 'edit'])->name('editgas');

    Route::put('/pengukuranupdate/{id}', [pengukuranController::class, 'update'])->name('pengukuranupdate');
    Route::put('/buahupdate/{id}', [buahController::class, 'update'])->name('buahupdate');
    Route::put('/suhuupdate/{id}', [suhuController::class, 'update'])->name('suhuupdate');
    Route::put('/gasupdate/{id}', [gasController::class, 'update'])->name('gasupdate');

    Route::get('/dashboard', [dashboardController::class, 'index'])->name('dashboard');
});

require __DIR__.'/auth.php';
