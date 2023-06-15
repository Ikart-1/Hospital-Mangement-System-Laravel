<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AppointmentController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/',[HomeController::class,'index']);

Route::get('/home',[HomeController::class,'redirect']);

Route::middleware([
    'auth:sanctum','verified'])->get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
    
Route::get('/add_doctor_view',[AdminController::class,'addview']);
Route::post('/upload_doctor',[AdminController::class,'upload']);

Route::post('/appointment',[HomeController::class,'appointment']);
Route::get('/myappointment',[HomeController::class,'myappointment']);
Route::get('/cancel_appoint/{id}',[HomeController::class,'cancel_appoint']);
Route::get('/showappointment',[AdminController::class,'showappointment']);

Route::get('/approved/{id}',[AdminController::class,'approved']);
Route::get('/canceled/{id}',[AdminController::class,'canceled']);
Route::get('/restored/{id}',[AdminController::class,'restored']);

Route::get('/updateapp/{id}',[AdminController::class,'updateapp']);
Route::post('/editapp/{id}',[AdminController::class,'editapp']);

Route::get('/showhisto',[AdminController::class,'showhisto']);

Route::get('/rendez-vous', [AdminController::class, 'getRendezVous'])->name('rendez-vous');

Route::get('/showadoctors',[AdminController::class,'showadoctors']);

Route::get('/deletedoctor/{id}',[AdminController::class,'deletedoctor']);
Route::get('/updatedoctor/{id}',[AdminController::class,'updatedoctor']);
Route::post('/editdoctor/{id}',[AdminController::class,'editdoctor']);

Route::get('/add_appointment_view',[AdminController::class,'addappointmentview']);
Route::post('/upload_appointment',[AdminController::class,'uploadapp']);

Route::get('/showuser',[AdminController::class,'showuser']);
Route::get('/deleteuser/{id}',[AdminController::class,'deleteuser']);
Route::get('/updateuser/{id}',[AdminController::class,'updateuser']);
Route::post('/edituser/{id}',[AdminController::class,'edituser']);

Route::get('/add_user_view',[AdminController::class,'adduserview']);
Route::post('/upload_user',[AdminController::class,'uploaduser']);