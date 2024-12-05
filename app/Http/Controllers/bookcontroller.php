<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\book;


class bookcontroller extends Controller
{
    public function index()
    {
        $books = book::all();
        return view("book.index")->with('books', $books);

    }
    public function show($id)
    {
        $book = Book::find($id);
        dd($book);
        return view('book.show')->with('book', $book);
    }
}
