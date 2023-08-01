<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\admin\ServiceDecoration;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;


class ServiceDecorationController extends Controller
{
    public function index()
    {
        $data = ServiceDecoration::all();
        return $this->view('service.decoration.index', compact('data'));
    }

    public function create()
    {
        return $this->view('service.decoration.create');
    }

    public function store(Request $request)
    {
        try{
            ServiceDecoration::create([
                'title' => $request->title,
                'desc' => $request->desc,
            ]);
    
            $notification = array(
                'message' => 'Service data Inserted Successfully',
                'alert-type' => 'success',
            );
            return redirect::route('service-home.index')->with($notification);
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
        $data = ServiceDecoration::findOrFail($id);
        return $this->view('service.decoration.edit', compact('data'));
    }

    public function update(Request $request, $id)
    {
        try {
            $id = $request->id;

            ServiceDecoration::findOrFail($id)->update([
                'title' => $request->title,
                'desc' => $request->desc,
            ]);

            $notification = array(
                'message' => 'Service data updated Successfully',
                'alert-type' => 'info',
            );
            return redirect::route('service-home.index')->with($notification);
        } catch (\Exception $e) {
            return redirect::back()->withErrors(['errors' => $e->getMessage()]);
        }
    }

    public function destroy($id)
    {
        //
    }

}
