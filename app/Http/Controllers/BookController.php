<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{

    public function index()
    {
        return Book::all();
    }


    public function store(Request $request)
    {
        $book = new Book;
        $book->title = $request->title;
        $book->save();
        return $book;
    }


    public function show(Book $book)
    {
        return $book;
    }


    public function update(Request $request, Book $book)
    {
        //
    }


    public function destroy(Book $book)
    {
        //
    }
}
