<?php

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


Route::match(['get','post'],'admin','AdminController@login');
Route::group(['middleware' => ['auth']],function(){
	Route::get('admin/dashboard','AdminController@dashboard');
	
	Route::group(['prefix' => 'admin'],function(){
		Route::prefix('category')->group(function(){
			Route::match(['get','post'],'add-category','CategoryController@AddCategory');
			Route::get('list-category','CategoryController@ListCategory');
			Route::get('edit-category/{id}','CategoryController@GetEditCategory');
			Route::post('edit-category/{id}','CategoryController@PostEditCategory');
			Route::get('delete-category/{id}','CategoryController@GetDeleteCategory');
			// Route::get('add-category','CategoryController@GetAdd');
			// Route::post('add','CategoryController@PostAdd');
		});
	});
});
Route::get('logout','AdminController@logout');
Auth::routes();


Route::get('/', 'HomeController@index')->name('home');
//Route::get('san-pham/{san-pham}','HomeController@sanpham');

// Route::get(['prefix' => 'san-pham'])->group(function(){
// 	Route::get('danh-sach','ProductController@danhsach');
// });

Route::prefix('san-pham')->group(function(){
	Route::get('danh-sach','ProductController@danhsach');
	Route::get('chi-tiet/{id}','ProductController@chitiet')->name('chitiet');
	Route::get('them-san-pham','ProductController@GetThem');
	Route::post('them-san-pham','ProductController@PostThem')->name('them');
});