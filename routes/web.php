<?php

use App\Http\Requests\ForeignComplaintValidation;
use App\Http\Requests\NativeComplaintValidation;
use Illuminate\Support\Facades\Route;
use App\Models\Nativecomplaint;
use App\Models\Foreigncomplaint;
use App\Models\Nativefeedback;
use App\Models\Foreignfeedback;
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
    return view('welcome');
});

Route::group(['middleware' => ['auth']], function() { 
    Route::get('/dashboard', 'App\Http\Controllers\DashboardController@index')->name('dashboard');
});

Route::group(['middleware' => ['auth']], function() { 
    Route::get('/dashboard/myprofile', 'App\Http\Controllers\DashboardController@myprofile')->name('dashboard.myprofile');
});

Route::group(['middleware' => ['auth', 'role:native_tourist']], function() { 
    Route::get('/dashboard/complaints', 'App\Http\Controllers\DashboardController@complaints')->name('dashboard.complaints');
});

Route::group(['middleware' => ['auth', 'role:foreign_tourist']], function() { 
    Route::get('/dashboard/complaintss', 'App\Http\Controllers\DashboardController@complaintss')->name('dashboard.complaintss');
});

Route::group(['middleware' => ['auth', 'role:native_tourist']], function() { 
    Route::get('/dashboard/feedback', 'App\Http\Controllers\DashboardController@feedback')->name('dashboard.feedback');
});

Route::group(['middleware' => ['auth', 'role:foreign_tourist']], function() { 
    Route::get('/dashboard/ftfeedback', 'App\Http\Controllers\DashboardController@ftfeedback')->name('dashboard.ftfeedback');
});

Route::group(['middleware' => ['auth', 'role:tourist_police_si']], function() { 
    Route::get('/dashboard/tickets', 'App\Http\Controllers\DashboardController@tickets')->name('dashboard.tickets');
});

Route::group(['middleware' => ['auth', 'role:tourist_police_si']], function() { 
    Route::get('/dashboard/ftickets', 'App\Http\Controllers\DashboardController@ftickets')->name('dashboard.ftickets');
});

Route::post('/dashboard/complaints', function(NativeComplaintValidation $request){
    Nativecomplaint::create([
        'name' => request('name'),
        'email' => request('email'),
        'phone' => request('phone'),
        'hometown' => request('hometown'),
        'nid' => request('nid'),
        'location' => request('location'),
        'message' => request('message')
    ]);
    return redirect('/dashboard/complaints')->with('status', 'Complaint Added Successfully! The authorities will call you in a few minutes.');

});

Route::post('/dashboard/complaintss', function(ForeignComplaintValidation $request){
    Foreigncomplaint::create([
        'name' => request('name'),
        'email' => request('email'),
        'phone' => request('phone'),
        'nationality' => request('nationality'),
        'hometown' => request('hometown'),
        'passport' => request('passport'),
        'visanum' => request('visanum'),
        'visatype' => request('visatype'),
        'visaexp' => request('visaexp'),
        'dateofentry' => request('dateofentry'),
        'location' => request('location'),
        'message' => request('message')
    ]);
    return redirect('/dashboard/complaintss')->with('status', 'Complaint Added Successfully! The authorities will call you in a few minutes.');

});

Route::post('/dashboard/ftfeedback', function(Request $request){
    Foreignfeedback::create([
        'name' => request('name'),
        'email' => request('email'),
        'feedback' => request('feedback')
    ]);
    return redirect('/dashboard/ftfeedback')->with('status', 'Thank you for your feedback!');

});

Route::post('/dashboard/feedback', function(Request $request){
    Nativefeedback::create([
        'name' => request('name'),
        'email' => request('email'),
        'feedback' => request('feedback')
    ]);
    return redirect('/dashboard/feedback')->with('status', 'Thank you for your feedback!');

});



require __DIR__.'/auth.php';