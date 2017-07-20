<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

$api = app('Dingo\Api\Routing\Router'); // I use an instance of the Dingo dependency and store it into a variable

// Afterwards, we use the instance to create routes for the API
$api->version('v1', function($api) { // Since this is the first and possibly only version of the api, we group the routes into version 'v1'
    $api->get('students', 'App\Http\Controllers\StudentController@index');  // Route created to hit the '/students' endpoint with a GET request and retrieve all of the students. We utilize the 'index' method of the StudentController to do so
    $api->post('students', 'App\Http\Controllers\StudentController@store'); // Route created to hit the '/students' endpoint with a POST request and POST form data for the student into the database. We use the 'store' method from the StudentController
});