<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjectController;
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
Route::get('/projects', [ProjectController::class , 'index']);
// important using vscode prees cte+/  and when you choose ProjectController it will add namespace
// Route::get('/projects', 'App\Http\Controllers\ProjectController@index'); // old method 
// Route::get('/projects/{id}', [ProjectController::class , 'show']);
// Route::get('/projects/{id}', [ProjectController::class, 'show'])->whereUuid('id');

Route::get('/projects/create', [ProjectController::class , 'create']);
// assigned endpoint
Route::post('/projects', [ProjectController::class , 'store']);


Route::get('/projects/{id}/edit', [ProjectController::class, 'edit']);
Route::put('/projects/{id}', [ProjectController::class , 'update']);
Route::get('/projects/{id}', [ProjectController::class, 'show']);

Route::delete('/projects/{id}', [ProjectController::class, 'delete']);