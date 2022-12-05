<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;
use App\Models\Main;

class MainController extends Controller
{
    public function mainpage()
    {
      return view('main');
    }
}
