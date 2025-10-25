<?php

use App\Livewire\Settings\Appearance;
use App\Livewire\Settings\Password;
use App\Livewire\Settings\Profile;
use Illuminate\Support\Facades\Route;
use App\Livewire\Counter;
use App\Livewire\ToDo;
use App\Livewire\Tables;
use App\Livewire\PostTable;
use App\Livewire\UserForm;
use App\Livewire\Postform;


Route::get("Counter", Counter::class);
Route::get("ToDo", Todo::class);
Route::get("users", Tables::class);
Route::get("posts", PostTable::class);
Route::get('user-form', UserForm::class)->name('user.form');
Route::get('postform', PostForm::class)->name('post.form');


Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::middleware(['auth'])->group(function () {
    Route::redirect('settings', 'settings/profile');

    Route::get('settings/profile', Profile::class)->name('settings.profile');
    Route::get('settings/password', Password::class)->name('settings.password');
    Route::get('settings/appearance', Appearance::class)->name('settings.appearance');
});

require __DIR__.'/auth.php';
