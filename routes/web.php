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

Route::get('/', 'IndexController@show')->name('index');
Route::get('noticias', 'PostsController@show')->name('posts');
Route::get('noticia/{slug}', 'PostController@show')->name('post');
Route::get('etiqueta/{slug}', 'PostTagsController@show')->name('tag');
Route::get('categoria/{slug}', 'PostCategoriesController@show')->name('category');
Route::get('contact', 'ContactController@show')->name('contact');
Route::post('contact', 'ContactController@send')->name('contact.send');

try {
    $pages = \TCG\Voyager\Models\Page::all();

    foreach ($pages as $page) {
        Route::get($page->slug, 'PageController@show');
    }
} catch (\Exception $exception) {
    // do nothing
}