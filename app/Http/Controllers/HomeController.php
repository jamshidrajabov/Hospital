<?php

namespace App\Http\Controllers;
use App\Models\Appointment;
use App\Models\Doctor;
use illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
   public function redirect()
   {
    if (Auth::id())
    {
        if (Auth::user()->usertype == "0")
        {
            $doctor=Doctor::all();
            return view("user.home",compact("doctor"));
            
        }
        else
        {
            return view("admin.home");
        }
    }
    else
    {
        return redirect()->back();
    }
   }
   public function index()
   {
    if (Auth::id())
    {
        return redirect('home');
    }
    else
    {
        $doctor=Doctor::all();

        return view("user.home",compact("doctor"));
    }
   
   }
   public function appointment(Request $request)
   {
        $data=new Appointment;
        $data->name=$request->name;
        $data->email=$request->email;
        $data->date=$request->date;
        $data->doctor=$request->doctor;
        $data->phone=$request->number;
        $data->message=$request->message;
        $data->status='Jarayonda';
        if (Auth::id())
        {
            $data->user_id=Auth::user()->id;
        }
        $data->save();
        return redirect()->back()->with('message','Murojat jo`natildi. Siz bilan tez orada bog`lanamiz');
   }
   public function myappointment()
   {
       
    if (Auth::id())
    {
        $userid=Auth::user()->id;
        $appoint=Appointment::where('user_id',$userid)->get();
        return view('user.my_appointment',compact('appoint'));
    }
    else
    {
        return redirect()->back();
    }
    
   }
   public function cancel_appoint($id)
   {
    if (auth::id())
    {
        $data=Appointment::find($id);
        if ($data != null) 
        {
        $data->delete();
        }
    }
    
    return redirect()->back();
   }
}
