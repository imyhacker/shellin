<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ShellController;
use App\Models\User;
use App\Models\Shell;
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

	$user = DB::table('users')->where('role','user')->get();
	$total_shell = Shell::get()->count();
	$count_user = User::where('role','user')->count();
	$count_shell = Shell::where('sold', 0)->count();
	$count_shell_sold = Shell::where('sold', 1)->count();
	return view('client/index',['total_shell'=>$total_shell,'user'=>$user,'count_user'=>$count_user,'count_shell'=>$count_shell,'count_shell_sold'=>$count_shell_sold]);
});

Auth::routes(['verify'=>true]);

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('status/{id}', [HomeController::class, 'status'])->name('status');

// Upload New Shell 
Route::get('home/cek', [ShellController::class, 'cek'])->middleware('can:isAdmin')->name('cekshell');
Route::post('home/cek/yukcekshell', [ShellController::class, 'yukcek'])->middleware('can:isAdmin')->name('yukcekshell');
Route::post('home/cek/yukcekshell/post', [ShellController::class, 'postshell'])->middleware('can:isAdmin')->name('postshell');


// LOOK USER
Route::get('home/lihatuser', [HomeController::class, 'lihatuser'])->name('lihatuser');
Route::get('home/lihatshell', [HomeController::class, 'lihatshell'])->name('lihatshell');




//Pemilihan, Pembelian, Cekout

Route::get('home/list', [ShellController::class, 'list'])->name('listshell');
Route::get('home/list/{id}/lebih', [ShellController::class, 'lebih']);
Route::get('home/list/{id}/lebih/beli', [ShellController::class, 'beli'])->name('asu');
Route::post('home/list/{id}/lebih/beli/bayar', [ShellController::class, 'bayar'])->name('bayar');



//account
Route::get('home/{id}/account', [HomeController::class, 'account'])->name('account');
Route::get('home/{id}/account/editacc', [HomeController::class, 'editacc'])->name('editacc');
Route::get('home/{id}/account/editacc/tampung', [HomeController::class, 'tampung']);
Route::post('home/updateacc', [HomeController::class, 'updateacc'])->name('updateacc');

//History
Route::get('home/{email}', [HomeController::class, 'history']);