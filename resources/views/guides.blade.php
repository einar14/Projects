@extends('layout')


<style type="text/css">
    @import url('https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');


    .cont{
        margin: 0 auto;
        padding: 200px 0;
    }

    section .section-title {
        text-align: center;
        color: #1C4996;
        margin-bottom: 50px;
        text-transform: uppercase;
    }

    #team .card {
        border: none;
        background: #ffffff;
    }

    .image-flip:hover .backside,
    .image-flip.hover .backside {
        -webkit-transform: rotateY(0deg);
        -moz-transform: rotateY(0deg);
        -o-transform: rotateY(0deg);
        -ms-transform: rotateY(0deg);
        transform: rotateY(0deg);
        border-radius: .25rem;
    }

    .image-flip:hover .frontside,
    .image-flip.hover .frontside {
        -webkit-transform: rotateY(180deg);
        -moz-transform: rotateY(180deg);
        -o-transform: rotateY(180deg);
        transform: rotateY(180deg);
    }

    .mainflip {
        -webkit-transition: 1s;
        -webkit-transform-style: preserve-3d;
        -ms-transition: 1s;
        -moz-transition: 1s;
        -moz-transform: perspective(1000px);
        -moz-transform-style: preserve-3d;
        -ms-transform-style: preserve-3d;
        transition: 1s;
        transform-style: preserve-3d;
        position: relative;
    }

    .frontside {
        position: relative;
        -webkit-transform: rotateY(0deg);
        -ms-transform: rotateY(0deg);
        z-index: 2;
        margin-bottom: 30px;
    }

    .backside {
        position: absolute;
        top: 0;
        left: 0;
        background: white;
        -webkit-transform: rotateY(-180deg);
        -moz-transform: rotateY(-180deg);
        -o-transform: rotateY(-180deg);
        -ms-transform: rotateY(-180deg);
        transform: rotateY(-180deg);
        -webkit-box-shadow: 5px 7px 9px -4px rgb(158, 158, 158);
        -moz-box-shadow: 5px 7px 9px -4px rgb(158, 158, 158);
        box-shadow: 5px 7px 9px -4px rgb(158, 158, 158);
    }

    .frontside,
    .backside {
        -webkit-backface-visibility: hidden;
        -moz-backface-visibility: hidden;
        -ms-backface-visibility: hidden;
        backface-visibility: hidden;
        -webkit-transition: 1s;
        -webkit-transform-style: preserve-3d;
        -moz-transition: 1s;
        -moz-transform-style: preserve-3d;
        -o-transition: 1s;
        -o-transform-style: preserve-3d;
        -ms-transition: 1s;
        -ms-transform-style: preserve-3d;
        transition: 1s;
        transform-style: preserve-3d;
    }

    .frontside .card,
    .backside .card {
        min-height: 312px;
    }

    .backside .card {
        width: 300px;
    }

    .backside .card a {
        font-size: 18px;
        color: #1C4996 !important;
    }

    .frontside .card .card-title,
    .backside .card .card-title {
        color: #1C4996 !important;
    }

    .frontside .card .card-body img {
        width: 120px;
        height: 120px;
        border-radius: 50%;
    }
</style>


@section('content')
    <!-- Team -->
    <section id="guides" class="cont">
        <div class="container">
            <h5 class="section-title h1">OUR GUIDES</h5>
            <div class="row">

                @foreach($users as $user)
                <!-- Team member -->
                <div class="col-xs-12 col-sm-6 col-md-4">
                    <div class="image-flip" ontouchstart="this.classList.toggle('hover');">
                        <div class="mainflip">
                            <div class="frontside">
                                <div class="card ">
                                    <div class="card-body text-center" style="padding-top: 20px;">
                                        @if($user -> ifFileExist())
                                            <p><img class=" img-fluid" src="{{URL::asset($user -> getPathFile())}}" alt="card image"></p>
                                        @else
                                            <p><img class=" img-fluid" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSjz0nnhDbK1Uu5388rcMggmPUPo5a8WKF78t9UlCSq01fz9gsB" alt="card image"></p>
                                        @endif
                                        <h4 class="card-title" style="margin: 10px 0px 10px 0px;">{{$user -> first_name}}</h4>
                                        <p class="card-text">Gender: {{$user -> gender}}</p>
                                        <p class="card-text">English level: {{$user -> en_level}}</p>
                                        <p class="card-text">Transport: {{$user -> transport}}</p>
                                        <p class="card-text">Age: {{$user -> age()}}</p>
                                    </div>
                                </div>
                            </div>
                            <div class="backside">
                                <div class="card">
                                    <div class="card-body text-center mt-4" style="padding-top: 80px;">
                                        <h4 class="card-title" style="margin-bottom: 20px;">{{$user->last_name}} {{$user -> first_name}}</h4>
                                        <p class="card-text"> Email: {{$user -> email}}</p>
                                        <p class="card-text" style="margin-bottom: 20px"> Phone number: {{$user -> phone_number}}</p>

                                        <ul class="list-inline">
                                            <li class="list-inline-item">
                                                <a class="social-icon text-xs-center" target="_blank" href="#">
                                                    <i class="fa fa-facebook"></i>
                                                </a>
                                            </li>
                                            <li class="list-inline-item">
                                                <a class="social-icon text-xs-center" target="_blank" href="#">
                                                    <i class="fa fa-twitter"></i>
                                                </a>
                                            </li>
                                            <li class="list-inline-item">
                                                <a class="social-icon text-xs-center" target="_blank" href="#">
                                                    <i class="fa fa-skype"></i>
                                                </a>
                                            </li>
                                            <li class="list-inline-item">
                                                <a class="social-icon text-xs-center" target="_blank" href="#">
                                                    <i class="fa fa-google"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ./Team member -->
                @endforeach
            </div>
        </div>
    </section>
    <!-- Team -->
@endsection