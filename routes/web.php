<?php




Route::get('/', function () {
    return view('auth.login');
});


// Authentication Routes...
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');
// Password Reset Routes...
Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
Route::post('password/reset', 'Auth\ResetPasswordController@reset');



Route::get('/home', 'HomeController@index')->name('home');


Route::get('report',function(){
  return view('report');
})->name('report');

Route::get('proposals',function(){
  return view('proposals');
})->name('proposals');

Route::get('proposal',function(){
  return view('proposal');
})->name('proposal');

Route::get('memorandums',function (){
  return view('memorandums');
})->name('memorandums');

Route::get('memorandum',function (){
  return view('memorandum');
})->name('memorandum');

Route::get('contracts',function (){
  return view('contracts');
})->name('contracts');

Route::get('contract',function (){
  return view('contract');
})->name('contract');
