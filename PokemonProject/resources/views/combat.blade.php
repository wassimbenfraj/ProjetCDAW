@extends('layouts.app')

@section('title', 'Combat')


@section('content')
    <div class="rn-product-area rn-section-gapTop masonary-wrapper-activation">
        <div class="container">
            <div class="row mb--30 align-items-center">
                <div class="col-lg-4">
                    <div class="section-title">
                        <h3 class="title mb--0">Combats</h3>
                    </div>
                </div>
                <div class="default-exp-wrapper">
                </div>
            </div>
           @include('components.chooseUser')
           @include('components.battle')
           @include('components.chooseMode')
        </div>
    </div>
@endsection

@section('script')
            <script>
                var pokemons = {!! json_encode($pokemons->toArray(), JSON_HEX_TAG) !!};
            </script>
    <script src="assets/js/vendor/battle.js"></script>
@endsection
