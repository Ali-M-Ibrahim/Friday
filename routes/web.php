<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FirstController;
use App\Http\Controllers\ResourceController;
use App\Http\Controllers\ApiController;
use App\Http\Controllers\InvokableController;
use App\Http\Controllers\Resource2Controller;
use App\Http\Controllers\Resource3Controller;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\WebsiteController;
use App\Http\Controllers\TypeController;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\DIController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('route1',function(){
    return "Hello class";
});

Route::get('route2',function(){
   return 10;
});

Route::get('route3',function(){
    return true;
});

Route::get('route4',function (){
   return response()->json(["name"=>"ali","age"=>'28']);
});

Route::get('route5',function(){
    return "Hello class, my id is:" . 201310171;
});


Route::get('route6',function(){
     $a=10;
        $b = 20;

    return "the sum is:"  . $a + $b;
});

Route::get('route7',function(){
    $a=10;
    $b = 20;
     $c =  $a + $b;
    return "the sum is:"  . $c ;
});


Route::get('route8',function (){
  return response()->json(["data"=>"hello"])
  ->header('content-type',"application/json")
      ->header('secret',"1234")
      ->header('test',"1234");
});

Route::get('route9',function (){
    return response()->json(["data"=>"hello","first"=>"1243"])
        ->withHeaders([
            'secret'=>"123",
            "secret2"=>"123455"
        ]);
});

Route::get('route10/{id}',function ($id){
    return "Hello, the value is" . $id;
});

Route::get('route11/{id}/{name}',function ($id,$name){
    return "Hello, the value is: " . $id . " and the name is: " .$name;
});


Route::get('route12/{id?}',function ($id=0){
    return "Hello, the value is" . $id;
});

Route::get('route-13',function(){
    return "Hello class";
})->name("my-route");


Route::get('route14','App\Http\Controllers\FirstController@index');
Route::get('route15',[FirstController::class,'create'])->name('test');
Route::get('route16',[
    'uses'=>'App\Http\Controllers\FirstController@index',
    'as'=>"name"
]);
//return response()->json(["data"=>"hello","first"=>"1243"])


Route::resource('myurl',ResourceController::class);
Route::resource('myurl2',Resource2Controller::class);

Route::apiResource('apiUrl',ApiController::class);
Route::get('invoke',InvokableController::class);

//Route::resources([
//    'myurl'=>ResourceController::class,
//    'myurl2'=>Resource2Controller::class,
//]);

Route::resource('mytest',Resource3Controller::class)->only(['index','create']);
Route::resource('mytest2',Resource3Controller::class)->except(['index']);



Route::get('create-product',[ProductController::class,'create1']);
Route::get('create-product/{name}/{description}/{flag}',[ProductController::class,'create2']);
Route::post('create-product',[ProductController::class,'create5']);
Route::get('create-product-2',[ProductController::class,'create4']);

Route::get('hello',[CategoryController::class, 'test']);
Route::get('retrieve',[CategoryController::class, 'retrieve']);
Route::get('getByCondition',[CategoryController::class, 'getByCondition']);
Route::get('updateById/{id}',[CategoryController::class, 'updateById']);
Route::get('updateMass',[CategoryController::class, 'updateMass']);
Route::get('deleteById/{id}',[CategoryController::class, 'deleteById']);
Route::get('deleteMass',[CategoryController::class, 'deleteMass']);
Route::get('getData',[CategoryController::class, 'testmodels']);
Route::get('/',[CategoryController::class, 'site']);
Route::get('/firstpage',[WebsiteController::class,'index']);
Route::get('/second',[WebsiteController::class,'second']);
Route::resource('type',TypeController::class);
Route::post('postData22',[WebsiteController::class,'post'])->name('postDataName');
Route::get('/deletetype/{id}',[TypeController::class,'destroy'])->name('deleteType');
Route::get('/create-shop',[ShopController::class,'create'])->name('create-shop');
Route::post('store-shop',[ShopController::class,'store'])->name('store-shop');
Route::get('list-shop',[ShopController::class,'index'])->name('list-shop');
Route::get('delete-shop/{id}',[ShopController::class,'destroy'])->name('delete-shop');
Route::get('edit-shop/{id}',[ShopController::class,'edit'])->name('edit-shop');
Route::post('update-shop/{id}',[ShopController::class,'update'])->name('update-shop');
Route::get('get-types',[ShopController::class,'create2'])
    ->name('get-types')
    ->middleware('checktoken')
;


Route::get('image',[ImageController::class,'index']);
Route::post('image',[ImageController::class,'method1'])->name('method1');
Route::get('display',[ImageController::class,'display'])->name('display');
Route::post('image2',[ImageController::class,'method2'])->name('method2');
Route::post('image3',[ImageController::class,'method3'])->name('method3');


Route::get('DI1',[DIController::class,'f1'])->name('f1');
Route::get('DI2',[DIController::class,'f2'])->name('f2');
Route::get('DI3',[DIController::class,'f4'])->name('f4');


Route::post('/mytest',[WebsiteController::class,'mytest']);




