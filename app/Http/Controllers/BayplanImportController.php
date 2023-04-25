<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BayplanImportController extends Controller
{
    public function index()
    {

        return view('planning.bayplan.main');
    }
}
