@extends('layouts.app')

@section('title', 'Pokemons')


@section('content')
    <div class="rn-product-area rn-section-gapTop masonary-wrapper-activation">
        <div class="container">
            <div class="row mb--30 align-items-center">

                <div class="col-lg-4">
                    <div class="section-title">
                        <h3 class="title mb--0">Découvrir Les Pokémons</h3>
                    </div>
                </div>
                <div class="default-exp-wrapper">
                    <div class="inner">
                        <div class="filter-select-option">
                            <label class="filter-leble">Trier</label>
                            <select>
                                <option value="0"></option>
                                <option value="niveau">Niveau</option>
                                <option value="hp">Points De Vie</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="col-lg-13">
                    <div
                        class="button-group isotop-filter filters-button-group d-flex justify-content-start justify-content-lg-end mt_md--30 mt_sm--30">
                        <button data-filter="*" class="is-checked"><span class="filter-text">All Items</span></button>
                        <button data-filter=".fire"><span class="filter-text">Fire</span></button>
                        <button data-filter=".grass"><span class="filter-text">Grass</span></button>
                        <button data-filter=".water"><span class="filter-text">Water</span></button>
                        <button data-filter=".bug"><span class="filter-text">Bug</span></button>
                        <button data-filter=".normal"><span class="filter-text">Normal</span></button>
                        <button data-filter=".poison"><span class="filter-text">Poison</span></button>
                        <button data-filter=".electric"><span class="filter-text">Electric</span></button>
                        <button data-filter=".fairy"><span class="filter-text">Fairy</span></button>
                    </div>
                </div>

            </div>

            <div class="col-lg-12">
                <div class="grid-metro5 mesonry-list">
                    <div class="resizer"></div>
                    @foreach($pokemons as $pokemon)
                        <!-- start single product -->
                        <div class="grid-metro-item {{$pokemon->energy}}">
                            <div class="product-style-one no-overlay">
                                <div class="card-thumbnail">
                                    <a href="product-details.html"><img src="{{$pokemon->image}}" alt="pokemon_image"/></a>
                                </div>
                                <div class="product-share-wrapper">

                                </div>
                                <a href="product-details.html"><span class="product-name">{{$pokemon->name}}</span></a>
                                <span class="latest-bid">{{$pokemon->energy}}</span>
                                <div class="bid-react-area">
                                    <div class="last-bid">Niveau : {{$pokemon->level}}</div>
                                    <div class="react-area">
                                        {{--                                        <svg viewBox="0 0 17 16" fill="none" width="16" height="16"--}}
                                        {{--                                             class="sc-bdnxRM sc-hKFxyN kBvkOu">--}}
                                        {{--                                            <path--}}
                                        {{--                                                d="M8.2112 14L12.1056 9.69231L14.1853 7.39185C15.2497 6.21455 15.3683 4.46116 14.4723 3.15121V3.15121C13.3207 1.46757 10.9637 1.15351 9.41139 2.47685L8.2112 3.5L6.95566 2.42966C5.40738 1.10976 3.06841 1.3603 1.83482 2.97819V2.97819C0.777858 4.36443 0.885104 6.31329 2.08779 7.57518L8.2112 14Z"--}}
                                        {{--                                                stroke="currentColor" stroke-width="2"></path>--}}
                                        {{--                                        </svg>--}}
                                        <span class="number">{{$pokemon->hp}}</span>
                                    </div>
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

@section('script')
    <script>
        var pokemons = {!! json_encode($pokemons->toArray(), JSON_HEX_TAG) !!};
    </script>
@endsection
