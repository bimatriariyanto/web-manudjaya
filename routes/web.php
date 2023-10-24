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

Route::get('/profile', function () {
    return view("frontend/profile");
});
Route::get('/form-berkelakuanbaik', function () {
    return view("frontend/form-berkelakuanbaik");
});
Route::get('/form-domisili', function () {
    return view("frontend/form-domisili");
});
Route::get('/form-kematian', function () {
    return view("frontend/form-kematian");
});
Route::get('/form-pindah', function () {
    return view("frontend/form-pindah");
});
Route::get('/form-wargatidakmampu', function () {
    return view("frontend/form-wargatidakmampu");
});

Route::group( //start LOCALIZED Routes
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath']], function(){
// all localized routes put them here

        // Auth Routes
    require __DIR__.'/auth.php';

    // frontend Routes
    require __DIR__.'/frontend.php';

        // backend Routes
  require __DIR__.'/backend.php';

}); // ENd LOCALIZED Routes

// if you have not localized routes put them outside perviouse group, in the following section
// not localized routes, puth them here

// Atom RSS Feed Routes , if you enable it you will facing XML file problem, it is issue in Atom RSS Feed Routes
// I will fix it as soon as possible
  //  Route::feeds();
