@extends('layouts.master')

@section('title')
    Roxfort Inc.
@endsection

<body id="top" data-spy="scroll" data-target=".navbar" data-offset="260">

@include('layouts.header')

<!-- Teaser start -->
<section id="teaser">
    <div class="container">
        <div class="row">
            <div class="col-md-7 col-xs-12 pull-right">
                <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                    <!-- Wrapper for slides start -->
                    <div class="carousel-inner">
                        <div class="item active">
                            <h1 class="title">Candid Moments
                                <span class="subtitle">Moments that are worth capturing</span></h1>
                            <div class="car-img">
                                <img src="img/sunnysweety_3.jpg" class="img-responsive" alt="car1">
                            </div>
                        </div>
                        <div class="item">
                            <h1 class="title">Smile is what we care for
                                <span class="subtitle">It's not about smiling for the camera, it's about smiling because you've found a soulmate.</span></h1>
                            <div class="car-img">
                                <img src="img/sunnysweety_4.jpg" class="img-responsive" alt="car1">
                            </div>
                        </div>

                        <div class="item">
                            <h1 class="title">Moments to cherish
                                <span class="subtitle">Joined together in friendship, united together in love.</span></h1>
                            <div class="car-img">
                                <img src="img/sunnysweety_5.jpg" class="img-responsive" alt="car1">
                            </div>
                        </div>

                        <div class="item">
                            <h1 class="title">
                                <span class="subtitle"></span></h1>
                            <div class="car-img">
                                <img src="img/shukla_1.jpg" class="img-responsive" alt="car1">
                            </div>
                        </div>

                        <div class="item">
                            <h1 class="title">together forever!
                                <span class="subtitle"></span></h1>
                            <div class="car-img">
                                <img src="img/shukla_2.jpg" class="img-responsive" alt="car1">
                            </div>
                        </div>

                    </div>
                    <!-- Wrapper for slides end -->

                    <!-- Slider Controls start -->
                    <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left"></span>
                    </a>
                    <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right"></span>
                    </a>
                    <!-- Slider Controls end -->
                </div>
            </div>
            <div class="col-md-5 col-xs-12 pull-left">
                <div class="reservation-form-shadow">

                    @if(Session::has('message'))
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="col-md-3 col-md-offset-3 success" style="text-align: center">
                                    {{Session::get('message')}}
                                </div>
                            </div>
                        </div>
                    @endif

                    <form action="{{route('placeorder')}}" method="post">
                        <button type="submit" class="submit" name="submit">Place Order</button>
                        <input type="hidden" name="_token" value="{{ Session::token() }}">
                    </form>

                </div>
            </div>

        </div>
    </div>
</section>
<div class="arrow-down"></div>
<!-- Teaser end -->

<!-- Vehicles start -->
<section id="vehicles" class="container">
    <div class="row">
        <div class="col-md-12">
            <h2 class="title wow fadeInDown" data-wow-offset="200">Wedding Photogaphy - <span class="subtitle">Our plans at a glance</span></h2>
        </div>

        <!-- Vehicle nav start -->
        <div class="col-md-3 vehicle-nav-row wow fadeInUp" data-wow-offset="100">
            <div id="vehicle-nav-container">
                <ul class="vehicle-nav">
                    <li class="active"><a href="#vehicle-1">Photography - Bronze Pack</a><span class="active">&nbsp;</span></li>
                    <li><a href="#vehicle-2">Photography - Silver Pack</a><span class="active">&nbsp;</span></li>
                    <li><a href="#vehicle-3">Photography - Gold Pack</a><span class="active">&nbsp;</span></li>
                    <li><a href="#vehicle-4">Photography - Platinum Pack</a><span class="active">&nbsp;</span></li>

                </ul>
            </div>

            <!-- <div class="vehicle-nav-control">
                <a class="vehicle-nav-scroll" data-direction="up" href="#"><i class="fa fa-chevron-up"></i></a>
                <a class="vehicle-nav-scroll" data-direction="down" href="#"><i class="fa fa-chevron-down"></i></a>
            </div> -->

        </div>
        <!-- Vehicle nav end -->

        <!-- Vehicle 1 data start -->
        <div class="vehicle-data" id="vehicle-1">
            <div class="col-md-6 wow fadeIn" data-wow-offset="100">
                <div class="vehicle-img">
                    <img class="img-responsive" src="img/ambast_1.jpg" alt="Vehicle">
                </div>
            </div>
            <div class="col-md-3 wow fadeInUp" data-wow-offset="200">
                <div class="vehicle-price">INR 44,999.00 <span class="info">per event</span></div>
                <table class="table vehicle-features">
                    <tr>
                        <td>Photogapher</td>
                        <td>1</td>
                    </tr>
                    <tr>
                        <td>Videographer</td>
                        <td>1</td>
                    </tr>
                    <tr>
                        <td>Short Event</td>
                        <td>1</td>
                    </tr>
                    <tr>
                        <td>long Event</td>
                        <td>1</td>
                    </tr>
                    <tr>
                        <td>Printed Album</td>
                        <td>1 (50 pages, Glossy)</td>
                    </tr>
                    <tr>
                        <td>Video DVD</td>
                        <td>Yes</td>
                    </tr>
                    <tr>
                        <td>Event Length</td>
                        <td>Upto 2 days</td>
                    </tr>
                </table>

            </div>
        </div>
        <!-- Vehicle 1 data end -->

        <!-- Vehicle 2 data start -->
        <div class="vehicle-data" id="vehicle-2">
            <div class="col-md-6" data-wow-offset="200">
                <div class="vehicle-img">
                    <img class="img-responsive" src="img/shukla_4.jpg" alt="Vehicle">
                </div>
            </div>
            <div class="col-md-3" data-wow-offset="200">
                <div class="vehicle-price">INR 66,500.00 <span class="info">per event</span></div>
                <table class="table vehicle-features">
                    <tr>
                        <td>Photogapher</td>
                        <td>1</td>
                    </tr>
                    <tr>
                        <td>Videographer</td>
                        <td>1</td>
                    </tr>
                    <tr>
                        <td>Short Event</td>
                        <td>2</td>
                    </tr>
                    <tr>
                        <td>long Event</td>
                        <td>1</td>
                    </tr>
                    <tr>
                        <td>Printed Album</td>
                        <td>1 (50 pages, Glossy)</td>
                    </tr>
                    <tr>
                        <td>Online Album</td>
                        <td>1 year</td>
                    </tr>
                    <tr>
                        <td>Video DVD</td>
                        <td>Yes</td>
                    </tr>
                    <tr>
                        <td>Studio Lights</td>
                        <td>1 event</td>
                    </tr>
                    <tr>
                        <td>Framed Photo</td>
                        <td>2</td>
                    </tr>
                    <tr>
                        <td>Event Length</td>
                        <td>Upto 3 days</td>
                </table>

            </div>
        </div>
        <!-- Vehicle 2 data end -->

        <!-- Vehicle 3 data start -->
        <div class="vehicle-data" id="vehicle-3">
            <div class="col-md-6" data-wow-offset="200">
                <div class="vehicle-img">
                    <img class="img-responsive" src="img/ambast_1.jpg" alt="Vehicle">
                </div>
            </div>
            <div class="col-md-3" data-wow-offset="200">
                <div class="vehicle-price">INR 1,09,999.00 <span class="info"></span></div>
                <table class="table vehicle-features">
                    <tr>
                        <td>Photogapher</td>
                        <td>2</td>
                    </tr>
                    <tr>
                        <td>Videographer</td>
                        <td>2</td>
                    </tr>
                    <tr>
                        <td>Short Event</td>
                        <td>3</td>
                    </tr>
                    <tr>
                        <td>long Event</td>
                        <td>1</td>
                    </tr>
                    <tr>
                        <td>Printed Album</td>
                        <td>2 (50 pages, Silk Matte)</td>
                    </tr>
                    <tr>
                        <td>Website + Online Album</td>
                        <td>3 year</td>
                    </tr>
                    <tr>
                        <td>Video DVD</td>
                        <td>Yes</td>
                    </tr>

                    <tr>
                        <td>Framed Photo</td>
                        <td>4</td>
                    </tr>
                    <tr>
                        <td>Studio Lights</td>
                        <td>1 event</td>
                    </tr>
                    <tr>
                        <td>SMS Alert</td>
                        <td>500 guest</td>
                    </tr>
                    <tr>
                        <td>JIB Crane</td>
                        <td>1</td>
                    </tr>
                    <tr>
                        <td>Plasma Screen</td>
                        <td>2</td>
                    </tr>
                    <tr>
                        <td>Handmade Sketch</td>
                        <td>2</td>
                    </tr>
                    <tr>
                        <td>Event Length</td>
                        <td>Upto 4 days</td>
                    </tr>
                </table>

            </div>
        </div>
        <!-- Vehicle 3 data end -->

        <!-- Vehicle 4 data start -->
        <div class="vehicle-data" id="vehicle-4">
            <div class="col-md-6" data-wow-offset="200">
                <div class="vehicle-img">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/SSlI5kbYaGY" frameborder="0" allowfullscreen></iframe>
                </div>
            </div>
            <div class="col-md-3" data-wow-offset="200">
                <div class="vehicle-price">INR 1,85,999.00<span class="info"></span></div>
                <table class="table vehicle-features">
                    <tr>
                        <td>Photogapher</td>
                        <td>2</td>
                    </tr>
                    <tr>
                        <td>Videographer</td>
                        <td>2</td>
                    </tr>
                    <tr>
                        <td>Short Event</td>
                        <td>3</td>
                    </tr>
                    <tr>
                        <td>long Event</td>
                        <td>1</td>
                    </tr>
                    <tr>
                        <td>Printed Album</td>
                        <td>2 (50 pages, Silk Matte)</td>
                    </tr>
                    <tr>
                        <td>Website + Online Album</td>
                        <td>3 year</td>
                    </tr>
                    <tr>
                        <td>Video DVD</td>
                        <td>Yes</td>
                    </tr>

                    <tr>
                        <td>Framed Photo</td>
                        <td>6</td>
                    </tr>
                    <tr>
                        <td>Studio Lights</td>
                        <td>1 event</td>
                    </tr>
                    <tr>
                        <td>SMS Alert</td>
                        <td>500 guest</td>
                    </tr>
                    <tr>
                        <td>JIB Crane</td>
                        <td>1</td>
                    </tr>
                    <tr>
                        <td>Plasma Screen</td>
                        <td>4</td>
                    </tr>
                    <tr>
                        <td>Handmade Sketch</td>
                        <td>2</td>
                    </tr>
                    <tr>
                        <td>Director's Cut</td>
                        <td>1</td>
                    </tr>
                    <tr>
                        <td>Event Length</td>
                        <td>Upto 4 days</td>
                    </tr>
                </table>

            </div>
        </div>
        <!-- Vehicle 4 data end -->

        <!-- Vehicle 5 data start -->
        <div class="vehicle-data" id="vehicle-5">
            <div class="col-md-6" data-wow-offset="200">
                <div class="vehicle-img">
                    <img class="img-responsive" src="img/sagar_3.jpg" alt="Vehicle">
                </div>
            </div>
            <div class="col-md-3" data-wow-offset="200">
                <div class="vehicle-price">INR 9,000.00 <span class="info"></span></div>
                <table class="table vehicle-features">
                    <tr>
                        <td>Photogapher</td>
                        <td>1</td>
                    </tr>
                    <tr>
                        <td>Videographer</td>
                        <td>1</td>
                    </tr>
                    <tr>
                        <td>Photogaphy Camera</td>
                        <td>Nikon D90</td>
                    </tr>
                    <tr>
                        <td>Videography Camera</td>
                        <td>Sony HXR-NX100</td>
                    </tr>
                    <tr>
                        <td>Event Type</td>
                        <td>Short</td>
                    </tr>
                    <tr>
                        <td>Duration</td>
                        <td>4-5 Hours</td>
                    </tr>
                    <tr>
                        <td>Video DVD</td>
                        <td>NO</td>
                    </tr>
                    <tr>
                        <td>Event Length</td>
                        <td>Upto 5 Hours</td>
                    </tr>
                </table>

            </div>
        </div>
        <!-- Vehicle 5 data end -->

        <!-- Vehicle 6 data start -->
        <div class="vehicle-data" id="vehicle-6">
            <div class="col-md-6" data-wow-offset="200">
                <div class="vehicle-img">
                    <img class="img-responsive" src="img/sagar_3.jpg" alt="Vehicle">
                </div>
            </div>
            <div class="col-md-3" data-wow-offset="200">
                <div class="vehicle-price">INR 18,000.00 <span class="info"></span></div>
                <table class="table vehicle-features">
                    <tr>
                        <td>Photogapher</td>
                        <td>1</td>
                    </tr>
                    <tr>
                        <td>Videographer</td>
                        <td>1</td>
                    </tr>
                    <tr>
                        <td>Photogaphy Camera</td>
                        <td>Nikon D90</td>
                    </tr>
                    <tr>
                        <td>Videography Camera</td>
                        <td>Sony HXR-NX100</td>
                    </tr>
                    <tr>
                        <td>Event Type</td>
                        <td>Long</td>
                    </tr>
                    <tr>
                        <td>Duration</td>
                        <td>10-12 Hours</td>
                    </tr>
                    <tr>
                        <td>Video DVD</td>
                        <td>NO</td>
                    </tr>
                    <tr>
                        <td>Event Length</td>
                        <td>Upto 12 Hours</td>
                    </tr>
                </table>

            </div>
        </div>
        <!-- Vehicle 6 data end -->

        <!-- Vehicle 7 data start -->
        <div class="vehicle-data" id="vehicle-7">
            <div class="col-md-6" data-wow-offset="200">
                <div class="vehicle-img">
                    <img class="img-responsive" src="img/vehicle2.jpg" alt="Vehicle">
                </div>
            </div>
            <div class="col-md-3" data-wow-offset="200">
                <div class="vehicle-price">INR 7000.00 <span class="info"></span></div>
                <table class="table vehicle-features">
                    <tr>
                        <td>Validity</td>
                        <td>1</td>
                    </tr>
                    <tr>
                        <td>No, of photos</td>
                        <td>300</td>
                    </tr>
                    <tr>
                        <td>Domain name</td>
                        <td>As you like it</td>
                    </tr>
                    <tr>
                        <td>Accessibility</td>
                        <td>Any device</td>
                    </tr>
                    <tr>
                        <td>Requirement</td>
                        <td>Browser</td>
                    </tr>

                </table>

            </div>
        </div>
        <!-- Vehicle 7 data end -->

        <!-- Vehicle 8 data start -->
        <div class="vehicle-data" id="vehicle-8">
            <div class="col-md-6" data-wow-offset="200">
                <div class="vehicle-img">
                    <img class="img-responsive" src="img/vehicle3.jpg" alt="Vehicle">
                </div>
            </div>
            <div class="col-md-3" data-wow-offset="200">
                <div class="vehicle-price">INR 17,500.00 <span class="info">starting from</span></div>
                <table class="table vehicle-features">
                    <tr>
                        <td>Pages</td>
                        <td>50</td>
                    </tr>
                    <tr>
                        <td>Photos</td>
                        <td>300</td>
                    </tr>
                    <tr>
                        <td>Materials</td>
                        <td>16</td>
                    </tr>
                    <tr>
                        <td>Protective cover</td>
                        <td>Yes</td>
                    </tr>

                    </tr>
                </table>

            </div>
        </div>
        <!-- Vehicle 8 data end -->

        <!-- Vehicle 9 data start -->
        <div class="vehicle-data" id="vehicle-9">
            <div class="col-md-6" data-wow-offset="200">
                <div class="vehicle-img">
                    <img class="img-responsive" src="img/vehicle4.jpg" alt="Vehicle">
                </div>
            </div>
            <div class="col-md-3" data-wow-offset="200">
                <div class="vehicle-price">INR 15,000.00<span class="info"></span></div>
                <table class="table vehicle-features">
                    <tr>
                        <td>Validity</td>
                        <td>3</td>
                    </tr>
                    <tr>
                        <td>Detailed profile</td>
                        <td>Yes</td>
                    </tr>
                    <tr>
                        <td>Families</td>
                        <td>Bride/Groom</td>
                    </tr>
                    <tr>
                        <td>Custom domain</td>
                        <td>Yes</td>
                    </tr>

                </table>

            </div>
        </div>
        <!-- Vehicle 9 data end -->

        <!-- Vehicle 10 data start -->
        <div class="vehicle-data" id="vehicle-10">
            <div class="col-md-6" data-wow-offset="200">
                <div class="vehicle-img">
                    <img class="img-responsive" src="img/vehicle5.jpg" alt="Vehicle">
                </div>
            </div>
            <div class="col-md-3" data-wow-offset="200">
                <div class="vehicle-price">INR 500.00<span class="info"></span></div>
                <table class="table vehicle-features">
                    <tr>
                        <td>Size</td>
                        <td>10*12</td>
                    </tr>
                    <tr>
                        <td>Frame material</td>
                        <td>Plastic</td>
                    </tr>
                    <tr>
                        <td>Design</td>
                        <td>As you like it</td>
                    </tr>

                </table>

            </div>
        </div>
        <!-- Vehicle 10 data end -->

        <!-- Vehicle 11 data start -->
        <div class="vehicle-data" id="vehicle-11">
            <div class="col-md-6" data-wow-offset="200">
                <div class="vehicle-img">
                    <img class="img-responsive" src="img/studio_lights.jpg" alt="Vehicle">
                </div>
            </div>
            <div class="col-md-3" data-wow-offset="200">
                <div class="vehicle-price">INR 5000.00 <span class="info"></span></div>
                <table class="table vehicle-features">
                    <tr>
                        <td>Brand</td>
                        <td>elinchrom</td>
                    </tr>
                    <tr>
                        <td>Model</td>
                        <td>KIT D-LITE fX 4/4</td>
                    </tr>
                    <tr>
                        <td>Number</td>
                        <td>As per requirement</td>
                    </tr>

                </table>

            </div>
        </div>

        <!-- Vehicle 12 data start -->
        <div class="vehicle-data" id="vehicle-12">
            <div class="col-md-6" data-wow-offset="200">
                <div class="vehicle-img">
                    <img class="img-responsive" src="img/vehicle5.jpg" alt="Vehicle">
                </div>
            </div>
            <div class="col-md-3" data-wow-offset="200">
                <div class="vehicle-price">INR 3,500.00<span class="info"></span></div>
                <table class="table vehicle-features">
                    <tr>
                        <td>Number of messages</td>
                        <td>As per the guest list</td>
                    </tr>
                    <tr>
                        <td>Time of delivery</td>
                        <td>Before chosen events</td>
                    </tr>

                </table>

            </div>
        </div>
        <!-- Vehicle 12 data end -->

        <!-- Vehicle 13 data start -->
        <div class="vehicle-data" id="vehicle-13">
            <div class="col-md-6" data-wow-offset="200">
                <div class="vehicle-img">
                    <img class="img-responsive" src="img/jib_crane.jpg" alt="Vehicle">
                </div>
            </div>
            <div class="col-md-3" data-wow-offset="200">
                <div class="vehicle-price">INR 17,000.00<span class="info"></span></div>
                <table class="table vehicle-features">
                    <tr>
                        <td>Size</td>
                        <td>40 feet</td>
                    </tr>
                    <tr>
                        <td>Frame material</td>
                        <td>Plastic</td>
                    </tr>
                    <tr>
                        <td>plasma Screens</td>
                        <td>2</td>
                    </tr>

                </table>

            </div>
        </div>
        <!-- Vehicle 13 data end -->

        <!-- Vehicle 14 data start -->
        <div class="vehicle-data" id="vehicle-14">
            <div class="col-md-6" data-wow-offset="200">
                <div class="vehicle-img">
                    <img class="img-responsive" src="img/vehicle5.jpg" alt="Vehicle">
                </div>
            </div>
            <div class="col-md-3" data-wow-offset="200">
                <div class="vehicle-price">INR 8,000.00<span class="info"></span></div>
                <table class="table vehicle-features">
                    <tr>
                        <td>Size</td>
                        <td>10*12</td>
                    </tr>
                    <tr>
                        <td>Sketching material</td>
                        <td>Pencil/Charcoal</td>
                    </tr>
                    <tr>
                        <td>Frame material</td>
                        <td>Wodden</td>
                    </tr>

                </table>

            </div>
        </div>
        <!-- Vehicle 14 data end -->

        <!-- Vehicle 15 data start -->
        <div class="vehicle-data" id="vehicle-15">
            <div class="col-md-6" data-wow-offset="200">
                <div class="vehicle-img">
                    <img class="img-responsive" src="img/vehicle5.jpg" alt="Vehicle">
                </div>
            </div>
            <div class="col-md-3" data-wow-offset="200">
                <div class="vehicle-price">INR 60,000.00<span class="info"></span></div>
                <table class="table vehicle-features">
                    <tr>
                        <td>Type</td>
                        <td>Wedding Movie</td>
                    </tr>
                    <tr>
                        <td>Pre Shoot</td>
                        <td>Yes</td>
                    </tr>
                    <tr>
                        <td>Post shoot</td>
                        <td>Yes</td>
                    </tr>
                    <tr>
                        <td>Coverage</td>
                        <td>All events</td>
                    </tr>
                    <tr>
                        <td>Duration</td>
                        <td>Upto 3 Hours</td>
                    </tr>

                </table>
            </div>
        </div>
        <!-- Vehicle 11 data end -->

    </div>
</section>
<!-- Vehicles end -->

<!-- Reviews start -->
<section id="reviews" class="container wow fadeInUp">
    <div class="row text-center">
        <div class="col-md-12 stars">
            <span class="glyphicon glyphicon-star"></span>
            <span class="glyphicon glyphicon-star"></span>
            <span class="glyphicon glyphicon-star big"></span>
            <span class="glyphicon glyphicon-star"></span>
            <span class="glyphicon glyphicon-star"></span>
        </div>
        <div class="col-md-10 col-md-offset-1">
            <div id="reviews-carousel" class="carousel slide carousel-fade" data-ride="carousel">
                <div class="carousel-inner">

                    <!-- Review item 1 start -->
                    <div class="item active">
                        <div class="review">
                            It is a positive experience hiring Roxfort Inc.|Events for our wedding. The staff is very professional and efficient and always smiling. And I always feel welcome and appreciated. The management is always prompt to solve any issue at any moment. Their efficiency and professionalism makes it my number one choice.
                        </div>
                        <div class="author">
                            – Sagar Selar, Pune
                        </div>
                    </div>
                    <!-- Review item 1 end -->


                    <!-- Review item 3 start -->
                    <div class="item">
                        <div class="review">
                            This was my first time booking from Roxfort Inc.|Events. And over all it was a wonderful experience I have no complaints. The service rep help me find the best package to suit my needs. I also love the fact that you guys provide luxury package at a great price. I will definitely book with this company again.
                        </div>
                        <div class="author">
                            – Naman Singh Bisht, Lucknow
                        </div>
                    </div>
                    <!-- Review item 3 end -->

                </div>

                <!-- Review Nav start -->
                <ol class="carousel-indicators">
                    <li data-target="#reviews-carousel" data-slide-to="0" class="active"></li>
                    <li data-target="#reviews-carousel" data-slide-to="1"></li>
                    <li data-target="#reviews-carousel" data-slide-to="2"></li>
                </ol>
                <!-- Review Nav end -->

            </div>
        </div>
    </div>
</section>
<!-- Reviews end -->


<!-- Information start -->
<section id="information" class="container">

    <!-- Single photo start -->
    <div class="row wow fadeInLeft" data-wow-offset="100">
        <div class="col-md-6 col-xs-12 pull-right">
            <img src="img/sagar_2.jpg" alt="Info Img" class="img-responsive">
        </div>
        <div class="col-md-6 pull-left">
            <h2 class="title">Quality Guaranteed</h2>
            <h3 class="subtitle">We deliver memories beyond expectation!</h3>
            <p>Roxfort Inc.|Events. is a dynamic team of talented individuls offerings a variety of creative services in the field of Event media & networking.</span> Be it sending invitation to your long guest list, capturing events, or turning it into an indestructible souvenir for a lifetime, we do it all. Based in Lucknow and now in Pune & NCR, possessing years of experience and skill we strive for providing  you best services of the higest consistency & quality, catering all your needs.</p>
            <a href="#vehicles" class="btn">Our Plans</a>
            <a href="#top" class="btn btn-gray">Book Now</a> <!-- <span class="my-tooltip" data-toggle="tooltip" title="" data-original-title=""> -->
        </div>
    </div>
    <!-- Single photo end -->

    <!-- Video start -->
    <div class="row wow fadeInRight" data-wow-offset="50">
        <div class="col-md-6">
            <div class="video">
                <!-- Youtube iframe start -->
                <iframe width="420" height="315" src="//www.youtube.com/embed/SSlI5kbYaGY?rel=0&autoplay=0" allowfullscreen></iframe>
                <!-- Youtube iframe end -->
            </div>
        </div>
        <div class="col-md-6">
            <h2 class="title">Watch our custom made video</h2>
            <h3 class="subtitle">Be a part of your own movie!</h3>
            <!-- p>Here is some dummy text. Lorem ipsum dolor sit amet, <span class="label label-default">This is an labeled text snippet!</span>, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Unde, vero voluptas delectus explicabo maxime ad qui incidunt! no sea takimata sanctus est Lorem ipsum dolor sit amet.</p> -->
        </div>
    </div>
    <!-- Video end -->

</section>
<!-- Information end -->

<!-- Contact start -->
<section id="contact" class="container wow bounceInUp" data-wow-offset="50">
    <div class="row">
        <div class="col-md-12">
            <h2>Contact Us</h2>
        </div>
        <div class="col-md-4 col-xs-12 pull-right">
            <h4 class="contact-box-title">Marketing Manager - Lucknow</h4>
            <div class="contact-box">
                <img src="img/sajid.jpg" alt="contact-img">
                <div class="contact-box-name">Sajid Hussain</div>
                <div class="contact-box-phon"><span class="highlight">Phone:</span> 9454849769</div>
                <div class="contact-box-email"><span class="highlight">Email:</span> sajid@roxfort.in</div>
                <div class="clearfix"></div>
            </div>
            <div class="contact-box-border">&nbsp;</div>

            <h4 class="contact-box-title">Regional Manager - NCR</h4>
            <div class="contact-box">
                <img src="img/utkarsh.jpg" alt="contact-img">
                <div class="contact-box-name">Utkarsh Singh</div>
                <div class="contact-box-phon"><span class="highlight">Phone:</span> 9996902823</div>
                <div class="contact-box-email"><span class="highlight">Email:</span> utkarsh@roxfort.in</div>
                <div class="clearfix"></div>
            </div>
            <div class="contact-box-border">&nbsp;</div>

            <div class="contact-box-divider">&nbsp;</div>

            <h4 class="contact-box-title">Marketing Manager - Pune</h4>
            <div class="contact-box">
                <img src="img/anshit.jpg" alt="contact-img">
                <div class="contact-box-name">Anshit Chaudhary</div>
                <div class="contact-box-phon"><span class="highlight">Phone:</span> 9623323069</div>
                <div class="contact-box-email"><span class="highlight">Email:</span> anshit@roxfort.in</div>
                <div class="clearfix"></div>
            </div>
            <div class="contact-box-border">&nbsp;</div>

            <div class="contact-box">
                <img src="img/abhishek.jpg" alt="contact-img">
                <div class="contact-box-name">Abhishek Verma</div>
                <div class="contact-box-phon"><span class="highlight">Phone:</span> 8087619006</div>
                <div class="contact-box-email"><span class="highlight">Email:</span> abhishek@roxfort.in</div>
                <div class="clearfix"></div>
            </div>
            <div class="contact-box-border">&nbsp;</div>
        </div>
        <div class="col-md-8 col-xs-12 pull-left">
            <p class="contact-info">You have any questions or need additional information? <br>
                <span class="address"><span class="highlight">Address:</span>  Roxfort Inc.|Events - Kalayanpur West, Lucknow - 226022</span></p>

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
<script src="https://maps.google.com/maps/api/js?sensor=false&amp;language=en"></script>
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