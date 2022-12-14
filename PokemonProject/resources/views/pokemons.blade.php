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
                        <div class="setting-option d-none d-lg-block" style="margin-top: 40px">
                            <form id="search" class="search-form-wrapper" action="#">
                                <input type="search" placeholder="Search Here" aria-label="Search">
                                <div class="search-icon">
                                    <button><i class="feather-search"></i></button>
                                </div>
                            </form>
                        </div>
                        <div class="filter-select-option">
                            <label class="filter-leble">Trier</label>
                            <select id="order_list">
                                <option value="0"></option>
                                <option value="level">Niveau</option>
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
            <div id="listname">
                <div id="ajax_load" class="col-lg-12">
                    @include('components.listPokemon')
                </div>
            </div>
        </div>
    </div>
{{--    <div class="container">--}}
{{--        <div class="d-flex justify-content-center">--}}
{{--            {{$pokemons->links()}}--}}
{{--        </div>--}}
{{--    </div>--}}
@endsection

@section('script')
    {{--    <script>--}}
    {{--        var pokemons = {!! json_encode($pokemons->toArray(), JSON_HEX_TAG) !!};--}}
    {{--    </script>--}}
    <script src="assets/js/vendor/filter.js"></script>
    <script src="assets/js/vendor/search.js"></script>
@endsection
