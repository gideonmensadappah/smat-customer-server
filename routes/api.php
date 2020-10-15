<?php

use Illuminate\Http\Request;
use App\Customer;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });
Route::get('/', function(){
    return Customer::all();
});

Route::get('/{id}', function($id){
    return Customer::find($id);
});

Route::post('/', function(Request $request){

    return Customer::create($request->all());
});

Route::put('/{id}', function(Request $request, $id){
    $customer = Customer::findOrFail($id);
     $customer->update($request->all());
     return $customer;
});

Route::delete('/{id}',function(Request $request, $id){
     Customer::find($id)->delete();
   
     return 204;
});
