<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ostController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController12;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\FormController;
use App\Http\Controllers\CityCountryFormmController;
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

// Route::get('/', function () {
//     return view('welcome');
// });
// Route::get('/user', [UserController::class, 'show']);
// Route::get('/user/all', [UserController::class, 'all']);
// Route::get('/user/:{name}', [UserController::class, 'userInfo']);
// Route::get('/user/:{surname}/:{name}', [UserController::class, 'userInfo']);
// Route::get('/user/citys/:{username}', [UserController::class, 'userCity']);
// Route::get('/user/information', [UserController::class, 'show12']);
// Route::get('/user/information/:{name}/:{surname}', [UserController::class, 'userInfoView']);
// Route::get('/user/Citys/:{name}', [UserController::class, 'showCity']);
// Route::get('/user/All', [UserController::class, 'showAll']);
// Route::get('/user/Show', [UserController::class, 'showHello']);
// Route::get('/user/ShowVar/:{name}/:{age}/:{salary}', [UserController::class, 'showVar']);
// Route::get('/user/css/:{citys}/:{country}', [UserController::class, 'getCity']);
// Route::get('/user/css/:{citys}', [UserController::class, 'getCity']);
// Route::get('/user/css', [UserController::class, 'cssClass']);
// Route::get('/user/ifelse/{age}/{ars}/{strargument}', [UserController::class, 'getIfElse']);
// Route::get('/user/getwoarr', [UserController::class, 'getwoarrs']);
// Route::get('/', [ostController::class, 'getInfo']);
// Route::get('/', [UserController12::class, 'showUser']);
Route::get('/getUserInfos', [UserController::class, 'getUserInfos']);
Route::get('/getProfileUser', [ProfileController::class, 'getProfileUser']);
Route::get('/getCountriesCity', [CategoryController::class, 'getCountries']);
Route::get('/getCountriesCityUser', [UserController::class, 'getInfoUPC']);
Route::get('/getRoleUser', [RoleController::class, 'getRoleUser']);
Route::get('/getAllInfo', [UserController::class, 'getAllInfo']);
Route::get('/Form', [FormController::class, 'form']);
Route::get('/result', [FormController::class, 'getResult']);
Route::get('/FormPost', [FormController::class, 'formPost']);
Route::post('/resultPost', [FormController::class, 'getresultPost']);
Route::match(['get', 'post'], '/CityCountryForm', [CityCountryFormmController::class, 'cceFormForm']);
