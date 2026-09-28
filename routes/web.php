<?php
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\DashboardController;
 
Route::get('/login', [LoginController::class, 'create'])
    ->middleware('guest')
    ->name('login');
 
Route::post('/login', [LoginController::class, 'store'])
    ->middleware('guest')
    ->name('login.store');
 
Route::post('/logout', [LoginController::class, 'destroy'])
    ->middleware('auth')
    ->name('logout');

Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::resource('categories', CategoryController::class);
    Route::resource('products', ProductController::class);
    Route::get('/reports/sales', [ReportController::class, 'sales'])->name('report.sales');
});


Route::get('/dashboard', [DashboardController::class, 'index'])
    ->middleware(['auth'])
    ->name('dashboard');

Route::get('/users', function () { 
    return 'Halaman kelola akun kasir (khusus admin)'; 
})  
    ->middleware(['auth', 'role:admin'])->name('users.index'); 

Route::get('/pos/riwayat', function () {
    return view('pos.history');
})->middleware('auth')->name('pos.history');

Route::middleware(['auth', 'role:admin,kasir'])->group(function () {
    Route::get('/pos', [PosController::class, 'index'])->name('pos.index');
    Route::post('/pos', [PosController::class, 'store'])->name('pos.store');
});

