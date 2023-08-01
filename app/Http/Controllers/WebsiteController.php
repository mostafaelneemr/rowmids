<?php

namespace App\Http\Controllers;

use App\Models\admin\ArchitecturePicture;
use App\Models\admin\Brand;
use App\Models\admin\Slider;
use App\Models\admin\Team;
use App\Models\admin\Testimonial;
use Illuminate\Http\Request;

class WebsiteController extends Controller
{
    public function home()
    {
        $sliders = Slider::where('slider_type', 'home')->where('is_publish', 'active')->get();
        $testimonials = Testimonial::where('is_publish', 'active')->get();
        return view('website.index', compact('sliders', 'testimonials'));
    }

    public function about()
    {
        $sliders = Slider::where('slider_type', 'about')->where('is_publish', 'active')->get();
        $testimonials = Testimonial::where('is_publish', 'active')->get();
        $teams = Team::where('is_publish', 'active')->get();
        return view('website.about', compact('sliders', 'teams', 'testimonials'));
    }

    public function service()
    {
        $sliders = Slider::where('slider_type', 'service')->where('is_publish', 'active')->get();
        $pictures = ArchitecturePicture::get();
        return view('website.service', compact('sliders', 'pictures'));
    }

    public function client()
    {
        $sliders = Slider::where('slider_type', 'client')->where('is_publish', 'active')->get();
        $brands = Brand::where('is_publish', 'active')->get();
        return view('website.client', compact('sliders', 'brands'));
    }

    public function career()
    {
        $sliders = Slider::where('slider_type', 'career')->where('is_publish', 'active')->get();
        return view('website.career', compact('sliders'));
    }

    public function contact()
    {
        $sliders = Slider::where('slider_type', 'contact')->where('is_publish', 'active')->get();
        return view('website.contact', compact('sliders'));

    }
}
