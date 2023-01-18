<?php

use App\Http\Controllers\PayPalController;
use App\Models\Transaction;
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

Route::get('/', function () {
    $data = Transaction::all ();
    return view('welcome')->withData ( $data );
});

Route::get('/data', function () {
    $data = Transaction::all ();
    return view('datatable')->withData ( $data );
});


Route::get('payment', [PayPalController::class, 'payment'])->name('payment');
Route::get('cancel',[PayPalController::class, 'cancel'])->name('payment.cancel');
Route::get('success', [PayPalController::class, 'success'])->name('payment.success');
//Route::post('/delete', [PayPalController::class, 'delete'])->name('delete');
Route::post('/delete/{itemid}', [PayPalController::class, 'delete'])->name('delete');