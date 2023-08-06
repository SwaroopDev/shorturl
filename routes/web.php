<?php

use App\Http\Controllers\MembershipController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ShortlinkController;
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
    return view('welcome');
});

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/shortlink/index', [ShortlinkController::class, 'index'])->name('shortlink.index');
    Route::get('/shortlink/create', [ShortlinkController::class, 'create'])->name('shortlink.create');
    Route::get('/shortlink/edit/{id}', [ShortlinkController::class, 'edit'])->name('shortlink.edit');
    Route::post('/shortlink/update', [ShortlinkController::class, 'update'])->name('shortlink.update');
    Route::post('/shortlink/delete', [ShortlinkController::class, 'delete'])->name('shortlink.delete');
    Route::post('/shortlink/create', [ShortlinkController::class, 'store'])->name('shortlink.store');

    Route::get('/membership/upgrade', [MembershipController::class, 'upgrade'])->name('membership.upgrade');
    Route::post('/membership/update', [MembershipController::class, 'update'])->name('membership.update');

});

Route::get('/url/{code}', [ShortlinkController::class, 'url'])->name('url');

require __DIR__.'/auth.php';
