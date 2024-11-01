<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Jobs\JobsController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admins\AdminsController;
// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('welcome');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/about', [App\Http\Controllers\HomeController::class, 'about'])->name('about');
Route::get('/contact', [App\Http\Controllers\HomeController::class, 'contact'])->name('contact');

Route::group(['prefix' => 'jobs'],function(){
    // job related
Route::get('/single/{id}', [App\Http\Controllers\Jobs\JobsController::class, 'single'])->name('single.job');
Route::post('/save', [App\Http\Controllers\Jobs\JobsController::class, 'saveJob'])->name('save.job');
Route::post('/apply', [App\Http\Controllers\Jobs\JobsController::class, 'jobApply'])->name('apply.job');
Route::get('/apply', [App\Http\Controllers\Jobs\JobsController::class, 'jobApply'])->name('apply.job');
Route::get('/save', [App\Http\Controllers\Jobs\JobsController::class, 'saveJob'])->name('save.job');

Route::any('search', [App\Http\Controllers\Jobs\JobsController::class, 'search'])->name('search.job');
});
Route::group(['prefix' => 'categories'],function(){
//categories
Route::get('/single/{name}',[App\Http\Controllers\Categories\CategoriesController::class,'singleCategory'])->name('categories.single');
});

Route::group(['prefix' => 'users'],function(){
//user functions
Route::get('/profile',[App\Http\Controllers\Users\UsersController::class,'profile'])->name('profile');
Route::get('/applications',[App\Http\Controllers\Users\UsersController::class,'applications'])->name('applications');
Route::get('/savedjobs',[App\Http\Controllers\Users\UsersController::class,'savedJobs'])->name('saved.jobs');
Route::get('/edit-details',[App\Http\Controllers\Users\UsersController::class,'editDetails'])->name('edit.details');
Route::post('/edit-details', [App\Http\Controllers\Users\UsersController::class, 'updateDetails'])->name('update.details');
//image
Route::get('/edit-image',[App\Http\Controllers\Users\UsersController::class,'editImage'])->name('edit.image');
Route::post('/edit-image', [App\Http\Controllers\Users\UsersController::class, 'updateImage'])->name('update.image');

//cv
Route::get('/edit-cv',[App\Http\Controllers\Users\UsersController::class,'editCV'])->name('edit.cv');
Route::post('/edit-cv', [App\Http\Controllers\Users\UsersController::class, 'updateCV'])->name('update.cv');
});


Route::post('admin/login',[App\Http\Controllers\Admins\AdminsController::class,'checkLogin'])->name('check.login')->middleware('checkforauth');
Route::get('admin/login',[App\Http\Controllers\Admins\AdminsController::class,'viewLogin'])->name('view.login')->middleware('checkforauth');
Route::post('admin/logout', [App\Http\Controllers\Admins\AdminsController::class, 'logout'])->name('admin.logout');

Route::prefix('admin')->middleware('auth:admin')->group(function () {
    Route::get('/',[App\Http\Controllers\Admins\AdminsController::class,'index'])->name('admins.dashboard');
    Route::get('/all-admins',[App\Http\Controllers\Admins\AdminsController::class,'admins'])->name('view.admins');

});
