<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\VVoyage;
use Carbon\Carbon;

class VesselController extends Controller
{
    public function index()
    {
        $vessel_voyage = VVoyage::all();
        return view('planning.vessel.main', compact('vessel_voyage'));
    }

    public function create()
    {
        $date = Carbon::now()->format('Y-m-d');
        return view('planning.vessel.create');
    }
}
