<?php

namespace App\Http\Controllers\Admin;

use App\Models\Management;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class ManagemenController extends Controller
{
    //

     public function index(Request $request, ?int $id = null)
    {

       

        $editTeam = null;
        if ($id != null) {
            $editTeam = Management::find($id);
        }

        $searchValue = $request->query("search", null);
        if ($searchValue != null) {
            $allteam = Management::where("name", "like", "%" . $searchValue . "%")->orderBy('id', 'desc')->simplePaginate(3);
        } else {
            $allteam = Management::orderBy('id', 'desc')->simplePaginate(3);
        }
        ;

        return view('admin.management', compact('allteam', 'editTeam'));
    }


    public function store(Request $request, ?int $id = null)
    {

        

        $validaterules= [
            'name'=> 'required',
            'designation'=> 'required',

        ];

        // if ($id = null) {
        //     $validaterules['photo'] = "required|image|mimes:jpeg,jpg,png,gif,webp,svg|max:2048";
        // };

        $request->validate($validaterules);

        $data = $request->only(['name', 'designation','bio']);


        if ($id != null) {
            //user edit section is hare

            $currentEditUser = Management::find($id);

            

            if ($request->hasFile('photo')) {

                //delete if user already have profile picture...
                if ($currentEditUser->photo != null) {
                    Storage::delete($currentEditUser->photo);
                }

                $path = $request->file('photo')->store('team');
                $data['photo'] = $path;
            }

            Management::where('id', '=', $id)->update($data);
            return redirect()->route('admin.management',['page'=>$request->query('page'),'search'=>$request->query('search')])->with("success", "Successfully Edit the Team");
        }

        if ($request->hasFile('photo')) {
            $path = $request->file('photo')->store('team');
            $data['photo'] = $path;
        }
        Management::create($data);
        return back()->with("success", "Successfully added the team");


    }

    public function destroy(int $id)
    {

        $data = Management::find($id);
        if ($data) {

            //unlink image from directory....
            if($data->photo != null) {
                Storage::delete($data->photo);
            }
            
            $data->delete();
        }



        return redirect()->route('admin.management')->with('success', 'Successfully Delete team');


    }






}
