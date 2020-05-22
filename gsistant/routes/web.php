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

/*
Route::get('/', function () {
    return view('welcome');
});
*/
Route::get('/', function () {
    return view('layouts.principal');
});


Auth::routes();


Route::resource('admin', 'Admin\UserController');
Route::resource('solicitudes', 'Admin\SolicitudController');
Route::resource('soli', 'SolicitudPlanAlimController');
Route::resource('dashboard', 'User\UserController');
Route::resource('entrenamientos', 'User\RutinaController');
Route::resource('agregarrutina', 'User\RutinaController');
Route::resource('reportes', 'Admin\ReporteController');
Route::post('solicitudes/validar/{rutina}', 'Admin\RutinaController@proccess');
Route::post('solicitudes/val/{plan}', 'valController@proccess');
Route::get('reportes/usuario/{user}', 'Admin\ReporteController@post')->name('post-coment.post');
Route::get('export', 'Admin\UserController@export')->name('admin.export');
/*
Route::resource('dashboard/post', 'dashboard\PostController');
Route::post('dashboard/post/{post}/image', 'dashboard\PostController@image')->name('post.image');
Route::get('dashboard/post/image-dowload/{image}', 'dashboard\PostController@imageDowload')->name('post.image-dowload');
Route::delete('dashboard/post/image-delete/{image}', 'dashboard\PostController@imageDelete')->name('post.image-delete');
Route::get('dashboard/post/export', 'dashboard\PostController@Export')->name('post.export');
Route::post('dashboard/post/content_image', 'dashboard\PostController@contentImage');
Route::resource('dashboard/category', 'dashboard\CategoryController');
Route::resource('dashboard/user', 'dashboard\UserController');
Route::resource('dashboard/contact', 'dashboard\ContactController')->only(['index','show','destroy']);
Route::resource('dashboard/post-coment', 'dashboard\PostComentController')->only(['index','show','destroy']);
Route::get('dashboard/post-coment/{post}/post', 'dashboard\PostComentController@post')->name('post-coment.post');
Route::get('dashboard/post-coment/j-show/{postComent}', 'dashboard\PostComentController@jshow');
Route::post('dashboard/post-coment/proccess/{postComent}', 'dashboard\PostComentController@proccess');
Route::get('/', 'web\WebController@index')->name('index');
Route::get('/categories', 'web\WebController@index')->name('index');
Route::get('/detail/{id}', 'web\WebController@detail');
Route::get('/post-category/{id}', 'web\WebController@post_category');
Route::get('/contact', 'web\WebController@contact');
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/chart', 'PaquetesController@chart')->name('chart');
*/
