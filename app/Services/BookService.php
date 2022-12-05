<?php

namespace App\Services;

use App\Models\Book;
use Illuminate\Http\Request;

interface BookService
{
    public function getAll();

    public function details($id);
    public function add(Request $r);
    public function update(Request $r, $product);
    public function delete(Book $b);
}
