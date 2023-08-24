<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\admin\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;

class ServiceController extends Controller
{
    public function index()
    {
        $services = Service::all();
        return $this->view('service.service.index', compact('services'));
    }

    public function create()
    {
        return $this->view('service.service.create');
    }

    public function store(Request $request)
    {
    //    try{
        $image = $request->file('image');
        $name_gen = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
        Image::make($image)->resize(745, 640)->save('upload/service/' . $name_gen);
        $save_url = 'upload/service/' . $name_gen;

        Service::create([
            'title' => $request->title,
            'desc' => $request->desc,
            'image' => $save_url,
        ]);

        $notification = array(
            'message' => 'Service Inserted Successfully',
            'alert-type' => 'success',
        );
        return redirect::route('services.index')->with($notification);
    //    }catch (\Exception $e) {
    //        return redirect::back()->withErrors(['errors' => $e->getMessage()]);
       }
    }

    public function show($id)
    {
        return back();
    }

    public function edit($id)
    {
        $services = Service::findOrFail($id);
        return $this->view('service.service.edit', compact('services'));
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
                Image::make($image)->resize(745,640)->save('upload/service/'.$name_gen);
                $save_url = 'upload/service/'.$name_gen;
                Service::findOrFail($id)->update(['image' => $save_url]);
            }

            Service::findOrFail($id)->update([
                'title' => $request->title,
                'desc' => $request->desc,

            ]);

            $notification = array(
                'message' => 'Service updated Successfully',
                'alert-type' => 'info',
            );
            return redirect::route('services.index')->with($notification);
        } catch (\Exception $e) {
            return redirect::back()->withErrors(['errors' => $e->getMessage()]);
        }
    }

    public function destroy($id)
    {
        $service = Service::findOrFail($id);
        $image = Str::after($service->image, 'upload/service/');
        $image = public_path('upload/service/' . $image);
        unlink($image);
        $service->delete();

        $message = __( 'Service deleted successfully' );
        return $this->response(true, 200, $message );
    }

    public function Inactiveservice($id)
    {
        Service::findOrFail($id)->update(['is_publish' => 'in-active']);
        $notification = array(
            'message' => 'Service is Inactive',
            'alert-type' => 'success',
        );

        return redirect()->back()->with($notification);
    }

    public function ActiveService($id)
    {
        Service::findOrFail($id)->update(['is_publish' => 'active']);
        $notification = array(
            'message' => 'Service is Active',
            'alert-type' => 'success',
        );

        return redirect()->back()->with($notification);
    }
}
