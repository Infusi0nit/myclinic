<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/', 'Auth\LoginController@showLoginForm')->name('admin.login');
Route::post('/login','Auth\LoginController@login')->name('login');
Route::get('logout', 'Auth\LoginController@logout')->name('logout');
Route::get('/dashboard-next', ["uses" => "WebsiteController@root", "as" => "root"]);
Route::get('/dashboard', ["uses" => "DashboardController@index", "as" => "dasboard.index"]);
Route::group(['prefix' => 'department'], function () {
    Route::get('/', [
        'as'   => 'department.index',
        'uses' => 'Admin\DepartmentController@index',
    ]);
    Route::get('/create', [
        'as'   => 'department.create',
        'uses' => 'Admin\DepartmentController@create',
    ]);
    Route::post('/create', [
        'as'   => 'department.store',
        'uses' => 'Admin\DepartmentController@store',
    ]);
    Route::get('edit/{department}', [
        'as'   => 'department.edit',
        'uses' => 'Admin\DepartmentController@edit',
    ]);
    Route::post('edit/{department}', [
        'as'   => 'department.update',
        'uses' => 'Admin\DepartmentController@update',
    ]);
    Route::get('delete/{department}', [
        'as'   => 'department.delete',
        'uses' => 'Admin\DepartmentController@destroy',
    ]);
});
Route::group(['prefix' => 'medical-tests'], function () {
    Route::get('/', [
        'as'   => 'medical-test.index',
        'uses' => 'Admin\MedicalTestController@index',
    ]);
    Route::get('/create', [
        'as'   => 'medical-test.create',
        'uses' => 'Admin\MedicalTestController@create',
    ]);
    Route::post('/create', [
        'as'   => 'medical-test.store',
        'uses' => 'Admin\MedicalTestController@store',
    ]);
    Route::get('edit/{medical_test}', [
        'as'   => 'medical-test.edit',
        'uses' => 'Admin\MedicalTestController@edit',
    ]);
    Route::post('edit/{medical_test}', [
        'as'   => 'medical-test.update',
        'uses' => 'Admin\MedicalTestController@update',
    ]);
    Route::get('delete/{medical_test}', [
        'as'   => 'medical-test.delete',
        'uses' => 'Admin\MedicalTestController@destroy',
    ]);
});
Route::group(['prefix' => 'patient-test'], function () {
    Route::get('/', [
        'as'   => 'patient-test.index',
        'uses' => 'Admin\PatientTestController@index',
    ]);
    Route::get('/create', [
        'as'   => 'patient-test.create',
        'uses' => 'Admin\PatientTestController@create',
    ]);
    Route::post('/create', [
        'as'   => 'patient-test.store',
        'uses' => 'Admin\PatientTestController@store',
    ]);
    Route::get('edit/{patient_test}', [
        'as'   => 'patient-test.edit',
        'uses' => 'Admin\PatientTestController@edit',
    ]);
    Route::post('edit/{patient_test}', [
        'as'   => 'patient-test.update',
        'uses' => 'Admin\PatientTestController@update',
    ]);
    Route::get('delete/{patient_test}', [
        'as'   => 'patient-test.delete',
        'uses' => 'Admin\PatientTestController@destroy',
    ]);
});
Route::group(['prefix' => 'doctor'], function () {
    Route::get('/', [
        'as'   => 'doctor.index',
        'uses' => 'Admin\DoctorController@index',
    ]);
    Route::get('/create', [
        'as'   => 'doctor.create',
        'uses' => 'Admin\DoctorController@create',
    ]);
    Route::post('/create', [
        'as'   => 'doctor.store',
        'uses' => 'Admin\DoctorController@store',
    ]);
    Route::get('edit/{doctor}', [
        'as'   => 'doctor.edit',
        'uses' => 'Admin\DoctorController@edit',
    ]);
    Route::post('edit/{doctor}', [
        'as'   => 'doctor.update',
        'uses' => 'Admin\DoctorController@update',
    ]);
    Route::get('delete/{doctor}', [
        'as'   => 'doctor.delete',
        'uses' => 'Admin\DoctorController@destroy',
    ]);
});
Route::group(['prefix' => 'fee-head'], function () {
    Route::get('/', [
        'as'   => 'fee-head.index',
        'uses' => 'Admin\FeeHeadController@index',
    ]);
    Route::get('/create', [
        'as'   => 'fee-head.create',
        'uses' => 'Admin\FeeHeadController@create',
    ]);

    Route::post('/create', [
        'as'   => 'fee-head.store',
        'uses' => 'Admin\FeeHeadController@store',
    ]);
    Route::get('/edit/{fee_head}', [
        'as'   => 'fee-head.edit',
        'uses' => 'Admin\FeeHeadController@edit',
    ]);
    Route::put('/edit/{fee_head}', [
        'as'   => 'fee-head.update',
        'uses' => 'Admin\FeeHeadController@update',
    ]);
    Route::delete('/delete/{fee_head}', [
        'as'   => 'fee-head.delete',
        'uses' => 'Admin\FeeHeadController@destroy',
    ]);
});
Route::group(['prefix' => 'fee'], function () {
    Route::get('/', [
        'as'   => 'fee.index',
        'uses' => 'Admin\FeeController@index',
    ]);
    Route::get('/create', [
        'as'   => 'fee.create',
        'uses' => 'Admin\FeeController@create',
    ]);
    Route::post('/create', [
        'as'   => 'fee.store',
        'uses' => 'Admin\FeeController@store',
    ]);
    Route::get('/edit/{fee}', [
        'as'   => 'fee.edit',
        'uses' => 'Admin\FeeController@edit',
    ]);
    Route::put('/edit/{fee}', [
        'as'   => 'fee.update',
        'uses' => 'Admin\FeeController@update',
    ]);
    Route::delete('delete/{fee}', [
        'as'   => 'fee.delete',
        'uses' => 'Admin\FeeController@destroy',
    ]);

});
Route::group(['prefix' => 'appointment'], function () {
    Route::get('/', [
        'as'   => 'appointment.index',
        'uses' => 'Admin\AppointmentController@dashboard',
    ]);
    
    Route::get('/create/{patient}', [
        'as'   => 'appointment.create',
        'uses' => 'Admin\AppointmentController@create',
    ]);
    Route::get('/show/{appointment}', [
        'as'   => 'appointment.show',
        'uses' => 'Admin\AppointmentController@show',
    ]);
    Route::post('/create', [
        'as'   => 'appointment.store',
        'uses' => 'Admin\AppointmentController@store',
    ]);
    Route::get('/edit/{appointment}', [
        'as'   => 'appointment.edit',
        'uses' => 'Admin\AppointmentController@edit',
    ]);
    Route::post('/edit/{appointment}', [
        'as'   => 'appointment.update',
        'uses' => 'Admin\AppointmentController@update',
    ]);
    Route::get('/pdf/{patient}/{appointment}', [
        'as'   => 'appointment.showpdf',
        'uses' => 'Admin\AppointmentController@showpdf',
    ]);
    Route::get('delete/{appointment}', [
        'as'   => 'appointment.delete',
        'uses' => 'Admin\AppointmentController@destroy',
    ]);

});
Route::group(['prefix' => 'patient'], function () {
    Route::get('/', [
        'as'   => 'patient.index',
        'uses' => 'Admin\PatientController@index',
    ]);
    Route::get('/registered', [
        'as'   => 'patient.registeredfind',
        'uses' => 'Admin\PatientController@find',
    ]);
    Route::get('/create', [
        'as'   => 'patient.create',
        'uses' => 'Admin\PatientController@create',
    ]);
    Route::post('/create', [
        'as'   => 'patient.store',
        'uses' => 'Admin\PatientController@store',
    ]);
    Route::post('/findPatient', [
        'as'   => 'patient.find',
        'uses' => 'Admin\PatientController@findPatient',
    ]);
    Route::get('/edit/{patient}', [
        'as'   => 'patient.edit',
        'uses' => 'Admin\PatientController@edit',
    ]);
    Route::post('/edit/{patient}', [
        'as'   => 'patient.update',
        'uses' => 'Admin\PatientController@update',
    ]);
    Route::get('show/{paient}', [
        'as' => 'patient.show',
        'uses' => 'Admin\PatientController@show',
    ]);
    Route::delete('delete/{patient}', [
        'as'   => 'patient.delete',
        'uses' => 'Admin\PatientController@destroy',
    ]);

});
Route::group(['prefix' => 'investigation-patient'], function () {
    Route::get('/', [
        'as'   => 'investigationPatient.index',
        'uses' => 'Admin\InvestigationPatientController@index',
    ]);
    Route::get('/create', [
        'as'   => 'investigationPatient.create',
        'uses' => 'Admin\InvestigationPatientController@create',
    ]);
    Route::post('/create', [
        'as'   => 'investigationPatient.store',
        'uses' => 'Admin\InvestigationPatientController@store',
    ]);
    Route::get('/edit/{investigation}', [
        'as'   => 'investigationPatient.edit',
        'uses' => 'Admin\InvestigationPatientController@edit',
    ]);
    Route::put('/edit/{investigation_patient}', [
        'as'   => 'investigationPatient.update',
        'uses' => 'Admin\InvestigationPatientController@update',
    ]);
    Route::get('show/{investigation_patient}', [
        'as' => 'investigationPatient.show',
        'uses' => 'Admin\InvestigationPatientController@show',
    ]);
    Route::delete('delete/{investigation_patient}', [
        'as'   => 'investigationPatient.delete',
        'uses' => 'Admin\InvestigationPatientController@destroy',
    ]);
    Route::get('/pdf/{investigation}', [
        'as'   => 'investigationPatient.pdf',
        'uses' => 'Admin\InvestigationPatientController@investigationPdf',
    ]);
    Route::get('/getmedicaltestamount', ['as' => 'getmedicaltestamount', 'uses' => 'Admin\InvestigationPatientController@getmedicaltestamount']);

});
Route::group(['prefix' => 'api'], function () {
    Route::get('/getdoctorbydepartment', [
        'as'   => 'getdoctorbydeparment',
        'uses' => 'Admin\ApiController@getDoctorByDepartment',
    ]);
    Route::get('/getfeeamount', [
        'as'   => 'getfeeamount',
        'uses' => 'Admin\ApiController@getFeeAmountByFeeHead',
    ]);
});
