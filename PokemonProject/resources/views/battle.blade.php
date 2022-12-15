@extends('layouts.combat')
@section('battle')
    <div class="d-flex align-items-center" style="height: 60rem;" onclick="test()">
        <div class="container-fluid" style="height: 40rem; width: 120rem;">
            <div class="row pokemon-container">
                <div class="col-6 text-center">
                    <div class="progress" style="width: 70%; height:2rem;margin-left: 15%;">
                        <div class="progress-bar progress-bar-striped progress-bar-animated bg-success"
                             role="progressbar"
                             aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%">75%
                        </div>
                    </div>
                    <img class="pokemon-image"
                         src="https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/pokemon/4.png"
                         alt="Charmander"/>
                    {{--                            <p>--}}
                    {{--                                Type: Fire<br/>--}}
                    {{--                                Level: 5<br/>--}}
                    {{--                                Health:--}}
                    {{--                            </p>--}}
                    <h3>Choose Your Attack:</h3>
                    <form>
                        <button type="button" onclick="updateHealth('charmander', 10)" class="btn btn-primary">Ember
                        </button>
                        <button type="button" onclick="updateHealth('charmander', 15)" class="btn btn-primary">
                            Flamethrower
                        </button>
                        <button type="button" onclick="updateHealth('charmander', 20)" class="btn btn-primary">Fire Spin
                        </button>
                    </form>
                </div>
                <div class="col-6 text-center">
                    <div class="progress" style="">
                        <div class="progress-bar progress-bar-striped progress-bar-animated bg-success"
                             role="progressbar"
                             aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%">75%
                        </div>
                    </div>
                    <img class="pokemon-image"
                         src="https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/pokemon/7.png"
                         alt="Squirtle"/>
                    {{--                            <p>--}}
                    {{--                                Type: Water<br/>--}}
                    {{--                                Level: 5<br/>--}}
                    {{--                                Health:--}}
                    {{--                            </p>--}}
                    <h3>Choose Your Attack:</h3>
                    <form>
                        <button type="button" onclick="updateHealth('squirtle', 8)" class="btn btn-primary">Bubble
                        </button>
                        <button type="button" onclick="updateHealth('squirtle', 12)" class="btn btn-primary">Water Gun
                        </button>
                        <button type="button" onclick="updateHealth('squirtle', 16)" class="btn btn-primary">Hydro
                            Pump
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection


@section('script')
    <script src="assets/js/vendor/battle.js"></script>
@endsection
