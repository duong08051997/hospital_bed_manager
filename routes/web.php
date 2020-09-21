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

    Route::get('/register','AuthController@showFormRegister')->name('form.register');
    Route::post('/register','AuthController@Register')->name('users.register');
    Route::get('/','AuthController@showFormLogin')->name('login');
    Route::post('login','AuthController@login')->name('users.login');
    Route::get('/logout', 'AuthController@logout')->name('users.logout');
    Route::prefix('rooms')->group(function () {
        Route::get('/','RoomController@index')->name('rooms.index');
        Route::get('/create','RoomController@create')->name('rooms.create');
        Route::post('/create','RoomController@store')->name('rooms.store');
    });
    Route::prefix('beds')->group(function () {
        Route::get('/','BedController@index')->name('beds.index');
        Route::get('/create','BedController@create')->name('beds.create');
        Route::post('create','BedController@store')->name('beds.store');
        Route::get('/{id}/edit','BedController@edit')->name('beds.edit');
        Route::post('/{id}/edit','BedController@update')->name('beds.update');
        Route::get('/{id}/out','BedController@formOut')->name('patients.formOut');
        Route::post('/{id}/out','BedController@patientOut')->name('patients.out');
    });
    Route::prefix('patients')->group(function () {
        Route::get('/','PatientController@index')->name('patients.index');
        Route::get('/create','PatientController@create')->name('patients.create');
        Route::post('/create','PatientController@store')->name('patients.store');
        Route::get('/{id}/detail','PatientController@detail')->name('patients.detail');
        Route::get('/{id}/delete','PatientController@delete')->name('patients.delete');
        Route::get('/{id}/edit','PatientController@edit')->name('patients.edit');
        Route::post('/{id}/edit','PatientController@update')->name('patients.update');
        Route::get('/search', 'PatientController@search')->name('patients.search');
        Route::get('/{id}/searchById','PatientController@searchById')->name('patients.searchById');
    });


