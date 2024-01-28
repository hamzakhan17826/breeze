<?php

namespace App\Http\Controllers;

use App\Models\Contaminate;
use Illuminate\Http\Request;
use Inertia\Inertia;

class ContaminateController extends Controller
{
    public function index(){
        info('ContaminateController.index');
        $lists = Contaminate::all();
        return Inertia::render('contaminates/index', compact('lists'));
    }
    public function create(){
        info('ContaminateController.create');
        return Inertia::render('contaminates/create');
    }
    public function store(Request $request){
        info('ContaminateController.store');
        $store = new Contaminate;
        $store->title = $request->title;
        $store->description = $request->description;
        $store->save();
        return response()->json('Successfully created')->header('Cache-Control', 'no-store, no-cache, must-revalidate');
    }
    public function update(Request $request){
        info('ContaminateController.update');
        $store = Contaminate::find($request->id);
        $store->title = $request->title;
        $store->description = $request->description;
        $store->save();
        return response()->json('Successfully updated')->header('Cache-Control', 'no-store, no-cache, must-revalidate');
    }
    public function destroy(Request $request){
        info('ContaminateController.destroy');
        $list = Contaminate::find($request->id);
        $list->delete();
        return response()->json('Successfully deleted')->header('Cache-Control', 'no-store, no-cache, must-revalidate');
    }
}
