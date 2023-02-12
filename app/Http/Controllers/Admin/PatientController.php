<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Appointment;
use App\Models\Doctor;
use App\Models\patient;
use Illuminate\Http\Request;
use DB, Session, Str;
use Illuminate\Contracts\Session\Session as SessionSession;

class PatientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function filter($patients)
    {
       
        $patients->when(request("patient_name"), function ($query) {
            $query->where(function ($query) {
                $name = request("patient_name");
                $query->whereRaw(DB::raw("CONCAT(first_name,' ', middle_name,' ', last_name) LIKE  '%" . $name . "%'"))
                    ->orWhereRaw("CONCAT(first_name,' ', last_name) LIKE  '%" . $name . "%'");
            });
            
        });
       

        $patients->when(request("patient_id"), function ($query) {
            $query->where('patients_no', request('patient_id'));
        });
        $patients->when(request("email"), function ($query) {
            $query->where('email', request('email'));
        });
        
        $patients->when(request('from_date'), function ($query) {
            $query->whereDate('from_date', '>=', request('created_at'));
        });
        $patients->when(request('to_date'), function ($query) {
            $query->whereDate('to_date', '<=', request('to_date'));
        });
        $patients->when(request('consultant_name'), function ($query) {
            $query->whereHas('appointment', function ($query) {
                $query->whereHas('doctor', function ($query) {
                $query->where(function ($query) {
                    $name = request("consultant_name");
                    $query->whereRaw(DB::raw("CONCAT(first_name,' ', middle_name,' ', last_name) LIKE  '%" . $name . "%'"))
                        ->orWhereRaw("CONCAT(first_name,' ', last_name) LIKE  '%" . $name . "%'");
                });
            });
            });
        });
        $patients->when(request("phone_no"), function ($query) {
            $query->where('mobile_no', request('phone_no'));
        });

        return $patients;
    }
    public function index(Request $request)
    {
        
        $patients     = patient::query();
        $patients     = $this->filter($patients)->paginate(15);
        return view('patient.index',compact('patients'));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('patient.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $data = [
            'uuid' => (string) Str::uuid(),
            'patients_no' => getPatientNo(),
            'title' => $request->title,
            'first_name' => $request->first_name,
            'middle_name' => $request->middle_name,
            'last_name' => $request->last_name,
            'mobile_no' => $request->mobile,
            'email' => $request->email,
            'age' => $request->age,
            'country' => $request->country,
            'state' => $request->state,
            'city' => $request->city,
            'address' => $request->address,
            'street_name' => $request->street_name,
            'locality' => $request->locality,
            'pin' => $request->pin,
        ];
        $patient = patient::create($data);
        Session::flash('success', 'Patient Added Successfully.');
        return redirect()->route('appointment.create', $patient);
    }
    public function find()
    {
        return view('appointment.registeredpatient');
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $patient=patient::where('uuid','=',$id)->first();
        $patient_id=$patient->id;
        $appointments=Appointment::where('patient_id','=',$patient_id)->get();
        $doctors=Doctor::get();
        //dd($appointments);
        return view('patient.view',compact('patient','appointments','doctors'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request,patient $patient)
    {
        
        
        return view('patient.edit', compact('patient'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,patient $patient)
    {
        $patients     = patient::query();
        $patients     = $this->filter($patients)->paginate(15);
       
        $data = [
            'first_name' => $request->first_name,
            'middle_name' => $request->middle_name,
            'last_name' => $request->last_name,
            'mobile_no' => $request->mobile,
            'email' => $request->email,
            'age' => $request->age,
            'country' => $request->country,
            'state' => $request->state,
            'city' => $request->city,
            'address' => $request->address,
            'street_name' => $request->street_name,
            'locality' => $request->locality,
            'pin' => $request->pin,
        ];
        $patient->update($data);
        $patient->save();
        Session::flash('success', 'Updated Successfully');
        
        return view('patient.index',compact('patients'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
   
    public function findPatient(Request $request){
      
        $patients     = Patient::query();
        $patients     = $this->filter($patients)->paginate();
        return view('patient.index',compact('patients'));
        
    }
    public function registation()
    {
    }
}
