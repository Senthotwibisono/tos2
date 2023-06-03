<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MaterController extends Controller
{
    
        public function port()
        {
            return view('master.port');
        }
    
}
