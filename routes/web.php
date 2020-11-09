<?php

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

Route::get('/', 'WebsiteController@index')->name('welcome');
Route::get('/services', 'WebsiteController@services')->name('services');
Route::get('/products', 'WebsiteController@allProducts')->name('allproducts');
Route::get('/feedback', 'WebsiteController@feedback')->name('feedback');
Route::post('/feedback', 'WebsiteController@submitFeedback')->name('submitfeedback');

// Route::get('/products/{product}', 'WebsiteController@store')->name('products.show');

Route::get('/adminproducts', 'ProductController@index')->name('adminproducts')->middleware(['role:staff', 'auth']);
Route::get('/adminproducts/create', 'ProductController@create')->name('adminproducts.create')->middleware(['role:staff', 'auth']);
Route::post('/adminproducts', 'ProductController@store')->name('adminproducts.store')->middleware(['role:staff', 'auth']);
Route::get('/adminproducts/edit/{id}', 'ProductController@edit')->name('adminproducts.edit')->middleware(['role:staff', 'auth']);
Route::patch('/adminproducts/{id}', 'ProductController@update')->name('adminproducts.update')->middleware(['role:staff', 'auth']);
Route::get('/adminproducts/delete/{id}', 'ProductController@destroy')->name('adminproducts.destroy')->middleware(['role:staff', 'auth']);

Route::get('/cart', 'CartController@index')->name('cart.index');
// Route::post('/cart', 'CartController@store')->name('cart.store');
Route::get('/add-product/{id}', 'CartController@store')->name('cart.store');
Route::patch('/cart/{id}', 'CartController@update')->name('cart.update');
Route::delete('/cart/{product}', 'CartController@destroy')->name('cart.destroy');

Route::get('/checkout', 'CheckoutController@index')->name('checkout.index')->middleware(['auth']);
Route::post('/checkout', 'CheckoutController@store')->name('checkout.store')->middleware(['auth']);

Route::get('/thankyou', 'ConfirmationController@index')->name('confirmation.index')->middleware(['auth']);

Route::get('/my-orders', 'OrderController@index')->name('my-orders.index')->middleware(['role:user', 'auth']);
Route::get('/my-orders/{id}', 'OrderController@clientViewSingleOrder')->name('my-orders.show')->middleware(['role:user', 'auth']);
Route::get('/my-orders/payment/{id}', 'OrderController@payment')->name('my-orders.payment')->middleware(['role:user', 'auth']);
Route::patch('/my-orders/payment/{id}', 'OrderController@uploadPayment')->name('my-orders.upload-payment')->middleware(['role:user', 'auth']);
Route::get('/my-orders/signed/{id}', 'OrderController@signed')->name('my-orders.signed')->middleware(['role:user', 'auth']);
Route::patch('/my-orders/signed/{id}', 'OrderController@uploadSigned')->name('my-orders.upload-signed')->middleware(['role:user', 'auth']);

Route::get('/all-orders', 'OrderController@allorders')->name('all-orders.index')->middleware(['role:staff', 'auth']);
Route::get('/all-orders/show/{id}', 'OrderController@staffViewSingleOrder')->name('all-orders.show')->middleware(['role:staff', 'auth']);
Route::get('/all-orders/{id}', 'OrderController@edit')->name('all-orders.edit')->middleware(['role:staff', 'auth']);
Route::patch('/all-orders/{id}', 'OrderController@update')->name('all-orders.update')->middleware(['role:staff', 'auth']);

Route::get('/all-orders/reject/{id}', 'OrderController@getReject')->name('all-orders.getreject')->middleware(['role:staff', 'auth']);
Route::patch('/all-orders/reject/{id}', 'OrderController@rejectOrder')->name('all-orders.reject')->middleware(['role:staff', 'auth']);

Route::get('/all-orders/budget/{id}', 'OrderController@budget')->name('all-orders.budget')->middleware(['role:staff', 'auth']);
Route::patch('/all-orders/budget/{id}', 'OrderController@uploadBudget')->name('all-orders.upload-budget')->middleware(['role:staff', 'auth']);

Route::get('/all-orders/invoice/{id}', 'OrderController@invoice')->name('all-orders.invoice')->middleware(['role:staff', 'auth']);
Route::patch('/all-orders/invoice/{id}', 'OrderController@uploadInvoice')->name('all-orders.upload-invoice')->middleware(['role:staff', 'auth']);

Route::get('/all-orders/service/{id}', 'OrderController@service')->name('all-orders.service')->middleware(['role:staff', 'auth']);
Route::patch('/all-orders/service/{id}', 'OrderController@uploadService')->name('all-orders.upload-service')->middleware(['role:staff', 'auth']);
Route::get('/all-orders/results/{id}', 'OrderController@results')->name('all-orders.results')->middleware(['role:staff', 'auth']);
Route::patch('/all-orders/results/{id}', 'OrderController@uploadResults')->name('all-orders.upload-results')->middleware(['role:staff', 'auth']);
Route::get('/all-orders/rawdata/{id}', 'OrderController@rawdata')->name('all-orders.rawdata')->middleware(['role:staff', 'auth']);
Route::patch('/all-orders/rawdata/{id}', 'OrderController@uploadRawdata')->name('all-orders.upload-rawdata')->middleware(['role:staff', 'auth']);


Route::get('/all-order-items/{product_id}', 'OrderController@editItemStatus')->name('all-order-items.edit')->middleware(['role:staff', 'auth']);
Route::patch('/all-order-items/{product_id}', 'OrderController@updateItemStatus')->name('all-order-items.update')->middleware(['role:staff', 'auth']);
Route::get('/all-order-items/result/{id}', 'OrderController@itemResult')->name('all-order-items.result')->middleware(['role:staff', 'auth']);
Route::patch('/all-order-items/result/{id}', 'OrderController@uploadItemResult')->name('all-order-items.upload-result')->middleware(['role:staff', 'auth']);

Route::get('/payment/download/{payment}', 'OrderController@downloadPayment');
Route::get('/signed/download/{signed}', 'OrderController@downloadSigned');

Route::get('/budget/download/{budget}', 'OrderController@downloadBudget');
Route::get('/budget/download/{invoice}', 'OrderController@downloadInvoice');
Route::get('/service/download/{service}', 'OrderController@downloadService');
Route::get('/file/download/{result}', 'OrderController@downloadResults');
Route::get('/rawdata/download/{rawdata}', 'OrderController@downloadRawdata');

Route::post('search-orders', 'OrderController@search')->middleware(['role:staff', 'auth']);

Auth::routes();

Route::get('/users', 'UsersController@getAllUsers')->middleware(['role:admin', 'auth']);
Route::post('search-users', 'UsersController@search')->middleware(['role:admin', 'auth']);
Route::get('/assign/role/{user_id}', 'UsersController@getAssignRole')->middleware(['role:admin', 'auth']);
Route::post('/assign/role/{user_id}', 'UsersController@assignRole')->name('assignRole')->middleware(['role:admin', 'auth']);
Route::get('/remove/role/{user_id}', 'UsersController@getRemoveRole')->middleware(['role:admin', 'auth']);
Route::post('/remove/role/{user_id}', 'UsersController@removeRole')->name('removeRole')->middleware(['role:admin', 'auth']);

Route::get('/useraccount', 'UseraccountController@index');
Route::get('/useraccount/edit', 'UseraccountController@edit');
Route::post('/useraccount/{id}/edit', 'UseraccountController@update')->name('editProfile');
Route::get('/change/password', 'UseraccountController@changePassword');
Route::post('/change/password', 'UseraccountController@postChangePassword')->name('changePassword');

Route::get('/home', 'HomeController@index')->name('home');
