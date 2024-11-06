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
//video
Route::get('/edit-video',[App\Http\Controllers\Users\UsersController::class,'editVideo'])->name('edit.video');
Route::post('/edit-video', [App\Http\Controllers\Users\UsersController::class, 'updateVideo'])->name('update.video');

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
    Route::get('/create-admin',[App\Http\Controllers\Admins\AdminsController::class,'createAdmins'])->name('create.admins');
    Route::post('/create-admin',[App\Http\Controllers\Admins\AdminsController::class,'storeAdmins'])->name('store.admins');

    Route::get('/display-categories',[App\Http\Controllers\Admins\AdminsController::class,'displayCategories'])->name('display.categories');
    Route::get('/create-cates',[App\Http\Controllers\Admins\AdminsController::class,'createCategories'])->name('create.categories');
    Route::post('/create-cates',[App\Http\Controllers\Admins\AdminsController::class,'storeCategories'])->name('store.categories');

    //update categories
    Route::get('/edit-cates/{id}',[App\Http\Controllers\Admins\AdminsController::class,'editCategories'])->name('edit.categories');
    Route::post('/edit-cates/{id}',[App\Http\Controllers\Admins\AdminsController::class,'updateCategories'])->name('update.categories');

    //delete categories
    Route::get('/delete-cates/{id}',[App\Http\Controllers\Admins\AdminsController::class,'deleteCategories'])->name('delete.categories');


    //jobs
    Route::get('/display-jobs',[App\Http\Controllers\Admins\AdminsController::class,'allJobs'])->name('display.jobs');
    Route::get('/create-jobs',[App\Http\Controllers\Admins\AdminsController::class,'createJobs'])->name('create.jobs');
    Route::post('/create-jobs',[App\Http\Controllers\Admins\AdminsController::class,'storeJobs'])->name('store.jobs');

    //delete jobs
    Route::get('/delete-jobs/{id}',[App\Http\Controllers\Admins\AdminsController::class,'deleteJobs'])->name('delete.jobs');


    Route::get('/display-apps',[App\Http\Controllers\Admins\AdminsController::class,'displayApps'])->name('display.apps');
    Route::get('/delete-apps/{id}',[App\Http\Controllers\Admins\AdminsController::class,'deleteApps'])->name('delete.apps');

});
