<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WriteNewController extends Controller
{
    function novo(){
        return view('write');
    }
}
