<?php

namespace App\Http\Controllers;


use App\Models\Area;
use App\Models\Contact;
use App\Models\Dealer;
use App\Models\Faq;
use App\Models\Management;
use App\Models\PhotoGallery;
use App\Models\About;
use App\Models\Slider;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class HomeController extends Controller
{
    //

    public function index(){

        $carousels =Slider::all();
        $about = About::all()->first();
        // $services = Category::all();
        $products = Product::take(4)->get();
        $categories = Category::take(4)->get();
        $managements = Management::all();
        $gallery = PhotoGallery::all();
        return view("user.home",compact(['carousels','about','managements','gallery','categories','products']));
    }


    function singleProduct(int $id){

        $product = Product::with('category')->findOrFail($id);

        
        return view('user.singleproduct',compact(['product']));
    }

    public function products(){
        $products = Product::all();
        
        // $clients = Client::all();

        return view('user.product',compact(['products']));
    }

   

    public function contact(){

        $faqs = Faq::all();
        return view('user.contact',compact(['faqs']));
    }

    public function storeContact(Request $request){

        $request->validate([
            'name' => 'required|min:3',
            'email'=> 'required|email',
            'subject' => 'required',
            'message' => 'required',
        ]);

        try{

            $data = $request->only(['name','subject','email','message']);
            Contact::create($data);
            
            return back()->with('success',"Message Successfully sand...");

        }catch(\Exception $e){

            Log::error($e->getMessage());
            return back()->with('danger',"There is some Problem It will fixed soon");
        }
        

    }

    public function delearList(){

        $search = request()->query('search',null);
        if($search){

            $allDelears = Dealer::with('area')->where('status','=','a')->where('name','like','%'.$search.'%')->simplePaginate(10);

        }else{

            $allDelears = Dealer::with('area')->where('status','=','a')->simplePaginate(10);

        }
        return view("user.delearlist",compact(["allDelears"]));
    }

    public function delearRequest(){

        
        $allareas = Area::select(['id','name'])->get();
        return view("user.delearform",compact(["allareas"]));
    }

    public function storeDealer(Request $request){

        $request->validate([
            "name"=> "required",
            'phone' => ['required', 'regex:/^01[3-9][0-9]{8}$/'],
            'address' => 'required',
            'email' => ['required','email'],
            'phone2'=> ['nullable', 'regex:/^01[3-9][0-9]{8}$/'],
            'company_name'=> ['required'],
            'area_id'=> ['required'],
        ]);

        
        try {

            $data = $request->only(['name','phone','address','area_id','phone2','company_name','email']);
            Dealer::create($data);
            return back()->with('success',"Successfully Request Sand...");
        }catch(\Exception $e){
            Log::error($e->getMessage());
            return back()->with('danger',"There is a Problem. It will be fexed soon");
        }

    }

    
    


}
