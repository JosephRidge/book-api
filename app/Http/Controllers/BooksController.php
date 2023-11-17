<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Book;

class BooksController extends Controller
{

    /*
            - Create new book
            -  Model 
            - validating the inputs 
    */
    function createNewBook(Request $request){
       
        // validation
       $request->validate([
        'name'=>'required',
        'author'=>'required',
        'pages'=>'required',
        'IBN'=>'required',
        'category'=>'required',
        'publisher'=>'required',
        'yearOfPublication'=>'required',
    ]); 

    // creating our record
    $book = Book::create([
        'name'=>$request->name,
        'author'=>$request->author,
        'pages'=>$request->pages,
        'IBN'=>$request->IBN,
        'category'=>$request->category,
        'publisher'=>$request->publisher,
        'yearOfPublication'=>$request->yearOfPublication
    ]);

    // retrieve the book & check if empty
    $book = Book::find($book->id);

    // we return a response ( -> success or failure )
    if(!$book){
        return response([
            'message'=>'unsuccessful!'
        ]);
    }else{
        return response([
            'message'=>'success',
            'book'=>$book
        ]);
    }



    }









    //Create new Book
    function createBook(Request $request){
        // validate inputs
        // $request->validate([
        //     'name'=>'required',
        // ]); 

    /**
     * Create Book using the Task Model Class
     */
    // $book = Book::create([
    //     'name'=>$request->name,
    //     ]);

    //     $book = Book::find($book->id);
    //     if(!$book){
    //         return response(
    //             [
    //                 "message"=>"failed",
    //             ]);
    //     }else{
    //         return response(
    //             [
    //                 "message"=>"success",
    //                 "book"=>$book
    //             ]);
    //     }         
    } 
}
