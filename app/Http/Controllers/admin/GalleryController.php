<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\admin\Gallery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;

class GalleryController extends Controller
{
    public function index()
    {
        $galleries = Gallery::all();
        return $this->view('portfolio.gallery.index', compact('galleries'));
    }

    public function create()
    {
        return $this->view('portfolio.gallery.create');
    }

    public function store(Request $request)
    {
        try{
            $image = $request->file('image');
            $name_gen = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
            Image::make($image)->resize(480, 480)->save('upload/portfolio/' . $name_gen);
            $save_url = 'upload/portfolio/' . $name_gen;

            Gallery::create([
                'image' => $save_url,
                'title' => $request->title,
            ]);

            $notification = array(
                'message' => 'Picture Inserted Successfully',
                'alert-type' => 'success',
            );
            return redirect::route('gallery.index')->with($notification);
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
        $galleries = Gallery::findOrFail($id);
        return $this->view('portfolio.gallery.edit', compact('galleries'));
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
                Image::make($image)->resize(480,480)->save('upload/portfolio/'.$name_gen);
                $save_url = 'upload/portfolio/'.$name_gen;
                Gallery::findOrFail($id)->update(['image' => $save_url]);
            }

            Gallery::findOrFail($id)->update([
                'title' => $request->title,
            ]);

            $notification = array(
                'message' => 'Picture updated Successfully',
                'alert-type' => 'info',
            );
            return redirect::route('gallery.index')->with($notification);
        } catch (\Exception $e) {
            return redirect::back()->withErrors(['errors' => $e->getMessage()]);
        }
    }

    public function destroy($id)
    {
        $gallery = Gallery::findOrFail($id);
        $image = Str::after($gallery->image, 'upload/portfolio/');
        $image = public_path('upload/portfolio/' . $image);
        unlink($image);
        $gallery->delete();

        $message = __( 'Picture deleted successfully' );
        return $this->response(true, 200, $message );
    }
}
