<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
        $listOfData = array(
            'title' => 'Haikyuu',
            'genre' => 'Sports',
            'no. of seasons' => '5',
            'no. of episodes' => '24'
        );
        return view('about', ['anime' => $listOfData]);
    }
}
