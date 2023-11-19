<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ReviewController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Laravel\Jetstream\Rules\Role;

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
    return view('index');
});
Route::post('/logout', function (Request $request) {
    Auth::guard('web')->logout();
    $request->session()->invalidate();
    $request->session()->regenerateToken();
    return redirect('/');
})->name('logout');
Route::middleware('auth','check-role')->group(function () {
    Route::get('/dashboard', function () {
        return view('templates.index');
    })->name('dashboard');
});

Route::resource('/book',BookController::class);

Route::resource('/category',CategoryController::class);

Route::get('/', [HomeController::class, 'index'])->name('index');

Route::get('category/{category}',[BookController::class, 'showByCategory'])->name('category.show');

Route::get('book/{id}', 'BookController@show')->name('book.show');
Route::get('/search', [BookController::class, 'search']);
Route::get('category/{category}/author/{author}', [BookController::class, 'showBooksByAuthor'])->name('category.author.books');
Route::get('/upcoming', 'BookController@upcoming')->name('upcoming');
Route::get('/new-books', 'BookController@newBooks');

Route::post('/cart/add/{bookId}', [CartController::class, 'addToCart'])->name('cart.add');
Route::get('/cart', [CartController::class, 'viewCart'])->name('cart.view');
Route::get('/checkout', [CartController::class, 'showPayment'])->name('cart.payment');
Route::delete('/cart/{id}', [CartController::class, 'removeCartItem'])->name('cart.remove');

Route::get('/order', [OrderController::class, 'index'])->name('order.index');

Route::middleware(['auth'])->group(function () {
    Route::get('/profile/edit', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::put('/profile/update', [ProfileController::class, 'update'])->name('profile.update');
});

Route::post('/reviews', [ReviewController::class, 'store'])->name('reviews.store');








