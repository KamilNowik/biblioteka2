<?php

namespace App\Http\Controllers;

use Request;
use App\Book;
use App\Http\Requests\CreateBookRequest;

class BooksController extends Controller
{	
	/* Wyświetla listę książek*/

    public function index()
    {
    	$books = Book::latest()->get();
    	return view('books.index')->with('books', $books);    	
    }

    /*Wyświetla pojedyńczą książkę*/

    public function show($id)
    {
    	$book = Book::findOrFail($id);
    	return view('books.show')->with('book', $book);
    }

    /*Wyświetla formularz dodawania ksiażki*/

    public function create()
    {
    	return view('books.create');
    }

    /*Dodaje książkę do bazy*/

    public function store(CreateBookRequest $request)
    {
    	Book::create($request->all());
    	return redirect ('/');
    }

    /*Formularz edycji*/

    public function edit($id)
    {
    	$book = Book::findOrFail($id);
    	return view('books.edit')->with('book', $book);
    }

    /*Aktualizacja*/

    public function update($id, CreateBookRequest $request)
    {
    	$book = Book::findOrFail($id);
    	$book->update($request->all());
    	return redirect('books');
    }   

    /*Usuwa książkę z bazy*/

    public function destroy($id)
    {
    	$book = Book::findOrFail($id);
    	$book->delete();
    	return redirect('books');
    }
}
