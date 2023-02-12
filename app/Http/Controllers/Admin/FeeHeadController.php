<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\FeeHead;
use Illuminate\Contracts\Session\Session as SessionSession;
use Illuminate\Http\Request;
use Session, Str, DB;

class FeeHeadController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $fee_heads = FeeHead::paginate(10);

        return view('fee-head.index', compact('fee_heads'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('fee-head.create');
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
            'name' => $request->name,

        ];
        $fee_head = FeeHead::create($data);
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
    public function edit(Request $request, FeeHead $fee_head)
    {
        $fee_heads = FeeHead::get();
        return view('fee-head.edit', compact('fee_head'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, FeeHead $fee_head)
    {
        $data = [
            'name' => $request->name,
        ];
        $fee_head->update($data);
        $fee_head->save();
        Session::flash('success', 'Updated Successfully');
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(FeeHead $fee_head)
    {
        $fee_head->delete();
        Session::flash('success', 'Deleted Successfully');
        return back();
    }
}
