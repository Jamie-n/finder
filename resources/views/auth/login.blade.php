@extends('design.layout')

@section('page-content')
    <div class="row">
        <div class="col-7">
            <h2 class="display-5 fw-bold mb-5 text-light">Welcome Back!</h2>
            <p class="opacity-70 mb-3 pe-5">Ready to sell your car with the UK's number one second hand car provider as voted by our users?</p>
        </div>
        <div class="col-5">
            <h2 class="display-6 fw-bold mb-5 text-light">
                Login
            </h2>
            {{Form::open(['url'=>route('login')])}}
            <div class="mb-4">
                {{Form::label('email', 'Email Address', ['class'=>'form-label text-light'])}}
                <input class="form-control input-logo @error('email') is-invalid @endif" placeholder="Email Address" autocomplete="email" name="email" type="text" id="email">
                @error('email')
                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                @enderror
            </div>

            <div class="mb-4 pb-2">
                {{Form::label('password', null,['class'=>'form-label text-light'])}}
                <input placeholder="Password" class="form-control input-logo @error('password') is-invalid @endif" autocomplete="password" name="password" type="password" value="" id="password">

                @error('password')
                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                @enderror
            </div>

            {{Form::submit('Login', ['class'=>'btn btn-orange w-100 mb-3 text-light fw-bold py-2', 'type'=>'submit'])}}
            {{Form::close()}}

            <p class="text-light text-center">Or</p>
            <a href="#" class="btn btn-orange w-100 mb-3 bg-transparent text-primary text-orange py-2"><i class="fab fa-facebook"></i> Sign In Using Facebook</a>
            <a href="#" class="btn btn-orange bg-transparent text-primary w-100 text-orange mb-3 py-2"><i class="fab fa-google"></i> Sign In Using Google</a>

            <hr/>
            <div class="d-flex justify-content-between align-items-center">
                <span>Don't Have an Account? </span>
                <x-nav-link class="d-inline-block btn btn-danger text-light rounded-pill p-2 px-4 float-right" :route="route('register')" routeName="register" value="Sign-up"/>
            </div>
        </div>
    </div>
@endsection
