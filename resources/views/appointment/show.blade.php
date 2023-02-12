<br><br><br><br><br><br><br><table align="left">
    <tr align="left">
        <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Patients No: {{ $patient->patients_no }}<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Patient Name:{{ $patient->full_name }}<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Mobile No:{{ $patient->mobile_no }}<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Email:{{ $patient->email }}<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Age:{{ $patient->age }}<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Address:{{ $patient->address}},{{ $patient->street_name}},{{ $patient->pin}}</td>
    </tr>
   
</table>
<table align="right">
    <tr align="left">
        <td> Consultant Name:Dr.{{$appointment->doctor->first_name??'' }} {{ $appointment->doctor->middle_name??'' }} {{ $appointment->doctor->last_name??'' }}</td>
    </tr>
   
</table>