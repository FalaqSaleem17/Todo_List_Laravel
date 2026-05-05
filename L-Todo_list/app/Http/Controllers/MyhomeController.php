<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyhomeController extends Controller
{
    public function index(Request $request)
    {
        return  view('myhome');
    }
}
