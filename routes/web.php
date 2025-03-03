<?php

use App\Http\Controllers\AuthTokensController;
use App\Http\Controllers\InventoryController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SearchController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\BlogController;

use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\RegisteredUserController;

Route::controller(HomeController::class)->group(function () {
    Route::get('/', 'indexFive')->name('indexFive');
});

Route::get('/profile', function () {
    return view('edit');
})->middleware(['auth', 'verified'])->name('profile.edit');

Route::middleware('auth')->group(function () {
    Route::get('/login', [AuthenticatedSessionController::class, 'create'])->name('login');
    Route::post('/indexFive', [AuthenticatedSessionController::class, 'destroy'])->name('logout');
    Route::get('/register', [RegisteredUserController::class, 'create'])->name('register');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::prefix('home')->group(function () {
    Route::controller(HomeController::class)->group(function () {
        Route::get('/all-category', 'allCategory')->name('allCategory');
        Route::get('/category', 'category')->name('category');
        Route::get('/external-products', 'externalProducts')->name('externalProducts');
        Route::get('/out-of-stock-products', 'outOfStockProducts')->name('outOfStockProducts');
        Route::get('/shop-five-column', 'shopFiveColumn')->name('shopFiveColumn');
        Route::get('/simple-products', 'simpleProducts')->name('simpleProducts');
        Route::get('/thank-you', 'thankYou')->name('thankYou');
        Route::get('/wishlist', 'wishlist')->name('wishlist');
    });
});

Route::prefix('profile')->group(function () {
    Route::controller(ProfileController::class)->group(function () {
        Route::get('/edit', 'edit')->name('profile.edit');
    });
});

// pages
Route::prefix('pages')->group(function () {
    Route::controller(PagesController::class)->group(function () {
        Route::get('/about', 'about')->name('about');
        Route::get('/error-page', 'errorPage')->name('errorPage');
        Route::get('/faq', 'faq')->name('faq');
    });
});

// shop
Route::prefix('shop')->group(function () {
    Route::controller(ShopController::class)->group(function () {
        Route::get('/account', 'account')->name('account');
        Route::get('/cart', 'cart')->name('cart');
        Route::get('/check-out', 'checkOut')->name('checkOut');

//            Route::get('/grouped-products','groupedProducts')->name('groupedProducts');
        Route::get('/product-details/{id}', 'productDetails')->name('productDetails');

        Route::get('/sidebar-left/{category}', 'groupedProducts')->name('groupedProducts');
//        Route::get('/grouped-products', 'groupedProducts')->name('groupedProducts');
    });
});

// blog
Route::prefix('blog')->group(function () {
    Route::controller(BlogController::class)->group(function () {
        Route::get('/contact', 'contact')->name('contact');
        Route::get('/news', 'news')->name('news');
        Route::get('/newsDetails', 'newsDetails')->name('newsDetails');
        Route::get('/newsGrid', 'newsGrid')->name('newsGrid');
    });
});

Route::post('/get-tokens', [AuthTokensController::class, 'getTokens'])->name('get-tokens');
Route::get('/inventory', [InventoryController::class, 'getInventory'])->name('inventory');
Route::post('/favorites/{inventory}', [InventoryController::class, 'storeFavorite'])->middleware('auth')->name(
    'favorites.stor'
);
Route::delete('/favorites/{inventory}', [InventoryController::class, 'removeFavorite'])->middleware('auth')->name(
    'favorites.destroy'
);

Route::get('/api/search', [SearchController::class, 'search'])->name('search.inventory');

require __DIR__ . '/auth.php';

