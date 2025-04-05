<?php

use App\Http\Controllers\Dashboard\HomeController as DashboardHomeController;
use App\Http\Controllers\LandingPage\HomeController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('dashboard', [DashboardHomeController::class, 'index'])->name('dashboard');
Route::get('profile', [DashboardHomeController::class, 'profile'])->name('profile');
Route::get('statistic', [DashboardHomeController::class, 'statistic'])->name('statistic');
Route::get('faq', [DashboardHomeController::class, 'faq'])->name('faq');
Route::get('cart', [DashboardHomeController::class, 'cart'])->name('cart');
Route::get('cart/payment/method', [DashboardHomeController::class, 'cartPayment'])->name('cart-payment');
Route::get('cart/payment/confirmation', [DashboardHomeController::class, 'cartPaymentConfirmation'])->name('cart-payment-confirmation');
Route::get('event', [DashboardHomeController::class, 'event'])->name('event');
Route::get('event-admin', [DashboardHomeController::class, 'eventAdmin'])->name('event-admin');
Route::get('event-talent', [DashboardHomeController::class, 'eventTalent'])->name('event-talent');
Route::get('event/{id}/detail', [DashboardHomeController::class, 'eventDetail'])->name('event-detail');
Route::get('event/{id}/detai/360', [DashboardHomeController::class, 'eventDetailView'])->name('event-detail-view');
Route::get('invite', [DashboardHomeController::class, 'invite'])->name('invite');
Route::get('invite/{id}/form', [DashboardHomeController::class, 'inviteForm'])->name('invite-form');
Route::get('course', [DashboardHomeController::class, 'course'])->name('course');
Route::get('invitation', [DashboardHomeController::class, 'invitation'])->name('invitation');
