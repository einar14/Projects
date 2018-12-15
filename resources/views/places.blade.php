@extends('layout')

<style type="text/css">
    .cont{
        margin: auto auto;
        padding: 200px;
    }

    .card-img-bottom {
        color: #fff;
        height: 20rem;
        background:  url(https://mdbootstrap.com/img/Photos/Horizontal/Work/4-col/img%20%2814%29.jpg) center no-repeat;
        background-size: cover;
    }

</style>

@section('content')
    <section>
        <div class="container" style="padding-top: 250px; width: 900px;">

            <section>
                <div class="container">
                    <div class="card" style="width: 800px; height: 230px;">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="card-block">
                                    <h4 class="card-title">Curabitur gravida vestibulum imperdiet.</h4>
                                    <p class="card-text">Cras convallis ut turpis vitae facilisis. Morbi eu augue vel quam efficitur rhoncus vitae eget lectus. Cras augue ligula, aliquam ut enim ut, feugiat imperdiet sem. Integer sed mi quis nisl eleifend interdum.</p>
                                    <p class="card-text">Cras convallis ut turpis vitae facilisis. Morbi eu augue vel quam efficitur rhoncus vitae eget lectus. Cras augue ligula, aliquam ut enim ut, feugiat imperdiet sem.</p>
                                    <a href="#" class="btn btn-primary">Read More</a>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="card-img-bottom">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section>
                <div class="container">
                    <div class="card" style="width: 800px; height: 230px;">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="card-img-bottom">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="card-block">
                                    <h4 class="card-title">Curabitur gravida vestibulum imperdiet.</h4>
                                    <p class="card-text">Cras convallis ut turpis vitae facilisis. Morbi eu augue vel quam efficitur rhoncus vitae eget lectus. Cras augue ligula, aliquam ut enim ut, feugiat imperdiet sem. Integer sed mi quis nisl eleifend interdum.</p>
                                    <p class="card-text">Cras convallis ut turpis vitae facilisis. Morbi eu augue vel quam efficitur rhoncus vitae eget lectus. Cras augue ligula, aliquam ut enim ut, feugiat imperdiet sem.</p>
                                    <a href="#" class="btn btn-primary" style="margin-left: 290px;">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

        </div>
    </section>
@endsection