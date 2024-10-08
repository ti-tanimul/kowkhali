<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\AdminLoginController;
use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\AchievemtnsNumberController;
use App\Http\Controllers\DonationController;

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
//For User
Route::get('/',[HomeController::class, 'index'])->name('fronted-home');
Route::get('/aboutUs',[HomeController::class, 'aboutUs'])->name('aboutUs');
Route::get('/service',[HomeController::class, 'service'])->name('service');
Route::get('/gallery',[HomeController::class, 'gallery'])->name('gallery');
Route::get('/blog',[HomeController::class, 'blog'])->name('blog');
Route::get('/contactUs',[HomeController::class, 'contactUs'])->name('contactUs');
Route::post('/contactUs-Store',[HomeController::class, 'contactUsStore'])->name('contactUs-store');


//For Admin Login
Route::get('/admin-register',[AdminLoginController::class, 'adminRegister'])->name('admin-register');
Route::post('/admin-register-store',[AdminLoginController::class, 'adminRegisterStore'])->name('admin-register-store');
Route::get('/admin-login',[AdminLoginController::class, 'adminLogin'])->name('admin-login');
Route::post('/admin_login',[AdminLoginController::class, 'adminloginCheck'])->name('admin_login');

// For Admin
// Route::get('/dashboard',[AdminController::class, 'index'])->name('home');
Route::prefix('admin')->middleware(['kowkhali'])->group(function () {

    // Route::get('/dashboard', [AdminController::class, 'index'])->name('admin.dashboard');
    Route::get('/dashboard', [AdminController::class, 'index'])->name('home');
    // Banner
    Route::get('/add-banner',[AdminController::class, 'addBanner'])->name('add-banner');
    Route::post('/store-banner',[AdminController::class, 'storeBanner'])->name('store-banner');
    Route::get('/manage-banner',[AdminController::class, 'manageBanner'])->name('manage-banner');
    Route::get('/edit-banner/{id}',[AdminController::class, 'editBanner'])->name('edit-banner');
    Route::post('/update-banner/{id}',[AdminController::class, 'updateBanner'])->name('update-banner');
    Route::get('/delete-banner/{id}',[AdminController::class, 'deleteBanner'])->name('delete-banner');
    Route::get('/admin-logout',[AdminController::class, 'adminLogout'])->name('admin-logout');

    // About
    Route::get('/add-about',[AboutController::class, 'addAbout'])->name('add-about');
    Route::post('/store-about',[AboutController::class, 'storeAbout'])->name('store-about');
    Route::get('/manage-about',[AboutController::class, 'manageAbout'])->name('manage-about');
    Route::get('/edit-about/{id}',[AboutController::class, 'editAbout'])->name('edit-about');
    Route::post('/update-about/{id}',[AboutController::class, 'updateAbout'])->name('update-about');
    Route::get('/delete-about/{id}',[AboutController::class, 'deleteAbout'])->name('delete-about');

    // Service
    Route::get('/add-service',[ServiceController::class, 'addService'])->name('add-service');
    Route::post('/store-service',[ServiceController::class, 'storeService'])->name('store-service');
    Route::get('/manage-service',[ServiceController::class, 'manageService'])->name('manage-service');
    Route::get('/edit-service/{id}',[ServiceController::class, 'editService'])->name('edit-service');
    Route::post('/update-service/{id}',[ServiceController::class, 'updateService'])->name('update-service');
    Route::get('/delete-service/{id}',[ServiceController::class, 'deleteService'])->name('delete-service');

    // Blogs
    Route::get('/add-blog',[BlogController::class, 'addBlog'])->name('add-blog');
    Route::post('/store-blog',[BlogController::class, 'storeBlog'])->name('store-blog');
    Route::get('/manage-blog',[BlogController::class, 'manageBlog'])->name('manage-blog');
    Route::get('/edit-blog/{id}',[BlogController::class, 'editBlog'])->name('edit-blog');
    Route::post('/update-blog/{id}',[BlogController::class, 'updateBlog'])->name('update-blog');
    Route::get('/delete-blog/{id}',[BlogController::class, 'deleteBlog'])->name('delete-blog');

    // Team
    Route::get('/add-team',[TeamController::class, 'addTeam'])->name('add-team');
    Route::post('/store-team',[TeamController::class, 'storeTeam'])->name('store-team');
    Route::get('/manage-team',[TeamController::class, 'manageTeam'])->name('manage-team');
    Route::get('/edit-team/{id}',[TeamController::class, 'editTeam'])->name('edit-team');
    Route::post('/update-team/{id}',[TeamController::class, 'updateTeam'])->name('update-team');
    Route::get('/delete-team/{id}',[TeamController::class, 'deleteTeam'])->name('delete-team');

    //Achievemtns Number
    Route::get('/add-number',[AchievemtnsNumberController::class, 'addNumber'])->name('add-number');
    Route::post('/update-number',[AchievemtnsNumberController::class, 'updateNumber'])->name('update-number');
    
    //Achievemtns Number
    Route::get('/add-donation',[DonationController::class, 'addDonation'])->name('add-donation');
    Route::post('/update-donation',[DonationController::class, 'updateDonation'])->name('update-donation');
    
    //Contuct Us
    Route::get('/manage-contactUs',[ContactUsController::class, 'manageContactUs'])->name('manage-contactUs');
    Route::get('/delete-contactUs/{id}',[ContactUsController::class, 'deleteContact'])->name('delete-contactUs');
});
