<?php
use App\Notifications\SubscriptionRenewalFailed;
//use Illuminate\Filesystem\Filesystem;

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
//
//app()->bind('example',function (){
//
//    return new \App\Example;
//});

//
//Route::get('/',function(){
//    $user=App\User::first();
//
//    $user->notify(new SubscriptionRenewalFailed);
//
//    return 'Done';
//});

Route::get('/session-testing-project/create', function () {

    return view('session-testing-project/create');

});

Route::post('/session-testing-project', function () {

    session()->flash('message','project created');

    return redirect('/');
    //return view('session-testing-project/create');

});

Route::get('/', function () {

    return view('welcome');
});

Route::resource('/projects','ProjectsController');

Route::post('/projects/{project}/tasks','ProjectTasksController@store');

//Route::patch('/tasks/{task}','ProjectTasksController@update');

Route::post('/completed-tasks/{task}','CompletedTasksController@store');

Route::delete('/completed-tasks/{task}','CompletedTasksController@destroy');

//Route::get('/projects', 'ProjectsController@index');
Route::get('/projects/create', 'ProjectsController@create');
//
//Route::get('/projects/{project}', 'ProjectsController@show');
//
//
//Route::get('/projects/{project}/edit', 'ProjectsController@edit');
//
//Route::patch('/projects/{project}','ProjectsController@update');
//
//Route::delete('/projects/{project}','ProjectsController@destory');
//
//Route::post('/projects', 'ProjectsController@store');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
