<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Validation\Rules\Unique;

class BookController extends Controller{
    public function index(){
        $books = Book::with('category')->get();
        return view('book.read', compact('books'));
    }

    public function create(){
        $book = new Book();
        return view('book.create', compact('book'));
    }

    public function store(Request $request){
        // Validasi data yang dikirimkan melalui $request
        $validatedData = $request->validate(rules: [
            'isbn' => 'required|unique:books|regex:/^\d{1}-\d{3}-\d{5}-\d{1}$/',
            'title' => 'required|max:100',
            'categoryid' => 'required',
            'author' => 'required|max:50',
            'price' => 'required|numeric',
        ]);

        Book::create($validatedData);

        return redirect('/book');
    }

    public function edit($isbn){
        $book = Book::findByISBN($isbn);
        return view('book.edit', compact('book'));
    }

    public function update(Request $request, $isbn){
        $book = Book::findByISBN($isbn);
    
        // Validasi data yang dikirimkan melalui $request
        $validatedData = $request->validate(rules: [
            'title' => 'required|max:100',
            'categoryid' => 'required',
            'author' => 'required|max:50',
            'price' => 'required|numeric',
        ]);

        $book->update($validatedData);
    
        return redirect('/book');
    }

    public function confirmDelete($isbn)
    {
        $book = Book::findByISBN($isbn);
        return view('book.delete', compact('book'));
    }

    public function delete($isbn)
    {
        $book = Book::findByISBN($isbn);
        $book->delete();
        return redirect('/book');
    }
}