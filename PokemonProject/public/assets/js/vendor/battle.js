var userSelect=document.getElementById('userSelect');

var battleSelect=document.getElementById('battleSelect');

var modeSelect=document.getElementById('modeSelect');
modeSelect.style.display = 'none';


var player1Pokemons = []
var player2Pokemons = []


function chooseUser(idUser) {
    userSelect.style.display = 'none';
    modeSelect.style.display = 'block';
}

function chooseMode(idMode) {
    userSelect.style.display = 'none';
    modeSelect.style.display = 'none';
    if (idMode === 1) {
        player1Pokemons = pokemons.slice(0,3)
        player2Pokemons = pokemons.slice(3,6)
    }
    battleSelect.setAttribute('style', 'display: flex !important');

}

