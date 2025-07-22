<?php

namespace App\Http\Controllers\Admin;

use App\Models\Product;
use App\Models\Category;
use App\Models\ProductImage;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    public function index(?int $id = null){
       
        $searchValue = request()->query("search",null);

        $editItem = null;
        if(!is_null($id)){
            $editItem = Product::with('category')->findOrFail($id);
        }

        $categories = Category::all();

        if( $searchValue != null ){
            $products = Product::with('category')->where("name","like","%".$searchValue."%")->orderBy('id','desc')->simplePaginate(3);
        }else{
            $products = Product::with('category')->simplePaginate(3);
        }; 

        return view('admin.productView',compact(['categories','products','editItem']));
    }



    public function store(Request $request,?int $id=null){

        $validationRules = [
            'name'=> 'required',
            'category_id'=> 'required',
            'price'=> 'required|int',
            'description'=> 'required',
        ] ;

        if($id == null){
            $validationRules['picture'] = 'required|image|mimes:jpeg,jpg,png,gif,webp,svg';
        }

        $request->validate($validationRules);
        $data = $request->only(['name','description','price','logn_description','category_id']);

        // return response()->json($data);

        if(!is_null($id)){

            $currentEditUser = Product::find($id);

            if ($request->hasFile('picture')) {
                //delete if user already have profile picture...
                if ($currentEditUser->picture != null) {
                    Storage::delete($currentEditUser->picture);
                }
                $path = $request->file('picture')->store('productthum');
                $data['picture'] = $path;
            }

            Product::where('id',$id)->update($data);
            return redirect()->route('admin.product',['page'=>request()->query('page'),'search'=>request()->query('search')])->with('success','Successfully edit');
        }

        if($request->hasFile('picture')){
             $path = $request->file('picture')->store('productthum');
            $data['picture'] = $path;
        }
        //creating product
        $product = Product::create($data);

        return redirect()->back()->with('success','Successfully created Product');
    }

    public function destory(int $id){
        $deleteProduct = Product::find($id);
        if($deleteProduct){
            if($deleteProduct->picture){
                Storage::delete($deleteProduct->picture);
            }
            
            $deleteProduct->delete();
        }
        return redirect()->route('admin.product')->with('success','successfully deleted');
    }

    

}
