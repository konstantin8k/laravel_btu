<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

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


// GET Routes
Route::get('/about-me', function () {
    $info = [
        'first_name' => 'Konstantin',
        'last_name' => 'khomeriki',
        'age' => 30,
        'hobbies' => ['Reading', 'Hiking', 'Coding'],
    ];
    return response()->json($info);
});

Route::get('/other-info-1', function () {
    $info = [
        'field1' => 'Value1',
        'field2' => 'Value2',
    ];
    return response()->json($info);
});

Route::get('/other-info-2', function () {
    $info = [
        'field3' => 'Value3',
        'field4' => 'Value4',
    ];
    return response()->json($info);
});

// POST Route
Route::post('/update-info', function () {
    $message = 'წარმატებით განახლდა';
    $response = ['message' => $message];
    return response()->json($response);
});

// PUT Route
Route::put('/add-info', function () {
    $message = 'წარმატებით დაემატა';
    $response = ['message' => $message];
    return response()->json($response);
});

// DELETE Route
Route::delete('/delete-info', function () {
    $message = 'წარმატებით წაიშალა';
    $response = ['message' => $message];
    return response()->json($response);
});