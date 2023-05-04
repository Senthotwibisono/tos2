<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;

class DischargeController extends Controller
{
public function index()
{
    $confirmed = Item::where('ctr_intern_status', '=', 02)->get();
    return view('disch.main', compact('confirmed'));
}
}
