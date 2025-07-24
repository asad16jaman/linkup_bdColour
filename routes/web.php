<?php

use App\Http\Controllers\Admin\AboutController;
use App\Http\Controllers\Admin\AreaController;
use App\Http\Controllers\Admin\ClientController;
use App\Http\Controllers\admin\CompanyController;
use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\DelearController;
use App\Http\Controllers\Admin\FaqController;
use App\Http\Controllers\Admin\PhotoGalleryController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\ManagemenController;
use App\Http\Controllers\Admin\UsersController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\SliderController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\VideoGalleryController;

use Illuminate\Support\Facades\Route;



Route::get("/",[HomeController::class,"index"])->name("home");
Route::post('/',[HomeController::class,'storeContact'])->name('storeMessage');



Route::get("/products",[HomeController::class,"products"])->name("product");
Route::get("/product/{id}/detail-view",[HomeController::class,"singleProduct"])->name("product.item");


Route::get("/contact",[HomeController::class,"contact"])->name("contact");


//delear list getting url 
Route::get("/delearlist",[HomeController::class,"delearList"])->name("delearlist");
Route::get("/delearform",[HomeController::class,"delearRequest"])->name("delearform");
Route::post("/delearform",[HomeController::class,"storeDealer"])->name("delearform");



// Route::get("/about",[HomeController::class,"about"])->name("about");
// Route::get("/project",[HomeController::class,"project"])->name("project");

// Route::post("/savemessage",[HomeController::class,"storeContact"])->name("contact.store");
// Route::get("/teams",[HomeController::class,"getTeam"])->name("team");
// Route::get("/testimonial",[HomeController::class,"testimonial"])->name("testimonial");
// Route::get("/fqa",[HomeController::class,"fqaTemplate"])->name("fqa");




Route::prefix('admin')->group(function(){

    Route::get('/login',[DashboardController::class,'login'])->name('admin.login');
    Route::post('/login',[DashboardController::class,'authenticate'])->name('admin.login');
    
    //registring admin/users
    Route::get('/register',[DashboardController::class,'register'])->name('admin.register');
    Route::post('/register',[DashboardController::class,'store'])->name('admin.register');

});




Route::group(['prefix'=> '/admin','middleware'=>'checkAdminAuth'], function () {
    Route::get('/',[DashboardController::class,'index'])->name('admin');
});


Route::group(['prefix'=> '/admin','middleware'=>'checkAdminAuth','as'=>'admin.'], function () {

    //handling users from admin pannel
    Route::get("/users/{id?}",[UsersController::class,"index"])->name("users");
    Route::post("/users/{id?}",[UsersController::class,"storeUser"])->name("users");
    Route::post("/users/{id}/delete",[UsersController::class,"deleteUser"])->name("user.delete");

    //edit user from user side
    Route::get("/users/{id}/edit",[UsersController::class,"editUser"])->name("user.edit");
    Route::post("/users/{id}/edit",[UsersController::class,"editUserStore"])->name("user.edit");

    //company maintain url
    Route::get("/company",[CompanyController::class,"index"])->name("company");
    Route::post("/company",[CompanyController::class,"create"])->name("company");

    //slider maintaining url
    Route::get("/sliders/{id?}",[SliderController::class,"index"])->name("slider");
    Route::post("/sliders/{id?}",[SliderController::class,"store"])->name("slider");
    Route::post("/sliders/{id}/delete",[SliderController::class,"destroy"])->name("slider.delete");


    //Service url hare
    Route::get("/category/{id?}",[CategoryController::class,"index"])->name("category");
    Route::post("/category/{id?}",[CategoryController::class,"store"])->name("category");
    Route::post("/category/{id}/delete",[CategoryController::class,"destroy"])->name("category.delete");


    // Product url hare
    Route::get("/product/{id?}",[ProductController::class,"index"])->name("product");
    Route::post("/product/{id?}",[ProductController::class,"store"])->name("product");
    Route::post("/product/{id}/delete",[ProductController::class,"destory"])->name("product.delete");


    //Photo Gallery url hare
    Route::get("/photogallery/{id?}",[PhotoGalleryController::class,"index"])->name("photogallery");
    Route::post("/photogallery/{id?}",[PhotoGalleryController::class,"store"])->name("photogallery");
    Route::post("/photogallery/{id}/delete",[PhotoGalleryController::class,"destory"])->name("photogallery.delete");

    //Video Gallery url hare
    Route::get("/videogallery/{id?}",[VideoGalleryController::class,"index"])->name("videogallery");
    Route::post("/videogallery/{id?}",[VideoGalleryController::class,"store"])->name("videogallery");
    Route::post("/videogallery/{id}/delete",[VideoGalleryController::class,"destory"])->name("videogallery.delete");

    //team url hare
    Route::get('/manage/{id?}',[ManagemenController::class,'index'])->name('management');
    Route::post('/manage/{id?}',[ManagemenController::class,'store'])->name('management');
    Route::post('/management/{id}/delete',[ManagemenController::class,'destroy'])->name('management.delete');


    //client url hare
    // Route::get('/clients/{id?}',[ClientController::class,'index'])->name('client');
    // Route::post('/clients/{id?}',[ClientController::class,'store'])->name('client');
    // Route::post('/client/{id}/delete',[ClientController::class,'destroy'])->name('client.delete');

    //about url hare
    Route::get('/about',[AboutController::class,'index'])->name('about');
    Route::post('/about',[AboutController::class,'store'])->name('about');

    // faq hare
    Route::get('/faq',[FaqController::class,'index'])->name('faq');
    Route::post('/faq',[FaqController::class,'store'])->name('faq');
     Route::post('/faq/{id}/delete',[FaqController::class,'destroy'])->name('faq.delete');

    // faq hare
    Route::get('/area',[AreaController::class,'index'])->name('area');
    Route::post('/area',[AreaController::class,'store'])->name('area');
    Route::post('/area/{id}/delete',[AreaController::class,'destroy'])->name('area.delete');

    //dealer faq hare
    Route::get('/delear/aproved/{id?}',[DelearController::class,'index'])->name('delear');
    Route::post('/delear/aproved/{id?}',[DelearController::class,'store'])->name('delear');
    //handling pending delears
    Route::get('/delear/pending',[DelearController::class,'pendingDealers'])->name('p_delear');

    Route::post('/delear/pending/{id}',[DelearController::class,'updatePending'])->name('p_delear.updated');

    Route::post('/delear/{id}/delete',[DelearController::class,'destroy'])->name('delear.delete');

    //Contact url hare
    Route::get('/contact',[ContactController::class,'index'])->name('message');
    Route::post('/contact/{id}',[ContactController::class,'destroy'])->name('message.delete');




    //admin logout
    Route::get('/logout',[DashboardController::class,'logout'])->name('logout');
});


