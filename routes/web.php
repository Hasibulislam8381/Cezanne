<?php

use App\Http\Controllers\Backend\BannerController;
use App\Http\Controllers\Backend\ArtistController;
use App\Http\Controllers\Backend\BlogController;
use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\Backend\ExhibitionController;
use App\Http\Controllers\Backend\FrameController;
use App\Http\Controllers\Backend\GeneralInfoController;
use App\Http\Controllers\Backend\ProductController;
use App\Http\Controllers\Backend\WorkController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great !
|
*/


Auth::routes();

Route::controller(HomeController::class)->group(function () {
    Route::get('/', 'index')->name('index');
    Route::get('/admin', 'admin')->name('admin');
    Route::get('/all-products', 'all_product')->name('all_product');
    Route::get('/product-details/{slug}', 'product')->name('product');
    Route::get('/artist', 'artist')->name('artist');
    Route::get('/all-blogs', 'all_blogs')->name('all_blogs');
    Route::get('/blog-details/{slug}', 'blog_details')->name('blog_details');
    Route::get('/all-works', 'all_works')->name('all_works');
    Route::get('/all-artist', 'all_artist')->name('all_artist');
    Route::get('/all-glance', 'all_glance')->name('all_glance');
    Route::get('/carts', 'carts')->name('carts');
    Route::get('/wishlist', 'wishlist')->name('wishlist');
    Route::get('/frame', 'frame')->name('frame');
    Route::get('/exhibition', 'exhibition')->name('exhibition');
    Route::get('/gallery', 'gallery')->name('gallery');
    Route::get('/user-dashboard', 'user_dashboard')->name('user_dashboard');
    Route::get('/user-dashboard/purchaseHistory', 'purchaseHistory')->name('purchaseHistory');
    Route::get('/user-dashboard/order-view', 'orderView')->name('orderView');
    Route::get('/user-dashboard/profile', 'user_profile')->name('user_profile');
    Route::get('/checkout', 'checkout')->name('checkout');
    Route::get('/privacy', 'privacy')->name('privacy');
    Route::get('/terms_and_condition', 'terms_and_condition')->name('terms_and_condition');
    Route::get('/return_policy', 'return_policy')->name('return_policy');
    Route::get('/category', 'category')->name('category');
});
Route::controller(GeneralInfoController::class)->prefix('/admin/general_info')->name('backend.general_info.')->group(function () {
    Route::get('/', 'index')->name('index');
    Route::get('/create', 'create')->name('create');
    Route::post('/store', 'store')->name('store');
    Route::get('/edit/{general_info}', 'edit')->name('edit');
    Route::post('/update/{general_info}', 'update')->name('update');
});
Route::controller(BannerController::class)->prefix('/admin/banner')->name('backend.banner.')->group(function () {
    Route::get('/', 'index')->name('index');
    Route::get('/create', 'create')->name('create');
    Route::post('/store', 'store')->name('store');
    Route::get('/edit/{banner}', 'edit')->name('edit');
    Route::post('/update/{banner}', 'update')->name('update');
    Route::delete('/destroy/{banner}', 'destroy')->name('delete');
});
Route::controller(ArtistController::class)->prefix('/admin/artist')->name('backend.artist.')->group(function () {
    Route::get('/', 'index')->name('index');
    Route::get('/create', 'create')->name('create');
    Route::post('/store', 'store')->name('store');
    Route::get('/edit/{banner}', 'edit')->name('edit');
    Route::post('/update/{banner}', 'update')->name('update');
    Route::delete('/destroy/{artist}', 'destroy')->name('delete');
});

Route::controller(CategoryController::class)->prefix('/admin/category')->name('backend.category.')->group(function () {
    Route::get('/', 'index')->name('index');
    Route::post('/store', 'store')->name('store');
    Route::get('/edit/{category}', 'edit')->name('edit');
    Route::post('/update/{category}', 'update')->name('update');
    Route::get('/destroy/{category}', 'destroy')->name('trash');
    Route::get('/status/{category}', 'status')->name('status');
    Route::get('/reStore/{id}', 'reStore')->name('reStore');
    Route::delete('/permDelete/{id}', 'permDelete')->name('delete');
});
Route::controller(ProductController::class)->prefix('/admin/product')->name('backend.product.')->group(function () {
    Route::get('/', 'index')->name('index');
    Route::get('/create', 'create')->name('create');
    Route::post('/store', 'store')->name('store');
    Route::get('/edit/{product}', 'edit')->name('edit');
    Route::post('/update/{product}', 'update')->name('update');
    Route::get('/destroy/{product}', 'destroy')->name('trash');
    Route::get('/status/{product}', 'status')->name('status');
    Route::get('/reStore/{id}', 'reStore')->name('reStore');
    Route::delete('/permDelete/{id}', 'permDelete')->name('delete');
});
Route::controller(BlogController::class)->prefix('/admin/blog')->name('backend.blog.')->group(function () {
    Route::get('/', 'index')->name('index');
    Route::get('/create', 'create')->name('create');
    Route::post('/store', 'store')->name('store');
    Route::get('/edit/{blog}', 'edit')->name('edit');
    Route::post('/update/{blog}', 'update')->name('update');
    Route::get('/destroy/{blog}', 'destroy')->name('trash');
    Route::get('/status/{blog}', 'status')->name('status');
    Route::get('/reStore/{id}', 'reStore')->name('reStore');
    Route::delete('/permDelete/{id}', 'permDelete')->name('delete');
});
Route::controller(FrameController::class)->prefix('/admin/frame')->name('backend.frame.')->group(function () {
    Route::get('/', 'index')->name('index');
    Route::get('/create', 'create')->name('create');
    Route::post('/store', 'store')->name('store');
    Route::get('/edit/{frame}', 'edit')->name('edit');
    Route::post('/update/{frame}', 'update')->name('update');
    Route::get('/destroy/{frame}', 'destroy')->name('trash');
    Route::get('/status/{frame}', 'status')->name('status');
    Route::get('/reStore/{id}', 'reStore')->name('reStore');
    Route::delete('/permDelete/{id}', 'permDelete')->name('delete');
});
Route::controller(ExhibitionController::class)->prefix('/admin/exhibition')->name('backend.exhibition.')->group(function () {
    Route::get('/', 'index')->name('index');
    Route::get('/create', 'create')->name('create');
    Route::post('/store', 'store')->name('store');
    Route::get('/edit/{exhibition}', 'edit')->name('edit');
    Route::post('/update/{exhibition}', 'update')->name('update');
    Route::get('/destroy/{exhibition}', 'destroy')->name('trash');
    Route::get('/status/{exhibition}', 'status')->name('status');
    Route::get('/reStore/{id}', 'reStore')->name('reStore');
    Route::delete('/permDelete/{id}', 'permDelete')->name('delete');
});
Route::controller(WorkController::class)->prefix('/admin/work')->name('backend.work.')->group(function () {
    Route::get('/', 'index')->name('index');
    Route::get('/create', 'create')->name('create');
    Route::post('/store', 'store')->name('store');
    Route::get('/edit/{work}', 'edit')->name('edit');
    Route::post('/update/{work}', 'update')->name('update');
    Route::get('/destroy/{work}', 'destroy')->name('trash');
    Route::get('/status/{work}', 'status')->name('status');
    Route::get('/reStore/{id}', 'reStore')->name('reStore');
    Route::delete('/permDelete/{id}', 'permDelete')->name('delete');
});
