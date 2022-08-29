<?php

use App\Http\Controllers\adduser;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Models\category;
use App\Models\product;
use App\Models\User;
use Illuminate\Support\Facades\DB;
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
    return view('auth.login');
});

Route::get('/dashboard', function () {

    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('addproduct',function (){
    $categorys=category::all();

    return view('Products.addproduct',compact('categorys'));

});
require __DIR__.'/auth.php';
Route::post('/addproduct',[ProductController::class,'store'])->name('product.store');;
Route::get('/product/{id}/updata_product',[ProductController::class,'edit'])->name('product.edit');

Route::put('/product/{id}',[ProductController::class,'update'])->name('product.update');
Route::delete('product/{id}',[ProductController::class,'destroy'])->name('product.destroy');
Route::resource('product', ProductController::class)->only('store','index','edit','update');

Route::get('showproduct',function (){
    $products=product::all();
    $categorys=category::all();
    return view('Products.showproduct',compact('products','categorys'));});

Route::get('product/{id}',[ProductController::class,'show'])->name('product.show');
Route::resource('product', ProductController::class,);//->only('store','index','edit','update','show');

Route::get('showcat/{id}',function ($id){
    $products=DB::table('products')->where('id_cat','=',$id)->get();
    return view('Products.flittercat',compact('products'));
});
Route::get('oneproduct/{id}',[ProductController::class,'create'])->name('product.create');


//category
Route::get('addcategory',function (){
    return view('Category.addcategory');});
Route::post('/addcategory',[CategoryController::class,'store'])->name('Category.store');
Route::resource('category', CategoryController::class,)->only('store','index');

//rgisteruser
Route::get('adduser',function (){
    return view('adduser');});
Route::post('adduser',[adduser::class,'store'])->name('addusers.store');
Route::resource('User', adduser::class,)->only('store');

Route::get('/{page}', [AdminController::class,'index']);
