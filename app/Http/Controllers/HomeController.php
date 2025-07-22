<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Contact;
use App\Models\Faq;
use App\Models\Management;
use App\Models\PhotoGallery;
use App\Models\Team;
use App\Models\About;
use App\Models\Slider;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //

    public function index(){

        $carousels =Slider::all();
        $about = About::all()->first();
        // $services = Category::all();
        // $projects = Product::with('image')->get();
        $managements = Management::all();
        $gallery = PhotoGallery::all();
        $faqs = Faq::all();

        
        
        return view("user.home",compact(['carousels','about','managements','gallery','faqs']));
    }


    public function products(){

        
        // $services = Category::all();
        
        // $clients = Client::all();

        return view('user.product');

       
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

        $data = $request->only(['name','subject','email','message']);
        Contact::create($data);
        
        return back()->with('success',"Message Successfully sand...");

    }

    
    


}
