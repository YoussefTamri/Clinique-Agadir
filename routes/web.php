<?php

use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RoomController;

use App\Http\Controllers\TaskController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\DoctorsController;
use App\Http\Controllers\InvoiceController;
use App\Http\Controllers\PatientController;

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\OperationController;
use App\Http\Controllers\Admin\LoginController;

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







///////////////////////////////: home page user /////////////////////////////////////////



Route::get('/', [HomeController::class, 'index'])->name('index');

//////////////////////////////////////: pge of policy :////////////////////////////////////////:
Route::get('/Terms&Policy', [HomeController::class, 'TermsAndPolicy'])->name('TermsAndPolicy');



//////////////////////////////////////:  contact :////////////////////////////////////////:
Route::get('/Contact', [HomeController::class, 'contact'])->name('Contact');
Route::post('/ContactUs', [HomeController::class, 'contactUs'])->name('contactUs');





///////////////////////////////: end page user /////////////////////////////////////////




////////////////// login admin dashboard ////////////////////////////////////

Route::middleware(['auth:web','admin'])->group(function(){

Route::group([

    'prefix' => LaravelLocalization::setLocale(),
    'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ],


], function()
{


    ///////////////////:dashboard ///////////////////////////////////////////////////
    route::get('dashboard',[AdminController::class, 'dashboard'])->name('dashboard');





   ///////////////////////////: category ////////////////////////////////////////////
    Route::get('view-category',[AdminController::class, 'category']);

    Route::resource('Category', CategoryController::class);

    Route::post('add-category',[AdminController::class, 'add_category']);
    Route::get('delete_category/{id}',[AdminController::class, 'delete_category']);



    ///////////////////////////// invoice /////////////////////////////////////////////////////


    Route::get('invoice-paid',[InvoiceController::class, 'InvoicePaid'])->name('InvoicesPaid');
    Route::get('invoice-notpaid',[InvoiceController::class, 'InvoiceNotPaid'])->name('InvoicesNotPaid');
    Route::resource('Invoices', InvoiceController::class);


    ///////////////////////////// doctor ///////////////////////////////////////////////////////



    Route::resource('Doctors', DoctorsController::class);



    ///////////////////////////// task ////////////////////////////////////////////////////:

    Route::resource('Tasks', TaskController::class);



    ///////////////////:///////// operation ////////////////////////////////////////////
    Route::resource('Operations', OperationController::class);


    //////////////////////////////:: patient ///////////////////////////////////////://
    Route::resource('Patients', PatientController::class);

    Route::get('PatientOnHoppital',[PatientController::class, 'PatientOnHoppital'])->name('PatientOnHoppital');
    Route::get('PatientOutHoppital',[PatientController::class, 'PatientOutHoppital'])->name('PatientOutHoppital');


   ///////////////////////////////////////// room //////////////////////////////////////////
    Route::resource('Rooms', RoomController::class);


   ///////////////////////////////////// usre //////////////////////////////////////////////////////
    Route::resource('Users', UsersController::class)->middleware(['auth:web','super_admin']);






});


});








