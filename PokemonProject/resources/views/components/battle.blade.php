<div class="d-flex align-items-center" id="battleSelect">
    <div class="container-fluid" style="height: 40rem; width: 120rem;">
        <div class="row pokemon-container">
            <div class="col-6 text-center">
                <div class="progress" style="width: 70%; height:2rem;margin-left: 15%;">
{{--                    <div class="progressContent">test</div>--}}
                    <div style="font-size: 2em; font-weight: bold;" id="pokemonProgressbar1"
                         class="progress-bar progress-bar-striped progress-bar-animated bg-success"
                         role="progressbar"
                         aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%">75%
                    </div>
                </div>
                <img id="pokemonImage1" class="pokemon-image"
                     src="https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/pokemon/4.png"
                     alt="Charmander"/>
                {{--                <p>--}}
                {{--                    Type: Fire<br/>--}}
                {{--                    Level: 5<br/>--}}
                {{--                    Health:--}}
                {{--                </p>--}}
                <div class="moves">
                    <h3>Choose Your Move:</h3>
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
            </div>
            <div class="col-6 text-center">
                <div class="progress" style="">
{{--                    <div class="progressContent">test</div>--}}
                    <div style="font-size: 2em; font-weight: bold;" id="pokemonProgressbar2"
                         class="progress-bar progress-bar-striped progress-bar-animated bg-success"
                         role="progressbar"
                         aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%">75%
                    </div>
                </div>
                <img id="pokemonImage2" class="pokemon-image"
                     src="https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/pokemon/7.png"
                     alt="Squirtle"/>
                {{--                <p>--}}
                {{--                    Type: Water<br/>--}}
                {{--                    Level: 5<br/>--}}
                {{--                    Health:--}}
                {{--                </p>--}}
                <div class="moves">
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
            <div id="nextButton" class="col-6 text-center">
                <button type="button" onclick="makeMove()" class="btn btn-primary">
                    Suivant
                </button>
            </div>
            <div id="comment"></div>
        </div>
    </div>
</div>