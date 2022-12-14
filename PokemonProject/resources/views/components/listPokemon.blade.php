{{--<div id="listname" class="grid-metro5 mesonry-list" >--}}
{{--    <div class="resizer" ></div>--}}
{{--    @foreach($pokemons as $pokemon)--}}

{{--        <!-- start single product -->--}}
{{--        <div class="grid-metro-item {{$pokemon->energy}}">--}}
{{--            <div class="product-style-one no-overlay">--}}
{{--                <div class="card-thumbnail">--}}
{{--                    <a href="#"><img src="{{$pokemon->image}}" alt="pokemon_image"/></a>--}}
{{--                </div>--}}
{{--                <div class="product-share-wrapper">--}}

{{--                </div>--}}
{{--                <a href="#"><span class="product-name">{{$pokemon->name}}</span></a>--}}
{{--                <span class="latest-bid">{{$pokemon->energy}}</span>--}}
{{--                <div class="bid-react-area">--}}
{{--                    <div class="last-bid">Niveau : {{$pokemon->level}}</div>--}}
{{--                    <div class="react-area">--}}
{{--                                                                <svg viewBox="0 0 17 16" fill="none" width="16" height="16"--}}
{{--                                                                     class="sc-bdnxRM sc-hKFxyN kBvkOu">--}}
{{--                                                                    <path--}}
{{--                                                                        d="M8.2112 14L12.1056 9.69231L14.1853 7.39185C15.2497 6.21455 15.3683 4.46116 14.4723 3.15121V3.15121C13.3207 1.46757 10.9637 1.15351 9.41139 2.47685L8.2112 3.5L6.95566 2.42966C5.40738 1.10976 3.06841 1.3603 1.83482 2.97819V2.97819C0.777858 4.36443 0.885104 6.31329 2.08779 7.57518L8.2112 14Z"--}}
{{--                                                                        stroke="currentColor" stroke-width="2"></path>--}}
{{--                                                                </svg>--}}
{{--                        <span class="number">{{$pokemon->hp}}</span>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <!-- end single product -->--}}
{{--    @endforeach--}}
{{--</div>--}}

<div class="container-fluid">

    <div class="row row-cols-5 mesonry-list">
        @foreach($pokemons as $pokemon)

            <!-- start single product -->
            <div class="col {{$pokemon->energy->name}}" style="margin-top: 2%">
                <div class="product-style-one no-overlay">
                    <div class="card-thumbnail">
                        <a href="#"><img src="{{$pokemon->image}}" alt="pokemon_image"/></a>
                    </div>
                    <div class="product-share-wrapper">

                    </div>
                    <a href="#"><span class="product-name">{{$pokemon->name}}</span></a>
                    <span class="latest-bid">{{$pokemon->energy->name}}</span>
                    <div class="bid-react-area">
                        <div class="last-bid">Niveau : {{$pokemon->level}}</div>
                        <div class="react-area">
                                                                    <svg viewBox="0 0 17 16" fill="none" width="16" height="16"
                                                                         class="sc-bdnxRM sc-hKFxyN kBvkOu">
                                                                        <path
                                                                            d="M8.2112 14L12.1056 9.69231L14.1853 7.39185C15.2497 6.21455 15.3683 4.46116 14.4723 3.15121V3.15121C13.3207 1.46757 10.9637 1.15351 9.41139 2.47685L8.2112 3.5L6.95566 2.42966C5.40738 1.10976 3.06841 1.3603 1.83482 2.97819V2.97819C0.777858 4.36443 0.885104 6.31329 2.08779 7.57518L8.2112 14Z"
                                                                            stroke="currentColor" stroke-width="2"></path>
                                                                    </svg>
                            <span class="number">{{$pokemon->hp}}</span>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end single product -->
        @endforeach
    </div>
</div>
