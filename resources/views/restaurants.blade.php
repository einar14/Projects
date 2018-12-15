@extends('layout')

<style type="text/css">
    .card-img-bottom {
        color: #fff;
        height: 20rem;
        background-size: cover;
    }

</style>

@section('content')
    <section>
        <div class="container" style="padding-top: 150px; width: 900px;">
        <h1 style="margin-left: 36%; margin-bottom: 60px;">Restaurants</h1>
        @foreach($rests as $rest)
            @if(array_search($rest, $rests)%2 == 0)
            <section>
                <div class="container">
                    <div class="card" style="width: 800px; height: 250px;">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="card-block">
                                    <h4 class="card-title" style="margin-bottom: 10px">{{$rest['name']}}</h4>
                                    <p class="card-text" style="margin-bottom: 10px">{{$rest['description']}}</p>
                                    <p class="card-text" style="margin-bottom: 10px">{{$rest['average_s']}}</p>
                                    <p class="card-text" style="margin-bottom: 10px">{{$rest['site']}}</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="card-img-bottom" style="background:  url({{URL::asset(\App\Restaurants::getPathFile($rest['id']))}}) center no-repeat;">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            @else
            <section>
                <div class="container">
                    <div class="card" style="width: 800px; height: 250px;">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="card-img-bottom" style="background:  url({{URL::asset(\App\Restaurants::getPathFile($rest['id']))}}) center no-repeat;">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="card-block">
                                    <h4 class="card-title" style="margin-bottom: 10px">{{$rest['name']}}</h4>
                                    <p class="card-text" style="margin-bottom: 10px">{{$rest['description']}}</p>
                                    <p class="card-text" style="margin-bottom: 10px">{{$rest['average_s']}}</p>
                                    <p class="card-text" style="margin-bottom: 10px">{{$rest['site']}}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
              @endif
            @endforeach
        </div>
    </section>
@endsection