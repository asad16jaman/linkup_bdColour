<?php

namespace App\Http\Controllers\Admin;

use App\Models\Product;
use App\Models\Category;
use App\Models\ProductImage;
use Exception;
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
            $products = Product::with('category')->where("name","like","%".$searchValue."%")->orderBy('id','desc')->simplePaginate(10);
        }else{
            $products = Product::with('category')->orderBy('id','desc')->simplePaginate(10);
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

        if($id == null || $request->hasFile('picture')){
            $validationRules['picture'] = 'required|image|mimes:jpeg,jpg,png,gif,webp,svg';
        }
        $request->validate($validationRules);

        $data = $request->only(['name','description','price','logn_description','category_id']);

        if(!is_null($id)){

            $currentEditUser = Product::findOrFail($id);
            try{
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
            }catch(Exception $e){
                Log::error("this message is from : ".__CLASS__."Line is : ".__LINE__." messages is ".$e->getMessage());
                return redirect()->route('error');
            }
        }

        try{
            if($request->hasFile('picture')){
                $path = $request->file('picture')->store('productthum');
                $data['picture'] = $path;
            }
            //creating product
            $product = Product::create($data);

            return redirect()->back()->with('success','Successfully created Product');
        }catch(Exception $e){
            Log::error("this message is from : ".__CLASS__."Line is : ".__LINE__." messages is ".$e->getMessage());
            return redirect()->route('error');
        }
    }
    public function destory(int $id){
        try{
            $deleteProduct = Product::find($id);
            if($deleteProduct){
                if($deleteProduct->picture){
                    Storage::delete($deleteProduct->picture);
                }
                $deleteProduct->delete();
            }
            return redirect()->route('admin.product')->with('success','successfully deleted');
        }catch(Exception $e){
            Log::error("this message is from : ".__CLASS__."Line is : ".__LINE__." messages is ".$e->getMessage());
            return redirect()->route('error');
        }
    }

    

}
