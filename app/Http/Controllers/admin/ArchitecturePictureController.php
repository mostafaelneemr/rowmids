<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\admin\ArchitecturePicture;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;

class ArchitecturePictureController extends Controller
{
    public function index()
    {
        // $pictures = ArchitecturePicture::all();
        return $this->view('service.architecture.index');
    }

    public function create()
    {
        return back();
    }

    public function store(Request $request)
    {
        try{
            $image = $request->file('image');
            $name_gen = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
            Image::make($image)->resize(1920, 600)->save('upload/service/' . $name_gen);
            $save_url = 'upload/service/' . $name_gen;

            ArchitecturePicture::create([ 'image' => $save_url, ]);

            $notification = array(
                'message' => 'Image Inserted Successfully',
                'alert-type' => 'success',
            );
            return redirect::route('architecture.index')->with($notification);
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
        return back();
    }

    public function update(Request $request, $id)
    {
        return back();
    }

    public function destroy($id)
    {
        $team = ArchitecturePicture::findOrFail($id);
        $image = Str::after($team->image, 'upload/service/');
        $image = public_path('upload/service/' . $image);
        unlink($image);
        $team->delete();

        $message = __( 'Picture deleted successfully' );
        return $this->response(true, 200, $message );
    }

}
