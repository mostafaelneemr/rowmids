<?php

namespace App\Http\Controllers;

use App\Models\admin\Architecture;
use App\Models\admin\ArchitecturePicture;
use App\Models\admin\Brand;
use App\Models\admin\Career;
use App\Models\admin\Gallery;
use App\Models\admin\ServiceDecoration;
use App\Models\admin\Slider;
use App\Models\admin\Team;
use App\Models\admin\Testimonial;
use Illuminate\Http\Request;

class WebsiteController extends Controller
{
    public function home()
    {
        $sliders = Slider::where('slider_type', 'home')->where('is_publish', 'active')->get();
        $teams = Team::where('is_publish', 'active')->paginate(3);
        $testimonials = Testimonial::where('is_publish', 'active')->paginate(4);
        $galleries = Gallery::paginate(3);
        $brands = Brand::where('is_publish', 'active')->paginate(4);
        return view('website.index', compact('sliders', 'testimonials', 'teams', 'galleries', 'brands'));
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
        $decores = ServiceDecoration::get();
        $pictures = ArchitecturePicture::get();
        $architectures = Architecture::get();
        return view('website.service', compact('sliders', 'decores', 'pictures', 'architectures'));
    }

    public function client()
    {
        $sliders = Slider::where('slider_type', 'client')->where('is_publish', 'active')->get();
        $brands = Brand::where('is_publish', 'active')->get();
        return view('website.client', compact('sliders', 'brands'));
    }

    public function portfolio()
    {
        $sliders = Slider::where('slider_type' , 'portfolio')->get();
        $galleries = Gallery::get();
        return view('website.portfolio', compact('sliders', 'galleries'));
    }

    public function career()
    {
        $sliders = Slider::where('slider_type', 'career')->where('is_publish', 'active')->get();
        $careers = Career::where('is_publish', 'active')->get();
        return view('website.career', compact('sliders', 'careers'));
    }

    public function contact()
    {
        $sliders = Slider::where('slider_type', 'contact')->where('is_publish', 'active')->get();
        return view('website.contact', compact('sliders'));

    }
}
