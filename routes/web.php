<?php
use App\Http\Controllers\Admin\TesteController;


Route::get('/login', function () {
    return 'login';
})->name('login');

    Route::middleware([])->group(function () {

      Route::prefix('admin')->group(function () {
        Route::get('/dashboard', 'Admin\TesteController@teste');

        Route::get('/financeiro', 'Admin\TesteController@teste');

        Route::get('/rh', 'Admin', 'Admin\TesteController@teste');

        Route::get('/', 'Admin\TesteController@teste');

        Route::get('/', function () {
            return view('welcome');
        });

      });

});



