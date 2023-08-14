<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\admin\ServiceDigital;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;

class ServiceDigitController extends Controller
{
    public function index()
    {
        $digitals = ServiceDigital::all();
        return $this->view('service.digital.index', compact('digitals'));
    }

    public function create()
    {
        return $this->view('service.digital.create');
    }

    public function store(Request $request)
    {
        try{
            $image = $request->file('image');
            $name_gen = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
            Image::make($image)->resize(370, 370)->save('upload/service/' . $name_gen);
            $save_url = 'upload/service/' . $name_gen;

            $icon = $request->file('icon');
            $filename = 'svg_' . time() . '.' . $icon->getClientOriginalExtension();
            $path = storage_path('app/public/images/');
            $icon->move($path, $filename);
//        Image::make($image)->resize(60, 65)->save('upload/service/' . $name_gen);
//            $save_icon = 'upload/service/' . $name_gen;

            ServiceDigital::create([
                'title' => $request->title,
                'desc' => $request->desc,
                'image' => $save_url,
                'icon' => $icon,
            ]);

            $notification = array(
                'message' => 'Digital Service Inserted Successfully',
                'alert-type' => 'success',
            );
            return redirect::route('digitals.index')->with($notification);
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
        $digitals = ServiceDigital::findOrFail($id);
        return $this->view('service.digital.edit', compact('digitals'));
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
                Image::make($image)->resize(370,370)->save('upload/service/'.$name_gen);
                $save_url = 'upload/service/'.$name_gen;
                ServiceDigital::findOrFail($id)->update(['image' => $save_url]);
            }

            ServiceDigital::findOrFail($id)->update([
                'title' => $request->title,
                'desc' => $request->desc,

            ]);

            $notification = array(
                'message' => 'Digital Service updated Successfully',
                'alert-type' => 'info',
            );
            return redirect::route('digitals.index')->with($notification);
        } catch (\Exception $e) {
            return redirect::back()->withErrors(['errors' => $e->getMessage()]);
        }
    }

    public function destroy($id)
    {
        $service = ServiceDigital::findOrFail($id);
        $image = Str::after($service->image, 'upload/service/');
        $image = public_path('upload/service/' . $image);
        unlink($image);
        $service->delete();

        $message = __( 'Team deleted successfully' );
        return $this->response(true, 200, $message );
    }

    public function inActiveDigital($id)
    {
        ServiceDigital::findOrFail($id)->update(['is_publish' => 'in-active']);
        $notification = array(
            'message' => 'Digital Service is Inactive',
            'alert-type' => 'success',
        );

        return redirect()->back()->with($notification);
    }

    public function ActiveDigital($id)
    {
        ServiceDigital::findOrFail($id)->update(['is_publish' => 'active']);
        $notification = array(
            'message' => 'Digital Service is Active',
            'alert-type' => 'success',
        );

        return redirect()->back()->with($notification);
    }
}