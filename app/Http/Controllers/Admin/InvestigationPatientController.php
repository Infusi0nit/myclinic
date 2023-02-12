<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Investigation;
use App\Models\InvestigationDetail;
use App\Models\MedicalTest;
use App\Models\patient;
use Illuminate\Http\Request;
use Str, Session, DB, PDF;

class InvestigationPatientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $investigations = Investigation::get();
        foreach($investigations as $key=>$i)



        return view('investigation-patient.index', compact('investigations'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $patients = patient::get();
        $medical_tests = MedicalTest::get();

        return view('investigation-patient.create', compact('patients', 'medical_tests','patients'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $amount = 0;
        foreach ($request->medical_tests as $key => $medical_test) {
            $per_amount = $request->amounts[$key];
            $amount = $amount + $per_amount;
        }



        $data = [
            'uuid'                        => (string) Str::uuid(),
            'patient_id'                     => $request->patient_id,
            'total_amount'        => $amount,

        ];
        $investigation                 = Investigation::create($data);
        $investigation_details = [];
        foreach ($request->medical_tests as $key => $medical_test) {

            $investigation_data = [
                'uuid'               => (string) Str::uuid(),
                'investigation_id'     => $investigation->id,
                'medical_test_id'              => $request->medical_tests[$key],
                'amount'         => $request->amounts[$key],


            ];
            $investigation_details[] = $investigation_data;
        }
        $investigation_details_insert = InvestigationDetail::insert($investigation_details);
        Session::flash('success', 'Created Successfully');
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Investigation $investigation)
    {
        $patients = patient::get();
        $medical_tests = MedicalTest::get();
        return view('investigation-patient.edit', compact('patients', 'medical_tests', 'investigation'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        //
    }
    public function investigationPdf(Investigation $investigation)
    {
        $pdf = PDF::LoadView('investigation-patient.show', compact('investigation'))->setPaper('a4', 'portrait');
        $fileName = $investigation->id;
        return $pdf->stream($fileName . '.pdf');
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
    public function getmedicaltestamount(Request $request)
    {
        $medical_test = MedicalTest::where('id', $request->medical_test_id)->get();
        echo $medical_test[0]->amount;
    }
}
