<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\admin\Brand;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Intervention\Image\Facades\Image;

class BrandController extends Controller
{

    public function index()
    {
        $brands = Brand::all();
        return $this->view('client.brand.index', compact('brands'));
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
    
            Brand::create([
                'image' => $save_url,
                'name' => $request->name,
            ]);
    
            $notification = array(
                'message' => 'Brand Inserted Successfully',
                'alert-type' => 'success',
            );
            return redirect::route('brands.index')->with($notification);
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
        $brands = Brand::findOrFail($id);
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
                Brand::findOrFail($id)->update(['image' => $save_url]);
            }

            Brand::findOrFail($id)->update([
                'name' => $request->name,
            ]);

            $notification = array(
                'message' => 'Brand updated Successfully',
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

    public function InactiveBrand($id)
    {
        Brand::findOrFail($id)->update(['is_publish' => 'in-active']);
        $notification = array(
            'message' => 'Brand is Inactive',
            'alert-type' => 'success',
        );

        return redirect()->back()->with($notification);
    }

    public function ActiveBrand($id)
    {
        Brand::findOrFail($id)->update(['is_publish' => 'active']);
        $notification = array(
            'message' => 'Brand is Active',
            'alert-type' => 'success',
        );

        return redirect()->back()->with($notification);
    }
}
