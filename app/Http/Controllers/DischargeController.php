<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Carbon\Carbon;
use App\Models\User;
use Auth;
use Illuminate\Http\Request;

class DischargeController extends Controller
{
public function index()
{
    $confirmed = Item::where('ctr_intern_status', '=', 02,)->orderBy('update_time', 'desc')->get();
    $formattedData = [];

    foreach ($confirmed as $tem) {
        $now = Carbon::now();
        $updatedAt = Carbon::parse($tem->update_time);

        // Perhitungan selisih waktu
        $diff = $updatedAt->diffForHumans($now);

        // Jika selisih waktu kurang dari 1 hari, maka tampilkan format jam
        if ($updatedAt->diffInDays($now) < 1) {
            $diff = $updatedAt->diffForHumans($now, true);
            $diff = str_replace(['hours', 'hour','minutes', 'minutes', 'seconds', 'seconds'], ['jam', 'jam','menit', 'menit', 'detik', 'detik'], $diff);
        } else {
            // Jika selisih waktu lebih dari 1 hari, maka tampilkan format hari dan jam
            $diff = $updatedAt->diffForHumans($now, true);
            $diff = str_replace(['days', 'day', 'hours', 'hour','minutes', 'minutes', 'seconds', 'seconds'], ['hari', 'hari', 'jam', 'jam','menit', 'menit', 'detik', 'detik'], $diff);
        }

        $formattedData[] = [
            'container_no' => $tem->container_no,
            'cc_tt_no' => $tem->cc_tt_no,
            'cc_tt_oper' => $tem->cc_tt_oper,
            'update_time' => $diff . ' yang lalu',
            'container_key' => $tem->container_key
        ];
    }
    $items = Item::where('ctr_intern_status', '=', 01)->get();
    $users = User::all();
    return view('disch.main', compact('confirmed','formattedData', 'items','users'));
}

     public function get_key(Request $request)
    {
        $container_no = $request->container_no;
        $name = Item::where('container_no', $container_no)->first();
       
        if ($name) {
            return response()->json(['key' => $name->container_key, 'name' => $name->ves_name, 'slot' => $name->bay_slot, 'row' => $name->bay_row, 'tier' => $name->bay_tier]);
        }
        return response()->json(['key' => 'data tidak ditemukan', 'name' => 'data tidak ditemukan', 'slot' => 'data tidak ditemukan', 'row' => 'data tidak ditemukan', 'tier' => 'data tidak ditemukan']);
    }
    
    public function confirm(Request $request)
    {
        $container_key = $request->container_key;
        $item = Item::where('container_key',$container_key)->first();
            Item::where('container_key', $container_key)->update([
            'cc_tt_no' => $request->cc_tt_no,
            'cc_tt_oper' => $request->cc_tt_oper,
            'ctr_intern_status' => '02',
            'wharf_yard_oa' => $request->wharf_yard_oa,
            
        ]);
    
            return response()->json([
                'success' => 400,
                'message' => 'updated successfully!',
                'data'    => $item,
            ]);
    }
}
