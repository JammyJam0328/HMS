<?php

use Illuminate\Support\Facades\Route;

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


Route::get('/',\App\Http\Livewire\User\HomePage::class)->name('home');
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
   switch (auth()->user()->role) {
      case 'admin':
        echo 'admin';
        //  return redirect()->route('admin.dashboard');
         break;
      case 'user':
         return redirect()->route('home');
         break;
      case 'branch-admin':
         return redirect()->route('branch.dashboard');
         break;
      default:
         return redirect()->route('home');
         break;
   }
})->name('dashboard');




Route::group(['middleware' => ['auth:sanctum', 'verified','user']], function () {
   Route::get('/branch/{branch_id}/booking',\App\Http\Livewire\User\Booking::class)->name('booking');
});

Route::group(['prefix' => 'branch', 'middleware' => ['auth:sanctum', 'verified','branch-admin']], function () {
   Route::get('/dashboard',\App\Http\Livewire\Branch\Dashboard::class)->name('branch.dashboard');
   Route::get('/my-branch',\App\Http\Livewire\Branch\MyBranch::class)->name('branch.my-branch');
   Route::get('/room/{room_id}/pricing',\App\Http\Livewire\Branch\Pricing::class)->name('branch.room-pricing');
});