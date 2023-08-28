<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        $data = User::orderBy('id','DESC')->get();
        return view('admin.user.index',compact('data'));
    }

    public function create()
    {
        return view('admin.user.create');
    }

    public function store(Request $q)
    {
        try {
            $this->validate($q, [
                'name' => 'required',
                'email' => 'required|email|unique:users,email',
                'password' => 'required|same:confirm-password',
            ]);
    
            User::create([
                'name' => $q->name,
                'email' => $q->email,
                'password' => Hash::make($q->password),
            ]);

            $notify = array(
                'message' => 'Added user succesfully',
                'alert-message' => 'success'
            );
            return redirect()->route('users.index')->with($notify);
        } catch (\Exception $e) {
            return redirect()->back()->withErrors(['errors' => $e->getMessage()]);
        }
    }

    public function show($id)
    {
        $user = User::find($id);
        return view('backend.users.show',compact('user'));
    }

    public function edit($id)
    {
        $user = User::find($id);
    
        return view('admin.user.edit',compact('user'));
    }

    public function update(Request $q, $id)
    {
        $this->validate($q, [
            'name' => 'required',
            'email' => 'required|email|unique:users,email,'.$id,
        ]);

        $input = $q->all();

        if(!empty($input['password'])){
            $input['password'] = Hash::make($input['password']);
        } else{
            Arr::except($input,array('password'));
        }

        $user = User::find($id);

        $user->update([
            'name' => $q->name,
            'email' => $q->email,
            'password' => Hash::make($q->password),
        ]);

        $notify = array(
            'message' => 'Updated user succesfully',
            'alert-message' => 'info'
        );
        return redirect('users')->with($notify);
    }

    public function destroy($id)
    {
        User::destroy($id);
        session()->flash('Deleted', 'Deleted user succesfully');
        return redirect()->back();
    }
}
