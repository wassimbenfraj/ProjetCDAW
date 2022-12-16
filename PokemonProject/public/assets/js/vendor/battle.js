// User selection interface
var userSelect = document.getElementById('userSelect');

// Mode Selection interface
var modeSelect = document.getElementById('modeSelect');
modeSelect.style.display = 'none';

// battle selection interface
var battleSelect = document.getElementById('battleSelect');

// Array(2)
var movesSelect = document.getElementsByClassName('moves');
var nextButton = document.getElementById('nextButton');
nextButton.style.display = 'none';


var player1Pokemons = []
var player2Pokemons = []


var indexPokemon1 = 0;
var indexPokemon2 = 0;

var round = 1;
var firstPlayer;

var health1;
var currentHealth1;
var health2;
var currentHealth2;

var defenseBlock = 0;

var progressbar1 = document.getElementById('pokemonProgressbar1');
var progressbar2 = document.getElementById('pokemonProgressbar2');

var image1 = document.getElementById('pokemonImage1');
var image2 = document.getElementById('pokemonImage2');

function chooseUser(idUser) {
    userSelect.style.display = 'none';
    modeSelect.style.display = 'block';
}

function chooseMode(idMode) {
    userSelect.style.display = 'none';
    modeSelect.style.display = 'none';


    if (idMode === 1) {
        player1Pokemons = pokemons.slice(0, 3)
        player2Pokemons = pokemons.slice(3, 6)
        Array.from(movesSelect).forEach((moves) => {
            moves.style.display = 'none';
        });
        nextButton.style.display = 'block'

        setupPokemonOnScreen(1, 0);
        setupPokemonOnScreen(2, 0);
        updateProgressBar(1, currentHealth1,health1);
        updateProgressBar(2, currentHealth2,health2);

        battleSelect.setAttribute('style', 'display: flex !important');

        const randomNumber = Math.random();

        // If the random number is less than 0.5, player 1 goes first, otherwise player 2 goes first
        firstPlayer = randomNumber < 0.5 ? 1 : 2;

    } else if (idMode === 2) {

    } else {

    }


}


function makeMove() {
    if (indexPokemon1 < 3 && indexPokemon2 < 3) {
        if (round % 2 === 1) {
            if (firstPlayer === 1) {
                //player1

                // first attack
                if (round % 3 === 1) {
                    applyMove(1, 1, player1Pokemons[indexPokemon1].special_attack)
                } else if (round % 3 === 2) {
                    applyMove(1, 2, player1Pokemons[indexPokemon1].special_defense)
                } else {
                    applyMove(1, 3, player1Pokemons[indexPokemon1].attack)
                }
            } else {
                //player2

                // first attack
                if (round % 3 === 1) {
                    applyMove(2, 1, player2Pokemons[indexPokemon1].special_attack)
                } else if (round % 3 === 2) {
                    applyMove(2, 2, player2Pokemons[indexPokemon1].special_defense)
                } else {
                    applyMove(2, 3, player2Pokemons[indexPokemon1].attack)
                }

            }
        } else {
            if (firstPlayer === 1) {
                //player2
                // first attack
                if (round % 3 === 1) {
                    applyMove(2, 1, player2Pokemons[indexPokemon1].special_attack)
                } else if (round % 3 === 2) {
                    applyMove(2, 2, player2Pokemons[indexPokemon1].special_defense)
                } else {
                    applyMove(2, 3, player2Pokemons[indexPokemon1].attack)
                }
            } else {
                //player1

                // first attack
                if (round % 3 === 1) {
                    applyMove(1, 1, player1Pokemons[indexPokemon1].special_attack)
                } else if (round % 3 === 2) {
                    applyMove(1, 2, player1Pokemons[indexPokemon1].special_defense)
                } else {
                    applyMove(1, 3, player1Pokemons[indexPokemon1].attack)
                }
            }
        }
        round++;
    } else {
        if (indexPokemon1 >= 3) {
            alert('Player 1 won');
        } else {
            alert('Player 2 won')
        }
    }
}

function setupPokemonOnScreen(player, index) {
    if (player === 1) {

        health1 = player1Pokemons[index].hp * player1Pokemons[index].level;
        currentHealth1 = health1;
        image1.src = player1Pokemons[index].image;
    } else {
        health2 = player2Pokemons[index].hp * player2Pokemons[index].level;
        currentHealth2 = health2;
        image2.src = player2Pokemons[index].image;

    }
}

function applyMove(player, moveNumber, movePoints) {
    if (player === 1) {
        switch (moveNumber) {
            case 1:
                if (movePoints < defenseBlock) {
                    currentHealth1 -= 0;
                } else {
                    currentHealth1 -= movePoints - defenseBlock;
                }
                defenseBlock = 0;
                if (currentHealth1 < 0) {
                    indexPokemon1++;
                    setupPokemonOnScreen(1, indexPokemon1);
                }
                updateProgressBar(1, currentHealth1, health1);

                break;
            case 2:
                defenseBlock = movePoints;
                break;
            default:
                if (movePoints < defenseBlock) {
                    currentHealth1 -= 0;
                } else {
                    currentHealth1 -= movePoints - defenseBlock;
                }
                defenseBlock = 0;
                if (currentHealth1 < 0) {
                    indexPokemon1++;
                    setupPokemonOnScreen(1, indexPokemon1);
                }
                updateProgressBar(1, currentHealth1, health1);

        }
    }
    else {
        switch (moveNumber) {
            case 1:
                if (movePoints < defenseBlock) {
                    currentHealth2 -= 0;
                } else {
                    currentHealth2 -= movePoints - defenseBlock;
                }
                defenseBlock = 0;
                if (currentHealth2 < 0) {
                    indexPokemon2++;
                    setupPokemonOnScreen(2, indexPokemon2);
                }
                updateProgressBar(2, currentHealth2, health2);
                break;
            case 2:
                defenseBlock = movePoints;
                break;
            default:
                if (movePoints < defenseBlock) {
                    currentHealth2 -= 0;
                } else {
                    currentHealth2 -= movePoints - defenseBlock;
                }
                defenseBlock = 0;
                if (currentHealth2 < 0) {
                    indexPokemon2++;
                    setupPokemonOnScreen(2, indexPokemon2);
                }
                    updateProgressBar(2, currentHealth2, health2);
        }
    }
}

function updateProgressBar(player, currentHealth, health) {
    if (player === 1) {
        progressbar1.style.width = (currentHealth / health * 100) + '%';
        progressbar1.innerHTML = currentHealth + '/' + health;
    } else {
        progressbar2.style.width = (currentHealth / health * 100) + '%';
        progressbar2.innerHTML = currentHealth + '/' + health;
    }
}
