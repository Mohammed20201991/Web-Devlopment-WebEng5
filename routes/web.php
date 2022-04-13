<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\TrackController;

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

// if there is a get requst for this end point(/) then call this function 
// Route::get('/', function () {
//     return view('welcome');   //it show welcome.blade.php 
// });

Route::get('/', function () {
    $numberOfProjects  = 20;
    return view('main',['numberOfProjects' => $numberOfProjects]);//it show main.blade.php 
          });
// step1 :
// Route::get('/project', [ProjectController::class , 'index'])->name('projects.index');
// // important using vscode prees cte+/  and when you choose ProjectController it will add namespace
// // Route::get('/projects', 'App\Http\Controllers\ProjectController@index'); // old method 
// // Route::get('/projects/{id}', [ProjectController::class , 'show']);
// Route::get('/projects/{project}', [ProjectController::class, 'show'])->whereNumber('project');

// Route::get('/projects/create', [ProjectController::class , 'create']);
// // assigned endpoint
// Route::post('/projects', [ProjectController::class , 'store']);

// Route::get('/projects/{project}/edit', [ProjectController::class, 'edit']);
// // Route::get('/projects/{project}/edit', [ProjectController::class, 'edit']);
// Route::put('/projects/{project}', [ProjectController::class , 'update']);
// // Route::get('/projects/{id}', [ProjectController::class, 'show']);
// Route::delete('/projects/{project}', [ProjectController::class, 'delete']);

// with one line of code we can create route registeration
Route::resource('projects', ProjectController::class);
Route::resource('projects.tracks', TrackController::class)->shallow();