<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use App\Notifications\SendEmailNotification;
use illuminate\Support\Facades\Auth;
use App\Models\Doctor;
use Illuminate\Http\Request;
use Notification;

class AdminController extends Controller
{
    public function addview()
    {
            if (Auth::id())
        {
            if (Auth::user()->usertype == "0")
            {
                return redirect('home');
            }
            else
            {
                return view("admin.add_doctor");
            }
        }
        else
        {
            return redirect('/');
        }

        
    }
    public function upload(Request $request)
    {
        if (Auth::id())
        {
            if (Auth::user()->usertype == "0")
            {
                return view('error404');
            }
            else
            {
                $doctor=new Doctor;
                $image= $request->file;
                $imagename=time().".".$image->getClientOriginalExtension();
                $request->file->move("doctorimages", $imagename);
                $doctor->image = $imagename;
               
                $doctor->name = $request->name;
                $doctor->room = $request->room;
                $doctor->phone = $request->number;
                $doctor->specialty = $request->specialty;
                $doctor->save();
                return redirect()->back()->with("message","Shifokor muvaffaqiyatli qo`shildi");
            }
        }
        else
        {
            return view('error404');
        }


        
    }
    public function showappointment()
    {
        if (Auth::id())
        {
            if (Auth::user()->usertype == "1")
            {
                $data=Appointment::paginate(5);

                return view('admin.showappointment',compact('data'));
            }
            else
            {
               return redirect()->back();
            }
        }
        else
        {
            return redirect()->back();
        }
    }
    public function approved($id)
    {
        if (Auth::id())
        {
            if (Auth::user()->usertype == "1")
            {
                $data=Appointment::find($id);
                $data->status='Tasdiqlandi';
                $data->save();
                return redirect('showappointment');
            }
            else
            {
               return redirect()->back();
            }
        }
        else
        {
            return redirect()->back();
        }
   

    }
    public function canceled($id)
    {
        if (Auth::id())
        {
            if (Auth::user()->usertype == "1")
            {
                $data=Appointment::find($id);
                $data->status='Rad etildi';
                $data->save();
                return redirect('showappointment');
            }
            else
            {
               return redirect()->back();
            }
        }
        else
        {
            return redirect()->back();
        }
    }
    public function showdoctor()
    {
        if (Auth::id())
        {
            if (Auth::user()->usertype == "1")
            {
                $data=Doctor::all();

                return view('admin.showdoctor',compact('data'));
            }
            else
            {
               return redirect()->back();
            }
        }
        else
        {
            return redirect()->back();
        }
    

    }
    public function deletedoctor($id)
    {
        if (Auth::id())
        {
            if (Auth::user()->usertype == "1")
            {
                $data=Doctor::find($id);
                if ($data != null) 
                {
                unlink('doctorimages/'.$data->image);
                $data->delete();
                }
                return redirect()->back();
            }
            else
            {
               return redirect()->back();
            }
        }
        else
        {
            return redirect()->back();
        }
    }
    public function updatedoctor($id)
    {
        if (auth::id())
        { 
            if (Auth::user()->usertype == "1")
            {
                $data=Doctor::find($id);
                return view('admin.updatedoctor',compact('data'));
            }
            else
            {
                return redirect()->back();
            }
        }
        else
        {
            return redirect()->back();
        }
    }
    public function editdoctor(Request $request ,$id)
    {
        if (Auth::id())
        {
            if (Auth::user()->usertype == "0")
            {
                return redirect()->back();
            }
            else
            {
                $data=Doctor::find($id);
                unlink('doctorimages/'.$data->image);
                $data->name=$request->name;
                $data->phone=$request->number;
                $data->specialty=$request->specialty;
                $data->room=$request->room;
                if ($request->file!=null)
                {
                $image= $request->file;
                $imagename=time().".".$image->getClientOriginalExtension();
                $request->file->move("doctorimages", $imagename);
                $data->image=$imagename;
                }
                
                $data->save();
                return redirect('showdoctor')->with("message","Shifokor muvaffaqiyatli Tahrirlandi");
            }
        }
        else
        {
            return redirect()->back();
        }


        
    }
    public function emailview($id)
    {
        if (auth::id())
        { 
            if (Auth::user()->usertype == "1")
            {
                $data=Appointment::find($id);
                return view('admin.emailview',compact('data'));
            }
            else
            {
                return redirect()->back();  
            }
        }
        else
        {
            return redirect()->back();
        }
    }
    public function sendemail(Request $request ,$id)
    {
        if (Auth::id())
        {
            if (Auth::user()->usertype == "0")
            {
                return redirect()->back();
            }
            else
            {
                $data=Appointment::find($id);
                $details=[
                'greeting'=>$request->greeting,
                'body'=>$request->body,
                'actiontext'=>$request->actiontext,
                'actionurl'=>$request->actionurl,
                'endpart'=>$request->endpart
               ];
               Notification::send($data,new SendEmailNotification($details));
                return redirect('showappointment')->with('message','Xabar jo`natildi');
            }
        }
        else
        {
            return redirect()->back();
        }        
    }
    public function completeinformation($id)
    {
        if (auth::id())
        { 
            if (Auth::user()->usertype == "1")
            {
                $appoints=Appointment::find($id);
                return view('admin.completeinformation',compact('appoints'));
            }
            else
            {
                return redirect()->back();  
            }
        }
        else
        {
            return redirect()->back();
        }
    }
}
