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

Route::get('/', 'FrontendController@getHome');
Route::get('shop', 'FrontendController@getShop');
Route::get('detail/{id}/{slug}.html', 'FrontendController@getDetail');
Route::post('detail/{id}/{slug}.html', 'FrontendController@postComment');
Route::get('category/{id}/{slug}.html', 'FrontendController@getCategory');
Route::get('search', 'FrontendController@getSearch');
Route::get('contact', 'FrontendController@getContact');
Route::get('blog', 'FrontendController@getBlog');
Route::get('about', 'FrontendController@getAbout');

Route::group(['prefix' => 'cart'], function(){
  Route::get('add/{id}','CartController@getAddCart');
  Route::get('show','CartController@getShowCart');
  Route::get('delete/{id}','CartController@getDeleteCart');
  Route::get('update','CartController@getUpdateCart');
});

Route::group(['namespace'=>'Admin'], function(){
    Route::group(['prefix'=>'login', 'middleware' => 'CheckLogedIn'], function(){
       Route::get('/', 'LoginController@getLogin');
       Route::post('/', 'LoginController@postLogin')->name('login');

    });
    
    Route::get('logout', 'HomeController@getLogout');
    Route::group(['prefix'=>'admin', 'middleware' => 'CheckLogedOut'], function(){
        	Route::get('home', 'HomeController@getHome');

        	Route::group(['prefix'=>'category'], function(){
                   Route::get('/', 'CategoryController@getCategory');
                   Route::post('/', 'CategoryController@postCategory');

                   Route::get('edit/{id}', 'CategoryController@getEditCategory');
                   Route::post('edit/{id}', 'CategoryController@postEditCategory');

                   Route::get('delete/{id}', 'CategoryController@getDeleteCategory');
        	}); 

        	Route::group(['prefix'=>'product'], function(){
                   Route::get('/', 'ProductController@getProduct');
                   Route::post('/', 'ProductController@postProduct');

                   Route::get('add', 'ProductController@getAddProduct');
                   Route::post('add', 'ProductController@postAddProduct');

                   Route::get('edit/{id}', 'ProductController@getEditProduct');
                   Route::post('edit/{id}', 'ProductController@postEditProduct');

                   Route::get('delete/{id}', 'ProductController@getDeleteProduct');
          }); 
          
          Route::group(['prefix'=>'user'], function(){
                   Route::get('/', 'UserController@getUser');
                   Route::post('/', 'UserController@postUser');
       
                   Route::get('add', 'UserController@getAddUser');
                   Route::post('add', 'UserController@postAddUser');
       
                   Route::get('edit/{id}', 'UserController@getEditUser');
                   Route::post('edit/{id}', 'UserController@postEditUser');
       
                   Route::get('delete/{id}', 'UserController@getDeleteUser');
          }); 
    }); 
});