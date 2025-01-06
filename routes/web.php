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


Route::group(
[
	'prefix' => LaravelLocalization::setLocale(),
	'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]
],
function()
{	

	

	//მთავარი გვერდი
		Route::get('/', 'MainPageController@index');

	
	//news
		Route::resource('news', 'NewsController');
		
	//text
		Route::resource('/text', 'TextController');	
        Route::get('about-us', 'TextController@about_us');

	//კონტაქტი 
		Route::get('/contact', 'ContactController@index');
		Route::post('message', [  'uses' => 'ContactController@message']);

  
        Auth::routes();
		Route::get('/dashboard', 'DashboardController@index');
		Route::get('/home', 'DashboardController@index');
        Route::resource('users', 'DashboardController');
        Route::post('passwordUpdate', [
            'uses' => 'UserController@passwordUpdate']);

        Route::get('essey/{id}', 'EsseyController@index');
        Route::get('essey/{id}/{eid}', 'EsseyController@show');
        
        //blog
        Route::resource('blog', 'BlogController');
        Route::resource('question', 'QuestionController');
        Route::post('question_save', [  'uses' => 'QuestionController@save']);
        Route::post('question_update', [  'uses' => 'QuestionController@update']);
        Route::get('welcome', 'WelcomeController@index');



        

     
        

});





