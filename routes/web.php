<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\basicController;
use App\Http\Controllers\singleAction;
use App\Http\Controllers\resourceController;
use App\Http\Controllers\customerController;
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

// Route::get('/about',function(){
//     return view('about');
// });

// Route::get('/main',function(){
//     return view('main');
// });


                    //Routing through controller   

                    //Basic Controller
Route::get('/about',[basicController::class,'about']); //Type 1
Route::get('/main','App\Http\Controllers\basicController@main'); //Type 2

                    //Single Action Controller (--invokable)
Route::get('/welcome',singleAction::class);
Route::get('/welcome','App\Http\Controllers\singleAction');

                    //Single Action Controller (--resource)
Route::resource('/photo',resourceController::class);
Route::resource('/photo/show','App\Http\Controllers\resourceController');

                    //CRUD Operation using ElQ ORM
                            //Insert
Route::get('/insertCustomerFormOpen',[customerController::class,'insertCustomerFormOpen'])->name('insertCustomerFormOpen');
Route::post('/insertCustomerFormOpenPost',[customerController::class,'insertCustomerFormOpenPost'])->name('insertCustomerFormOpenPost');
                            //Read
Route::get('/customerDataShow',[customerController::class,'customerDataShow'])->name('customerDataShow');

                            //Delete
Route::get('/customerDataDelete/{id}',[customerController::class,'customerDataDelete'])->name('customerDataDelete');

                            //Update
Route::get('/customerDataEdit/{id}',[customerController::class,'customerDataEdit'])->name('customerDataEdit');
Route::post('/customerDataUpdate/{id}',[customerController::class,'customerDataUpdate'])->name('customerDataUpdate');


                            //Session
Route::get('/getSession',function(){
    $session = session()->all();
    printResult($session);
});

Route::get('/setSession',function(Request $request){
    $request->session()->put('project_name','Laravel CRUD Operation');
    $request->session()->put('author_name','Rakibuzzaman Ridoy');
    $request->session()->flash('key','Industy is the key to success');

    return redirect('getSession');
});

Route::get('/destroySession',function(){
    session()->forget(['project_name','author_name']);
    return redirect('getSession');

});