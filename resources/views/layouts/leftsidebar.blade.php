<aside class="left-side sidebar-offcanvas">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">

            <div class="pull-left info">
              
                
               <p>Hello, Admin</p>
            </div>
        </div>
        <!-- search form -->
      
        <!-- /.search form -->
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu">
            <li class="active">
                <a href="">
                    <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                </a>
            </li>
            <li class="active">
                <a href="{{ route('appointment.index') }}">
                    <i class="fa fa-plus-square"></i><span>Appointment</span>
                </a>
            </li>
            <li class="active">
                <a href="{{ route('patient.index') }}">
                    <i class="fa fa-user"></i><span>Patient</span>
                </a>
            </li>
            <li>
                <a href="{{ route('doctor.index') }}">
                    <i class="fa fa-user-md"></i> <span>Doctor</span>
                </a>
            </li>
            <li>
                <a href="{{ route('department.index') }}">
                    <i class="fa fa-gavel"></i> <span>Department</span>
                </a>
            </li>

            <li>
                <a href="{{ route('fee-head.index') }}">
                    <i class="fa fa-list"></i> <span>Fee Head</span>
                </a>
            </li>

            <li>
                <a href="{{ route('fee.index') }}">
                    <i class="fa fa-inr" aria-hidden="true"></i> <span>Fee</span>
                </a>
            </li>
            <li>
                <a href="{{ route('medical-test.index') }}">
                    <i class="fa fa-medkit" aria-hidden="true"></i> <span>Medical Test</span>
                </a>
            </li>
            <li>
                <a href="{{ route('investigationPatient.index') }}">
                    <i class="fa fa-h-square" aria-hidden="true"></i> <span>Investigation Against Patient</span>
                </a>
            </li>

        </ul>
    </section>
    <!-- /.sidebar -->
</aside>