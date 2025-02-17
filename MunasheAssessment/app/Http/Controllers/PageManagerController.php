<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\CallToAction;
use App\Models\Features;
use App\Models\Home;
use App\Models\PageManager;
use App\Models\Pricing;
use App\Models\Services;
use App\Models\Stats;
use App\Models\TestimonalHeaderMenu;
use App\Models\Testimonials;
use App\Models\Works;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class PageManagerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function addHomePost()
    {
        return view('admin.addpost');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function createHomePost(Request $request)
    {
        //Validate home section post details
        $validator = Validator::make(
            $request->all(),
            [
                'upper_section' => 'required',
                'heading'    => 'required',
                'banner_image'  =>  'required|image|mimes:jpeg,png,jpg,gif|max:2048',
                'description'    => 'required',
            ]
        );

        $imagePath = null;
        if ($request->hasFile('banner_image')) {
            $imagePath = $request->file('banner_image')->store('images/homes', 'public');
        }

        Home::create([
            'upper_section' => $request->upper_section,
            'heading' => $request->heading,
            'description' => $request->description,
            'banner_image' => $request->description,
            'banner_image_url' => $imagePath
        ]);

        return redirect()->route('admin/addpost')->with('success', 'Post created successfully.');

     }

     public function addStat()
     {
          $stats = Stats::all();
         return view('admin.addstats');

     }


     public function storeStat(Request $request){
        $validator = Validator::make(
            $request->all(),
            [
                'title' => 'required',
                'description'    => 'required',
            ]
        );
        Stats::create([
            'title' => $request->title,
            'description' => $request->description,
        ]);

        return redirect()->route('admin/addstat')->with('success', 'Post created successfully.');
     }
     public function addAbout()
     {
          $about_info = About::all();
         return view('admin/about');
     }


     public function storeAbout(Request $request){
        $validator = Validator::make(
            $request->all(),
            [
                'title' => 'required',
                'heading' => 'required',
                'description'    => 'required',
                'itemone' => 'required',
                'itemtwo' => 'required',
                'itemthree' => 'required',
                'itemfour' => 'required',
                'itemfive' => 'required',
                'itemsix' => 'required',
                'leader_name' => 'required',
                'leader_title' => 'required',
                'leader_profile'  =>  'required|image|mimes:jpeg,png,jpg,gif|max:2048',
                'call_description' => 'required',
                'phone_number' => 'required'
            ]
        );
        // dd($validator);
        $imagePath = null;
        if ($request->hasFile('leader_profile')) {
            $imagePath = $request->file('leader_profile')->store('images/profiles', 'public');
        }

        About::create([
            'title' => $request->title,
            'heading' => $request->heading,
            'description' => $request->description,
            'itemone' => $request->itemone,
            'itemtwo' => $request->itemtwo,
            'itemthree' => $request->itemthree,
            'itemfour' => $request->itemfour,
            'itemfive' => $request->itemfive,
            'itemsix' => $request->itemsix,
            'leader_name' => $request->leader_name,
            'leader_title' => $request->leader_title,
            'leader_profile' =>  $imagePath,
            'call_description' => $request->call_description,
            'phone_number' => $request->phone_number,

        ]);

        return redirect()->route('admin/addabout')->with('success', 'Post created successfully.');
     }

     public function addFeature()
     {
          $feature = Features::all();
         return view('admin/addfeature');
     }

     public function storeFeature(Request $request){
        $validator = Validator::make(
            $request->all(),
            [
                'menu_title' ,
                'menu_heading',
                'content_heading',
                'content_description',
                'toggleone',
                'toggleone_desc',
                'toggletwo',
                'toggletwo_desc',
                'togglethree' ,
                'togglethree_desc',
                'feature_graphic',
            ]
        );
        // dd($validator);
        $imagePath = null;
        if ($request->hasFile('feature_graphic')) {
            $imagePath = $request->file('feature_graphic')->store('images/features', 'public');
        }

        Features::create([
            'menu_title' => $request->menu_title,
            'menu_heading' => $request->menu_heading,
            'content_heading' => $request->content_heading,
            'content_description' => $request->content_description,
            'description' => $request->description,
            'toggleone' => $request->toggleone,
            'toggleone_desc' => $request->toggleone_desc,
            'toggletwo' => $request->toggletwo,
            'toggletwo_desc' => $request->toggletwo_desc,
            'togglethree' => $request->togglethree,
            'togglethree_desc' => $request->togglethree,
            'cardone' => $request->cardone,
            'cardtwo' => $request->cardtwo,
            'cardthree' => $request->cardthree,
            'cardfour' => $request->cardfour,
            'cardone_desc' => $request->cardone_desc,
            'cardtwo_desc' => $request->cardtwo_desc,
            'cardthree_desc' => $request->cardthree_desc,
            'cardfour_desc' => $request->cardfour_desc,
            'feature_graphic' =>  $imagePath,
        ]);

        return redirect()->route('admin/addfeature')->with('success', 'Post created successfully.');
     }

     public function addCall(){
        return view('admin.addcalltocation');
     }
     public function storeCall(Request $request){
        $validator = Validator::make(
            $request->all(),
            [
                'title' => 'required',
                'description'    => 'required',
                'button_message'    => 'required',
            ]
        );
        CallToAction::create([
            'title' => $request->title,
            'description' => $request->description,
            'button_message' => $request->button_message,
        ]);

        return redirect()->route('admin/addcalltoaction')->with('success', 'Post created successfully.');
     }

     public function addTestimonial(){
          return view('admin.addtestimonial');
     }
     public function storeTestimonial(Request $request){
        $validator = Validator::make(
            $request->all(),
            [
                'person' ,
                'bio',
                'graphic',
                'comment'
            ]
        );
        // dd($validator);
        $imagePath = null;
        if ($request->hasFile('graphic')) {
            $imagePath = $request->file('graphic')->store('images/features', 'public');
        }

        Testimonials::create([
            'name' => $request->name,
            'bio' => $request->bio,
            'person' => $request->person,
            'graphic' =>  $imagePath,
            'comment' => $request->comment,
        ]);

        return redirect()->route('admin/addtestimonial')->with('success', 'Post created successfully.');
     }

     public function addWorks(){
        return view('admin.addwork');
     }
     public function storeWorks(Request $request){
        $validator = Validator::make(
            $request->all(),
            [
                'work_done' => 'required',
                'value'    => 'required',
            ]
        );
       Works ::create([
            'work_done' => $request->work_done,
            'value' => $request->value,
        ]);

        return redirect()->route('admin/addworks')->with('success', 'Post created successfully.');
     }

     public function addMenu(){
        return view('admin.addtestimonial_menu');
     }
     public function storeMenu(Request $request){
        $validator = Validator::make(
            $request->all(),
            [
                'menu_title' => 'required',
                'menu_heading'    => 'required',
            ]
        );
       TestimonalHeaderMenu::create([
            'menu_title' => $request->menu_title,
            'menu_heading' => $request->menu_heading,
        ]);

        return redirect()->route('admin/addmenu')->with('success', 'Post created successfully.');
     }

     public function addService(){
        return view('admin.addservice');
     }
     public function storeService(Request $request){

        $validator = Validator::make(
            $request->all(),
            [
                'title' => 'required',
                'service_desc'    => 'required',
                'serviceone' => 'required',
                'servicetwo'    => 'required',
                'servicethree' => 'required',
                'servicefour'    => 'required',
                'button_name'    => 'required',
            ]
        );
       Services::create([
            'title' => $request->title,
            'service_desc' => $request->service_desc,
            'serviceone' => $request->serviceone,
            'servicetwo' => $request->servicetwo,
            'servicethree' => $request->servicethree,
            'servicefour' => $request->servicefour,
            'button_name' => $request->button_name,
        ]);

        return redirect()->route('admin/addservice')->with('success', 'Post created successfully.');

     }

     public function addPricing(){
        return view('admin.addpricing');
     }
     public function storePricing(Request $request){

        $validator = Validator::make(
            $request->all(),
            [

                'menu_title'  => 'required',
                'menu_desc'  => 'required',
                'plan_name'  => 'required',
                'price'  => 'required',
                'desc'  => 'required',
                'feature_title'  => 'required',
                'featureone'  => 'required',
                'featuretwo'  => 'required',
                'featurethree'  => 'required',
                'featurefour'  => 'required',
                'button_name'  => 'required'
            ]
        );
       Pricing::create([

            'menu_title'  =>  $request->menu_title,
            'menu_desc'  =>  $request->menu_desc,
            'plan_name'  => $request->plan_name,
            'price'  =>  $request->price,
            'desc'  =>  $request->desc,
            'feature_title'  =>  $request->feature_title,
            'featureone'  =>  $request->featureone,
            'featuretwo'  =>  $request->featuretwo,
            'featurethree'  =>  $request->featurethree,
            'featurefour'  =>  $request->featurefour,
            'button_name'  =>  $request->button_name,
        ]);

        return redirect()->route('admin/addservice')->with('success', 'Post created successfully.');

     }

     public function addFooter(){
        return view ('admin/addfooter');
     }

     public function storeFooter(Request $request){
        return redirect()->route('admin/addfooter')->with('success', 'Post created successfully.');
     }

}
