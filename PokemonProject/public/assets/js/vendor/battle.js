var userSelect=document.getElementById('userSelect');
var battleSelect=document.getElementById('battleSelect');
console.log(battleSelect)

function chooseUser(index) {
    console.log(index)
    userSelect.style.display = 'none';
    battleSelect.setAttribute('style', 'display: flex !important');
}
