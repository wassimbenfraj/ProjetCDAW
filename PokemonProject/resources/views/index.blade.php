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
<!-- End banner area -->

<!-- Start product area -->
<div class="rn-product-area rn-section-gapTop">
    <div class="container">
        <div class="row align-items-center g-5">
            <div class="col-lg-4">
                <div class="section-title">
                    <h3 class="title mb--0">Découvre tous les types de Pokémon !</h3>
                </div>
            </div>
            <div class="col-lg-8">
                <div
                    class="button-group isotop-filter filters-button-group d-flex justify-content-start justify-content-lg-end">
                    <button data-filter="*" class="is-checked"><span class="filter-text">Tous</span></button>
                    <button data-filter=".cat--1"><span class="filter-text">Eau</span></button>
                    <button data-filter=".cat--2"><span class="filter-text">Feu</span></button>
                    <button data-filter=".cat--3"><span class="filter-text">Roche</span></button>
                    <button data-filter=".cat--4"><span class="filter-text">Électrik</span></button>
                    <button data-filter=".cat--5"><span class="filter-text">Ténèbres</span></button>
                    <button data-filter=".cat--6"><span class="filter-text">Poison</span></button>
                </div>
            </div>
        </div>
        <div class="col-lg-12">
            <div class="grid-metro5 mesonry-list">
                <div class="resizer"></div>
                <!-- start single product -->
                <div class="grid-metro-item cat--1 cat--3">
                    <div class="product-style-one no-overlay with-placeBid">
                        <div class="card-thumbnail">
                            <a href="product-details.html"><img src="assets/images/portfolio/carapuce.png"
                                                                alt="NFT_portfolio"></a>

                        </div>
                        <div class="product-share-wrapper">

                            <div class="share-btn share-btn-activation dropdown">
                                <button class="icon" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <svg viewBox="0 0 14 4" fill="none" width="16" height="16"
                                         class="sc-bdnxRM sc-hKFxyN hOiKLt">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                              d="M3.5 2C3.5 2.82843 2.82843 3.5 2 3.5C1.17157 3.5 0.5 2.82843 0.5 2C0.5 1.17157 1.17157 0.5 2 0.5C2.82843 0.5 3.5 1.17157 3.5 2ZM8.5 2C8.5 2.82843 7.82843 3.5 7 3.5C6.17157 3.5 5.5 2.82843 5.5 2C5.5 1.17157 6.17157 0.5 7 0.5C7.82843 0.5 8.5 1.17157 8.5 2ZM11.999 3.5C12.8274 3.5 13.499 2.82843 13.499 2C13.499 1.17157 12.8274 0.5 11.999 0.5C11.1706 0.5 10.499 1.17157 10.499 2C10.499 2.82843 11.1706 3.5 11.999 3.5Z"
                                              fill="currentColor"></path>
                                    </svg>
                                </button>

                                <div class="share-btn-setting dropdown-menu dropdown-menu-end">
                                    <button type="button" class="btn-setting-text share-text" data-bs-toggle="modal"
                                            data-bs-target="#shareModal">
                                        Share
                                    </button>
                                    <button type="button" class="btn-setting-text report-text" data-bs-toggle="modal"
                                            data-bs-target="#reportModal">
                                        Report
                                    </button>
                                </div>

                            </div>
                        </div>
                        <a href="product-details.html"><span class="product-name">Carapuce</span></a>
                        <span class="latest-bid">Carapuce est une petite tortue bipède de couleur bleue. Sa carapace lui sert à se protéger
                            pour lancer ensuite des jets d'eau ou d'écume, mais aussi à améliorer son hydrodynamisme.</span>
                        <div class="bid-react-area">

                            <div class="react-area">
                                <svg viewBox="0 0 17 16" fill="none" width="16" height="16"
                                     class="sc-bdnxRM sc-hKFxyN kBvkOu">
                                    <path
                                        d="M8.2112 14L12.1056 9.69231L14.1853 7.39185C15.2497 6.21455 15.3683 4.46116 14.4723 3.15121V3.15121C13.3207 1.46757 10.9637 1.15351 9.41139 2.47685L8.2112 3.5L6.95566 2.42966C5.40738 1.10976 3.06841 1.3603 1.83482 2.97819V2.97819C0.777858 4.36443 0.885104 6.31329 2.08779 7.57518L8.2112 14Z"
                                        stroke="currentColor" stroke-width="2"></path>
                                </svg>

                            </div>
                        </div>
                    </div>
                </div>
                <!-- end single product -->
            </div>
        </div>
    </div>
</div>
<!-- end product area -->
@endsection



