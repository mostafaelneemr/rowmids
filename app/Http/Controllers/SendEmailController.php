<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\ContactRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMail;
use App\Models\Admin\Contact;

class SendEmailController extends Controller
{
    public function index(Request $request)
    {
//      Contact::create($request->validated());
//      Mail::to(setting('email'))->send(new ContactMail($request));
//      return redirect('/')->with('success', 'The message has been send successfully.');

        $this->validate($request, [
            'name' => 'required|string',
            'email' => 'email|required|string',
            'phone' => 'required|min:11|numeric',
            'message' => 'string'
        ]);
        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'message' => $request->message,
        ];
        Mail::to('mostafa.elnemr50@gmail.com')->send(new SendMail($data));

        session()->flash('message', 'thank you for contact');
        return redirect()->back();
    }


    public function adminindex(){
      $messages=Contact::all();
      return view('admin.contact.messages.index',compact('messages'));
    }

    public function deletemessage($id)
    {
        if(Contact::find($id)->delete()){

            $response = [
                "status" => true,
                "message" => "Message deleted successfully.",
                "id"=>$id
            ];
        }else{

        $response = [
            "status" => false,
            "message" => "Message Can\'t deleted successfully."
        ];

        }

        return response()->json($response);
    }
}
