<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SupplierController;

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Models\Client;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


Route::get('/clients', function () {
    $clients = Client::paginate(6); // You can specify the number of clients per page (e.g., 10 per page)
    return Inertia::render('Clients', ['clients' => $clients]);
})->name('clients');



Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/supplier', [SupplierController::class, 'index'])->name('supplier');


    Route::middleware('can:manage-suppliers')->group(function(){
        Route::post('/suppliers', [SupplierController::class, 'store']);
        Route::get('/suppliers/create', [SupplierController::class, 'create'])->name('suppliers.create');
        Route::get('/suppliers/edit', [SupplierController::class, 'edit'])->name('suppliers.edit');
        Route::get('/suppliers/view', [SupplierController::class, 'view'])->name('suppliers.view');
        Route::get('/suppliers/delete', [SupplierController::class, 'delete'])->name('suppliers.delete');

        // Route::post('/suppliers/{supplier}', [SupplierController::class, 'edit'])->name('suppliers.edit');

    });
});



require __DIR__.'/auth.php';
