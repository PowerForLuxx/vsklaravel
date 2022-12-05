<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Resources\BookResouce;
use App\Models\Book;
use Illuminate\Http\Request;
use App\Services\BookService;

class AddBookController extends Controller
{
    protected $bookService;

    public function __construct(BookService $bookService)
    {
        $this -> bookService = $bookService;
    }

    public function index(){
        try {
            $books = $this->bookService->getAll();

            return response()->json(
                [
                    'status' => true,
                    'books' =>BookResouce::collection($books)
                ]
            );
        }catch (\Exception $e){
            return response()->json([
                'status'=>false,
            'message' =>$e->getMessage()
            ],$e ->getCode());
        }
    }
    public function details($id){
        $products = $this->bookService->details($id);
        return response()-> json([
            'status'=>true,
            'products'=>$products
        ]);
    }
    public function add(Request $req){
        $this->bookService->add($req);

        return response()->json([
            'status' => true,
            'message' => 'Successfully added'
        ]);
    }
    public function update(Request $r, Book $book){
        $this->bookService->update($r, $book);
        return response()->json([
            'status' => true,
            'message' => 'Successfully updated'
        ]);
    }

    public function delete(Book $book){
        $this->bookService->delete($book);
        return response()->json([
            'status' => true,
            'message' => 'Successfully deleted'
        ]);
    }
}
