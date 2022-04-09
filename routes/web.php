<?php
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\role;


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

//Route::get('/', function () {
 //   return view('welcome');
//});
 Route::get('/', 'App\Http\Controllers\UserRegistrationController@index')->name('index');
 Route::post('store-registration', 'App\Http\Controllers\UserRegistrationController@storeRegistration')->name('store-registration');

// ADMIN ROUTES
Route::prefix('admin')->name('admin.')->group(function () {

    // Admin Auths
    Route::get('/login', 'App\Http\Controllers\LoginController@adminIndex')->name('login.admin-index');

    Route::post('login', 'App\Http\Controllers\LoginController@adminLogin')->name('login.admin-login');
    
    Route::get('logout', 'App\Http\Controllers\LoginController@adminLogout')->name('logout');   

Route::middleware([role::class])->group(function(){

Route::get('dashboard', 'App\Http\Controllers\DashboardController@index')->name('admin.dashboard');
Route::get('form-setup', 'App\Http\Controllers\FormSetupController@index')->name('form-setup');
Route::get('add-element', 'App\Http\Controllers\FormSetupController@add_element')->name('add-element');
Route::post('store-elements', 'App\Http\Controllers\FormSetupController@storeElements')->name('store-elements');

 });
});