@extends('layouts.app')

@section('title', 'Combat')


@section('content')
    <div class="rn-breadcrumb-inner ptb--30">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-6 col-12">
                    <h5 class="title text-center text-md-start">Combat</h5>
                </div>
                <div class="col-lg-6 col-md-6 col-12">
                    <ul class="breadcrumb-list">
                        <li class="item"><a href="index.html">Home</a></li>
                        <li class="separator"><i class="feather-chevron-right"></i></li>
                        <li class="item current">Combats</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="rn-product-area rn-section-gapTop masonary-wrapper-activation">

        <div class="container">
            <div class="row mb--50 align-items-center">
                <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                    <h3 id="headline" class="title mb--0" data-sal-delay="150" data-sal="slide-up"
                        data-sal-duration="800">Choose Your oponent</h3>
                </div>
            </div>
            @include('components.chooseUser')
            @include('components.battle')
            @include('components.chooseMode')
            @include('components.choosePokemon')
            @include('components.gameFinished')
        </div>
    </div>
@endsection

@section('script')
    <script>
        var user = {
            id: {{auth()->user()->id}},
            name: '{{auth()->user()->name}}',
            energies: {!! json_encode(auth()->user()->energies, JSON_HEX_TAG) !!},
            level: '{{auth()->user()->level}}',
        }
        console.log(user);
        var pokemons = {!! json_encode($pokemons->toArray(), JSON_HEX_TAG) !!};
        var pokemons1 = pokemons.filter(pokemon => pokemon.level <= user.level && user.energies.some(energy => pokemon.energy.name === energy.name))

    </script>
    <script src="assets/js/vendor/battle.js"></script>
@endsection
