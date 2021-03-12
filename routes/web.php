<?php

use Illuminate\Support\Facades\Route;

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

// Closure : function tanpa nama

// ROUTE SEDERHANA
// Ini untuk menampilkan view yang simple tanpa ada logika dan proses bisnis yang kompleks
// Route::get('/', function () {
//     // bisa tampilkan controller
//     // view
//     // string
//     // dll

//     return view('index');
//     // return 'hello world!';
// });

// Route::get('/about', function () {
//     // Dapat mengirim data
//     $nama = 'Handoko Adji Pangestu';
//     $umur = 20;
//     return view('about', [
//         'nama' => $nama,
//         'umur' => $umur
//     ]);
// });

// ROUTE CONTROLLES
// Pages1Controller copy dari documentation Laravel
// Route::get('/', 'Pages1Controller@home');
// Route::get('/about', 'Pages1Controller@about');

// PagesController bikin dari artisan
// php artisan make:controller PagesController
// PagesController biasanya digunakan untuk halaman static 
Route::get('/', 'PagesController@home');
Route::get('/about', 'PagesController@about');

// MahasiswaController
// php artisan make:controller MahasiwaController --resource /-r: untuk membuat method CRUD
Route::get('/mahasiswa', 'MahasiswaController@index');

// STUDENTS
// Nama Controller Plural
// Route Plural

// NOTE: create pasangan store && edit dan update

// VIEW
// Route::get('/students', 'StudentsController@index');
// /students/create harus diatas /students/{students} agar tidak bentrok
// Jadi kalo /students/create ada di bawa maka yang terjadi laravel mengira mencari student yang id nya create
// Route::get('/students/create', 'StudentsController@create');
// ACTION
// Route::get('/students/{student}', 'StudentsController@show');
// Kenapa POST karena di resources semua menggunakan seperti restful agar keamanan lebih aman
// Note: resources: StudentsController || get post put fetch delete destroy
// Ketika direturn di bagian store akan ada 419 | Page Expired dikarenakan keamanan laravel agar tidak kena cross site resource forgery CSRF atau disebut pemalsuan dari situs lain
// Jadi mengirim data namun dari situs lain tapi url punya kita
// Agar tidak seperti itu kita mengirim token di form @csrf
// Route::post('/students', 'StudentsController@store');
// Route::delete('/students/{student}', 'StudentsController@destroy');
// ROute::get('/students/{student}/edit', 'StudentsController@edit');
// Route::patch('/students/{student}', 'StudentsController@update');

// Untuk melakukan semua itu tadi jika ingin crud 1 data maka dapat menggunakan seperti ini
// maka semua route otomatis akan dibuat
Route::resource('students', 'StudentsController');
