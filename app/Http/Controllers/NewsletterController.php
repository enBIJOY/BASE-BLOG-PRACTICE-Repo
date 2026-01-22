<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewsletterController extends Controller
{
    public function newsletter(Request $request){
        $request->validate([
            'name'=>'required',
            'email'=>'required|email|unique:newsletters,email'
        ]);

        Newsletter::create([
            'name'=>$request->name,
            'email'=>$request->email
        ]);

        return response()->json([
            'status' => 'success',
            'message' => 'Thank you for subscribing!'
        ]);
    }
}
