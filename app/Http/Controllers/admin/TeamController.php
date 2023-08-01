<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\admin\Team;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Intervention\Image\Facades\Image;

class TeamController extends Controller
{

    public function index()
    {
        $teams = Team::all();
        return $this->view('about.team.index', compact('teams'));
    }

    public function create()
    {
        return $this->view('about.team.create');
    }


    public function store(Request $request)
    {
       try{
            $image = $request->file('image');
            $name_gen = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
            Image::make($image)->resize(370, 370)->save('upload/about/' . $name_gen);
            $save_url = 'upload/about/' . $name_gen;

            Team::create([
                'name' => $request->name,
                'title' => $request->title,
                'facebook' => $request->facebook,
                'twitter' => $request->twitter,
                'instagram' => $request->instagram,
                'image' => $save_url,
            ]);

            $notification = array(
                'message' => 'Team Inserted Successfully',
                'alert-type' => 'success',
            );
            return redirect::route('teams.index')->with($notification);
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
        $teams = Team::findOrFail($id);
        return $this->view('about.team.edit', compact('teams'));
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
                Image::make($image)->resize(370,370)->save('upload/about/'.$name_gen);
                $save_url = 'upload/about/'.$name_gen;
                Team::findOrFail($id)->update(['image' => $save_url]);
            }

            Team::findOrFail($id)->update([
                'name' => $request->name,
                'title' => $request->title,
                'facebook' => $request->facebook,
                'twitter' => $request->twitter,
                'instagram' => $request->instagram,
            ]);

            $notification = array(
                'message' => 'Team updated Successfully',
                'alert-type' => 'info',
            );
            return redirect::route('teams.index')->with($notification);
        } catch (\Exception $e) {
            return redirect::back()->withErrors(['errors' => $e->getMessage()]);
        }
    }


    public function destroy($id)
    {
        //
    }

    public function InactiveSlider($id)
    {
        Team::findOrFail($id)->update(['is_publish' => 'in-active']);
        $notification = array(
            'message' => 'Team is Inactive',
            'alert-type' => 'success',
        );

        return redirect()->back()->with($notification);
    }

    public function ActiveSlider($id)
    {
        Team::findOrFail($id)->update(['is_publish' => 'active']);
        $notification = array(
            'message' => 'Team is Active',
            'alert-type' => 'success',
        );

        return redirect()->back()->with($notification);
    }
}
