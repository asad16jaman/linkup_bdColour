<?php

namespace App\Http\Controllers\Admin;

use App\Models\Category;
use Exception;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class CategoryController extends Controller
{
    //

    public function index(Request $request, ?int $id = null)
    {

        $editCategory = null;
        if ($id != null) {
            $editCategory = Category::findOrFail($id);
        }

        $searchValue = $request->query("search", null);
        if ($searchValue != null) {
            $allCategories = Category::where("name", "like", "%" . $searchValue . "%")->orderBy('id', 'desc')->simplePaginate(10);
        } else {
            $allCategories = Category::orderBy('id', 'desc')->simplePaginate(10);
        }
        return view('admin.category', compact('allCategories', 'editCategory'));
    }


    public function store(Request $request, ?int $id = null)
    {

        $validationRules = [
            'name'=> 'required',
            'description' => 'required',
        ];
        if($id==null || $request->hasFile('img')){
            $validationRules['img'] = [
                                'required',
                                'image',
                                'mimes:jpeg,jpg,png,gif,webp,svg',
                                'dimensions:width=260,height=150'
                            ];
        }

        $request->validate($validationRules);

        $data = $request->only(['description', 'name']);
        if ($id != null) {
            //edit catagory
            $currentEditUser = Category::findOrFail($id);
            try{
                if ($request->hasFile('img')) {

                    //delete if user already have profile picture...
                    if ($currentEditUser->img != null) {
                        Storage::delete($currentEditUser->img);
                    }
                    $path = $request->file('img')->store('service');
                    $data['img'] = $path;
                }
                Category::where('id', '=', $id)->update($data);
                return redirect()->route('admin.category',['page'=>$request->query('page'),'search'=>$request->query('search')])->with("success", "Successfully Edit");
            }catch(Exception $e){
                Log::error("this message is from : ".__CLASS__."Line is : ".__LINE__." messages is ".$e->getMessage());
                return redirect()->route('error');
            }
        }


      
        try{
            if ($request->hasFile('img')) {
                $path = $request->file('img')->store('service');
                $data['img'] = $path;
            }
            Category::create($data);
            return back()->with("success", "Successfully added");
        }catch(Exception $e){
            Log::error("this message is from : ".__CLASS__."Line is : ".__LINE__." messages is ".$e->getMessage());
            return redirect()->route('error');
        }


    }

    public function destroy(int $id)
    {

        $data = Category::find($id);
        if ($data) {

            //unlink image from directory....
            try{
                if(Storage::exists($data->img)){
                Storage::delete($data->img);
                }
                
                $data->delete();
            }catch(Exception $e){
                 Log::error("this message is from : ".__CLASS__."Line is : ".__LINE__." messages is ".$e->getMessage());
                 return redirect()->route('error');
            }
        }

        return redirect()->route('admin.category')->with('success', 'Successfully Delete Category');


    }















}
