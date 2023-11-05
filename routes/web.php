<?php

use App\Http\Controllers\ClassesController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\SubscriptionController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\CoacheslController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\SubscriptionPriceController;
use App\Http\Controllers\ContactController;

use App\Models\Subscription;
use Illuminate\Support\Facades\Route;



Route::get('/', [UsersController::class, 'home']);
Route::get('/about', [UsersController::class, 'about']);
Route::get('/services', [UsersController::class, 'services']);
Route::get('/contact', [UsersController::class, 'contact']);
Route::get('/admin', [UsersController::class, 'admin']);
Route::get('/dashbord', [UsersController::class, 'dashbord']);
Route::get('/Aproduct', [UsersController::class, 'Aproduct']);
Route::get('/users', [UsersController::class, 'users']);
Route::get('/orders', [UsersController::class, 'orders']);
Route::get('/ordered', [UsersController::class, 'ordered']);
Route::get('/subscriptions', [SubscriptionController::class, 'subscriptions']);
Route::get('/login', [LoginController::class, 'login']);
Route::get('/profile', [UsersController::class, 'profile']);
Route::get('/coaches', [CoacheslController::class, 'coaches']);
Route::get('/team', [CoacheslController::class, 'team']);
Route::post('/store', [LoginController::class, 'store'])->name('store');
Route::post('/userlogin', [LoginController::class, 'userlogin'])->name('userlogin');
Route::get('/', [UsersController::class, 'home']);
Route::get('/slider', [SliderController::class, 'slider']);
Route::get('/classes', [ClassesController::class, 'classes']);
Route::get('/prices', [SubscriptionPriceController::class, 'prices']);
Route::get('/adduser', [UsersController::class, 'adduser']);
Route::post('/add', [UsersController::class, 'add']);
Route::get('/edituser/{id}', [UsersController::class, 'edituser'])->name('edituser');
Route::post('/saveedit', [UsersController::class, 'saveedit'])->name('saveedit');
Route::get('/deleteuser/{id}', [UsersController::class, 'deleteuser'])->name('deleteuser');
Route::get('/addcoach', [CoacheslController::class, 'addcoach']);
Route::post('/addcoaches', [CoacheslController::class, 'add']);
Route::get('/deletecoach/{id}', [CoacheslController::class, 'delete'])->name('deletecoach');
Route::get('/editcoach/{id}', [CoacheslController::class, 'editcoach'])->name('editcoach');
Route::post('/editcoaches', [CoacheslController::class, 'edit'])->name('editcoaches');
Route::get('/addslider', [SliderController::class, 'addslider']);
Route::post('/saveslider', [SliderController::class, 'saveslider']);
Route::get('/deleteslider/{id}', [SliderController::class, 'deleteslider'])->name('deleteslider');
Route::get('/addclass', [ClassesController::class, 'addclass']);
Route::post('/saveclass', [ClassesController::class, 'saveclass']);
Route::get('/editclass/{id}', [ClassesController::class, 'editclass'])->name('editclass');
Route::post('/editclasses', [ClassesController::class, 'edit'])->name('editclasses');
Route::get('/deleteclass/{id}', [ClassesController::class, 'delete'])->name('deleteclass');
Route::post('/signin', [UsersController::class, 'signin']);
Route::post('/snedComment', [ContactController::class, 'snedComment']);
Route::get('/comment', [ContactController::class, 'comment']);
Route::get('/deletecomment/{id}', [ContactController::class, 'deletecomment'])->name('deletecomment');
Route::get('/deletesubscriptions/{id}', [SubscriptionController::class, 'delete'])->name('deletesubscriptions');
Route::get('/test/{id}', [UsersController::class, 'test']);
Route::get('/addprice', [SubscriptionPriceController::class, 'addprice']);
Route::post('/saveprice', [SubscriptionPriceController::class, 'saveprice']);
Route::get('/editprice/{id}', [SubscriptionPriceController::class, 'editprice'])->name('editprice');
Route::post('/savepriceedit', [SubscriptionPriceController::class, 'savepriceedit']);
Route::get('/deleteprice/{id}', [SubscriptionPriceController::class, 'deleteprice'])->name('deleteprice');










