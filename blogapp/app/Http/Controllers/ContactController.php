<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    function contactPage(){
        return view('pages.contact');
    }


    function contactRequest(Request $request){
        return Contact::create($request->input());
    }










}
