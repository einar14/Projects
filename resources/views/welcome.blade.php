@extends('layout')

@section('content')
    <!--Start of slider section-->
    <section id="slider">
        <div id="carousel-example-generic" class="carousel slide carousel-fade" data-ride="carousel" data-interval="3000">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
                <div class="item active">
                    <div class="slider_overlay">
                        <img src="{{URL::asset('img/img1.jpg')}}" alt="...">
                        <div class="carousel-caption">
                            <div class="slider_text">
                                <h3>Almaty</h3>
                                <h2>Find your second home</h2>
                            </div>
                        </div>
                    </div>
                </div>

                <!--End of item With Active-->
                <div class="item">
                    <div class="slider_overlay">
                        <img src="{{URL::asset('img/img2.jpg')}}" alt="...">
                        <div class="carousel-caption">
                            <div class="slider_text">
                                <h3>Almaty</h3>
                                <h2>Find your second home</h2>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End of Item-->
                <div class="item">
                    <div class="slider_overlay">
                        <img src="{{URL::asset('img/img3.jpg')}}" alt="...">
                        <div class="carousel-caption">
                            <div class="slider_text">
                                <h3>Almaty</h3>
                                <h2>Find your second home</h2>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End of item-->
            </div>
            <!--End of Carousel Inner-->
        </div>
    </section>
    <!--end of slider section-->

    <!--Start of 'what to do in Almaty?' section-->
    <section id="welcome">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="wel_header">
                        <h3>What to do in Almaty?</h3>
                    </div>
                </div>
            </div>
            <!--End of row-->
            <div class="row">
                <div class="col-md-3">
                    <div class="item">
                        <div class="single_item">
                            <div class="item_list">
                                <div class="welcome_icon">
                                    <i class=""><img src="{{URL::asset('img/mountains.png')}}"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End of col-md-3-->
                <div class="col-md-3">
                    <div class="item">
                        <div class="single_item">
                            <div class="item_list">
                                <div class="welcome_icon">
                                    <i class=""><img src="{{URL::asset('img/yurt.png')}}"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End of col-md-3-->
                <div class="col-md-3">
                    <div class="item">
                        <div class="single_item">
                            <div class="item_list">
                                <div class="welcome_icon">
                                    <i class=""><img src="{{URL::asset('img/cable-car.png')}}"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End of col-md-3-->
                <div class="col-md-3">
                    <div class="item">
                        <div class="single_item">
                            <div class="item_list">
                                <div class="welcome_icon">
                                    <i class=""><img src="{{URL::asset('img/cityscape.png')}}"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End of col-md-3-->
            </div>
            <!--End of row-->
        </div>
        <!--End of container-->
    </section>
    <!--end of 'what to do in Almaty?' section-->

    <!--Start top chart places Inside-->
    <section id="top" style="margin-bottom: 50px; margin-top: 50px;">

        <div class="row" style="margin-left: 140px">
            <div class="wel_header">
                <h3>Top places in Almaty</h3>
            </div>
        </div>

        <div class="row" style="margin-left: 140px">
            <div class="wel_header">
                <h4>Inside</h4>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-sm-6 portfolio-item">
                    <div class="card h-100">
                        <a href="#"><img class="card-img-top" src="{{URL::asset('img/top1.jpg')}}" alt=""></a>
                        <div class="card-body text-center">
                            <h4 class="card-title" style="margin: 10px 0px 10px 0px;">
                                <a href="#">Medeu</a>
                            </h4>
                            <p class="card-text">The Medeu is an outdoor speed skating and bandy rink. It is located in a mountain valley on the south-eastern outskirts of Almaty, Kazakhstan. Medeu sits 1,691 metres above sea level. It consists of 10.5 thousand square meters of ice and utilizes a sophisticated freezing and watering system to ensure the quality of the ice.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-sm-6 portfolio-item">
                    <div class="card h-100">
                        <a href="#"><img class="card-img-top" src="{{URL::asset('img/top2.jpg')}}" alt=""></a>
                        <div class="card-body text-center" >
                            <h4 class="card-title" style="margin: 10px 0px 10px 0px;">
                                <a href="#">Kok Tobe</a>
                            </h4>
                            <p class="card-text">Kok Tobe is a mountain in Almaty, Kazakhstan's largest city. There is a popular recreation area on top of the mountain. The mountain's height is 1100 meters above sea level. Kok Tobe is one of the main landmarks in the city, and it is popular among visitors and tourists to Almaty.  </p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-sm-6 portfolio-item">
                    <div class="card h-100">
                        <a href="#"><img class="card-img-top" src="{{URL::asset('img/top3.jpg')}}" alt=""></a>
                        <div class="card-body text-center">
                            <h4 class="card-title" style="margin: 10px 0px 10px 0px;">
                                <a href="#">Arbat</a>
                            </h4>
                            <p class="card-text">Almaty Arbat, officially called Zhibek Zholy St., is located not far from the hostel in the center of Almaty, near the Central Department Store, and it is the most popular street for walking in the city. In the warm season, here, as on the eponymous street of the Russian capital, life is constantly boiling.</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!--End Top Chart Places Inside-->

    <!--Start top chart places Outside-->
    <section id="top" style="margin-bottom: 100px; margin-top: 50px;">

        <div class="row" style="margin-left: 140px">
            <div class="wel_header">
                <h4>Outside</h4>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-sm-6 portfolio-item">
                    <div class="card h-100">
                        <a href="#"><img class="card-img-top" src="{{URL::asset('img/top4.jpg')}}" alt=""></a>
                        <div class="card-body text-center">
                            <h4 class="card-title" style="margin: 10px 0px 10px 0px;">
                                <a href="#">Big Almaty Lake</a>
                            </h4>
                            <p class="card-text">Big Almaty Lake is located 28.5km south of Almaty up a gorge of the Bolshaya Almatinka River, 2,511m above sea level.  The lake is within the Alatau – Eliy National park and  both the Gorge and the lake are an attraction for visitors using Almaty as their base.The lake is used for both hydro electric power, and the water supply for the city, but this does not detract from the magnificent mountain scenery.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-sm-6 portfolio-item">
                    <div class="card h-100">
                        <a href="#"><img class="card-img-top" src="{{URL::asset('img/top5.jpg')}}" alt=""></a>
                        <div class="card-body text-center">
                            <h4 class="card-title" style="margin: 10px 0px 10px 0px;">
                                <a href="#">Charyn Canyon</a>
                            </h4>
                            <p class="card-text">Charyn Canyon is a canyon on the Sharyn River in Kazakhstan (200 km east of Almaty, close to the Chinese border). The canyon is roughly 90 km in length. It is part of the Charyn National Park, and is located within the territory of the Uygur District, Raiymbek District and Enbekshikazakh District. Over time, the canyon has gained colorful formations of varying shapes and sizes. </p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-sm-6 portfolio-item">
                    <div class="card h-100">
                        <a href="#"><img class="card-img-top" src="{{URL::asset('img/top6.jpg')}}" alt=""></a>
                        <div class="card-body text-center">
                            <h4 class="card-title" style="margin: 10px 0px 10px 0px;">
                                <a href="#">Singing barkhanзрз</a>
                            </h4>
                            <p class="card-text">"Singing barkhan" is located on the right bank of the Ili River between the two ridges of Kysty-Kalkan and Ulken-Kalkan in the territory of the National Natural Park "Altyn-Emel". Surprising phenomenon of nature sands. Sands that in dry and windy weather sound like a high-flying jet plane. The power of sound is such that it spreads over many kilometers in the district.</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!--End Top Chart Places Outside-->

    <!--Photo report section START-->
    <section id="photo_report" style="margin: 50px 0px 100px 0px;">

        <div class="row" style="margin-left: 140px">
            <div class="wel_header">
                <h3>Photoreport</h3>
            </div>
        </div>

        <div class="container">
            <div class="row1 row">
                <div class="column1 column">
                    <img src="{{URL::asset('img/photogrid/img1.jpg')}}">
                    <img src="{{URL::asset('img/photogrid/img2.jpg')}}">
                    <img src="{{URL::asset('img/photogrid/img3.jpg')}}">
                    <img src="{{URL::asset('img/photogrid/img4.jpg')}}">
                    <img src="{{URL::asset('img/photogrid/img17.jpg')}}">
                </div>
                <div class="column1 column">
                    <img src="{{URL::asset('img/photogrid/img5.jpg')}}">
                    <img src="{{URL::asset('img/photogrid/img6.jpg')}}">
                    <img src="{{URL::asset('img/photogrid/img7.jpg')}}">
                    <img src="{{URL::asset('img/photogrid/img8.jpg')}}">
                </div>
                <div class="column1 column">
                    <img src="{{URL::asset('img/photogrid/img9.jpg')}}">
                    <img src="{{URL::asset('img/photogrid/img10.jpg')}}">
                    <img src="{{URL::asset('img/photogrid/img11.jpg')}}">
                    <img src="{{URL::asset('img/photogrid/img12.jpg')}}">
                    <img src="{{URL::asset('img/photogrid/img18.jpg')}}">
                </div>
                <div class="column1 column">
                    <img src="{{URL::asset('img/photogrid/img13.jpg')}}">
                    <img src="{{URL::asset('img/photogrid/img14.jpg')}}">
                    <img src="{{URL::asset('img/photogrid/img15.jpg')}}">
                    <img src="{{URL::asset('img/photogrid/img16.jpg')}}">
                </div>
            </div>
        </div>
    </section>
    <!--Photo report section END-->

    <!--Google Map section Start-->
    <section>
        <div class="row" style="margin-left: 140px">
            <div class="wel_header">
                <h3>Almaty's map</h3>
            </div>
        </div>

        <div class="container">
            <div  class="col-lg-4 col-sm-6" id="map" style="height: 500px; width: 1140px; margin-bottom: 100px;"></div>
        </div>
    </section>
    <!--Google Map section End-->
@endsection