<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use App\Models\Contact;
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
    return view('home');
});
Route::get('/about', function () {
    return view('about');
});
//Route::get('/users/{id}/name', function ($id,$name) {
//    return 'id:' .$id.'Name:'.$name ;
//});
Route::get('/contact', function () {
    return view('contact');
});

Route::get('contacts/add',function (){
    DB::table('contact')->insert([
       'FirstName'=>'Rashid',
       'LastName'=>'Bukanov',
        'Email'=>'190103277@stu.sdu.edu.kz',
        'Message'=>'18'
    ]);
});
Route::get('contacts',function (){
  $contacts = Contact::find(1);
  return $contacts->Email;
});
