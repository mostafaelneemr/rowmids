<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\admin\Testimonial;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Intervention\Image\Facades\Image;

class TestimonialController extends Controller
{
    public function index()
    {
        $testimonails = Testimonial::all();
        return $this->view('about.testimonial.index', compact('testimonails'));
    }

    public function create()
    {
        return $this->view('about.testimonial.create');
    }


    public function store(Request $request)
    {
//        try{
        $image = $request->file('image');
        $name_gen = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
        Image::make($image)->resize(60, 60)->save('upload/about/' . $name_gen);
        $save_url = 'upload/about/' . $name_gen;

        Testimonial::create([
            'name' => $request->name,
            'title' => $request->title,
            'desc' => $request->title,
            'image' => $save_url,
        ]);

        $notification = array(
            'message' => 'Testimonial Inserted Successfully',
            'alert-type' => 'success',
        );
        return redirect::route('testimonials.index')->with($notification);
//        }catch (\Exception $e) {
//            return redirect::back()->withErrors(['errors' => $e->getMessage()]);
//        }
    }


    public function show($id)
    {
        return back();
    }


    public function edit($id)
    {
        $testimonails = Testimonial::findOrFail($id);
        return $this->view('about.testimonial.edit', compact('testimonails'));
    }


    public function update(Request $request, $id)
    {
        try {
            $id = $request->id;
            $old_image = $request->old_image;

            if($request->file('image')){
                @unlink($old_image);
                $image = $request->file('image');
                $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
                Image::make($image)->resize(60,60)->save('upload/about/'.$name_gen);
                $save_url = 'upload/about/'.$name_gen;
                Testimonial::findOrFail($id)->update(['image' => $save_url]);
            }

            Testimonial::findOrFail($id)->update([
                'name' => $request->name,
                'title' => $request->title,
                'desc' => $request->title,

            ]);

            $notification = array(
                'message' => 'Testimonial updated Successfully',
                'alert-type' => 'info',
            );
            return redirect::route('testimonials.index')->with($notification);
        } catch (\Exception $e) {
            return redirect::back()->withErrors(['errors' => $e->getMessage()]);
        }
    }


    public function destroy($id)
    {
        //
    }

    public function inActiveTestimonial($id)
    {
        Testimonial::findOrFail($id)->update(['is_publish' => 'in-active']);
        $notification = array(
            'message' => 'Testimonial is Inactive',
            'alert-type' => 'success',
        );

        return redirect()->back()->with($notification);
    }

    public function ActiveTestimonial($id)
    {
        Testimonial::findOrFail($id)->update(['is_publish' => 'active']);
        $notification = array(
            'message' => 'Testimonial is Active',
            'alert-type' => 'success',
        );

        return redirect()->back()->with($notification);
    }
}
