@extends('layouts.app')

@section('title', 'Players Stats')


@section('content')

    <div class="rn-creator-title-area rn-section-gapTop">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                    <h2 class="title mb--0">Our Top Users</h2>
                </div>
            </div>
            <div class="row g-5 mt--30 creator-list-wrapper">
                @php
                    $delay = 100;
                @endphp
                @foreach($users as $index=>$user)
                    @php
                        $delay = $delay + 150;
                    @endphp
                    @if($index == 0)
                            <!-- start single top-seller -->
                        <div class="creator-single col-lg-3 col-md-4 col-sm-6" data-sal="slide-up"
                             data-sal-delay="{{$delay}}"
                             data-sal-duration="800">
                            <div class="top-seller-inner-one explore">
                                <div class="top-seller-wrapper">
                                    <div class="thumbnail varified">
                                        <a href="author.html"><img src="{{asset('storage/'. $user['image'])}}"
                                                                   alt="Nft_Profile"></a>
                                    </div>
                                    <div class="top-seller-content">
                                        <a href="author.html">
                                            <h6 class="name">{{$user['name']}}</h6>
                                        </a>
                                        <span class="count-number">
                                    Combats Played : {{count($user['combats'])}}
                                </span>
                                        <span class="count-number">
                                    Combats Won : {{count($user['combats_won'])}}
                                </span>
                                    </div>
                                </div>
                                <a class="over-link" href="author.html"></a>
                            </div>
                        </div>
                        <!-- End single top-seller -->
                    @else
                        <!-- start single top-seller -->
                        <div class="creator-single col-lg-3 col-md-4 col-sm-6" data-sal="slide-up"
                             data-sal-delay="{{$delay}}"
                             data-sal-duration="800">
                            <div class="top-seller-inner-one explore">
                                <div class="top-seller-wrapper">
                                    <div class="thumbnail">
                                        <a href="author.html"><img src="{{asset('storage/'. $user['image'])}}"
                                                                   alt="Nft_Profile"></a>
                                    </div>
                                    <div class="top-seller-content">
                                        <a href="author.html">
                                            <h6 class="name">{{$user['name']}}</h6>
                                        </a>
                                        <span class="count-number">
                                         Combats Played : {{count($user['combats'])}}
                                </span>
                                        <span class="count-number">
                                    Combats Won : {{count($user['combats_won'])}}
                                 </span>

                                    </div>
                                </div>
                                <a class="over-link" href="author.html"></a>
                            </div>
                        </div>
                        <!-- End single top-seller -->
                    @endif
                @endforeach
            </div>
            {{--            <div class="row">--}}
            {{--                <div class="col-lg-12" data-sal="slide-up" data-sal-delay="950" data-sal-duration="800">--}}
            {{--                    <nav class="pagination-wrapper" aria-label="Page navigation example">--}}
            {{--                        <ul class="pagination">--}}
            {{--                            <li class="page-item"><a class="page-link" href="#">Previous</a></li>--}}
            {{--                            <li class="page-item"><a class="page-link active" href="#">1</a></li>--}}
            {{--                            <li class="page-item"><a class="page-link" href="#">2</a></li>--}}
            {{--                            <li class="page-item"><a class="page-link" href="#">3</a></li>--}}
            {{--                            <li class="page-item"><a class="page-link" href="#">Next</a></li>--}}
            {{--                        </ul>--}}
            {{--                    </nav>--}}
            {{--                </div>--}}
            {{--            </div>--}}
        </div>
    </div>

@endsection
