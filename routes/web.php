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

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Route::get('/', 'PageController@index');

try {
    $pages = \TCG\Voyager\Models\Page::all();

    foreach ($pages as $page) {
        Route::get($page->slug, 'PageController@show');
    }
} catch (\Exception $exception) {
    // do nothing
}