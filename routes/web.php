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
// welcome
// Route::get('/', function () {
//     return view('auth/login');
// });
//
// Auth::routes();
//
// Route::get('/home', 'HomeController@index')->name('home');



// =====larablog=====

// ini bagian Employes
// Route::get('/', 'RumahController@showHome');

Route::get('/createEmployes', 'RumahController@createEmployes');

Route::post('/saveEmployes', 'RumahController@saveEmployes');

Route::get('/showEmployes', 'RumahController@showEmployes');

Route::get('/emp','EmpController@index');

Route::get('deleteEmp/{id}', 'RumahController@destroyEmp');

Route::get('editEmp/{id}', 'RumahController@editEmp');

Route::patch('updateEmp/{id}', 'RumahController@updateEmp');


// ini bagian customer
Route::get('/createCustomer', 'RumahController@createCustomer');

Route::post('/saveCustomer', 'RumahController@saveCustomer');

Route::get('/showCustomer', 'RumahController@showCustomer');

Route::get('deletecusto/{id}', 'RumahController@destroycusto');

Route::get('editCusto/{id}', 'RumahController@editCusto');

Route::patch('updateCusto/{id}', 'RumahController@updateCusto');

// // bagian Supplier
Route::get('/createSupplier', 'RumahController@createSupplier');

Route::post('/saveSupplier', 'RumahController@saveSupplier');

Route::get('/showSupplier', 'RumahController@showSupplier');

Route::get('/deleteSupp/{id}', 'RumahController@destroySupp');

Route::get('editSupp/{id}', 'RumahController@editSupp');

Route::patch('updateSupp/{id}', 'RumahController@updateSupp');

// // bagian product
Route::get('/createProduct', 'RumahController@createProduct');

Route::post('/saveProduct', 'RumahController@saveProduct');

Route::get('/showProduct', 'RumahController@showProduct');

Route::get('/deleteProd/{id}', 'RumahController@destroyProd');

Route::get('editProd/{id}', 'RumahController@editProd');

Route::patch('updateProd/{id}', 'RumahController@updateProd');


// bagian transjual
Route::get('/createTransjual', 'RumahController@createTransjual');

Route::post('/saveTransjual', 'RumahController@saveTransjual');

Route::get('/showTransjual', 'RumahController@showTransjual');

Route::get('/deletetrj/{id}', 'RumahController@destroytrj');

Route::get('editTrj/{id}', 'RumahController@editTrj');

Route::patch('updateTrj/{id}', 'RumahController@updateTrj');


// Route::get('/trs', 'RumahController@showPenjualan');

// ini pembuatan dalam web route
// Route::get('/trs', function() {
//
//     $trs = DB::table('customer')
//            ->join('transjual', 'transjual.customer_id', '=', 'customer.id')
//            ->join('product', 'transjual.code_product', '=', 'product.id')
//            ->select('transjual.*', 'customer.*', 'product.*')
//            ->get();
//
//     return view('profile2', compact('trs'));
// });

// ======== form validtion ==============

Route::get('my-form','RumahController@myform');

Route::post('my-form','RumahController@myformPost');

Route::get('form-validation', 'RumahController@formValidation');
Route::post('form-validation', 'RumahController@formValidationPost');

// ========blogging================

Route::get('/','RemployesController@index');















// and
