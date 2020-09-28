<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;
use App\book;
use App\User;
use File;




class Books extends Controller
{
//For Library
public function getAllBooks(){

    $books = book::all();
    return view("admin/books/allbooks",["books"=>$books]);


 }

 //For Library
    public function createBook(){
    return view('admin/books/createbook');
}


//For Library
public function submitBook(Request $request){


    $book = new book();
    $book->name=$request->input("bookname");
    $book->category=$request->input("category");
    $book->author=$request->input("author");
    $book->description=$request->input("description");
    $book->status=$request->input("status");
    if($request->hasfile('book_img')){
        $file = $request->file('book_img');
        $extension =$file->getClientOriginalExtension();
        $filename= "image".time() . '.' . $extension;
        $file->move('uploads/books_image' , $filename );
        $book->img = $filename;
    }else{
        return $request;
        $book->img = "";
    }
    $book->save();
    return redirect("/allbooks");
}

//for library
public function showBook($book_id){

    $book_data = book::findOrFail($book_id);

    return view("admin/books/bookview", ["book"=>$book_data]);
}

//for library

public function editBook($book_id) {

    $book_data = book::findOrFail($book_id);

    return view("admin/books/editbook", ["book"=>$book_data]);
}

public function updateBook($book_id) {

    request()->validate([
        "bookname"=>"required|min:3"
    ]);

    $book = book::findOrFail($book_id);
    $bookName=request("bookname");
    $category=request("category");
    $author=request("author");
    $description=request("description");

    $book->name=$bookName;
    $book->category=$category;
    $book->author=$author;
    $book->description=$description;
    $book->save();

    return redirect("/allbooks");
}

public function deleteBook($book_id) {

    $book = book::findOrFail($book_id);
    File::delete('uploads/books_image/'.$book->img);
    $book->delete($book->id);

    return redirect("/allbooks");
}


public function borrow($book_id){
    $user_id=Auth::user()->id;
    DB::table('books')->where('id',$book_id)->update(['borrowed'=>$user_id]);
    return redirect()->route('BookView',$book_id);
}
public  function BockView($book_id){
    $book=book::findOrFail($book_id);
    return view('guest/BookView',compact('book'));
}
public  function borrowedbooks(){
    $user=Auth::user()->id;
    $books=book::all()->where('borrowed',$user);
    return view('guest/borrowedbooks',compact('books'));
}


public function backToShelf($id){
    DB::table('books')->where('id', $id)->update(['borrowed'=>null]);
    return redirect()->back();
}
}
