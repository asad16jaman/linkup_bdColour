<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Dealer;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class DelearController extends Controller
{
    //

    public function index(?int $id=null){

        $editItem = null;
        if($id != null){
            $editItem = Dealer::findOrFail($id);
        }



        $alldelears = Dealer::orderBy("id","desc")->paginate(10);

        return view("admin.delear",compact("alldelears","editItem"));
    }



    public function store(Request $request,?int $id=null){

        $request->validate([
            "name"=> "required",
            'phone' => 'required',
            'address' => 'required',
        ]);

        $data = $request->only(['name','phone','address']);

        

        try{

            if($id != null){

            Dealer::where('id',$id)->update($data);
            return redirect()->route('admin.delear',['page'=>$request->query('page'),'search'=>$request->query('search')])->with('  success','successfully edited');

            }

            Dealer::create($data);
            return redirect()->back()->with('success','successfully Created');

        }catch(\Exception $e){

            Log::error($e->getMessage());
            return redirect()->back()->with('error', "There is some problem It will fix soon");

        }


       

    }

    public function destroy(int $id){

        try{

            Dealer::find($id)->delete();
            return response()->back()->with("success","Successfully Deleted");

        }catch (\Exception $e){

            Log::error($e->getMessage());
            return redirect()->back()->with('error', "There is some problem It will fix soon");
        }

    }





}
