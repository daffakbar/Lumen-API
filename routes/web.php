<?php

/** @var \Laravel\Lumen\Routing\Router $router */

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get('/', function () use ($router) {
    return $router->app->version();
});
// // genereta Application key
// $router->get('/key', function(){
//     return str_random(32);
// });
// $router->get('/foo', function(){
//     return 'Hello, Get Method!';
// });
// $router->post('/bar', function(){
//     return 'Hello, Post Method!';
// });
// // Router HTTP ver
// $router->get('/get', function(){
//     return 'Hello, GET Method!';
// });
// $router->post('/post', function(){
//     return 'Hello, GET Method!';
// });
// $router->put('/put', function(){
//     return 'Hello, PUT Method!';
// });
// $router->patch('/patch', function(){
//     return 'Hello, patch Method!';
// });
// $router->delete('/delete', function(){
//     return 'Hello, delete Method!';
// });
// $router->options('/options', function(){
//     return 'Hello, options Method!';
// });

// // Route with Parameter
// $router->get('/users/{id}', function($id){
//     return 'user ID ='. $id;
// });
// $router->get('/optional[/{param}]', function($param = null){
//     return $param;
// });

// // route redirect 
// $router->get('profile', function() {
//     return redirect()->route('route.profile');
// });
// $router->get('profile/daffa', ['as' => 'route.profile', function() {
//     return route('route.profile');
// }]);

// route group
// access admin/home 
// $router->group(['prefix' => 'admin', 'middleware'=> 'auth', 'namespace' => ''], function() use ($router){
//     $router->get('home', function() {
//         return 'Home Admin';
//     });
//     $router->get('profile', function() {
//         return 'Profile Admin';
//     });

// });
// $router->get('/key', 'ExampleController@generateKey');
// $router->post('/foo', 'ExampleController@foo');
// $router->get('/user/{id}', 'ExampleController@getUser');
// $router->get('/post/cat1/{cat1}/cat2/{cat2}', 'ExampleController@getPost');

// $router->get('/profile', ['as' => 'profile', 'uses' => 'ExampleController@getProfile']);
// $router->get('/profile/action', ['as' => 'profile.action', 'uses' => 'ExampleController@getProfileAction']);

// $router->get('/admin/home', ['middleware'=> 'age', function() {
//     return 'Old Enough';
// }]);
// $router->get('/fail', function(){
//     return 'Not yet mature';
// });

// Karyawan
$router->get('/karyawan', 'KaryawanController@index');
// $router->get('/karyawan/{id}', 'KaryawanController@show');
$router->post('/karyawan', 'KaryawanController@store');
$router->put('/karyawan/{id}', 'KaryawanController@update');
$router->delete('/karyawan/{id}', 'KaryawanController@destroy');

// Supplier
$router->get('/supplier', 'SupplierController@index');
$router->post('/supplier', 'SupplierController@store');
$router->put('/supplier/{id}', 'SupplierController@update');
$router->delete('/supplier/{id}', 'SupplierController@destroy');

// Produk kategori
$router->get('/produkKategori', 'ProdukKategoriController@index');
$router->post('/produkKategori', 'ProdukKategoriController@store');
$router->put('/produkKategori/{id}', 'ProdukKategoriController@update');
$router->delete('/produkKategori/{id}', 'ProdukKategoriController@destroy');

// Produk
$router->get('/produk', 'ProdukController@index');
$router->post('/produk', 'ProdukController@store');
$router->put('/produk/{id}', 'ProdukController@update');
$router->delete('/produk/{id}', 'ProdukController@destroy');

// login logout karyawan
$router->post('/login', 'KaryawanController@login');
$router->post('/logout', 'KaryawanController@login');

// $router->get('/detailpenjualan', 'DetailPenjualanController@index');

// Transaksi
$router->post('/penjualan', 'PenjualanController@store'); //transaksi

$router->get('/penjualan/{id}', 'PenjualanController@show'); //detail transaksi


