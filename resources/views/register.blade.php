@extends('layout')

<style type="text/css">
    body{
        color: #fff;
        font-family: 'Roboto', sans-serif;
    }
    .form-control{
        height: 40px;
        box-shadow: none;
        color: #969fa4;
    }
    .form-control:focus{
        border-color: #5cb85c;
    }
    .form-control, .btn{
        border-radius: 3px;
    }
    .signup-form{
        width: 400px;
        margin: 0 auto;
        padding: 100px 0;
    }
    .signup-form h2{
        color: #636363;
        margin: 0 0 15px;
        position: relative;
        text-align: center;
    }
    .signup-form h2:before, .signup-form h2:after{
        content: "";
        height: 2px;
        width: 30%;
        background: #d4d4d4;
        position: absolute;
        top: 50%;
        z-index: 2;
    }
    .signup-form h2:before{
        left: 0;
    }
    .signup-form h2:after{
        right: 0;
    }
    .signup-form .hint-text{
        color: #999;
        margin-bottom: 30px;
        text-align: center;
    }
    .signup-form form{
        color: #999;
        border-radius: 3px;
        margin-bottom: 15px;
        background: #f2f3f7;
        box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
        padding: 30px;
    }
    .signup-form .form-group{
        margin-bottom: 20px;
    }
    .signup-form input[type="checkbox"]{
        margin-top: 3px;
    }
    .signup-form .btn{
        font-size: 16px;
        font-weight: bold;
        min-width: 140px;
        outline: none !important;
    }
    .signup-form .row div:first-child{
        padding-right: 10px;
    }
    .signup-form .row div:last-child{
        padding-left: 10px;
    }
    .signup-form a{
        color: #fff;
        text-decoration: underline;
    }
    .signup-form a:hover{
        text-decoration: none;
    }
    .signup-form form a{
        color: #5cb85c;
        text-decoration: none;
    }
    .signup-form form a:hover{
        text-decoration: underline;
    }
</style>

@section('content')

<!--Form-->
<div class="signup-form" style="padding-top: 150px">
    <form method="POST" action="{{ route('register') }}" aria-label="{{ __('Register') }}">
        @csrf
        
        <h2>Register</h2>
        <p class="hint-text">Create your account. It's free and only takes a minute.</p>

        <div class="form-group">
            <div class="row">
                <div class="col-xs-6"><input placeholder="First name" id="first_name" type="text" class="form-control{{ $errors->has('first_name') ? ' is-invalid' : '' }}" name="first_name" value="{{ old('first_name') }}" required ></div>

                @if ($errors->has('first_name'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('first_name') }}</strong>
                    </span>
                @endif

                <div class="col-xs-6"><input placeholder="Last name" id="last_name" type="text" class="form-control{{ $errors->has('last_name') ? ' is-invalid' : '' }}" name="last_name" value="{{ old('last_name') }}" required ></div>

                @if ($errors->has('last_name'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('last_name') }}</strong>
                    </span>
                @endif
            </div>
        </div>


        <label>Gender:</label>
        <div class="form-group">
            <label class="radio-inline"><input id="gender" type="radio" name="gender" value="Male">Male</label>
            <label class="radio-inline"><input id="gender" type="radio" name="gender" value="Female">Female</label>
        </div>

        <div class="form-group">
            <input placeholder="Email" id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" >

            @if ($errors->has('email'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
            @endif
        </div>

        <div class="form-group">
            <input id="phone_number" type="tel" class="form-control{{ $errors->has('phone_number') ? ' is-invalid' : '' }}" name="phone_number" placeholder="Phone number">

            @if ($errors->has('phone_number'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('phone_number') }}</strong>
                </span>
            @endif
        </div>

        <div class="form-group">
            <input id="dob" type="date" class="form-control{{ $errors->has('dob') ? ' is-invalid' : '' }}" name="dob" placeholder="Date of birth">

            @if ($errors->has('dob'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('dob') }}</strong>
                </span>
            @endif
        </div>

        <label>Role:</label>
        <div class="form-group">
            <label class="radio-inline"><input id="role" type="radio" name="role" value="Tourist">Tourist</label>
            <label class="radio-inline"><input id="role" type="radio" name="role" value="Guide" data-toggle="collapse" data-target="#addToggleExternalContent">Guide</label>
        </div>

        <!--Additional params-->
        <div class="collapse" id="addToggleExternalContent">
            <label>English level:</label>
            <div class="bg-dark p-4">
                <div class="form-group">
                    <label class="radio-inline"><input id="en_level" type="radio" name="en_level" value="Intermediate">Intermediate</label>
                    <label class="radio-inline"><input id="en_level" type="radio" name="en_level" value="Upper-intermediate">Upper-intermediate</label>
                    <label class="radio-inline"><input id="en_level" type="radio" name="en_level" value="Advanced">Advanced</label>
                </div>
            </div>
            <label>Do you have transport?</label>
            <div class="bg-dark p-4">
                <div class="form-group">
                    <label class="radio-inline"><input id="transport" type="radio" name="transport" value="No">No</label>
                    <label class="radio-inline"><input id="transport" type="radio" name="transport" value="Yes">Yes</label>
                </div>
            </div>
        </div>

        <div class="form-group">
            <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" placeholder="Password" required>

            @if ($errors->has('password'))
                <span class="invalid-feedback" role="alert">
                     <strong>{{ $errors->first('password') }}</strong>
                </span>
            @endif
        </div>

        <div class="form-group">
            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Confirm Password" required>
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-success btn-lg btn-block">{{ __('Register') }}</button>
        </div>

    </form>

    <div class="text-center">Already have an account?<a style="color: black;" href="{{route('login')}}">Sign in</a></div>

</div>

@endsection