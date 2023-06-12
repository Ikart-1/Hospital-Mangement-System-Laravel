<?php

namespace App\Http\Controllers;
use Carbon\Carbon;
use App\Models\Appointment;
use Illuminate\Http\Request;
use App\Models\Doctor;

class AdminController extends Controller
{
    public function addview(){
        return view('admin.add_doctor');
    }
    public function addappointmentview(){
    $data = Doctor::all(); // Or any other way to retrieve the data you need
    return view('admin.add_appointment', compact('data'));
    }
    public function uploadapp(Request $request){
        $data=new appointment;
        $data->name=$request->name;
        $data->email=$request->email;
        $data->date=$request->date;
        $data->phone=$request->number;
        $data->message=$request->message;
        $data->doctor=$request->doctor;
        $data->status='In progress';
        $data->save();
        return redirect()->back()->with('message','Appointment Request Successful .');
        }

    public function upload(Request $request){
    $doctor=new doctor;
    $image=$request->file;
    $imagename=time().'.'.$image->getClientoriginalExtension();
    // il vas creer le folder doctor image
    $request->file->move('doctorimage',$imagename);
    $doctor->image=$imagename;
    $doctor->name=$request->name;
    $doctor->phone=$request->number;
    $doctor->room=$request->room;
    $doctor->specialty=$request->speciality;

    $doctor->save();
    return redirect()->back()->with('message','Doctor Added Successfully');
    }
    public function showappointment(){
        $this->deleteExpiredAppointments();
        $data=appointment::all();
        return view('admin.showappointment',compact('data'));
    }
    public function approved($id){
     $data=appointment::find($id);
     $data->status='Approved'; 
     $data->save();
     return redirect()->back();
    }
    public function canceled($id){
        $data=appointment::find($id);
        $data->status='Canceled'; 
        $data->save();
        return redirect()->back();
       }
       public function showadoctors(){
        $data=doctor::all();
        return view('admin.showadoctors',compact('data'));
        return view('admin.add_appointment',compact('data'));
    }
    public function deletedoctor($id){
        $data=doctor::find($id);
        $data->delete(); 
        return redirect()->back();
    }
    public function updatedoctor($id){
        $data=doctor::find($id);
        return view('admin.update_doctor',compact('data'));
    }

    public function editdoctor(Request $request, $id){
        $doctor=doctor::find($id);
        $doctor->name=$request->name;
        $doctor->phone=$request->number;
        $doctor->room=$request->room;
        $doctor->specialty=$request->speciality;

        $image=$request->file;
        if($image){
        $imagename=time().'.'.$image->getClientOriginalExtension();
        // il vas creer le folder doctor image
        $request->file->move('doctorimage',$imagename);
        $doctor->image=$imagename;
        }
    
        $doctor->save();
        return redirect()->back()->with('message','Doctor Details Updated Successfully');
        }

        
// cette  fontion est pour supprimer la rdv quand il deppase sa date
public function deleteExpiredAppointments()
{
    $currentDate = Carbon::now()->toDateString();
    $expiredAppointments = Appointment::where('date', '<', $currentDate)->get();

    foreach ($expiredAppointments as $appointment) {
        $appointment->delete();
    }
}

}
