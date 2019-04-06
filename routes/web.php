<?php
use Illuminate\Support\Facades\Auth;

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
    return view('auth.register');
});

Auth::routes();
Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');

Route::get('/home', function () {

    return redirect('/' . Auth::user()->slug);

});

Route::get('/{slug}', 'ProfileController@index')->name('profile');

Route::post('/{slug}', 'ProfileController@update')->name('update');

Route::get('/{slug}/edit', 'ProfileController@edit')->name('profile');

Route::get('/{slug}/code', 'ProfileController@code')->name('code');
