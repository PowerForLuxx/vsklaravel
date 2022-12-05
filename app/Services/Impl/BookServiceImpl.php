<?php

namespace App\Services\Impl;
use App\Services\BookService;
use App\Models\Book;
use Illuminate\Http\Request;


class BookServiceImpl implements BookService
{
    public function getAll()
    {
        $books  = Book::all();

        if($books == null){
            throw new \Exception('Нету данных',404);
        }
        return $books;
    }
    public function details($id)
    {
        return view('details', [
            'products' => Book::find($id)
        ]);
    }
    public function add(Request $request)
    {
        Book::create($request->all());

    }
    public function update(Request $r, $book)
    {
        $book->name = $r->name;
        $book->author = $r->author;
        $book->years = $r->years;
        $book->save();
    }

    public function delete(Book $book)
    {
        $book->delete();

    }
}
