<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\admin\Corporate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;

class CorporateController extends Controller
{
    public function index()
    {
        $corporates = Corporate::all();
        return $this->view('csr.corporate.index', compact('corporates'));
    }

    public function create()
    {
        return $this->view('csr.corporate.create');
    }

    public function store(Request $request)
    {
       try{
        $image = $request->file('image');
        $name_gen = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
        Image::make($image)->resize(745, 640)->save('upload/csr/' . $name_gen);
        $save_url = 'upload/csr/' . $name_gen;

        Corporate::create([
            'image' => $save_url,
            'desc' => $request->desc,
        ]);

        $notification = array(
            'message' => 'Corporate social Inserted Successfully',
            'alert-type' => 'success',
        );
        return redirect::route('corporate.index')->with($notification);
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
        $corporates = Corporate::findOrFail($id);
        return $this->view('csr.corporate.edit', compact('corporates'));
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
                Image::make($image)->resize(745,640)->save('upload/csr/'.$name_gen);
                $save_url = 'upload/csr/'.$name_gen;
                Corporate::findOrFail($id)->update(['image' => $save_url]);
            }

            Corporate::findOrFail($id)->update([
                'desc' => $request->desc,
            ]);

            $notification = array(
                'message' => 'Corporate social updated Successfully',
                'alert-type' => 'info',
            );
            return redirect::route('corporate.index')->with($notification);
        } catch (\Exception $e) {
            return redirect::back()->withErrors(['errors' => $e->getMessage()]);
        }
    }

    public function destroy($id)
    {
        $corporate = Corporate::findOrFail($id);
        $image = Str::after($corporate->image, 'upload/csr/');
        $image = public_path('upload/csr/' . $image);
        unlink($image);
        $corporate->delete();

        $message = __( 'Corporate social deleted successfully' );
        return $this->response(true, 200, $message );
    }

    public function InactiveCsr($id)
    {
        Corporate::findOrFail($id)->update(['is_publish' => 'in-active']);
        $notification = array(
            'message' => 'Corporate social is Inactive',
            'alert-type' => 'success',
        );

        return redirect()->back()->with($notification);
    }

    public function ActiveCsr($id)
    {
        Corporate::findOrFail($id)->update(['is_publish' => 'active']);
        $notification = array(
            'message' => 'Corporate social is Active',
            'alert-type' => 'success',
        );

        return redirect()->back()->with($notification);
    }
}
