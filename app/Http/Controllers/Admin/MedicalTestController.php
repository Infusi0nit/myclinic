<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\MedicalTest;
use Illuminate\Http\Request;
use Session,DB,Str;
class MedicalTestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $medical_tests=MedicalTest::paginate(15);
        return view('medical-test.index',compact('medical_tests'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('medical-test.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request->all());
        $data=[
            'uuid' => (string) Str::uuid(),
            'name'=>$request->name,
            'amount'=>$request->amount,
        ];
        $medical_test = MedicalTest::create($data);
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
    public function edit(Request $request, MedicalTest $medical_test)
    {
        
        return view('medical-test.edit', compact('medical_test'));  
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,MedicalTest $medical_test)
    {
        
        $data = [
            'name'=>$request->name,
            'amount'=>$request->amount,
        ];
        $medical_test->update($data);
        $medical_test->save();
        Session::flash('success', 'Updated Successfully');
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(MedicalTest $medical_test)
    {
        $medical_test->delete();
        Session::flash('success', 'Deleted Successfully');
        return back();
        
    }
}
