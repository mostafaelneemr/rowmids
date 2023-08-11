<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreContactRequest; 
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMail;
use App\Models\Admin\Contact;
use Redirect;

class SendEmailController extends Controller
{
    public function index(StoreContactRequest $request)
    {
      Contact::create($request->validated());
      Mail::to(setting('email'))->send(new ContactMail($request));
      return redirect('/')->with('success', 'The message has been send successfully.');
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
