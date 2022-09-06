<?php
use App\Http\Controllers;
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
    return view('blog.home.index');
});


Route::get('blogs','BlogController@index');

Route::view('register', 'blog.auth.register');
Route::view('loginForm', 'blog.auth.login');
Route::view('addBlog', 'blog.home.blogs.addBlog');



//Route::post('register1', 'UserController@register')->name('register2');
Route::post('registerAction','UserController@register');
Route::get('logout','UserController@getLogout');

Route::get('deleteUser/{id}','UserController@destroy');

Route::get('/showUsers','UserController@index')->name('showUsers');
Route::get('/showUser/{user}','UserController@showUser')->name('showUser');

Route::post('loginAction','UserController@login');
Route::post('addBlogAction','BlogController@create');

Route::get('/home', function () {

    return view('blog.home.index');
})->name('home');
Route::resource('users', UserController::class);
Route::post('update/{id}','UserController@update');
