@extends('layouts.app')

@section('title', 'Pokemons')


@section('content')

<!-- start Table Title -->
<div class="table-title-area d-flex">
                        <i data-feather="briefcase"></i>
                        <h3>Classement des joueurs PokéGame</h3>
                    </div>
                    <!-- End Table Title -->

                    <!-- table area Start -->
                    <div class="box-table table-responsive">
                        <table class="table upcoming-projects">
                            <thead>
                                <tr>
                                    <th>
                                        <span>Classement</span>
                                    </th>
                                    <th>
                                        <span>Pseudo</span>
                                    </th>
                                    <th>
                                        <span>Parties jouées</span>
                                    </th>
                                    <th>
                                        <span>Parties gagnées</span>
                                    </th>
                                    <th>
                                        <span>Pokémon le plus joué</span>
                                    </th>
                            </thead>

@endsection
