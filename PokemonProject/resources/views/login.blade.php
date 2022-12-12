@extends('layouts.app')

@section('title', 'Login')


@section('content')

<!-- start page title area -->
<div class="rn-breadcrumb-inner ptb--30">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-6 col-12">
                    <h5 class="title text-center text-md-start">PokéGame Login</h5>
                </div>
                <div class="col-lg-6 col-md-6 col-12">
                    <ul class="breadcrumb-list">
                        <li class="item"><a href="index.html">Accueil</a></li>
                        <li class="separator"><i class="feather-chevron-right"></i></li>
                        <li class="item current">PokéGame Login</li>
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
                <div class=" offset-2 col-lg-4 col-md-6 ml_md--0 ml_sm--0 col-sm-12">
                    <div class="form-wrapper-one">
                        <h4>Login</h4>
                        <form>
                            <div class="mb-5">
                                <label for="exampleInputEmail1" class="form-label">Adresse e-mail</label>
                                <input type="email" id="exampleInputEmail1">
                            </div>
                            <div class="mb-5">
                                <label for="exampleInputPassword1" class="form-label">Mot de passe</label>
                                <input type="password" id="exampleInputPassword1">
                            </div>
                            <button type="submit" class="btn btn-primary mr--15">Log In</button>
                            <a href="/signup" class="btn btn-primary-alta">Sign Up</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- login form end -->
    <div style = "position:relative; left:700px; top:-400px">
        <div class="col-lg-5 col-md-6 col-sm-12 offset-lg-1">
            <div class="slider-thumbnail">
            <img src="assets/images/pokemon/login-pic.png" alt="Slider Images">
            </div>
        </div>
    </div>

@endsection
