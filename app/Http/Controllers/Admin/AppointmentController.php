<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Appointment;
use App\Models\Department;
use App\Models\Doctor;
use App\Models\FeeHead;
use App\Models\patient;
use Illuminate\Contracts\Session\Session as SessionSession;
use PDF;
use Illuminate\Http\Request;
use Str,DB,Session;

class AppointmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function dashboard()
    {
       return view("appointment.dashboard");
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($patient)
    {
        $patient_details=patient::where('uuid','=',$patient)->first();
        $fee_heads=FeeHead::get();
        $doctors=Doctor::get();
        $departments=Department::get();
    
        
        return view('appointment.create',compact('patient_details','fee_heads','doctors','departments'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $total_appointment=Appointment::where('patient_id',$request->patient_id)->where('doctor_id',$request->doctor_id)->count();
        $appointment_count=$total_appointment+1;
       
        $data=[
            'uuid' => (string) Str::uuid(),
            'patient_id'=>$request->patient_id,
            'department_id'=>$request->doctor_id,
            'doctor_id'=>$request->doctor_id,
            'fee_head_id'=>$request->fee_head_id,
            'appointment_number'=>$appointment_count,
            'amount'=>$request->amount,
        ];
        $appointment = Appointment::create($data);
        $patient_id=$appointment->patient_id;
        $patient=patient::find($patient_id);
        Session::flash('success', 'Appoint Successfully.');
        $pdf=PDF::LoadView('appointment.show',compact('patient','appointment'))->setPaper('a4','portrait');
        $fileName=$patient->patients_no;
        return $pdf->stream($fileName.'.pdf');
       
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $appointment=Appointment::where('uuid','=',$id)->first();
        
        return view('appointment.show',compact('appointment'));
    }
    public function showpdf(Patient $patient,Appointment $appointment)
    {
        $pdf=PDF::LoadView('appointment.show',compact('patient','appointment'))->setPaper('a4','portrait');
        $fileName=$patient->patients_no;
        return $pdf->stream($fileName.'.pdf');
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request,Appointment $appointment)
    { 
        $patient_details=$appointment->patient;
        $fee_heads=FeeHead::get();
        $doctors=Doctor::get();
        $departments=Department::get();
        return view('appointment.edit', compact('patient_details','appointment','fee_heads','doctors','departments'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Appointment $appointment)
    {
        dd($appointment);
        $total_appointment=Appointment::where('patient_id',$request->patient_id)->where('doctor_id',$request->doctor_id)->count();
        $appointment_count=$total_appointment+1;
        $data=[
            'uuid' => (string) Str::uuid(),
            'patient_id'=>$request->patient_id,
            'department_id'=>$request->doctor_id,
            'doctor_id'=>$request->doctor_id,
            'fee_head_id'=>$request->fee_head_id,
            'appointment_number'=>$appointment_count,
            'amount'=>$request->amount,
        ];
        
        $appointment->update($data)->with('success','appointment updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Appointment $appointment)
    {
        $appointment->delete();
        Session::flash('success', 'Deleted Successfully');
        return back();
        
    }
}
