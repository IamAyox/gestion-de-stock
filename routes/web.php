<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\ProductController;
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


//built-in laravel welcome page route
Route::get('/', function () {
    return view('welcome');
});



//laravel/ui auth routes for login,registration and other stuff ...
Auth::routes();


//after registration/login the user is redirected to 
//the "/home" route (check the login and registr controllers in the path app/Http/controllers/Auth)
Route::get('/home',function(){
    //creating a dashboard route string, to use it in the home blade page in an html anchor
    // tag (<a href="{{$dashRoute}}">Dashboard</a>)
    //to redirect each user into his/her proper dashboard based on his role property/attribut.
    $role = auth()->user()->role;
    //the first $role variable is just for the prefix but the second is concatinated with the "Dash"
    //example : vendeur/vendeurDash 
    $dashBoardRoue = "$role/$role"."Dash";
    
    //return the home view with the users dashboard link
    return view('home',['dashRoute'=> $dashBoardRoue]);
})->middleware('auth');
//the home route is protected with the auth middleware to check if the user is authenticated


//each group is protected by the middleware checkRole
Route::group(['middleware'=>'CheckRole:gérant','prefix'=>'gérant'],function(){
    Route::view('/gérantDash','users.gérant.Dashboard');
    Route::resource('users',UsersController::class);
    Route::resource('products',ProductController::class);
});

Route::group(['middleware'=>'CheckRole:caissier','prefix'=>'caissier'],function(){
    Route::view('/caissierDash','users.caissier.Dashboard');
});

Route::group(['middleware'=>'CheckRole:vendeur','prefix'=>'vendeur'],function(){
    Route::view('/vendeurDash','users.vendeur.Dashboard');
});




//images access route
Route::get('/images/users/{filename}',function($filename){
    $img = Storage::disk('avatars')->get($filename);
    return response($img, 200)->header("Content-type:", "image/jpeg");
});
Route::get('/images/products/{filename}',function($filename){
    $img = Storage::disk('products')->get($filename);
    return response($img, 200)->header("Content-type:", "image/jpeg");
});