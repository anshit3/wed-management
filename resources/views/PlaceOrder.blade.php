@extends('layouts.pro_ord')

@section('title')
    Order
@endsection

@include('layouts.header2')

<body id="top" data-spy="scroll" data-target=".navbar" data-offset="260">

<!-- Contact start -->
<section id="contact" class="container wow bounceInUp" data-wow-offset="50">
    <div class="row">
        @include('layouts.message')
        <div class="tab-pane" id="settings">
            <form action="{{route('orderplaced')}}" method="post" class="form-horizontal">
                <div class="form-group">

                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">Event Name</label>

                    <div class="styled-select-car">
                        <select name="eventtype">
                            <option value="">Select your event type</option>
                            <option >Wedding Ceremony</option>
                            <option >Reception Ceremony</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">Start Date</label>

                    <div class="col-sm-10">
                        <input type="date" class="form-control" name="start" id="start">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">End Date</label>

                    <div class="col-sm-10">
                        <input type="date" class="form-control" name="end" id="start">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">City</label>

                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="eventcity" id="start">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">Location</label>

                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="eventlocation" id="start">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">Package</label>

                    <div class="styled-select-car">
                        <select name="pack" id="car-select2">
                            <option value="">Select your event type</option>
                            <option >Bronze Pack</option>
                            <option >Silver Pack</option>
                            <option >Golden Pack</option>
                            <option >Platinum Pack</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputphone" class="col-sm-2 control-label">First Name</label>

                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="firstname">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputphone" class="col-sm-2 control-label">Last Name</label>

                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="lastname">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputphone" class="col-sm-2 control-label">Age</label>

                    <div class="col-sm-10">
                        <input type="number" class="form-control" name="age">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputphone" class="col-sm-2 control-label">Contact Number</label>

                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="phonenumber" placeholder="10-digit Mobile Number">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputphone" class="col-sm-2 control-label">E-mail</label>

                    <div class="col-sm-10">
                        <input type="email" class="form-control" name="email">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputaddress" class="col-sm-2 control-label">Address</label>

                    <div class="col-sm-10">
                        <textarea class="form-control" name="address" placeholder="Address"></textarea>
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputphone" class="col-sm-2 control-label">City</label>

                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="city">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputphone" class="col-sm-2 control-label">Zipcode</label>

                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="zipcode">
                    </div>
                </div>
        </div>
        <button type="submit" class="btn submit-message">Place Order</button>
        <input type="hidden" name="_token" value="{{ Session::token() }}">
    </div>
    </form>
    </div>
</section>
<!-- Contact end -->

<!-- Footer start -->
<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <div class="clearfix"></div>
                <p class="copyright">©2017 Roxfort Inc., All Rights Reserved</p>
            </div>
        </div>
    </div>
</footer>
<!-- Footer end -->

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery-1.11.0.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->

<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.autocomplete.min.js"></script>
<script src="js/jquery.placeholder.js"></script>
<script src="js/locations-autocomplete.js"></script>
<script src="js/bootstrap-datepicker.js"></script>
<script src="http://maps.google.com/maps/api/js?sensor=false&amp;language=en"></script>
<script src="js/gmap3.min.js"></script>


<!--[if !(gte IE 8)]><!-->
<script src="js/wow.min.js"></script>
<script>
    // Initialize WOW
    //-------------------------------------------------------------
    new WOW({mobile: false}).init();
</script>
<!--<![endif]-->

<script src="js/custom.js"></script>



</body>
</html>