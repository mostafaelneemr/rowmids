<?php

namespace App\Http\Controllers;

use App\Models\admin\ActivationSetting;
use App\Models\admin\Architecture;
use App\Models\admin\ArchitecturePicture;
use App\Models\admin\Brand;
use App\Models\admin\Career;
use App\Models\admin\Gallery;
use App\Models\admin\Service;
use App\Models\admin\ServiceDecoration;
use App\Models\admin\ServiceDigital;
use App\Models\admin\Slider;
use App\Models\admin\Team;
use App\Models\admin\Testimonial;


class WebsiteController extends Controller
{
    public function home()
    {
        $sliders = Slider::where('slider_type', 'home')->where('is_publish', 'active')->get();
        // $teams = Team::where('is_publish', 'active')->paginate(3);
        $testimonials = Testimonial::where('is_publish', 'active')->paginate(4);
        $galleries = Gallery::paginate(3);
        $digitals = ServiceDigital::where('is_publish', 'active')->get();
        $pictures = ArchitecturePicture::get();
        $architectures = Architecture::get();
        // $brands = Brand::where('is_publish', 'active')->paginate(4);
        return view('website.index', compact('sliders', 'digitals','testimonials', 'galleries', 'pictures', 'architectures'));
    }

    public function about()
    {
        if (ActivationSetting::where('type', 'about_page')->first()->value == '0'){
            return back();
        }
        $sliders = Slider::where('slider_type', 'about')->where('is_publish', 'active')->get();
        $testimonials = Testimonial::where('is_publish', 'active')->get();
        $teams = Team::where('is_publish', 'active')->get();
        $digitals = ServiceDigital::where('is_publish', 'active')->get();
        return view('website.about', compact('sliders', 'digitals','teams', 'testimonials'));
    }

    public function service()
    {
        if (ActivationSetting::where('type', 'service_page')->first()->value == '0'){
            return back();
        }
        $sliders = Slider::where('slider_type', 'service')->where('is_publish', 'active')->get();
        $decores = ServiceDecoration::get();
        $pictures = ArchitecturePicture::get();
        $architectures = Architecture::get();
        $services = Service::where('is_publish', 'active')->get();
        return view('website.service', compact('sliders', 'decores', 'pictures', 'architectures', 'services'));
    }

    public function client()
    {
        if (ActivationSetting::where('type', 'client_page')->first()->value == '0'){
            return back();
        }

        $sliders = Slider::where('slider_type', 'client')->where('is_publish', 'active')->get();
        $brands = Brand::where('is_publish', 'active')->get();
        return view('website.client', compact('sliders', 'brands'));

    }

    public function portfolio()
    {
        if (ActivationSetting::where('type', 'portfolio_page')->first()->value == '0'){
            return back();
        }
        $sliders = Slider::where('slider_type' , 'portfolio')->get();
        $galleries = Gallery::get();
        return view('website.portfolio', compact('sliders', 'galleries'));
    }

    public function career()
    {
        if (ActivationSetting::where('type', 'career_page')->first()->value == '0'){
            return back();
        }
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
