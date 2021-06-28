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

// Route::get('/', function () {
//     return view('welcome');
// });

// login

// Just Returns Value
Route::get('/test1', function(){
    return "Hello World";
});


// Returns value with variable with validation only Alphabets are allowed
Route::get('/test1/{name}',function($name){
    return "Hello ". $name;
})->where('name','[A-Z a-z]+')->name('one_val_route');

// Passing Multiple Parameters and multiple validations
Route::get('Post/{postid}/comments/{commentid}',function($postid, $commentid){
    return "Your PostId : ".$postid."  -  Comment : ".$commentid;
})->where(['commentid' =>'[A-Z a-z]+','postid'=>'[0-9]+'])->name('testval');


// Calling Blade file Directly
Route::view('sample1','Practice.sample1')->name('named route');

Route::view('sample2','Practice.sample2',['name'=>"Kishore",'age'=>"25"])->name('ViewSampleBlade');

Route::redirect('redirect1', 'test1');
Route::permanentRedirect('/redirect2', '/sample2');


Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


// Route::get('posts', 'PostController@index');
// Route::get("create", 'PostController@create');
// Route::post('store', 'PostController@store');


Route::get('Survey','Survey\QuestionaireController@index');
Route::get('createquestionaireform','Survey\QuestionaireController@create');
Route::post('questionairestore','Survey\QuestionaireController@store');
Route::get('viewquestion/{surveyqn}','Survey\QuestionaireController@show');
Route::get('Questionaire/{questionaireId}/questions','Survey\QuestionController@createform');

Route::post('Questionaire/{questionaireId}/questionpost','Survey\QuestionController@Store');
