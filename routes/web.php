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
use App\Http\Controllers\FORMUSERController;
use App\Http\Controllers\SessionController;
use App\View\Components\User;
use App\View\Components\Info;
use App\View\Components\Post;
use App\View\Components\Logo;

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
Route::match(['get', 'post'], '/CityCountryForm', [CityCountryFormmController::class, 'cceFormForm']);
Route::get('/Form', [FormController::class, 'Forms']);
Route::get('/FormResult', [FormController::class, 'FormsResult']);
Route::get('/Forms1', [FormController::class, 'Forms1']);
Route::get('/Forms1Result', [FormController::class, 'Forms1Result']);
Route::get('/f12', function(){
    return view('Form.f12View');
});
Route::post('/f12Result/{id}/{login}', [FormController::class, 'f12Result']);
Route::get('/FormUser', function () {
    return view('FormUsers.FormUserView');
});
Route::get('/Result', [FORMUSERController::class, 'FormUser']);
Route::get('/m1', function () {
    return view("M1View");
});
Route::get('/m2', function () {
    return view("M2View");
});
Route::get('/user', function () {
    $user = new User();
    return $user->render();
});
Route::get('/info', function(){
    $info = new Info;
    return $info->render();
});
Route::get('/post', function(){
    $user = new Post();
    return $user->render();
});
Route::get('/logo', function () {
    $logo = new Logo("https://img.razrisyika.ru/kart/94/372802-logo-6.jpg", "Логотип");
    return $logo->render();
});
Route::get('/sessionPut', [SessionController::class, 'sessionIndex']);
Route::get('/session', [SessionController::class, 'getSession']);
Route::get('/sessionUpdate', [SessionController::class, 'updateCounter']);
Route::get('/Supdate', [SessionController::class, 'indexUpdateSession']);
Route::get('/dateSessions', [SessionController::class, 'dateSession']);
Route::get('/deleteSession', [SessionController::class, 'delSession']);
