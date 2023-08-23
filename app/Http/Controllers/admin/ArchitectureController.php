<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\admin\Architecture;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;

class ArchitectureController extends Controller
{

    public function index()
    {
        $architectures = Architecture::all();
        return $this->view('service.architecture.index', compact('architectures'));
    }

    public function create()
    {
        return $this->view('service.architecture.create');
    }


    public function store(Request $request)
    {
       try{
        $image = $request->file('icon');
        $name_gen = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
        Image::make($image)->resize(71, 71)->save('upload/service/' . $name_gen);
        $save_url = 'upload/service/' . $name_gen;

        Architecture::create([
            'title' => $request->title,
            'desc' => $request->desc,
            'icon' => $save_url,
        ]);

        $notification = array(
            'message' => 'Service Inserted Successfully',
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
        $architectures = Architecture::findOrFail($id);
        return $this->view('service.architecture.edit', compact('architectures'));
    }


    public function update(Request $request, $id)
    {
        try {
            $id = $request->id;
            $old_image = $request->old_image;

            if($request->file('icon')){
                @unlink($old_image);
                $image = $request->file('icon');
                $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
                Image::make($image)->resize(71,71)->save('upload/service/'.$name_gen);
                $save_url = 'upload/service/'.$name_gen;
                Architecture::findOrFail($id)->update(['icon' => $save_url]);
            }

            Architecture::findOrFail($id)->update([
                'title' => $request->title,
                'desc' => $request->desc,

            ]);

            $notification = array(
                'message' => 'Service updated Successfully',
                'alert-type' => 'info',
            );
            return redirect::route('architecture.index')->with($notification);
        } catch (\Exception $e) {
            return redirect::back()->withErrors(['errors' => $e->getMessage()]);
        }
    }

    public function destroy($id)
    {
        $architecture = Architecture::findOrFail($id);
        $image = Str::after($architecture->icon, 'upload/service/');
        $image = public_path('upload/service/' . $image);
        unlink($image);
        $architecture->delete();

        $message = __( 'Service deleted successfully' );
        return $this->response(true, 200, $message );
    }

    public function InactiveService($id)
    {
        Architecture::findOrFail($id)->update(['is_publish' => 'in-active']);
        $notification = array(
            'message' => 'Service is Inactive',
            'alert-type' => 'success',
        );

        return redirect()->back()->with($notification);
    }

    public function ActiveService($id)
    {
        Architecture::findOrFail($id)->update(['is_publish' => 'active']);
        $notification = array(
            'message' => 'Service is Active',
            'alert-type' => 'success',
        );

        return redirect()->back()->with($notification);
    }
}
