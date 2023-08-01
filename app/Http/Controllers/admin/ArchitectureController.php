<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\admin\Architecture;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Intervention\Image\Facades\Image;

class ArchitectureController extends Controller
{

    public function index()
    {
        $architectures = Architecture::all();
        return $this->view('about.testimonial.index', compact('architectures'));
    }

    public function create()
    {
        return $this->view('about.testimonial.create');
    }


    public function store(Request $request)
    {
       try{
        $image = $request->file('image');
        $name_gen = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
        Image::make($image)->resize(60, 60)->save('upload/about/' . $name_gen);
        $save_url = 'upload/about/' . $name_gen;

        Architecture::create([
            'name' => $request->name,
            'desc' => $request->title,
            'image' => $save_url,
        ]);

        $notification = array(
            'message' => 'Architecture Inserted Successfully',
            'alert-type' => 'success',
        );
        return redirect::route('testimonials.index')->with($notification);
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
        $architectures = Architecture::findOrFail($id);
        return $this->view('about.testimonial.edit', compact('architectures'));
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
                Architecture::findOrFail($id)->update(['image' => $save_url]);
            }

            Architecture::findOrFail($id)->update([
                'name' => $request->name,
                'desc' => $request->title,

            ]);

            $notification = array(
                'message' => 'Architecture updated Successfully',
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

}
