<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use App\Http\Requests\BookRequest;


class BookController extends Controller
{
    public function allBooks(){
        return view('books',['data'=>Book::all()]);
    }

    public function detailsbook($id){
        $book = new Book;
        return view('detailsbook',['data'=>Book::find($id)]);
    }
    public function updatebook($id){
        $book = new Book;
        return view('updatebook',['data'=>$book->find($id)]);
    }
    public function updatebookup($id, BookRequest $req){

        $book = Book::find($id);
        $book->name = $req->input('name');
        $book->years=$req->input('years');
        $book->author=$req->input('author');
        $book->image=$req->input('image');

        $book->save();

        return redirect()->route('detailsbook',$id);

    }
    public function deletebook($id){
        Book::find($id)->delete();
        return redirect()->route('booklist',$id);
    }
}
