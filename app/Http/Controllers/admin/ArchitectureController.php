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
            'message' => 'Architecture Inserted Successfully',
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
                'message' => 'Architecture updated Successfully',
                'alert-type' => 'info',
            );
            return redirect::route('architecture.index')->with($notification);
        } catch (\Exception $e) {
            return redirect::back()->withErrors(['errors' => $e->getMessage()]);
        }
    }


    public function destroy($id)
    {
        //
    }

}
