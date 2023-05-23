<?php

// use App\Http\Controllers\CategoryController;
use App\Http\Controllers\Admin\AboutController;
use App\Http\Controllers\Admin\AdditionalServicesController;
use App\Http\Controllers\Admin\AdminAuthController;
use App\Http\Controllers\Admin\BankAccountController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\CitiesController;
use App\Http\Controllers\Admin\CountriesController;
use App\Http\Controllers\Admin\CreateBlogController;
use App\Http\Controllers\Admin\MyCategoryOrderController;
use App\Http\Controllers\Admin\OrdersController as AdminOrdersController;
use App\Http\Controllers\Admin\SliderController;
use App\Http\Controllers\Admin\TermsAndConditionsController;
use App\Http\Controllers\Admin\UsersController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\CategoryOrderController;
use App\Http\Controllers\chatcontroller;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\DropdownController;
use App\Http\Controllers\FavoriteController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\OrdersController;
use App\Http\Controllers\PasswordController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ServicesController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', [HomeController::class, 'index'])->name('home');

Auth::routes();
Route::view('register/verify', 'auth.register_verify');

Route::resource('categories', CategoryController::class);

Route::resource('blogs', BlogController::class);
// Route::get('blog', [BlogController::class, 'blog'])->name('blogs.blog');
Route::get('change', [PasswordController::class, 'index'])->name('paswords.index');
Route::get('categoryorder', [CategoryOrderController::class, 'index'])->name('categories.index');
Route::get('services', [ServicesController::class, 'index'])->name('services.index');
// Profile
Route::get('profile', [ProfileController::class, 'index'])->name('profile.index');
Route::get('profile/edit', [ProfileController::class, 'edit'])->name('profile.edit');
Route::put('profile/update', [ProfileController::class, 'update'])->name('profile.update');
Route::get('profile/store', [ProfileController::class, 'store'])->name('profile.store');
Route::get('profile/password/change', [ProfileController::class, 'createPassword'])->name('profile.create_password');
Route::post('profile/password/change', [ProfileController::class, 'changePassword'])->name('profile.change_password');

//Orders
Route::get('myorders', [OrdersController::class, 'myOrders'])->name('myorders.index');
Route::get('myorders/active', [OrdersController::class, 'activeOrder'])->name('orders.active');
Route::get('orders/finished', [OrdersController::class, 'finishedOrder'])->name('orders.finished');
Route::get('orders/create', [OrdersController::class, 'create'])->name('orders.create');
// Route::get('orders/reorder', [OrdersController::class, 'reOrder'])->name('orders.reorder');
Route::get('orders/{order}', [OrdersController::class, 'orderDetails'])->name('orders.details');
Route::get('orders', [OrdersController::class, 'orders'])->name('orders.view');
Route::post('orders', [OrdersController::class, 'store'])->name('orders.store');
Route::get('orders/{order}/cancel', [OrdersController::class, 'cancelOrder'])->name('orders.cancel');
Route::get('orders/{order}/complete', [OrdersController::class, 'completeOrder'])->name('orders.completed');
Route::get('orders/{order}/reorder', [OrdersController::class, 'reorder'])->name('orders.reorder');

//comments
Route::post('orders', [CommentController::class, 'store'])->name('comment.store');

// About Us
Route::get('aboutus', [AboutController::class, 'index'])->name('aboutus.index');
// termsandconditions
Route::get('termsandconditions', [TermsAndConditionsController::class, 'index'])->name('terms.index');
//Bank Account

// Route::get('bankAccount', [BankAccount::class, 'index'])->name('bankAcount.index');
Route::get('bankAccount', [BankAccountController::class, 'index'])->name('bankAcount.index');

// Route::get('{cat}/services',[ServicesController::class,'categoryServices'])->name('category.services');

// chat
Route::get('chat', [ChatController::class, 'index'])->name('chat.index');
//favourite
Route::get('favourite', [FavoriteController::class, 'index'])->name('favourite.index');
Route::get('favourite/{id}', [FavoriteController::class, 'delete'])->name('favourite.delete');
Route::get('order/{id}', [OrdersController::class, 'addFav'])->name('order.addFav');
Route::get('order/{id}', [OrdersController::class, 'deleteFav'])->name('order.deleteFav');
//verify coode for password

Route::get('/verify', function () {
    return view('paswords.verifyPassword');
});

Route::get('admin/login', [AdminAuthController::class, 'login'])->name('dashboard.login');
Route::post('admin/login', [AdminAuthController::class, 'adminLogin'])->name('post.login');
Route::get('admin/logout', [AdminAuthController::class, 'signOut'])->name('dashboard.logout');

// Forget Password
Route::get('/forget-password', [AdminAuthController::class, 'getEmail'])->name('get.forget');
Route::post('/forget-password', [AdminAuthController::class, 'postEmail'])->name('post.forget');

// Reset Password
Route::get('/reset-password/{token}', [AdminAuthController::class, 'getPassword'])->name('get.reset');
Route::post('/reset-password', [AdminAuthController::class, 'updatePassword'])->name('post.reset');

Route::middleware('auth:admin')->group(function () {
    Route::view('admin', 'admin.dashboard')->name('dashboard.home');

    Route::resource('admin/slider', SliderController::class);

    Route::resource('admin/additionalService', AdditionalServicesController::class);
    Route::resource('blogsCreate', CreateBlogController::class);
    Route::resource('cities', CitiesController::class);
    Route::resource('countries', CountriesController::class);
    //static Pages //
    Route::get('admin/about', [AboutController::class, 'create'])->name('about.create');
    Route::post('admin/about/store', [AboutController::class, 'store'])->name('about.store');
    Route::get('admin/bank', [BankAccountController::class, 'create'])->name('bank.create');
    Route::post('admin/bank/store', [BankAccountController::class, 'store'])->name('bank.store');
    Route::get('admin/terms', [TermsAndConditionsController::class, 'create'])->name('terms.create');
    Route::post('admin/termsstore', [TermsAndConditionsController::class, 'store'])->name('terms.store');
    Route::resource('admin/categoryOrder', MyCategoryOrderController::class);
    Route::get('admin/orders', [OrdersController::class, 'admin'])->name('admin.orders');

    // admin-users
    Route::get('admin/users', [UsersController::class, 'index'])->name('admin.users.index');
    Route::get('admin/users/edit/{user}', [UsersController::class, 'edit'])->name('admin.users.edit');
    Route::put('admin/users/update/{user}', [UsersController::class, 'update'])->name('admin.users.update');
    Route::delete('admin/users/delete/{user}', [UsersController::class, 'delete'])->name('admin.users.delete');

    // admin-orders
    Route::get('admin/orders', [AdminOrdersController::class, 'index'])->name('admin.orders.index');
    Route::delete('admin/orders/delete/{order}', [AdminOrdersController::class, 'delete'])->name('admin.orders.delete');
});

// routes for cites and countries DropDown in orders/create
Route::get('dropdown/create', [DropdownController::class, 'index']);
Route::post('api/fetch-cities', [DropdownController::class, 'fetchCity']);

Route::get('api/fetch-subcat/{id}', [OrdersController::class, 'fetchCat']);
Route::get('api/sort-asc', [OrdersController::class, 'sortAsc']);
Route::get('api/sort-desc', [OrdersController::class, 'sortDesc']);
Route::get('api/category/{id}', [OrdersController::class, 'filterCat']);
Route::get('api/subcat/{id}', [OrdersController::class, 'filterSub']);
