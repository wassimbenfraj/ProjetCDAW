@extends('layouts.app')

@section('title', 'Profile')


@section('content')

    <div class="rn-author-bg-area bg_image--9 bg_image ptb--150">
        <div class="container">
            <div class="row">
            </div>
        </div>
    </div>

    <div class="rn-author-area mb--30 mt_dec--120">
        <div class="container">
            <div class="row padding-tb-50 align-items-center d-flex">
                <div class="col-lg-12">
                    <div class="author-wrapper">
                        <div class="author-inner">
                            <div class="user-thumbnail">
                                <img src="{{asset('storage/'. auth()->user()->image)}}" alt="">
                            </div>
                            <div class="rn-author-info-content">
                                <h4 class="title">{{auth()->user()->name}}</h4>
{{--                                <a href="#" class="social-follw">--}}
{{--                                    <i data-feather="twitter"></i>--}}
{{--                                    <span class="user-name">it0bsession</span>--}}
{{--                                </a>--}}
                                <div class="follow-area">
                                    <div class="follow followers">
                                        <span>Level: <a href="#" class="color-body">{{auth()->user()->level}}</a></span>
                                    </div>
                                </div>
                                <div class="author-button-area">
                                    <a href="/profile/edit" class="btn at-follw follow-button edit-btn"> <span class="btn at-follw follow-button"><i
                                            data-feather="edit"></i> Change Password</span></a>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="rn-authore-profile-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="tab-wrapper-one">
                        <nav class="tab-button-one">
                            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab"
                                        data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home"
                                        aria-selected="false">Energies :
                                </button>
                                @foreach(auth()->user()->energies as $energy)
                                    <button class="nav-link" id="nav-home-tab" data-bs-toggle="tab"
                                            data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home"
                                            aria-selected="false">{{$energy->name}}
                                    </button>
                                @endforeach
                            </div>
                        </nav>
                    </div>
                </div>
            </div>

            <div class="tab-content rn-bid-content" id="nav-tabContent">
                <div class="tab-pane row g-5 d-flex fade show active" id="nav-profile" role="tabpanel"
                     aria-labelledby="nav-profile-tab">
                    <h3 id="headlineResult" class="title">Combats History</h3>
                @foreach(auth()->user()->combats as $combat)
                        <!-- start single product -->
                        <div class="col-5 col-lg-4 col-md-6 col-sm-6 col-12">
                            <div class="product-style-one no-overlay with-placeBid">
                                <div class="card-thumbnail">
                                    <a href="#">
                                    </a>
                                </div>
                                <div class="product-share-wrapper">
                                </div>
                                @if($combat->user_id == auth()->user()->id )
                                    <a href="#"><span class="product-name">Game Won</span></a>
                                @else
                                    <a href="#"><span class="product-name">Game Lost</span></a>
                                @endif
                                <span class="latest-bid">{{$combat->created_at->format('j F, Y')}}</span>
                                <div class="bid-react-area">

                                    @if($combat->users[0]->id != auth()->user()->id )
                                        <div class="last-bid"> Oponent : {{$combat->users[0]->name}}</div>
                                        <a href="/combat/{{$combat->id}}" class="btn btn-primary">Replay</a>
                                    @else
                                        <div class="last-bid"> Vs {{$combat->users[1]->name}}</div>
                                        <a href="/combat/{{$combat->id}}" class="btn btn-primary">Replay</a>
                                    @endif

                                </div>
                            </div>
                        </div>
                        <!-- end single product -->
                    @endforeach

                </div>

            </div>
        </div>
    </div>
@endsection
