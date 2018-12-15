<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!--Fontawesom-->
        <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">

        <!-- Bootstrap -->
        <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">

        <!--Main Stylesheet-->
        <link href="{{ asset('css/style.css') }}" rel="stylesheet">

        <!--Grid phoro styles-->
        <link rel="stylesheet" type="text/css" href="{{ asset('css/grid-photo.css') }}">

    </head>

    <body data-spy="scroll" data-target="#header">

        <!--Start Hedaer Section-->
        <section id="header">
                <div class="header_menu text-center col-lg-12 col-12" data-spy="affix" data-offset-top="50" id="nav">
                    <div class="container">
                        <nav class="navbar navbar-default zero_mp ">
                            <!-- Brand and toggle get grouped for better mobile display -->
                            <div class="navbar-header">
                                <a class="navbar-brand custom_navbar-brand" href="{{url('/')}}"><img src="{{URL::asset('img/logo.png')}}" alt=""></a>
                            </div>
                            <!--End of navbar-header-->

                            <!-- Collect the nav links, forms, and other content for toggling -->
                            <div class="collapse navbar-collapse zero_mp" id="bs-example-navbar-collapse-1">
                                <!-- Left side navbar -->
                                <ul class="nav navbar-nav navbar-left main_menu">
                                    <li><a href="{{url('/')}}">Home <span class="sr-only">(current)</span></a></li>
                                    <li><a data-toggle="collapse" data-target="#navbarToggleExternalContent"> {{ __('Menu') }} </a></li>
                                    <li><a href="{{url('/guides')}}">Guides<span class="sr-only">(current)</span></a></li>
                                </ul>

                                <!-- Right side navbar -->
                                <ul class="nav navbar-nav navbar-right main_menu">
                                    @guest
                                        <li><a href="{{route('login')}}">Login</a></li>
                                        <li><a href="{{route('register')}}">Registration</a></li>
                                    @else
                                        <li class="dropdown">
                                            <a id="dropdownMenuButton" class="dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                                {{ Auth::user()->first_name }} <span class="caret"></span>
                                            </a>

                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                <a style="margin-left: 50px;" class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                    document.getElementById('logout-form').submit();"> {{ __('Logout') }}
                                                </a>

                                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                    @csrf
                                                </form>

                                            </div>
                                        </li>
                                    @endguest
                                </ul>
                            </div>

                            <!-- Collapse menu -->
                            <div class="collapse" id="navbarToggleExternalContent">
                                <div class="bg-dark" style="height: 50px; margin-top: 50px">
                                    <a href="{{url('/accommodations')}}" style="margin: 0px 40px 0px 40px; font-size: 16px;">ACCOMMODATION</a>
                                    <a href="#" style="margin: 0px 40px 0px 40px; font-size: 16px;">ENTERTAINMENT</a>
                                    <a href="{{url('/restaurants')}}" style="margin: 0px 40px 0px 40px; font-size: 16px;">RESTAURANTS</a>
                                </div>
                            </div>

                            <!-- /.navbar-collapse -->
                        </nav>
                        <!--End of nav-->
                    </div>
                    <!--End of container-->
                </div>
                <!--End of header menu-->
            </div>
            <!--end of header area-->
        </section>
        <!--End of Hedaer Section-->

        <section id="content">
            @yield('content')
        </section>

        <!--Start of footer-->
        <section id="footer">
            <div class="container">
                <div class="row text-center">
                    <div class="col-md-6">
                        <div class="copyright">
                            <p>@ 2018 - UNSTOPPABLE</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="designer">
                            <p>A Design By <a href="#"></a></p>
                        </div>
                    </div>
                </div>
                <!--End of row-->
            </div>
            <!--End of container-->
        </section>
        <!--End of footer-->



        <script>
            function initMap() {
                var location = {lat: 43.245249, lng: 76.918948};
                var map = new google.maps.Map(document.getElementById('map'), {
                center: location,
                zoom: 12
                });

                var marker = new google.maps.Marker({
                    position: location,
                    map: map
                });
            }     
        </script>
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAF8aueJK5lbLPDrTdWRJt2LCRXgGhW-8o&callback=initMap"
        async defer></script>

        <!--Scroll to top-->
        <a href="#" id="back-to-top" title="Back to top">&uarr;</a>
        <!--End of Scroll to top-->

        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <!-- <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js'></script>-->
        <script src="{{ asset('js/jquery-1.12.3.min.js') }}"></script>

        <!--Back To Top-->
        <script src="{{ asset('js/backtotop.js') }}"></script>

        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="{{ asset('js/bootstrap.min.js') }}"></script>
        <!-- Custom JavaScript-->
        <script src="{{ asset('js/main.js') }}"></script>
    </body>

</html>