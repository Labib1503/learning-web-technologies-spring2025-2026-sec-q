let cells = document.querySelectorAll(".cell");
let statusText = document.getElementById("status");

let board = ["","","","","","","","",""];
let currentPlayer = "X";
let gameActive = true;

let winCombos = [
[0,1,2],
[3,4,5],
[6,7,8],
[0,3,6],
[1,4,7],
[2,5,8],
[0,4,8],
[2,4,6]
];

cells.forEach(cell => {
cell.addEventListener("click", cellClicked);
});

function cellClicked(){
let index = this.getAttribute("data-index");

if(board[index] != "" || !gameActive){
return;
}

board[index] = currentPlayer;
this.textContent = currentPlayer;

checkWinner();
}

function checkWinner(){

for(let i=0;i<winCombos.length;i++){

let a = winCombos[i][0];
let b = winCombos[i][1];
let c = winCombos[i][2];

if(board[a] && board[a] == board[b] && board[a] == board[c]){

cells[a].classList.add("win");
cells[b].classList.add("win");
cells[c].classList.add("win");

statusText.innerHTML = "Player " + currentPlayer + " Wins!";
gameActive = false;
return;
}

}

if(!board.includes("")){
statusText.innerHTML = "It's a Draw!";
gameActive = false;
return;
}

switchPlayer();
}

function switchPlayer(){
currentPlayer = currentPlayer === "X" ? "O" : "X";
statusText.innerHTML = "Current Player: " + currentPlayer;
}

function resetGame(){

board = ["","","","","","","","",""];
currentPlayer = "X";
gameActive = true;

cells.forEach(cell=>{
cell.textContent="";
cell.classList.remove("win");
});

statusText.innerHTML = "Current Player: X";
}