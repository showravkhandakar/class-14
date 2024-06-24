<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    function handelFormSubmission(Request $request){
        dd ($request->all()); //dump and die//
        
    }
}
