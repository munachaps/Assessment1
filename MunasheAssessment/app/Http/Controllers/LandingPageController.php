<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Home;
use App\Models\Stats;
use App\Models\About;
use App\Models\CallToAction;
use App\Models\Features;
use App\Models\Pricing;
use App\Models\Services;
use App\Models\TestimonalHeaderMenu;
use App\Models\Testimonials;
use App\Models\Works;

class LandingPageController extends Controller
{

    public function siteHome()
    {
        $homeimage = Home::all();
        $stats = Stats::all();
        $about_info = About::all();
        $features_info = Features::all();
        $testimonial_menu = TestimonalHeaderMenu::all();
        $testimonial_info = Testimonials::all();
        $call_info = CallToAction::all();
        $work_data = Works::all();
        $service_info = Services::all();
        $pricing_info = Pricing::all();
        return view('/welcome',compact('homeimage','stats','about_info',
                     'features_info','call_info','testimonial_menu',
                     'testimonial_info','work_data','service_info','pricing_info'));
    }

    public function viewHomeImage($id){
        $homeImage = Home::findOrFail($id);
        return view('/welcome',compact('homeImage'));
     }
}
