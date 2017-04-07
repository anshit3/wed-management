@extends('layouts.pro_ord')

@section('title')
    Profile
@endsection
<body id="top" data-spy="scroll" data-target=".navbar" data-offset="260">

@include('layouts.header2')

<!-- Contact start -->
<section id="contact" class="container wow bounceInUp" data-wow-offset="50">
    <div class="row">
        <div class="col-md-12"></div>
        <div class="tab-pane" id="settings">
            <h2>Anshit Chaudhary</h2>
            @foreach ( $userorder  as  $order  )
            <h2>Order {{ ++$i }}</h2>

                <form class="form-horizontal">
                <div class="form-group">
                    <label for="inputEmail" class="col-sm-2 control-label">Event Name</label>

                    <div class="col-sm-10">
                        <p class="form-control">{{$order->eventtype}}</p>
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputEmail" class="col-sm-2 control-label">Start Date</label>
                    <div class="col-sm-10">
                        <p class="form-control">{{$order->start}}</p>
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputEmail" class="col-sm-2 control-label">End Date</label>
                    <div class="col-sm-10">
                        <p class="form-control">{{$order->end}}</p>
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputEmail" class="col-sm-2 control-label">City</label>
                    <div class="col-sm-10">
                        <p class="form-control">{{$order->eventcity}}</p>
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputEmail" class="col-sm-2 control-label">Location</label>

                    <div class="col-sm-10">
                        <p class="form-control">{{$order->eventlocation}}</p>
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputEmail" class="col-sm-2 control-label">Package</label>

                    <div class="col-sm-10">
                        <p class="form-control">{{$order->pack}}</p>
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputEmail" class="col-sm-2 control-label">Name</label>

                    <div class="col-sm-10">
                        <p class="form-control">{{$order->fname}} {{$order->lname}}</p>
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputEmail" class="col-sm-2 control-label">Age</label>

                    <div class="col-sm-10">
                        <p class="form-control">{{$order->eventtype}}</p>
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputEmail" class="col-sm-2 control-label">Contact Number</label>

                    <div class="col-sm-10">
                        <p class="form-control">{{$order->phone}}</p>
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputEmail" class="col-sm-2 control-label">E-mail</label>

                    <div class="col-sm-10">
                        <p class="form-control">{{$order->email}}</p>
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputEmail" class="col-sm-2 control-label">Address</label>

                    <div class="col-sm-10">
                        <p class="form-control">{{$order->address}}</p>
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputEmail" class="col-sm-2 control-label">City</label>

                    <div class="col-sm-10">
                        <p class="form-control">{{$order->city}}</p>
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputEmail" class="col-sm-2 control-label">Zipcode</label>

                    <div class="col-sm-10">
                        <p class="form-control">{{$order->zip}}</p>
                    </div>
                </div>
                @endforeach
        </div>
    </div>
                </form>
        </div>

    </div>
</section>
<!-- Contact end -->

<a href="#" class="scrollup">ScrollUp</a>


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