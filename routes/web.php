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

Route::get('/', function () {
    return view('listings',[

        'heading' => 'Latest listings',
         'listings' => [
            [
                'id' => 1,
                'title' => 'Listing one',
                'description' => 'you can do it vincent come on',

            ],

            [
                'id' => 2,
                'title' => 'Listing two',
                'description' => 'programming is easy to learn',
            ],
            ],
    ]);
});

