<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\ProfileController;
use App\Models\User;
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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('createusers',[Controller::class, 'createusers'])->name('createusers');

Route::get('test', function(){
 
  $user = User::first();
    
  $user->orangtua()->create([
    'nama' => 'orangtua test',
    'alamat' => 'alamat orangtua test',
    'telepon' => '08123456789',
  ]);

dd($user);
}
);

Route::get('mhs', function(){
    $mahasiswas = User::all();
    return json_encode($mahasiswas);
});


require __DIR__.'/auth.php';
