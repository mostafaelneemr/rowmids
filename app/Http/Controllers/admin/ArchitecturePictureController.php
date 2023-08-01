<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\admin\ArchitecturePicture;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Intervention\Image\Facades\Image;

class ArchitecturePictureController extends Controller
{
    public function index()
    {
        $pictures = ArchitecturePicture::all();
        return $this->view('service.architecture.index', compact('pictures'));
    }

    public function create()
    {
        return $this->view('client.brand.create');
    }

    public function store(Request $request)
    {
        try{
            $image = $request->file('image');
            $name_gen = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
            Image::make($image)->resize(96, 37)->save('upload/client/' . $name_gen);
            $save_url = 'upload/client/' . $name_gen;
    
            ArchitecturePicture::create([ 'image' => $save_url, ]);
    
            $notification = array(
                'message' => 'slider Inserted Successfully',
                'alert-type' => 'success',
            );
            return redirect::route('architecture-picture.index')->with($notification);
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
        $brands = ArchitecturePicture::findOrFail($id);
        return $this->view('client.brand.edit', compact('brands'));
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
                Image::make($image)->resize(96,37)->save('upload/client/'.$name_gen);
                $save_url = 'upload/client/'.$name_gen;
                ArchitecturePicture::findOrFail($id)->update(['image' => $save_url]);
            }

            $notification = array(
                'message' => 'slider updated Successfully',
                'alert-type' => 'info',
            );
            return redirect::route('brands.index')->with($notification);
        } catch (\Exception $e) {
            return redirect::back()->withErrors(['errors' => $e->getMessage()]);
        }
    }

    public function destroy($id)
    {
        //
    }

}
