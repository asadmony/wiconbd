<?php

use Illuminate\Routing\RouteGroup;
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

Route::get('/', 'HomeController@index')->name('index');
Route::get('/products', 'HomeController@products')->name('products');
Route::get('/product/{product}-{slug}', 'HomeController@product')->name('product');
Route::get('/contact', 'HomeController@contact')->name('contact');
Route::post('/contact', 'HomeController@contactmsg')->name('contactmsg');
Route::get('/about-us', 'HomeController@aboutUs')->name('aboutUs');
Route::get('/category/{cat}', 'HomeController@productsByCategory')->name('category.products');

Auth::routes();

Route::group(['middleware' => ['auth']], function () {
    Route::get('/home', 'AdminController@index')->name('home');
    Route::get('/admin', 'AdminController@index');
    // Admin Routes
    Route::get('/admin/dashboard', 'AdminController@index')->name('admin.dashboard');
    // product routes for admin
    Route::get('/admin/products', 'ProductController@index')->name('admin.products');
    Route::get('/admin/newproduct', 'ProductController@new')->name('admin.newproduct');
    Route::post('/admin/newproduct', 'ProductController@add')->name('admin.addproduct');
    Route::get('/admin/product/{product}/edit', 'ProductController@edit')->name('admin.editproduct');
    Route::put('/admin/product/{product}/edit', 'ProductController@update')->name('admin.updateproduct');
    Route::delete('/admin/product/{product}/delete', 'ProductController@delete')->name('admin.deleteproduct');
    Route::put('/admin/product/{product}/setdiscount', 'ProductController@setdiscount')->name('admin.setdiscount');
    Route::put('/admin/product/{product}/removediscount', 'ProductController@removediscount')->name('admin.removediscount');
    Route::post('/admin/product/{product}/available', 'ProductController@available')->name('admin.productavailable');
    Route::post('/admin/product/{product}/visibility', 'ProductController@visibility')->name('admin.productvisibility');
    // product photos routes for admin
    Route::get('/admin/product/{product}/images', 'ProductImageController@index')->name('admin.productimages');
    Route::post('/admin/product/{product}/images', 'ProductImageController@upload')->name('admin.addproductimage');
    Route::delete('/admin/product/images/{image}/remove', 'ProductImageController@delete')->name('admin.deleteproductimage');
    // product features routes for admin
    Route::get('/admin/product/{product}/features/new', 'ProductFeatureController@new')->name('admin.newproductfeature');
    Route::post('/admin/product/{product}/features/new', 'ProductFeatureController@add')->name('admin.addproductfeature');
    Route::delete('/admin/product/feature/{feature}/delete', 'ProductFeatureController@delete')->name('admin.deleteproductfeature');
    // category routes for admin
    Route::get('/admin/categories', 'CategoryController@index')->name('admin.categories');
    Route::get('/admin/newcategory', 'CategoryController@new')->name('admin.newcategory');
    Route::post('/admin/newcategory', 'CategoryController@add')->name('admin.newcategory');
    Route::get('/admin/category/{cat}/edit', 'CategoryController@edit')->name('admin.editcategory');
    Route::put('/admin/category/{cat}/edit', 'CategoryController@update')->name('admin.updatecategory');
    Route::delete('/admin/category/{cat}/delete', 'CategoryController@delete')->name('admin.deletecategory');
    // brand routes for admin
    Route::get('/admin/brands', 'BrandController@index')->name('admin.brands');
    Route::get('/admin/newbrand', 'BrandController@new')->name('admin.newbrand');
    Route::post('/admin/newbrand', 'BrandController@add')->name('admin.newbrand');
    Route::get('/admin/brand/{brand}/edit', 'BrandController@edit')->name('admin.editbrand');
    Route::put('/admin/brand/{brand}/edit', 'BrandController@update')->name('admin.updatebrand');
    Route::delete('/admin/brand/{brand}/delete', 'BrandController@delete')->name('admin.deletebrand');
    // auto code routes for admin
    Route::get('/admin/autocodes', 'AutocodeController@index')->name('admin.autocodes');
    Route::get('/admin/autocode/{code}/edit', 'AutocodeController@edit')->name('admin.editautocode');
    Route::put('/admin/autocode/{code}/edit', 'AutocodeController@update')->name('admin.updateautocode');
    // slider routes for admin
    Route::get('/admin/sliders', 'SliderController@index')->name('admin.sliders');
    Route::get('/admin/newslider', 'SliderController@new')->name('admin.newslider');
    Route::post('/admin/newslider', 'SliderController@add')->name('admin.newslider');
    Route::get('/admin/slider/{slider}/edit', 'SliderController@edit')->name('admin.editslider');
    Route::put('/admin/slider/{slider}/edit', 'SliderController@update')->name('admin.updateslider');
    Route::get('/admin/slider/{slider}/hide', 'SliderController@buttonhide')->name('admin.buttonhide');
    Route::get('/admin/slider/{slider}/show', 'SliderController@buttonshow')->name('admin.buttonshow');
    Route::delete('/admin/slider/{slider}/delete', 'SliderController@delete')->name('admin.deleteslider');
    // banner routes for admin
    Route::get('/admin/banners', 'BannerController@index')->name('admin.banners');
    Route::get('/admin/newbanner', 'BannerController@new')->name('admin.newbanner');
    Route::post('/admin/newbanner', 'BannerController@add')->name('admin.newbanner');
    Route::get('/admin/banner/{banner}/edit', 'BannerController@edit')->name('admin.editbanner');
    Route::put('/admin/banner/{banner}/edit', 'BannerController@update')->name('admin.updatebanner');
    Route::delete('/admin/banner/{banner}/delete', 'BannerController@delete')->name('admin.deletebanner');
    // message routes for admin
    Route::get('/admin/messages', 'MessageController@index')->name('admin.messages');
    Route::delete('/admin/messages/{msg}/delete', 'MessageController@delete')->name('admin.deletemsg');
    // change password for admin
    Route::get('/admin/changepassword', 'AdminController@changepassword')->name('changepassword');
    Route::post('/admin/changepassword', 'AdminController@savepassword')->name('save.password');
    // showroom routes for admin
    Route::get('/admin/showrooms', 'ShowroomController@index')->name('admin.showrooms');
    Route::get('/admin/newshowroom', 'ShowroomController@new')->name('admin.newshowroom');
    Route::post('/admin/newshowroom', 'ShowroomController@add')->name('admin.newshowroom');
    Route::get('/admin/showroom/{showroom}/edit', 'ShowroomController@edit')->name('admin.editshowroom');
    Route::put('/admin/showroom/{showroom}/edit', 'ShowroomController@update')->name('admin.updateshowroom');
    Route::delete('/admin/showroom/{showroom}/delete', 'ShowroomController@delete')->name('admin.deleteshowroom');
    // webinfo routes for admin
    Route::post('/admin/maintenance-mode', 'WebInfoController@maintenanceMode')->name('admin.maintenanceMode');
    Route::get('/admin/webinfos', 'WebInfoController@index')->name('admin.webinfos');
    Route::get('/admin/webinfo/{webinfo}/edit', 'WebInfoController@edit')->name('admin.editwebinfo');
    Route::put('/admin/webinfo/{webinfo}/edit', 'WebInfoController@update')->name('admin.updatewebinfo');
    // about us routes for admin
    Route::get('/admin/about-us', 'AboutController@index')->name('admin.abouts');
    Route::get('/admin/about-us/{about}/edit', 'AboutController@edit')->name('admin.editabout');
    Route::put('/admin/about-us/{about}/edit', 'AboutController@update')->name('admin.updateabout');
});

