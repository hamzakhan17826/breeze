<?php

namespace App\Http\Controllers;

use App\Models\Contaminate;
use Illuminate\Http\Request;
use Inertia\Inertia;

class DashboardController extends Controller
{
    public function index(){
        info('ContaminateController.index');
        $contaminate = Contaminate::paginate(1);
        $all_contaminates = Contaminate::select('id')->paginate(5);
        return Inertia::render('dashboard', compact('contaminate','all_contaminates'));
    }
    public function dashboardContaminate(Request $request){
        info('ContaminateController.index');
        if ($request->status == 'prev'){
            $request->current_page = $request->current_page - 1;
            $contaminate = Contaminate::paginate(1, ['*'], 'page', $request->current_page);
            return response()->json(['status' => 'success', 'data' => $contaminate]);
        }else if($request->status == 'next'){
            $request->current_page = $request->current_page + 1;
            $contaminate = Contaminate::paginate(1, ['*'], 'page', $request->current_page);
            return response()->json(['status' => 'success', 'data' => $contaminate]);
        }
    }
}
