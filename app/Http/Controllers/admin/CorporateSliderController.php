<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\admin\Slider;
use App\Http\Requests\SliderRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;


class CorporateSliderController extends Controller
{
    CONST SLIDER_TYPE = 'corporate';

    public function index()
    {
        $sliders = Slider::where('slider_type', self::SLIDER_TYPE)->get();
        return $this->view('csr.slider.index', compact('sliders'));
    }

    public function create()
    {
        if(Slider::where('slider_type' , self::SLIDER_TYPE)->count() >= 1){
            return back();
        }
        return $this->view('csr.slider.create');
    }

    public function store(SliderRequest $request)
    {
       try{
            $image = $request->file('image');
            $name_gen = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
            Image::make($image)->resize(1920, 1000)->save('upload/csr/' . $name_gen);
            $save_url = 'upload/csr/' . $name_gen;

            Slider::create([
                'title' => $request->title,
                'sub_title' => $request->sub_title,
                'slider_type' => static::SLIDER_TYPE,
                'image' => $save_url,
            ]);

            $notification = array(
                'message' => 'slider Inserted Successfully',
                'alert-type' => 'success',
            );
            return redirect::route('csr-slider.index')->with($notification);
       }catch (\Exception $e) {
           return redirect::back()->withErrors(['errors' => $e->getMessage()]);
       }
    }


    public function show($id)
    {
        return back();
    }


    public function edit($id)
    {
        $sliders = Slider::findOrFail($id);
        return $this->view('csr.slider.edit', compact('sliders'));
    }

    public function update(SliderRequest $request, $id)
    {
        try {
            $id = $request->id;
            $old_image = $request->old_image;

            if($request->file('image')){
                @unlink($old_image);
                $image = $request->file('image');
                $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
                Image::make($image)->resize(1920,1000)->save('upload/csr/'.$name_gen);
                $save_url = 'upload/csr/'.$name_gen;
                Slider::findOrFail($id)->update(['image' => $save_url]);
            }

            Slider::findOrFail($id)->update([
                'title' => $request->title,
                'sub_title' => $request->sub_title,
            ]);

            $notification = array(
                'message' => 'slider updated Successfully',
                'alert-type' => 'info',
            );
            return redirect::route('csr-slider.index')->with($notification);
        } catch (\Exception $e) {
            return redirect::back()->withErrors(['errors' => $e->getMessage()]);
        }
    }

    public function destroy($id)
    {
        $slider = Slider::findOrFail($id);
        $image = Str::after($slider->image, 'upload/csr/');
        $image = public_path('upload/csr/' . $image);
        unlink($image);
        $slider->delete();

        $message = __( 'Slider deleted successfully' );
        return $this->response(true, 200, $message );
    }
}
