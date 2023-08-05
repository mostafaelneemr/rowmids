<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\admin\Career;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;


class CareerController extends Controller
{
    public function index()
    {
        $careers = Career::get();
        return $this->view('career.career.index', compact('careers'));
    }

    public function create()
    {
        return $this->view('career.career.create');
    }

    public function store(Request $request)
    {
       try{
        Career::create([
                'title' => $request->title,
                'location' => $request->location,
                'desc' => $request->desc,
                'req' => $request->req,
            ]);

            $notification = array(
                'message' => 'career position Inserted Successfully',
                'alert-type' => 'success',
            );
            return redirect::route('career-position.index')->with($notification);
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
        $careers = Career::findOrFail($id);
        return $this->view('career.career.edit', compact('careers'));
    }

    public function update(Request $request, $id)
    {
        try {
            $id = $request->id;

            Career::findOrFail($id)->update([
                'title' => $request->title,
                'location' => $request->location,
                'desc' => $request->desc,
                'req' => $request->req,
            ]);

            $notification = array(
                'message' => 'Career Position updated Successfully',
                'alert-type' => 'info',
            );
            return redirect::route('career-position.index')->with($notification);
        } catch (\Exception $e) {
            return redirect::back()->withErrors(['errors' => $e->getMessage()]);
        }
    }

    public function destroy(Career $slider,$id)
    {
        return "done";
        $message = __( 'Slider deleted successfully' );
        $slider->where('id',$id)->delete();

        return $this->response(true, 200, $message );
    }

    public function InactiveCareer($id)
    {
        Career::findOrFail($id)->update(['is_publish' => 'in-active']);
        $notification = array(
            'message' => 'Career Position is Inactive',
            'alert-type' => 'info',
        );

        return redirect()->back()->with($notification);
    }

    public function ActiveCareer($id)
    {
        Career::findOrFail($id)->update(['is_publish' => 'active']);
        $notification = array(
            'message' => 'Career Position is Active',
            'alert-type' => 'success',
        );

        return redirect()->back()->with($notification);
    }
}
