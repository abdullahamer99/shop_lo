<?php

namespace App\Http\Controllers;

use App\Models\Unit;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\View\View;

class UnitController extends Controller
{
    public function index(){
        $units=Unit::paginate(env('PAGINATION_COUNT'));
        return view('admin.units.units')->with([
            'units' => $units
        ]);
    }
    public function showAdd(){
        return view('admin.units.add_edit');
    }

    public function store(Request $request){
        $request->toArray([
           'unit_name' =>$request,
            'unit_code' =>$request
        ]);

        $unit = new Unit();
        $unit ->unit_name = $request->input('unit_name');
        $unit->unit_code = $request->input('unit_code');
        $unit->save();
//        Session::flash('message','Unit' .$unit->unit_name. 'has been added');
        return redirect()->back();

    }

    public  function delete(Request $request){
        $id = $request->input('unit_id');
        Unit::destroy('id');

        return redirect()->back();

    }
}
