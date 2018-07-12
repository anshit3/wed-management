@extends('layouts.login-sign-up')

@section('title')
    Sign-up/Login
@endsection

<body>
<div class="form">

    <ul class="tab-group">
        <li class="tab active"><a href="#signup">Sign Up</a></li>
        <li class="tab"><a href="#login">Log In</a></li>
    </ul>

    <div class="tab-content">
        <div id="signup">
            <a href="#"><h1>Roxfort Inc.</h1></a>
            @include('layouts.message')
            <form name="signup" action="{{ route('signup') }}" method="post">

                <div class="top-row">
                    <div class="field-wrap">
                        <label>
                            First Name<span class="req">*</span>
                        </label>
                        <input name="f_name" id="f_name" type="text" value="{{Request::old('f_name')}}" required/>
                    </div>

                    <div class="field-wrap">
                        <label>
                            Last Name<span class="req">*</span>
                        </label>
                        <input name="l_name" id="l_name" type="text" value="{{Request::old('l_name')}}" required/>
                    </div>
                </div>

                <div class="field-wrap">
                    <label>
                        Phone Number<span class="req">*</span>
                    </label>
                    <input name="phone" id="phone" type="text" value="{{Request::old('phone')}}" required/>
                </div>


                <div class="field-wrap">
                    <label>
                        Email<span class="req">*</span>
                    </label>
                    <input name="email" id="email" type="email" value="{{Request::old('email')}}" required/>
                </div>

                <div class="field-wrap">
                    <label>
                        Set A Password<span class="req">*</span>
                    </label>
                    <input name="password" id="password" type="password" required/>
                </div>

                <div class="field-wrap">
                    <label>
                        Confirm Password<span class="req">*</span>
                    </label>
                    <input type="password"required/>
                </div>

                <button type="submit" class="button button-block"/>Sign Up</button>
                <input type="hidden" name="_token" value="{{ Session::token() }}">
            </form>

        </div>

        <div id="login">
            <h1>Welcome Back!</h1>

            <form action="{{route('login')}}" method="post">

                <div class="field-wrap">
                    <label>
                        Email<span class="req">*</span>
                    </label>
                    <input name="email2" id="email" type="email" value="{{Request::old('email2')}}" required/>
                </div>

                <div class="field-wrap">
                    <label>
                        Password<span class="req">*</span>
                    </label>
                    <input name="password" id="password" type="password"required/>
                </div>
                <button class="button button-block"/>Log In</button>
                <input type="hidden" name="_token" value="{{ Session::token() }}">
            </form>

        </div>

    </div><!-- tab-content -->

</div> <!-- /form -->
<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>


</body>
</html>
