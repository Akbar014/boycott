<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\Admin;
use App\Http\Middleware\User;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\user\ProductController;
use App\Http\Controllers\user\SaleController;
use App\Http\Controllers\user\CustomerController;
use App\Http\Controllers\user\InvoiceController;
use App\Http\Controllers\user\StockController;
use App\Http\Controllers\user\AddeduserController;
use App\Models\Product;
use App\Models\Visitor;
use Carbon\Carbon;


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

    // return view('auth.login');
    // $ch = curl_init();
    // curl_setopt($ch, CURLOPT_URL, 'https://api.ipify.org/');
    // curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    // $publicIP = curl_exec($ch);

    // $visitor = new Visitor;
    // $visitor['ip'] = $publicIP;
    // $visitor->save();


    $today = Visitor::whereDate('created_at', Carbon::today())->count();

    // This week's visitors (from Tuesday to Monday, if that's your week's range)
    $thisWeek = Visitor::whereBetween('created_at', [
        Carbon::now()->startOfWeek(Carbon::TUESDAY),
        Carbon::now()->endOfWeek(Carbon::MONDAY)
    ])->count();

    // This month's visitors
    $thisMonth = Visitor::whereMonth('created_at', Carbon::now()->month)
        ->whereYear('created_at', Carbon::now()->year)
        ->count();

    // This year's visitors
    $thisYear = Visitor::whereYear('created_at', Carbon::now()->year)->count();

    // Total visitors (optional if you still want it)
    $total = Visitor::count();

    $products = Product::where('d_category', '!=', 1)->orderBy('id', 'desc')->take(20)->get();
    return view('frontend.home', compact('products', 'thisWeek', 'thisMonth', 'thisYear', 'today'));
});

Route::get('/products-by-category/{d_category}/{p_category}', [ProductController::class, 'getProductsByCategories'])
    ->name('products.by.categories');

Auth::routes();




Route::resource('product', ProductController::class);
// Route::get('/home', [App\Http\Controllers\HomeController::class, 'adminHome'])->name('home');

// Route::get('admin/home', [HomeController::class, 'adminHome'])->name('admin.home')->middleware('CheckRole');
Route::middleware(['auth', 'user'])->prefix('user')->name('user.')->group(function () {
    Route::get('home', [HomeController::class, 'index'])->name('home');

    Route::resource('product', ProductController::class);
    Route::resource('sale', SaleController::class);
    Route::resource('customer', CustomerController::class);
    Route::resource('invoice', InvoiceController::class);
    Route::resource('stock', StockController::class);

    Route::get('invoices/print', [InvoiceController::class, 'print'])->name('invoices.print');
    Route::get('/customer/details/{id}', [CustomerController::class, 'details'])->name('customer.details');
    Route::get('invoices/data', [InvoiceController::class, 'data'])->name('invoices.data');
    Route::get('products/data', [ProductController::class, 'data'])->name('products.data');
    Route::get('stocks/data', [StockController::class, 'data'])->name('stocks.data');

    Route::get('addedUser/', [AddeduserController::class, 'index'])->name('addedUser');
    Route::get('users/data', [HomeController::class, 'data'])->name('users.data');
    // Route::get('invoice/data1', [InvoiceController::class,'invoicedata'])->name('invoices.data');
    // Route::get('/product/details/{id}', [ProductController::class,'show'])->name('product.details');



    // Other admin routes can be added here
});
Route::middleware(['auth', 'admin'])->prefix('admin')->name('admin.')->group(function () {
    Route::get('admin/home', [HomeController::class, 'adminHome'])->name('home');
    Route::post('admin/user/register', [HomeController::class, 'userregister'])->name('register');
    Route::get('product', [HomeController::class, 'product'])->name('products');
    Route::get('users/data', [HomeController::class, 'data'])->name('users.data');
    // Other admin routes can be added here
});
