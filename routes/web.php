<?php

use GuzzleHttp\Psr7\Request as RequestApi;
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

Route::get('logout', function (){
    Auth::logout();
    return redirect('/');
});

Route::get(
    '/timeout',
    function () {
        return view('errors.timeout');
    }
);


Route::prefix('properties')->group(
    function () {
        Route::get('/latest', 'PropertyController@latest');
        Route::get('/random', 'PropertyController@randomProperties');
        Route::get('/detail/{id}', 'PropertyController@detail');
        Route::get('/get/detail/{id}', 'PropertyController@getDataDetail');
        Route::post('/form', 'PropertyController@contactForm');
        Route::get('/all-properties', 'PropertyController@getAllProperties');
        //Route::get('/all-properties-views', 'PropertyController@allpropertiesviews');
        Route::get('/filter-in-list', 'PropertyController@filterInList');
        Route::get('/data-filter', 'PropertyController@getDataFilter');
        Route::get('/filter-city', 'PropertyController@getCityFilter');
    }
);

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/', 'HomeController@index');

Route::get('/login', 'Auth\LoginController@showLoginForm');
Route::post('/login', 'Auth\LoginController@login');

Auth::routes();
Route::post('/first/login/change', 'UserController@firstLogin');


Route::group(
    ['middleware' => 'permissions'],
    function () {
        Route::prefix('profile')->group(
            function () {
                Route::get('/get-user-profile', 'ProfileController@getUserProfile');
                Route::get('/mi-cuenta', 'ProfileController@index');
                Route::get('/get-all-properties', 'ProfileController@getAllProperties');
                Route::get('/profile-left-menu', 'ProfileController@profileLeftMenu');
                Route::get('/profile-header', 'ProfileController@profileHeader');
                Route::post('/update-account', 'ProfileController@updateAccount');
                Route::get('/all-selects', 'ProfileController@getAllSelects');
                Route::post('/new-property-form', 'ProfileController@sendNewPropertyFormCtrl');
                Route::post('/inactivate-property', 'ProfileController@pleaseInactivateProperty');
                Route::post('/activate-property', 'ProfileController@pleaseActivateProperty');
                Route::post('/delete-property', 'ProfileController@deleteProperty');
                Route::post('/edit-property', 'ProfileController@editProperty');
                Route::post('/update-property', 'ProfileController@updateProperty');
                Route::post('/edit-detail', 'ProfileController@editPropertyDetails');
                Route::post('/uploadLogo', 'ProfileController@uploadLogo');
            }
        );
    }
);
