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
        </nav>
    </header>
    <section class="content"><br><br><br>
        <div class="row">
            <div class="col-lg-2"></div>
            <div class="col-lg-8">
                <section class="panel">
                    <header class="panel-heading">
                        My Clinic(Admin Login)
                    </header>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="panel-body">
                                <form role="form" action="{{route('login')}}" method="POST">
                                @csrf
                                    <div class="form-group">
                                        <label>User Id</label>
                                        <input type="text" class="form-control" name="username" placeholder="User Name">
                                    </div>
                                    <div class="form-group">
                                        <label>Password</label>
                                        <input type="password" class="form-control" name="password" placeholder="Password">
                                    </div>


                                    <button type="submit" class="btn btn-info">Submit</button>
                                </form>

                            </div>

                        </div>

                        <div class="col-lg-6">
                            <div class="panel-body">
                                <img src="{{asset('./uploads/logo/logo.jpeg')}}" style="height:250px;">


                            </div>
                        </div>
                    </div>

            </div>
    </section>
    </div>
    </div>
    @include('layouts.js')
    @yield('js')
</body>

</html>