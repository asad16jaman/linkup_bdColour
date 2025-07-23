<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Area;
use Illuminate\Http\Request;

class AreaController extends Controller
{
    //

    public function index(){

        $datas = Area::all();
        return view("admin.area",compact(["datas"]));
    }


    public function store(Request $request){

        $request->validate([
            'name' => 'required',

        ]);

        $data = $request->only(['name']);

        try{
            Area::create($data);
            return redirect()->back()->with('success','Successfully created.');
        }catch(\Exception $e){
            return redirect()->back()->with('error', $e);
        }
    }


    public function destroy($id){

        try{
            Area::find($id)->delete();
            return redirect()->back()->with('success', "Successfully Deleted");
        }catch(\Exception $e){
            return redirect()->back()->with('error', "There is some problem");
        }
        
    }
}
