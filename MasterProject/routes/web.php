<?php

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
Route::get('/','CategoryController@showCategory');

Route::get('/allProducts', 'ProductController@allProducts');

Route::get('/category/{id}', 'CategoryController@categoryFind');

Route::get('/product/{id}', 'ProductController@showProduct');
Route::get('/about-us', function () {
    return view('public.about-us');
});
Route::get('/contact-us', function () {
    return view('public.contact-us');
});

Route::middleware(['auth:admin'])->group(function () {
    Route::post('/dashboard/admin','AdminController@store');
    Route::get('/dashboard/admin','AdminController@create');
    Route::get('/dashboard/admin/{admin}','AdminController@destroy');
    Route::get('/dashboard/admin/{admin}/edit','AdminController@edit');
    Route::Put('/dashboard/admin/{admin}','AdminController@update');
});


//User[CRUD]
Route::middleware(['auth:admin'])->group(function () {
    Route::get('/dashboard/manage_user','AdminController@usersread');
    //Route::get('/dashboard/manage_user/{user}/edit','AdminController@edituser');
//Route::put('/dashboard/manage_user/{user}','AdminController@userupdate');
    Route::get('/dashboard/manage_user/{user}','AdminController@userdestroy');
});

//category[CRUD]
Route::middleware(['auth:admin'])->group(function () {
    Route::post('/dashboard/category','CategoryController@store');
    Route::get('/dashboard/category','CategoryController@create');
    Route::get('/dashboard/category/{category}','CategoryController@destroy');
    Route::get('/dashboard/category/{category}/edit','CategoryController@edit');
    Route::Put('/dashboard/category/{category}','CategoryController@update');
});

//product[CRUD]
Route::middleware(['auth:admin'])->group(function () {
    Route::post('/dashboard/manage_products','ProductController@store');
    Route::get('/dashboard/manage_products','ProductController@index');
    Route::Put('/dashboard/manage_products/{product}','ProductController@update');
    Route::get('/dashboard/manage_products/{product}','ProductController@destroy');
    Route::get('/dashboard/manage_products/{product}/edit','ProductController@edit');
    Route::get('/dashboard/manage_images','ProductController@forImages');
});

Route::middleware(['auth:admin'])->group(function () {
    Route::get('/orders','OrderController@index');
    Route::get('/orders/{id}','OrderController@destroy');
});


Route::get('/addToCart/{product}', 'OrderController@addToCart');

Route::get('/shopping-cart', 'OrderController@showCart');

Route::post('/Thank-you','OrderController@store');

Route::get('/deleteCart/{id}' , 'ProductController@removeCart');
Route::get('/register', function () {
    return view('public.register');
});
Route::post('/' , 'UserRegister@store');
Route::get('/delete-user/{id}' , 'UserRegister@destroy');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::prefix('admin')->group(function () {
    Route::get('/login' , 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
    Route::post('/login' , 'Auth\AdminLoginController@login')->name('admin.login.submit');
    Route::get('/dashboard','AdminController@create')->name('admin.dashboard');
});
Route::post('/adminLogout' , 'Auth\AdminLoginController@adminLogout');
