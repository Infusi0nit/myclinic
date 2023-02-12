@include('layouts.head')
@yield('css')

<body class="skin-black">


    <!-- header logo: style can be found in header.less -->
    <header class="header">
        <a href="" class="logo">
            My Clinic
        </a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" role="navigation">
            <!-- Sidebar toggle button-->
            <a href="#" class="navbar-btn sidebar-toggle" data-toggle="offcanvas" role="button">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </a>

            <div class="navbar-right">
                <ul class="nav navbar-nav">
                    <!-- Messages: style can be found in dropdown.less-->

                    <li class="dropdown tasks-menu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        @php echo date("d-M-Y,D h:m:s A") @endphp
                            <i class="fa fa-clock-o"></i>

                        </a>

                    </li>
                    <!-- User Account: style can be found in dropdown.less -->
                    <li class="dropdown user user-menu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="fa fa-user"></i>
                            <span>Admin <i class="caret"></i></span>
                        </a>
                        <ul class="dropdown-menu dropdown-custom dropdown-menu-right">

                            <li class="divider"></li>
                            <li>
                                <a href="{{route('logout')}}"><i class="fa fa-ban fa-fw pull-right"></i> Logout</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>
    </header>



    <div class="wrapper row-offcanvas row-offcanvas-left">
        <!-- Left side column. contains the logo and sidebar -->
        @include('layouts.leftsidebar')

        <aside class="right-side">


            <!-- Main content -->
            <section class="content">

            @include('layouts.includes.alert')
                @yield('content')


            </section><!-- /.content -->
            <div class="footer-main">
                Copyright &copy SK, 2019
            </div>
        </aside>

        <!-- /.right-side -->

    </div><!-- ./wrapper -->


    <!-- jQuery 2.0.2 -->
    @include('layouts.js')

    @yield('js')
</body>

</html>
