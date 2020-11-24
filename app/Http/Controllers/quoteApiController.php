<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\quote;

class quoteApiController extends Controller
{
    public function list()
    {
        return quote::all();
    }
    public function listByID($id){
        return response()->json(quote::find($id),200);
    }
    public function insertQuote(Request $request){
         $quote = new quote;
         $quote->price=$request->input('price');
         $quote->coverlevel=$request->input('coverlevel');
         $quote->addons=$request->input('addons');
         $result=$quote->save();
         if($result==1)
         { return "Record is inserted";}
    }


    public function updateQuote(Request $request)
    {
        $quote = quote::find($request->id);
        $quote->addons = $request->addons;
        if($quote->save())
        {
            return['result'=>'success',"msg"=>"Data is Updated"];
        }
    }
    
}
