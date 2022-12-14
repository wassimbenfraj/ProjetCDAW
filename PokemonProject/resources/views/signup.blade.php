@extends('layouts.app')

@section('title', 'Sign Up')


@section('content')

<!-- start page title area -->
<div class="rn-breadcrumb-inner ptb--30">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-6 col-12">
                    <h5 class="title text-center text-md-start">Sign Up</h5>
                </div>
                <div class="col-lg-6 col-md-6 col-12">
                    <ul class="breadcrumb-list">
                        <li class="item"><a href="index.html">Acceuil</a></li>
                        <li class="separator"><i class="feather-chevron-right"></i></li>
                        <li class="item current">Sign Up</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- end page title area -->

    <!-- login form -->
    <div class="login-area rn-section-gapTop">
        <div class="container">
            <div class="row g-5">
                <div class="offset-2 col-lg-4 col-md-6 ml_md--0 ml_sm--0 col-sm-12">
                    <div class="form-wrapper-one registration-area">
                        <h4>Sign up</h4>
                        <form method="POST" action="/users">
                            @csrf
                            <div class="mb-5">
                                <label for="name" class="form-label">Pseudo</label>
                                <input type="text" name="name" id="name" value="{{old('name')}}">
                                @error('name')
                                <span style="color: red" >{{$message}}</span>
                                @enderror
                            </div>
                            <div class="mb-5">
                                <label for="email" class="form-label">Adresse e-mail</label>
                                <input type="email" id="email" name="email" value="{{old('email')}}">
                                @error('email')
                                <span style="color: red" >{{$message}}</span>
                                @enderror
                            </div>
                            <div class="mb-5">
                                <label for="password" class="form-label">Mot de passe</label>
                                <input type="password" id="password" name="password">
                                @error('password')
                                <span style="color: red" >{{$message}}</span>
                                @enderror
                            </div>
                            <div class="mb-5">
                                <label for="password_confirmation" class="form-label">Confirmer le mot de passe</label>
                                <input type="password" id="password_confirmation" name="password_confirmation">
                                @error('password_confirmation')
                                <span style="color: red" >{{$message}}</span>
                                @enderror
                            </div>
                            <button type="submit" class="btn btn-primary mr--15">Sign Up</button>
                            <a href="/login" class="btn btn-primary-alta">Log In</a>
                        </form>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="slider-thumbnail">
                        <img src="assets/images/pokemon/sign-up.png">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- login form end -->


@endsection
