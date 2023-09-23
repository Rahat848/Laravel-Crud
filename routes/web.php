<?php

use App\Http\Controllers\NewUsers;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
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
Route::get('/',[NewUsers::class,'index']);
Route::post('/',[NewUsers::class,'store']);
Route::get('/home',[NewUsers::class,'home']);
Route::get('/about',[NewUsers::class,'about']);
Route::get('/contact',[NewUsers::class,'contact']);

//delete
Route::get('/delete/{id}',[NewUsers::class,'delete']);

//trash
Route::get('/trash',[NewUsers::class,'trash']);

//restore
Route::get('/restore/{id}',[NewUsers::class,'restore']);

//force-delete
Route::get('/force-delete/{id}',[NewUsers::class,'forceDelete']);

//update data
Route::get('/edit/{id}',[NewUsers::class,'edit']);
// Route::get('/update/{id}',[NewUsers::class,'update']);
Route::post('/update/{id}',[NewUsers::class,'update']);


/*
//multiple comments stars here;

//session get
Route::get('/get-all-session',function(){
$session =session()->all();

echo "<pre>";
print_r($session);
});

//session set
Route::get('/set-session',function(Request $request){
    $request->session()->put('user_name','Rahat');
    $request->session()->put('user_password','123');
    $request->session()->flash('status', 'Active');
    return redirect('/get-all-session');
});

//session destory
Route::get('/destroy-session',function(Request $request){
    $request->session()->forget('user_name');
    $request->session()->forget('user_password');
    return redirect('/get-all-session');
});

//multiple comments ends here;
*/
