@extends('layouts.app')

@section('title', 'Acceuil')


@section('content')
<!-- start banner area -->
<div class="slider-one rn-section-gapTop">
    <div class="container">
        <div class="row row-reverce-sm align-items-center">
            <div class="col-lg-5 col-md-6 col-sm-12 mt_sm--50">
                <h2 class="title" data-sal-delay="200" data-sal="slide-up" data-sal-duration="800">Tu rêves d'être
                    dresseur ? Tu es au bon endroit !</h2>
                <p class="slide-disc" data-sal-delay="300" data-sal="slide-up" data-sal-duration="800">Choisis ton
                    pokémon, et challenge un autre joueur dans un combat !</p>
                <div class="button-group">
                    <a class="btn btn-large btn-primary" href="#" data-sal-delay="400" data-sal="slide-up"
                       data-sal-duration="800">Se connecter</a>
                    <a class="btn btn-large btn-primary-alta" href="create.html" data-sal-delay="500"
                       data-sal="slide-up" data-sal-duration="800">Créer un compte</a>
                </div>
            </div>
            <div class="col-lg-5 col-md-6 col-sm-12 offset-lg-1">
                <div class="slider-thumbnail">
                    <img src="assets/images/pokemon/slider-1.png" alt="Slider Images">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End banner areaa -->


    <div class="rn-product-area rn-section-gapTop masonary-wrapper-activation">
        <div class="container">
            <div class="col-lg-12">
                <div class="grid-metro5 mesonry-list">
                    <div class="resizer"></div>
                    @foreach($pokemons as $pokemon)
                        <!-- start single product -->
                        <div class="grid-metro-item {{$pokemon->energy}}">
                            <div class="product-style-one no-overlay">
                                <div class="card-thumbnail">
                                    <a href="product-details.html"><img src="{{$pokemon->image}}"  alt="pokemon_image"/></a>
                                </div>
                                <div class="product-share-wrapper">

                                </div>
                                <a href="product-details.html"><span class="product-name">{{$pokemon->name}}</span></a>
                                <span class="latest-bid">{{$pokemon->energy}}</span>
                                <div class="bid-react-area">
                                    <div class="last-bid">Niveau : {{$pokemon->level}}</div>
                                    <div class="react-area">

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



