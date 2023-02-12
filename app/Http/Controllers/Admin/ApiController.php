<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Doctor;
use App\Models\Fee;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    function getDoctorByDepartment(Request $request)
    {
    
        $doctor = Doctor::where('department_id',$request->department_id)->get();
        return response()->json($doctor);
        
    }
    public function getFeeAmountByFeeHead(Request $request)
    {
        $amout = fee::where('fee_head_id', $request->fee_head_id)->get();
        echo $amout[0]->amount;
    }
}
