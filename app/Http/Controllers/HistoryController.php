<?php
namespace App\Http\Controllers;

use App\Models\Item; // load model
use Illuminate\View\View;
use Illuminate\Http\Request;
use App\Models\HistContnr;
use App\Models\AnnceCtrJob;

class HistoryController extends Controller
{

    function index(): View
    {
        $items = Item::select('container_key', 'container_no', 'ves_id', 'ctr_intern_status')->get();
        return view('reports.hist.index', compact('items'));
    }

    public function get_cont(Request $request)
    {
        $container_key = $request->id;
        // $lt_cont = Item::where('container_key','=',$container_key);
        $item = Item::findOrFail($container_key);
        $histcontnrs = HistContnr::where('container_key', '=', $container_key)->get([
            'OPERATION_NAME',
            'CTR_STATUS',
            'CTR_INTERN_STATUS'
        ]);
        $anncectrjobs = AnnceCtrJob::where('container_key', '=', $container_key)->get([
            'CTR_STATUS',
            'CTPS_YN',
            'COMMODITY_CODE',
            'COMMODITY_NAME',
            'STACK_DATE'
        ]);
        // return response()->view('reports.hist.display_', compact('lw_cont'));
        $view = view('reports.hist.display_', compact('item'))->render();
        return response()->json([
            'cont_disp' => $view,
            'cont_no' => $item->container_no,
            'ves_id' => $item->ves_code
        ]);

        exit();
    }
    public function get_cont_hist(Request $request)
    {
        $container_key = $request->id;
        $histcontnrs = HistContnr::where('container_key', '=', $container_key)->get([
            'operation_name',
            'ctr_status',
            'ctr_intern_status'
        ]);
        return response()->json(['data' => $histcontnrs]);
    }
    public function get_cont_job(Request $request)
    {
        $container_key = $request->id;
        $anncectrjobs = AnnceCtrJob::where('container_key', '=', $container_key)->get([
            'ctr_status',
            'ctps_yn',
            'commodity_code',
            'commodity_name',
            'stack_date'
        ]);
        return response()->json(['data' => $anncectrjobs]);
    }
    
}