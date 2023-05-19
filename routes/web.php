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
use App\Mail\sendEmail;
use Illuminate\Support\Facades\Mail;


Route::get('/', ['as' => 'index', 'uses' => 'IndexController@index' ]);
Route::get('/property/{pid}', ['as' => 'property.view', 'uses' => 'RentController@view' ]);
Route::post('/property/{pid}', ['as' => 'property.view', 'uses' => 'RentController@get_quote' ]);
Route::get('/locale/{locale}', array('as'=>'set-locale', 'uses'=>'LanguageController@setLocale'));
Route::get('/resize', ['as' => 'property.resize', 'uses' => 'RentController@imageThumb' ]);

Route::get('/rent', 'RentController@index')->name('rent.index');
Route::get('/sale', 'SaleController@index')->name('sale.index');
Route::get('/contact', 'ContactController@show')->name('contact.show');
Route::post('/contact','ContactController@storeContactDetails')->name('contact.us.store');
Route::get('/how-it-works','HowitworksController@show')->name('how-it-works.show');
Route::get('/home-2','IndexController@show')->name('home-2');
Route::get('/about-us', 'AboutController@show')->name('about-us.show');
Route::get('/services', 'ServicesController@show')->name('services.show');
Route::get('/personal-details','UserController@createPersonalDetails')->name('personal-details.create');
Route::post('/personal-details-store','UserController@storePersonalDetails')->name('register.user');

Route::get('/property-details','UserController@createPropertyDetails');
Route::post('/property-details-store','UserController@storePropertyDetails')->name('register.store');

Route::post('/rent/contactus', 'RentController@contactus')->name('property.contactus');
Route::post('/rent/contact', 'RentController@contact')->name('property.contact');
Route::post('/sale/contactus', 'SaleController@contactus')->name('property.contactus');
Route::post('/sale/contact', 'SaleController@contact')->name('property.contact');


/*Route::get('locale/{locale}', function ($locale) {
    $validLocale = in_array($locale, ['en', 'fr']);
    if ($validLocale) {
        App::setLocale($locale);
    }
    return back();
});*/

Route::group(['middleware' => 'web'], function () {
    Route::get('/admin', 'LaravueController@index')->where('any', '.*')->name('laravue');
});
