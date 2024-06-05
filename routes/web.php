<?php

use App\Http\Controllers\ServicesPageController;
use Illuminate\Support\Facades\Route;
use TCG\Voyager\Facades\Voyager as FacadesVoyager;



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
    return view('pages.home');
});
Route::get('/services',['ServicesPageController@index'])->name('services');
Route::get('/about_us',['ContactUsPageController@index'])->name('about-us');
Route::get('/contact_us',['ContactUsPageController@index'])->name('contact-us');
#Route::get('/blog',['blogPageController@index'])->name('services');

Route::group(['prefix' => 'admin'], function () {
    FacadesVoyager::routes();
});
