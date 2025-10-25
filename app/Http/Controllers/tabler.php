<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class tabler extends Controller
{

    
    public function index()
    {
        return view('users.tables');
    }

    
}
