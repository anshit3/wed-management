<header data-spy="affix" data-offset-top="39" data-offset-bottom="0" class="large">

    <div class="row container box">
        <div class="col-md-5">
            <!-- Logo start -->
            <div class="brand">
                <h1><a class="scroll-to" href="#top"><img class="img-responsive" src="img/logo.gif" alt="Roxfort Inc."></a></h1>
            </div>
            <!-- Logo end -->
        </div>

        <div class="col-md-7">
            <div class="pull-right">
                <div class="header-info pull-right">
                </div>
            </div>

            <div class="clearfix"></div>

            <!-- start navigation -->
            <nav class="navbar navbar-default" role="navigation">
                <div class="container-fluid">
                    <!-- Toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand scroll-to" href="#top"><img class="img-responsive"  src="img/logo.png" alt="Roxfort Inc."></a>
                    </div>
                    <!-- Collect the nav links, for toggling -->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <!-- Nav-Links start -->
                        <ul class="nav navbar-nav navbar-right">
                            <li class="active"><a href="#top" class="scroll-to">Home</a></li>
                            <li><a href="#vehicles" class="scroll-to">Plans</a></li>
                            <li><a href="#reviews" class="scroll-to">Reviews</a></li>
                            <li><a href="#information" class="scroll-to">About us</a></li>
                            <li><a href="#contact" class="scroll-to">Contact</a></li>
                            <li class="dropdown" >
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" >
                                    {{--@if (Auth::guest())
                                        <li><a href="{{ route('login') }}"><i class="fa fa-cog"></i>Login/Sign-up</a></li>
                                    @else--}}
                                    <img src="http://placehold.it/18x18" class="profile-image img-circle"> Profile <b class="caret"></b></a>
                                <ul class="dropdown-menu" >
                                    <li><a href="{{route('account')}}"><i class="fa fa-cog"></i>Account</a></li>
                                    <li class="divider"></li>
                                    <li><a href="{{route('orders')}}"><i class="fa fa-cog"></i> Orders</a></li>
                                    <li class="divider"></li>
                                    <li><a href="{{ route('logout') }}"><i class="fa fa-sign-out"></i>Log-out</a></li>
                                </ul>
                                    {{--@endif--}}
                            </li>
                        </ul>
                        <!-- Nav-Links end -->
                    </div>
                </div>
            </nav>
            <!-- end navigation -->
        </div>
    </div>

</header>