<?php

use App\Models\Registration;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GroupeController;
use App\Http\Controllers\CreneauController;
use App\Http\Controllers\DocumentController;
use App\Http\Controllers\RegistrationController;
use Carbon\Traits\Converter;

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
    return view('home');
});
Route::resource('groupes', GroupeController::class);

Route::resource('documents', DocumentController::class);

Route::resource('registrations', RegistrationController::class);

Route::get('/registration1',[RegistrationController::class,"registration1"]);
Route::get('/registration/{id}',[RegistrationController::class,"show"]);

Route::post('/registration1',[RegistrationController::class,"registration2"]);


Route::post('/registration2a',[RegistrationController::class,"registration2a"]);


Route::post('/registration2b',[RegistrationController::class,"registration2b"]);

Route::post('/registration/edit/{id}',[RegistrationController::class,"update"]);


Route::resource('creneau', CreneauController::class);

Route::get('test', function(){
return view("test");

});



Route::get('receipe/{id}', function($id){
$registration=Registration::find($id);
    return view("receipe")->with("registration",$registration);
    
    });
    
    Route::get('badge/{id}', function($id){
        $registration=Registration::find($id);
            return view("badge")->with("registration",$registration);
            
            });
               
