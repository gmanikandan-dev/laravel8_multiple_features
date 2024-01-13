<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CountryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\StateController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\DistrictController;
use App\Http\Controllers\TalukController;
use App\Http\Controllers\MyController;
use App\Http\Controllers\QrCodeController;
use App\Http\Controllers\SettingsController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CartController;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::middleware([
    'auth:web'
    ])->group(function(){

    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::get('/country/index', [CountryController::class, 'index'])->name('country/index');
    Route::get('/student/form', [StudentController::class, 'create'])->name('student/form');
    Route::post('/student/store', [StudentController::class, 'store'])->name('student/store');



    Route::post('countrystore', [CountryController::class, 'store'])->name('countrystore');
    Route::get ('countryedit/{id}', [CountryController::class, 'edit'])->name('countryedit');
    Route::post('countryupdate/{id}', [CountryController::class, 'update'])->name('countryupdate');
    Route::get('countrydestroy/{id}', [CountryController::class, 'destroy'])->name('countrydestroy');




    Route::get('/state/index', [StateController::class, 'index'])->name('state/index');
    Route::post('state/create', [StateController::class, 'create'])->name('statecreate');
    Route::post('statestore', [StateController::class, 'store'])->name('statestore');
    Route::get ('stateedit/{id}', [StateController::class, 'edit'])->name('stateedit');
    Route::post('stateupdate/{id}', [StateController::class, 'update'])->name('stateupdate');
    Route::get('statedestroy/{id}', [StateController::class, 'destroy'])->name('statedestroy');

    // Route::view('state/index','state/index');
    Route::view('district/index','district/index');
    Route::view('taluk/index','taluk/index');
    // Route::get('/country/index', function(){ return view('country/index');})->name('country/index');

    //Multiple images uploads
    Route::post('addProduct', [ProductController::class, 'addProduct'])->name('productupload');
    Route::view('images/image','images/image');

    Route::post('getstate',[StateController::class,'getstate']);
    Route::post('getdistrict',[DistrictController::class,'getdistrict']);
    Route::post('gettaluk',[TalukController::class,'gettaluk']);

    // Import and export routes
    Route::get('importExportView', [MyController::class, 'importExportView']);
    Route::get('export', [MyController::class, 'export'])->name('export');
    Route::post('import', [MyController::class, 'import'])->name('import');

    //user list routes
    Route::get('userlist', [UserController::class, 'userList']);

    // qr code generation
    Route::get('/generate-qrcode', [QrCodeController::class, 'index']);

    // send mail 
    Route::get('mailform',[SettingsController::class,'mailIndex']);
    Route::post('sendmail',[SettingsController::class,'sendMail']);


    Route::get('showemployee',[SettingsController::class,'showEmployees']);
    Route::get('/employee/pdf', [SettingsController::class, 'createPDF']);


    // send web Notifications
    Route::view('sendnotification','settings/sendnotification_index');
    Route::post('/save-token', [App\Http\Controllers\SettingsController::class, 'saveToken'])->name('save-token');
    Route::post('/send-notification', [App\Http\Controllers\SettingsController::class, 'sendNotification'])->name('send.notification');

    //send spatie multimedia upload
    Route::get('posts',[PostController::class,'index'])->name('posts.index');
    Route::get('posts/create',[PostController::class,'create'])->name('posts.create');
    Route::post('posts/store',[PostController::class,'store'])->name('posts.store');

    //Cart content 
    Route::get('/product-list', [ProductController::class, 'productList'])->name('products.list');
    Route::get('cart', [CartController::class, 'cartList'])->name('cart.list');
    Route::post('cart', [CartController::class, 'addToCart'])->name('cart.store');
    Route::post('update-cart', [CartController::class, 'updateCart'])->name('cart.update');
    Route::post('remove', [CartController::class, 'removeCart'])->name('cart.remove');
    Route::post('clear', [CartController::class, 'clearAllCart'])->name('cart.clear');

});