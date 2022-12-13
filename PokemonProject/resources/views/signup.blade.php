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
                        <form>
                            <div class="mb-5">
                                <label for="firstName" class="form-label">Pseudo</label>
                                <input type="text" id="firstName">
                            </div>
                            <div class="mb-5">
                                <label for="exampleInputEmail1" class="form-label">Adresse e-mail</label>
                                <input type="email" id="exampleInputEmail1">
                            </div>
                            <div class="mb-5">
                                <label for="newPassword" class="form-label">Mot de passe</label>
                                <input type="password" id="newPassword">
                            </div>
                            <div class="mb-5">
                                <label for="exampleInputPassword1" class="form-label">Confirmer le mot de passe</label>
                                <input type="password" id="exampleInputPassword1">
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
