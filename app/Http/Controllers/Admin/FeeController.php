<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Fee;
use App\Models\FeeHead;
use Illuminate\Http\Request;
use Session,Str;

class FeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $fees = Fee::paginate(15);
        return view('fee.index', compact('fees'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $fee_heads = FeeHead::get();
        return view('fee.create', compact('fee_heads'));
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
            'uuid'             => (string) Str::uuid(),
            'fee_head_id'      => $request->fee_head_id,
            'amount'           => $request->amount,
        ];
        $fee = Fee::create($data);
        Session::flash('success', 'Fee Added Successfully.');
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    { }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, Fee $fee)
    {
        $fee_heads = FeeHead::get();
        $fees      = Fee::get();
        return view('fee.edit', compact('fee', 'fee_heads'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Fee $fee)
    {
        $data = [
            'fee_head_id'      => $request->fee_head_id,
            'amount'           => $request->amount,
        ];
        $fee->update($data);
        $fee->save();
        Session::flash('success', 'Updated Successfully');
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Fee $fee)
    {
        $fee->delete();
        Session::flash('success', 'Deleted Successfully');
        return back();
    }
}
