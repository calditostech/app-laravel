<?php
use App\Http\Controllers\Admin;

/*Route::resource('products', 'ProductController');*/

Route::delete('products/{id}', 'ProductController@destroy')->name('products.destroy');
Route::put('products/{id}', 'ProductController@update')->name('products.update');
Route::get('products/{id}/edit', 'ProductController@edit')->name('products.edit');
Route::get('products/create', 'ProductController@create')->name('products.create');
Route::get('products/{id}', 'ProductController@show')->name('products.show');
Route::get('products', 'ProductController@index')->name('products.index');
Route::post('products', 'ProductController@store')->name('products.store');


Route::get('/login', function () {
    return 'login';
})->name('login');

    Route::middleware([])->group(function () {

      Route::prefix('admin')->group(function () {
        Route::get('/dashboard', 'Admin\TesteController@teste');

        Route::get('/financeiro', 'Admin\TesteController@teste');

        Route::get('/rh', 'Admin\TesteController@teste');

        Route::get('/', 'Admin\TesteController@teste');

        Route::get('/', function () {
            return view('welcome');
        });

      });

});



