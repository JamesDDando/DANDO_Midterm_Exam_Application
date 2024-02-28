<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
        $listData = array(
            'title' => 'Haikyuu',
            'genre' => 'Sports',
            'seasons' => 5,
            'episodes' => 24
        );
        return view('about', ['listData' => $listData]);
    }
}
