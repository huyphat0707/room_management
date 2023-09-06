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

Route::get('/', function () {
    return view('welcome');
});


/*
 * Backend Routes
 * Namespaces indicate folder structure
 */
Route::group([
    'as' => 'pages.', 
    // 'middleware' => ['auth']
], function () {
    include_route_files(__DIR__ . '/Pages/');
});

/*
 * Api Routes
 * Namespaces indicate folder structure
 */
// Route::group([
//     'prefix'     => 'api',
//     'as'         => 'api.',
//     // 'middleware' => 'auth',
// ], function () {
//     include_route_files(__DIR__ . '/Api/');
// });
