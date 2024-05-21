<?php

use App\Http\Controllers\Backend\AboutusController;
use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\Backend\CompanyController;
use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\FeedbackController;
use App\Http\Controllers\Backend\PhotoController as BackendPhotoController;
use App\Http\Controllers\Backend\ProductController;
use App\Http\Controllers\Frontend\FrontendController;
use App\Http\Controllers\PhotoController;
use App\Http\Controllers\ProfileController;
use App\Models\Aboutus;
use Faker\Provider\ar_EG\Company;
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

// Route::get('/', function () {
//     return view('frontend.index');
// });

Route::get('/',[FrontendController::class, 'home'])->name('front_home');
// Route::get("/products/{id}",[FrontendController::class, 'product']);
Route::get('/product-category/{id}',[FrontendController::class, 'categories'])->name('category');
Route::get('/about',[FrontendController::class, 'about'])->name('front_about');
Route::get('/contact',[FrontendController::class, 'contact'])->name('front_contact');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::resource('company', CompanyController::class)->names('company');
    Route::resource('category', CategoryController::class)->names('category');
    Route::resource('product', ProductController::class)->names('product');
    Route::resource('aboutus', AboutusController::class)->names('aboutus');
    Route::resource('photo', BackendPhotoController::class)->names('photo');
    Route::resource('dashboard', DashboardController::class)->names('dashboard');
    Route::resource('feedback', FeedbackController::class)->names('feedback');
});

require __DIR__.'/auth.php';
