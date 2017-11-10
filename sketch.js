var board = [];
var coord = [];
var current_player = 1;
var result = "";
var slider;


// This is the drawing part of the program.
function drawRectAtBoardPos(pos_x, pos_y, player_number){
  if(player_number == 2){
    fill('#95a5a6');
  } else if (player_number == 1){
    fill('#2c3e50');
  }

  // array index starts at 1.
  start_rect_x = 90 * (pos_x - 1);
  start_rect_y = 90 * (pos_y - 1);

  // Size will always be 90 * 90
  rect(start_rect_x, start_rect_y, 90, 90);
}

function drawUpdateGrid(board){
    for(var x = 0; x < 9; x++){
        for (var y = 0; y < 9; y++) {
            if (board[y][x] == 1) {
                drawRectAtBoardPos(x+1, y+1, 1);
            } else if (board[y][x] == 2){
                drawRectAtBoardPos(x+1, y+1, 2);
            }
        }
    }
}

function getBoard(loc){
    var newboard = []
    var lastResult = result[loc]
    
    for (var i = 0; i < 9; i++) {
      newboard[i] = lastResult.substring(i*9, i*9+9);
    }
    
    return newboard;
}

function preload() {
    result = loadStrings('data.txt');
    
}

function setup(){
    var canvas = createCanvas(810, 810);
    canvas.parent('sketch-holder');
    
    if(result.length == 0){
        alert("There is no content in the history.");
    }
    
    board = getBoard(result.length-1);

    background(255);
}


function draw(){    

    // Draing a grid.
    stroke(0);
    // Verticle line
    for (var i = 1; i < 10; i++) {
      strokeWeight(2);
      line(90 * i, 0, 90 * i, 810);
    }
    // Horizontal line
    for (var i = 1; i < 10; i++) {
      strokeWeight(2);
      line(0, 90 * i, 810, 90 * i);
    }
    
    drawUpdateGrid(board);
}