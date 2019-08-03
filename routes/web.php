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

//Route::get('sayhello', 'Fromcontroller@index')->middleware('test');

//Route::get('/', 'Fromcontroller@index');

Route::get('todo', 'todoController@index');



Route::get('/', function () {
   return view('welcome');
});

Route::post('create/todos', 'todoController@store');
Route::get('delete/todos/{id}', 'todoController@delete');
Route::get('update/todos/{id}', 'todoController@update');

Route::post('todos/updated/{id}', 'todoController@updated')->name('updated');






