<?php

use App\Http\Controllers\AboutUsPageController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ContactUsPageController;
use App\Http\Controllers\FinancialLiteracyController;
use App\Http\Controllers\ServicesPageController;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\LoanController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\OtherFinancialServicesController;
use App\Http\Controllers\SavingsController;
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
// In a route or controller
Artisan::call('cache:clear');
Artisan::call('config:clear');
Artisan::call('route:clear');
Artisan::call('view:clear');


Route::get('members/new-account',[MemberController::class,'index'])->name('new-member');
Route::get('/services',[ServicesPageController::class])->name('services');
Route::get('/about_us',[AboutUsPageController::class,'index'])->name('about-us');
Route::get('/contact_us',[ContactUsPageController::class,'index'])->name('contact-us');
Route::get('/faqs',[FaqController::class,'index'])->name('faqs');
Route::get('/blog',[BlogController::class,'index'])->name('blog');
Route::get('/services/savings',[SavingsController::class,'index'])->name('services.savings');
Route::get('/services/loan-calculator',[LoanController::class,'calculator'])->name('loan-calculator');
Route::get('/services/loans',[LoanController::class,'index'])->name('services.loans');
Route::get('/services/financial-literacy',[FinancialLiteracyController::class,'index'])->name('services.financial-literacy');
Route::get('/services/other-financial-services',[OtherFinancialServicesController::class,'index'])->name('services.others');
Route::get('/loans/apply',[LoanController::class,'apply'])->name('loans.apply');

Route::group(['prefix' => 'admin'], function () {
    FacadesVoyager::routes();
});
