<?php

use App\Models\patient;
use Illuminate\Database\Eloquent\Builder;

if (!function_exists('public_asset')) {
    function public_asset($url, $secure = false)
    {
        return asset("public/" . $url, $secure);
    }
}
function isAdmin()
{
    $user = auth()->user();
    return true;
}
function getPatientNo()
{
    $patient_count =patient::whereYear('created_at', date('Y'))->withTrashed()->count() + 1;
    $patient_no    = 'MYCLINIC/' . $patient_count . '/' . date('dmY');
    return $patient_no;

}

function dateFormat($dateTime, $format = "d-m-Y")
{
    if ($dateTime == "0000-00-00" || $dateTime == "0000-00-00 00:00:00") {
        return " ";
    }
    $date = strtotime($dateTime);
    if (date('d-m-Y', $date) != '01-01-1970') {
        return date($format, $date);
    } else {
        return " ";
    }
}
function getCurrentDate($format = "Y-m-d H:i:s")
{
    return date($format);
}

function getNameTitles()
{
    return [
        'Shri' => 'Shri',
        'Smti' => 'Smti',
        'Prof.' => 'Prof.',
        'Dr.' => 'Dr.',
        'Md.' => 'Md.',
        'Mr.' => 'Mr.',
        'Mrs.' => 'Mrs.',
        'Miss' => 'Miss',
        'Mast' => 'Mast',
        'Syed' => 'Syed',
        'Syeda' => 'Syeda',
    ];
}
function getYear()
{
    $return_years = [];
    $start_year = date("Y");
    $extra_year = 6;
    for ($i = $start_year; $i <= date("Y") + $extra_year; $i++) {
        $return_years[$i] = $i;
    }
    return $return_years;
}

function getGenders()
{
    return [
        'Male' => 'Male',
        'Female' => 'Female',
        'transgender' => 'transgender',
    ];
}

function getBloodGroups()
{
    return [
        'A+' => 'A+',
        'A-' => 'A-',
        'B+' => 'B+',
        'B-' => 'B-',
        'AB+' => 'AB+',
        'AB-' => 'AB-',
        'O+' => 'O+',
        'O-' => 'O-',
    ];
}

function getEmployeeType()
{
    return [
        'Confirmed'    => 'Confirmed',
        'Probationary' => 'Probationary',
    ];
}
function responseJson($data)
{
    return response()->json($data);
}
function patientsNo()
{
    $patient_count = patient::count()+1;
    $patient_no    ='MYCLINIC/PAT/' . date('dmY') . '/' . $patient_count;
    return $patient_no;
}

