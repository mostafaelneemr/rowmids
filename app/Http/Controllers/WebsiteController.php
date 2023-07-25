<?php

namespace App\Http\Controllers;

use App\Models\admin\Slider;
use Illuminate\Http\Request;

class WebsiteController extends Controller
{
    public function home()
    {
        $sliders = Slider::where('slider_type', 'home')->where('is_publish', 'active')->get();
        return view('website.index', compact('sliders'));
    }
}
