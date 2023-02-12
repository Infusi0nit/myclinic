<table width="100%">
    <tbody>
        <tr>
            <td align="left"><img style="max-width: 80;" src="{{asset('public/img/logo/logo.jpeg')}}">
            </td>
        </tr>
        <tr>
            <td>
                <h2>My Clinic</h2>
            <td>
            <td align="right">
                <h2>Consultant Details</h2>
            </td>
        </tr>
        <tr>
            <td>
                <h3>A Multispeciality Clinic</h3>
            <td>
            <td align="right">
                <h3>{{$appointment->doctor->fullname }}</h3>
            </td>
        </tr>
        <tr>
            <td>
                <h5>2nd Floor,Alakananda Sarma Heights,Hatigoan Main Road</h5>
            <td>
            <td align="right">
                <h3>{{$appointment->doctor->email }}</h3>
            </td>
            </td>
        </tr>

        </tr>
        <tr>
            <td>
                <h5>Phone:6901251999,6901258599,6901258699</h5>
                <td>
            <td align="right">
                <h3>{{$appointment->doctor->mobile_no }}</h3>
            </td>
            </td>
        </tr>


    </tbody>

</table>
<hr style="height:3px; border:none; color:rgb(0,0,0); background-color:rgb(0,0,0);">