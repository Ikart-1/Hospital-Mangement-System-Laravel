<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Carbon\Carbon;
use App\Models\Doctor;
use App\Models\Appointment;

class HomeController extends Controller
{
    public function redirect(){
       if(Auth::id()){
         if(Auth::user()->usertype=='0'){
            $doctor=doctor::all();
            return view('user.home',compact('doctor'));
         }
         else{
            return view('admin.home');
         }
       }
       else{
        return redirect()->back();
       }
    }
    public function index(){
      if(Auth::id()){
         return redirect('home');
      }
      else{
      $doctor=doctor::all();
      return view('user.home',compact('doctor'));
      }
    }
    public function appointment(Request $request){
        $data=new appointment;
        $data->name=$request->name;
        $data->email=$request->email;
        $data->date=$request->date;
        $data->phone=$request->number;
        $data->message=$request->message;
        $data->doctor=$request->doctor;
        $data->status='In progress';
        if(Auth::id()){
        $data->user_id=Auth::user()->id;
        }
    
        $data->save();
        return redirect()->back()->with('message','Appointment Request Successful . We Will Contact You Soon');
    }
  

    public function myappointment()
    {
        if (Auth::id()) {
            $userid = Auth::user()->id;
            $statusValues = ['Canceled', 'Approved', 'In progress'];
            $appoint = Appointment::where('user_id', $userid)
            ->whereIn('status', $statusValues)
            ->orderBy('date', 'asc')
            ->get();
            
            // Vérifier les rendez-vous passés et mettre à jour le statut si la date est dépassée
            foreach ($appoint as $appoints) {
                if (Carbon::parse($appoints->date)->isPast() && $appoints->status !== "Effectué") {
                    $appoints->status = "Effectué";
                    $appoints->save();
                }
            }
            
            return view('user.my_appointment', compact('appoint'));
        } else {
            return redirect()->back();
        }
    }
    public function cancel_appoint($id){
      $data=appointment::find($id);
      $data->delete();
      return redirect()->back();
    }
}
