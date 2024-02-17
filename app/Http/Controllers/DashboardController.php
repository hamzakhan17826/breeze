<?php

namespace App\Http\Controllers;

use App\Models\Contaminate;
use Illuminate\Http\Request;
use Inertia\Inertia;

class DashboardController extends Controller
{
    public function index(){
        info('ContaminateController.index');
//        $perPage = 1;
//        $page = $request->current_page ?? 1;
//        $offset = ($page-1)*$perPage;
//        $contaminate = Contaminate::offset($offset)->limit($perPage)->get();
        $contaminate = Contaminate::paginate(1);
        return Inertia::render('dashboard', compact('contaminate'));
    }
    public function dashboardContaminate(Request $request){
        info('ContaminateController.index');
        $contaminate = '';
        if ($request->status == 'prev'){
            $request->current_page = $request->current_page - 1;
            $contaminate = Contaminate::paginate(1, ['*'], 'page', $request->current_page);
        }else if($request->status == 'next'){
            $request->current_page = $request->current_page + 1;
            $contaminate = Contaminate::paginate(1, ['*'], 'page', $request->current_page);
        }else if($request->current_page){
            $contaminate = Contaminate::paginate(1, ['*'], 'page', $request->current_page);
        }
        return response()->json(['status' => 'success', 'data' => $contaminate]);
    }
}
