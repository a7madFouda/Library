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

Route::get('/', function () {
    return view('login');
});
Route::group(['middleware'=>'guest:webadmin'],function(){
Route::get('/AdminLogin', 'AuthAdmin@login_get');
Route::post('/AdminLogin', 'AuthAdmin@login_post');
});
Route::group(['middleware'=>'AuthAdmin:webadmin'],function()
{

    Route::get('/AdminDashboard',"AdminDashboard@getdata");
    Route::get('/index',function(){
        return view('admin/index');
    });
    // =================================== Books =======================================

    // All Books
    Route::get('/allbooks', "Books@getAllBooks");

    // Create Book
    Route::get('/createbook', "Books@createBook");

    //Submit Create Book
    Route::post('/submitBook', "Books@submitBook");


    //Show Book
    Route::get('/showbook/{book_id}', "Books@showBook");


    //Edit Book
    Route::get('/editbook/{book_id}', "Books@editBook");
    Route::post('/updatebook/{book_id}', "Books@updateBook");

    //Delete Book

    Route::get('/deletebook/{book_id}', "Books@deleteBook");


    // =================================== Member ========================================

    // All Members
    Route::get('/Users', "Users@getAllMembers");

    // Show Member
    Route::get('/userview/{member_id}', "Users@showMember");

    //Edit profile
    Route::get('/edit_user/{member_id}', "Users@edit");
    Route::post('/UserUpdate/{member_id}', "Users@UserUpdate");


    // Delete Member
    Route::get('/deletemember/{member_id}', "Users@deleteMember");

    // Search Member
    Route::get('/search_result', "Users@search_member");
    // =================================================================================//

    Route::get('/categories','Categories@manage');

    Route::get('/add_category','Categories@add');
    Route::post('/add_category','Categories@insert');

    Route::get('/edit_category/{id}','Categories@edit');
    Route::post('/edit_category/{id}','Categories@update');

    Route::get('/delete_category/{id}','Categories@delete');


});
//========================Admin Logout==================//
Route::get('/AdminLogout',function(){
    auth()->gaurd('webadmin')->user()->logout();
    return view('admin/AdminLogin');
});
//=========================================================================================//

//==========================Start home========================//
Route::get('/homepage',"HomePage@home");

Route::get('/borrow_book/{book_id}','Books@borrow');
Route::get('/book/{book_id}','Books@BockView')->name('BookView');
Route::get('/borrowedbooks/{book_id}','Books@borrowedbooks');
Route::get('/backtoshielf/{book_id}','Books@backToShelf');
Route::get('edit_profile/{user_id}','Users@edit_profile');
Route::post('update_profile/{user_id}','Users@update_profile');



Auth::routes();


Route::group(['middleware'=>'guest'],function(){
    Route::get('/Login', 'Users@login_get');
    Route::post('/Login', 'Users@login_post');
});
