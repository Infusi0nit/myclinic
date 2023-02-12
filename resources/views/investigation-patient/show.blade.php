<html>
<head>
<style>
table {
  border-collapse: collapse;
}

table, td, th {
  border: 1px solid black;
}
</style>
</head>
<body>
<br><br><br><br><br><hr><br>
Name:&nbsp;&nbsp;<u>{{ $investigation->patient->full_name }}</u> &nbsp;&nbsp; Address:&nbsp;&nbsp;<u>{{$investigation->patient->address}},{{$investigation->patient->street_name}},{{$investigation->patient->locality??''}},{{$investigation->patient->pin??''  }}</u> &nbsp;&nbsp;Phone:<u>{{$investigation->patient->mobile_no}}</u><br>
<br><table border="1" cellpadding="10" align="center" width="80%">
    <thead>
        <tr>
            <th>Sl No.
            <th>Particulars</th>
            <th>Amount</th>


        </tr>
    </thead>
    <tbody>

        @foreach($investigation->investigation_details as $investigation_detail)
        <tr>
            <td></td>
            <td>{{$investigation_detail->medical_test->name}}</td>
            <td>{{$investigation_detail->medical_test->amount}}</td>
       </tr>
        @endforeach

    </tbody>
    <tfoot>
        <tr>
            <td colspan="2" align="center">Total</td>
            <td>{{ $investigation->total_amount}}</td>
        </tr>

    </tfoot>
</table>
</body>
</html>