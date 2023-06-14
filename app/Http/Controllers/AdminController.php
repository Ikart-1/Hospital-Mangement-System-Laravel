<?php

namespace App\Http\Controllers;
use Carbon\Carbon;
use App\Models\Appointment;
use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Doctor;
use App\Http\Controllers\Controller;

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

        public function updateDate(Request $request, $id)
        {
            $data = appointment::find($id);
            $data->date = $request->new_date;
            $data->save();
            return redirect()->back()->with('message','Date mise à jour avec succès');
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
    public function showappointment()
    {   
        
        $data = appointment::whereIn('status', ['Canceled', 'Approved','In progress'])->get();
        foreach ($data as $appoints) {
            if (Carbon::parse($appoints->date)->isPast() && $appoints->status !== "Effectué") {
                $appoints->status = "Effectué";
                $appoints->save();
            }
        }
        return view('admin.showappointment', compact('data'));

    }
    

    public function showhisto()
{
    $data = appointment::whereIn('status', ['Effectué'])->get();
    $doctors = doctor::pluck('name'); // Remplacez "Doctor" par le nom de votre modèle de médecin
    return view('admin.showhisto', compact('data', 'doctors'));
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
       public function restored($id){
        $data=appointment::find($id);
        $data->status='In progress'; 
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

        public function updateapp($id){
            $data=appointment::find($id);
            return view('admin.update_app',compact('data'));
        } 
        public function editapp(Request $request, $id){
            $data=appointment::find($id);
            $data->date=$request->date;
            $data->status = 'Approved'; // Ajout de la ligne pour définir le statut sur "Approved"
            $data->reponse = 'reponse'; // Ajout de la ligne pour définir le statut sur "Approved"
            $data->save();
            return redirect()->back()->with('message','La date a été modifiée avec succès');
            }


public function showuser(){
    $data = user::where('usertype', 0)->get();
    return view('admin.showuser',compact('data'));
}
public function deleteuser($id){
    $data=user::find($id);
    $data->delete(); 
    return redirect()->back();
}
public function updateuser($id){
    $data=user::find($id);
    return view('admin.update_user',compact('data'));
}

public function edituser(Request $request, $id){
    $user=user::find($id);
    $user->name=$request->name;
    $user->phone=$request->phone;
    $user->email=$request->email;
    $user->address=$request->address;

    $user->save();
    return redirect()->back()->with('message','Patient Details Updated Successfully');
    }

            public function adduserview(){
                return view('admin.add_user');
            }
        
            public function uploaduser(Request $request){
            $user=new user;
            $user->name=$request->name;
            $user->phone=$request->phone;
            $user->email=$request->email;
            $user->address=$request->address;
            $user->password=$request->password;
        
            $user->save();
            return redirect()->back()->with('message','Patient Added Successfully');
            }

            

}
