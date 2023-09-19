<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;



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



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware(['auth', 'checkrole:developer,create posts'])->group(function () {
    Route::resource('posts', PostController::class);
});

// Routes for managing roles
Route::group(['middleware' => ['auth']], function () {
    // List roles
    Route::get('/roles', 'RoleController@index')->name('roles.index')->middleware('can:view-roles');

    // Create role (if needed)
    Route::get('/roles/create', 'RoleController@create')->name('roles.create')->middleware('can:create-roles');
    Route::post('/roles', 'RoleController@store')->name('roles.store')->middleware('can:create-roles');

    // Edit role (if needed)
    Route::get('/roles/{role}/edit', 'RoleController@edit')->name('roles.edit')->middleware('can:edit-roles');
    Route::put('/roles/{role}', 'RoleController@update')->name('roles.update')->middleware('can:edit-roles');

    // Delete role (if needed, typically only for super admins)
    Route::delete('/roles/{role}', 'RoleController@destroy')->name('roles.destroy')->middleware('can:delete-roles');
});

// Routes for managing permissions
Route::group(['middleware' => ['auth']], function () {
    // List permissions
    Route::get('/permissions', 'PermissionController@index')->name('permissions.index')->middleware('can:view-permissions');

    // Create permission (if needed)
    Route::get('/permissions/create', 'PermissionController@create')->name('permissions.create')->middleware('can:create-permissions');
    Route::post('/permissions', 'PermissionController@store')->name('permissions.store')->middleware('can:create-permissions');

    // Edit permission (if needed)
    Route::get('/permissions/{permission}/edit', 'PermissionController@edit')->name('permissions.edit')->middleware('can:edit-permissions');
    Route::put('/permissions/{permission}', 'PermissionController@update')->name('permissions.update')->middleware('can:edit-permissions');

    // Delete permission (if needed, typically only for super admins)
    Route::delete('/permissions/{permission}', 'PermissionController@destroy')->name('permissions.destroy')->middleware('can:delete-permissions');
});