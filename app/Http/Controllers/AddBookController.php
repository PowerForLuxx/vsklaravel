<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;
use App\Http\Requests\BookRequest;
use Illuminate\Support\Facades\Storage;

class AddBookController extends Controller
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
    public function add_book(){

        $addB = 'This is add book page';
        return view("addB",['addB'=>$addB]);
    }

    public function Books(BookRequest $req){


        $book = new Book();
        $book->name = $req->input('name');
        $book->years=$req->input('years');
        $book->author=$req->input('author');

        $url = $req->file('image')->store('images');
        $book->image = $url;


        $book->save();

        return redirect()->route('booklist');

    }
}
