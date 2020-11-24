<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\quote;

class QuoteController extends Controller
{
    public function index(){
         
        $carquotes = quote::all();
        return view('/quote',
              ['carquotes' => $carquotes]);
        
    }
    public function store(){
        
    }
}
